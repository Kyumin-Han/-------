<div>

    @foreach($comments as $comment)
    <div class="card lg:card-side bordered">
        @if($comment->image)
        <img src="{{ $comment->image }}"/>
        @endif
    </figure>
    <div class="card-body">
        <h2 class="card-title">Horizontal</h2>
        <p>{{ $comment->content }}</p>
        <div class="card-actions">
            <button class="btn btn-primary">Get Started</button>
            <button class="btn btn-ghost">More info</button>
        </div>
    </div>
</div>
@endforeach
</div>