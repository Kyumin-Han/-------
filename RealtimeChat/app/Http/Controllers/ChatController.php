<?php

namespace App\Http\Controllers;

use App\Events\NewChatMessage;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController extends Controller
{
    // 채팅방 리스트 출력
    // 특정 채팅방의 메세지 리스트 출력
    // 메세지 저장

    public function rooms() {
        // vue를 이용하기 때문에 blade 파일이 아니라 vue 페이지 자체를 리턴해주기 때문에 데이터만 주면 된다
        return ChatRoom::all();
    }

    public function messages($roomId) {
        // select * from chat_messages where room_id = ? 문장을 실행해야 한다
        // return ChatMessage::where('chat_room_id', $roomId)->latest()->get();
        // find는 기본키를 가지고 데이터를 사용한다

        // lazy loading VS. eager loading
        // lazy loading -> 조인을 해서 값을 가져올 경우에 조인을 하기 전 데이터만 먼저 보내주는 방식, 정보에 접근 할 때 값을 가져온다.
        // blade를 이용할때는 상관 없지만 vue의 axios에는 값만 넘겨주기 때문에 user에 접근 할 수 없기 때문에 with절을 이용해서 처음부터 연계된 테이블의 정보까지 같이 넘겨주는 방식을 eager loading 이라고 한다

        $msgs = ChatMessage::where('chat_room_id', $roomId)->with('user')->latest()->get();
        // with를 통해 관계가 정의된 테이블의 정보도 같이 준다
        // dd($msgs);
        // $msgs[0]->user->name;
        return $msgs;
    }

    public function newMessage(Request $request, $roomId) {
        $request->validate(['message' => 'required']);

        $msg = ChatMessage::create([
            'user_id' => auth()->user()->id,
            'chat_room_id' => $roomId,
            'message' => $request->message,
        ]);
        // broadcasting을 위해 새로운 메세지가 생성되고 DB에 저장 될 때마다 이벤트를 생성해주고 이 이벤트를 broadcasting 한다
        // broadcast()의 인자로 이벤트 객체 이름을 준다
        broadcast(new NewChatMessage($msg->chat_room_id))->toOthers();
        return $msg;
    }

    public function index() {
        // inertia pacade를 이용해서 vue파일을 불러온다
        // vue파일의 이름을 인자로 넘겨주어 페이지를 호출한다
        return Inertia::render('Chat/container');
        // vue.js파일은 resources의 js->pages에서 찾는다
    }
}
