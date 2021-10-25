<template>
    <div>
        <Head :title="title" />

        <jet-banner />

        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <!-- <jet-application-mark class="block h-9 w-auto" /> -->
                                    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.0" width="100" height="30" viewBox="0 0 80 24" preserveAspectRatio="xMidYMid meet" id="svg2" inkscape:version="0.48.4 r9939" sodipodi:docname="instagram_wordmark_detail.svg">
  <title id="title2995">Instagram logo</title>
  <defs id="defs16"/>
  <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1600" inkscape:window-height="844" id="namedview14" showgrid="false" inkscape:showpageshadow="false" inkscape:zoom="12.100653" inkscape:cx="46.307587" inkscape:cy="17.382913" inkscape:window-x="-4" inkscape:window-y="-4" inkscape:window-maximized="1" inkscape:current-layer="svg2"/>
  <metadata id="metadata4">
Created by potrace 1.13, written by Peter Selinger 2001-2015
<rdf:RDF>
  <cc:Work rdf:about="">
    <dc:format>image/svg+xml</dc:format>
    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
    <dc:title>Instagram logo</dc:title>
  </cc:Work>
</rdf:RDF>
</metadata>
  <g transform="matrix(0.01249921,0,0,-0.01238017,-24.351073,50.64123)" id="g6" style="fill:#000080;stroke:none">
    <path d="m 2310,3968 c -108,-52 -239,-225 -275,-364 -31,-120 -16,-193 56,-270 53,-56 93,-78 131,-72 34,5 34,38 -2,111 -37,75 -42,161 -15,254 30,103 108,234 127,215 6,-6 8,-216 6,-518 -4,-492 -5,-512 -27,-583 -24,-81 -22,-101 9,-101 56,0 147,87 175,168 25,72 34,258 35,707 0,457 2,445 -68,465 -57,15 -103,12 -152,-12 z" id="path10" inkscape:connector-curvature="0" style="fill:#000080"/>
    <path d="m 4045,3969 c -3,-13 -9,-69 -13,-124 l -7,-100 -85,4 c -85,3 -86,3 -98,-23 -7,-15 -12,-47 -12,-71 l 0,-45 76,0 c 119,0 114,9 114,-198 0,-97 -5,-193 -10,-212 -12,-44 -72,-144 -85,-142 -5,0 -14,19 -19,42 -11,52 -66,114 -167,191 l -78,59 35,57 c 27,45 34,67 34,109 0,66 -15,79 -90,79 -73,-1 -128,-34 -159,-97 -25,-54 -28,-134 -5,-166 9,-13 14,-32 11,-43 -8,-31 -138,-255 -170,-295 -27,-33 -31,-34 -46,-19 -14,14 -16,50 -16,274 0,209 -3,261 -14,275 -42,50 -152,72 -210,42 -58,-31 -139,-154 -171,-263 -7,-23 -17,-40 -21,-37 -5,3 -9,65 -9,138 0,162 -5,171 -103,171 l -62,0 -3,-367 -2,-367 23,-27 c 18,-20 35,-28 73,-31 59,-6 84,11 84,57 0,41 54,243 86,320 53,131 127,256 144,245 5,-3 6,-105 3,-228 -8,-304 10,-377 93,-393 102,-19 192,68 349,339 31,53 60,97 64,97 4,0 34,-27 65,-60 86,-90 107,-160 65,-214 -27,-34 -56,-33 -110,4 -55,37 -92,38 -124,4 -37,-40 -43,-89 -15,-119 35,-37 85,-50 200,-50 89,1 112,4 152,24 65,32 127,88 168,155 19,31 38,56 41,56 3,0 11,-23 18,-52 15,-65 52,-130 90,-157 37,-27 100,-36 144,-22 33,11 104,78 137,130 l 16,23 30,-49 c 17,-28 48,-63 69,-79 34,-25 46,-28 109,-28 82,0 120,16 182,76 l 41,40 22,-36 c 41,-66 99,-92 180,-80 36,5 55,16 90,50 l 44,44 47,-44 c 40,-37 56,-45 101,-51 65,-7 134,11 185,50 19,15 38,24 42,21 3,-4 -57,-68 -134,-144 -166,-162 -188,-198 -188,-308 0,-62 3,-76 27,-107 39,-52 99,-77 183,-77 81,0 133,21 183,71 72,71 101,194 101,420 l 0,150 55,68 c 71,87 147,219 200,346 l 42,100 43,3 c 58,4 64,-5 51,-70 -31,-144 -23,-326 19,-408 28,-54 92,-106 141,-114 66,-11 108,3 154,49 l 42,42 45,-42 c 36,-35 54,-44 96,-50 80,-11 153,15 213,75 41,41 51,47 56,32 3,-9 24,-36 46,-59 31,-32 51,-44 82,-49 58,-8 119,11 149,46 30,36 36,37 36,6 0,-13 7,-30 16,-37 22,-18 162,-19 173,-1 4,7 11,70 14,140 6,134 28,237 70,338 36,85 47,81 47,-18 0,-94 15,-240 31,-310 19,-83 90,-126 162,-99 22,8 25,18 31,83 15,146 74,388 96,388 4,0 10,-73 13,-162 6,-180 20,-249 61,-303 43,-56 72,-70 143,-70 57,0 65,3 97,34 49,47 78,120 80,200 1,65 0,66 -26,69 -31,4 -39,-9 -57,-81 -25,-102 -66,-125 -101,-57 -32,62 -43,183 -35,380 l 6,175 -28,27 c -15,15 -41,32 -56,37 -41,16 -113,14 -131,-4 -20,-21 -72,-157 -98,-262 -28,-108 -36,-90 -37,84 -1,120 -2,123 -30,155 -25,28 -35,32 -94,36 -78,5 -81,2 -131,-137 -18,-50 -35,-88 -39,-85 -4,4 -7,49 -7,99 0,70 -4,96 -15,105 -18,15 -140,26 -148,13 -3,-5 -9,-124 -13,-264 -7,-281 -17,-329 -73,-383 -35,-34 -53,-30 -78,16 -16,29 -18,63 -19,311 -2,324 3,309 -99,315 -61,4 -67,3 -72,-17 -5,-20 -6,-20 -39,8 -70,62 -200,49 -271,-27 -39,-42 -83,-138 -99,-216 -10,-46 -14,-116 -13,-206 3,-139 -2,-159 -39,-194 -53,-48 -103,34 -110,179 -3,67 2,115 18,190 35,163 36,182 10,210 -20,21 -33,25 -79,25 -31,0 -76,-5 -100,-11 -51,-11 -71,0 -71,41 0,41 -28,60 -88,60 -43,0 -57,-5 -84,-29 -28,-25 -32,-35 -36,-92 -3,-55 -1,-67 17,-83 12,-11 21,-27 21,-36 0,-51 -132,-326 -151,-315 -5,4 -9,107 -9,244 0,276 5,263 -97,269 -59,4 -65,3 -70,-17 l -6,-22 -27,26 c -28,26 -77,45 -120,45 -84,0 -163,-57 -211,-152 -48,-95 -61,-159 -63,-318 -2,-148 -11,-187 -50,-219 -23,-20 -56,-3 -74,37 -14,31 -17,78 -18,310 -1,318 4,304 -99,310 -61,4 -67,3 -72,-17 l -6,-22 -27,26 c -66,63 -183,58 -259,-10 -42,-38 -93,-127 -110,-193 -7,-23 -16,-90 -21,-149 -8,-88 -15,-119 -40,-170 -32,-65 -81,-116 -104,-107 -7,3 -21,22 -31,42 -16,31 -20,65 -22,222 -2,102 0,235 4,295 l 8,110 105,3 c 120,3 130,9 130,78 0,50 -8,54 -125,54 -44,0 -85,4 -92,8 -8,5 -13,44 -15,112 -3,102 -4,105 -29,117 -15,7 -54,16 -87,19 -58,6 -61,6 -67,-17 z m 722,-534 c 59,-41 78,-253 35,-390 -23,-72 -40,-98 -81,-127 -36,-25 -72,-3 -102,64 -21,47 -24,67 -23,178 0,105 4,134 22,181 38,97 94,132 149,94 z m 748,-9 c 32,-32 46,-91 46,-195 0,-155 -36,-265 -103,-314 -26,-19 -28,-19 -53,-3 -15,10 -37,39 -48,64 -19,40 -22,65 -22,167 0,144 18,216 69,269 40,43 76,47 111,12 z m 1285,-4 c 38,-39 53,-99 52,-212 -1,-146 -46,-265 -114,-301 -28,-15 -65,13 -91,69 -19,41 -22,64 -21,182 0,115 4,144 23,192 37,96 97,124 151,70 z M 5577,2566 c -11,-193 -65,-283 -152,-250 -18,7 -45,55 -45,81 0,58 164,294 192,277 7,-5 9,-41 5,-108 z" id="path12" inkscape:connector-curvature="0" style="fill:#000080"/>
  </g>
</svg>
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </jet-nav-link>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">
                                <!-- Teams Dropdown -->
                                <jet-dropdown align="right" width="60" v-if="$page.props.jetstream.hasTeamFeatures">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                {{ $page.props.user.current_team.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <div class="w-60">
                                            <!-- Team Management -->
                                            <template v-if="$page.props.jetstream.hasTeamFeatures">
                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    Manage Team
                                                </div>

                                                <!-- Team Settings -->
                                                <jet-dropdown-link :href="route('teams.show', $page.props.user.current_team)">
                                                    Team Settings
                                                </jet-dropdown-link>

                                                <jet-dropdown-link :href="route('teams.create')" v-if="$page.props.jetstream.canCreateTeams">
                                                    Create New Team
                                                </jet-dropdown-link>

                                                <div class="border-t border-gray-100"></div>

                                                <!-- Team Switcher -->
                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    Switch Teams
                                                </div>

                                                <template v-for="team in $page.props.user.all_teams" :key="team.id">
                                                    <form @submit.prevent="switchToTeam(team)">
                                                        <jet-dropdown-link as="button">
                                                            <div class="flex items-center">
                                                                <svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                                <div>{{ team.name }}</div>
                                                            </div>
                                                        </jet-dropdown-link>
                                                    </form>
                                                </template>
                                            </template>
                                        </div>
                                    </template>
                                </jet-dropdown>
                            </div>

                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <jet-dropdown align="right" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ $page.props.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>

                                        <jet-dropdown-link :href="route('profile.show')">
                                            Profile
                                        </jet-dropdown-link>

                                        <jet-dropdown-link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures">
                                            API Tokens
                                        </jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <jet-dropdown-link as="button">
                                                Log Out
                                            </jet-dropdown-link>
                                        </form>
                                    </template>
                                </jet-dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <jet-responsive-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </jet-responsive-nav-link>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex-shrink-0 mr-3" >
                                <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                            </div>

                            <div>
                                <div class="font-medium text-base text-gray-800">{{ $page.props.user.name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ $page.props.user.email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <jet-responsive-nav-link :href="route('profile.show')" :active="route().current('profile.show')">
                                Profile
                            </jet-responsive-nav-link>

                            <jet-responsive-nav-link :href="route('api-tokens.index')" :active="route().current('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures">
                                API Tokens
                            </jet-responsive-nav-link>

                            <!-- Authentication -->
                            <form method="POST" @submit.prevent="logout">
                                <jet-responsive-nav-link as="button">
                                    Log Out
                                </jet-responsive-nav-link>
                            </form>

                            <!-- Team Management -->
                            <template v-if="$page.props.jetstream.hasTeamFeatures">
                                <div class="border-t border-gray-200"></div>

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Team
                                </div>

                                <!-- Team Settings -->
                                <jet-responsive-nav-link :href="route('teams.show', $page.props.user.current_team)" :active="route().current('teams.show')">
                                    Team Settings
                                </jet-responsive-nav-link>

                                <jet-responsive-nav-link :href="route('teams.create')" :active="route().current('teams.create')" v-if="$page.props.jetstream.canCreateTeams">
                                    Create New Team
                                </jet-responsive-nav-link>

                                <div class="border-t border-gray-200"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Switch Teams
                                </div>

                                <template v-for="team in $page.props.user.all_teams" :key="team.id">
                                    <form @submit.prevent="switchToTeam(team)">
                                        <jet-responsive-nav-link as="button">
                                            <div class="flex items-center">
                                                <svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <div>{{ team.name }}</div>
                                            </div>
                                        </jet-responsive-nav-link>
                                    </form>
                                </template>
                            </template>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
