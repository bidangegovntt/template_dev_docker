<div>
    <div class="row justify-content-center mt-4">

        @guest
            <div class="col-md-12">
                <a href="{{ route('home-login', ['pergi-ke' => request()->current()]) }}" class="btn btn-primary">Login</a>
            </div>
        @endguest

        @auth
            <div class="col-12">
                <div class="card shadow p-3" wire:poll="mountdata">
                    <div class="card-body border-bottom">
                        <div class="d-flex flex-wrap">
                            <a class="btn btn-xs btn-primary me-2" href="{{ route('hotline-inovasi.my-messages') }}">
                                <i class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i> Kembali
                            </a>
                            <div class="align-self-center h5">

                                @isset($chatRoom)

                                    @foreach ($chatRoom->users as $user)
                                        @php
                                            if (Auth::user()->id != $user->id) {
                                                echo $user->name;
                                            }
                                        @endphp
                                    @endforeach
                                    {{-- {{ $chatRoom->users->map(function ($user) {
                                            if(!$user->isMe($user->id)) {
                                                return $user;
                                            }
                                            // $is_me = $user->isMe(Auth::user());
                                            // $user->name = $is_me ? $user->name . ' (me) ' : $user->name;
                                            // return $user;
                                        })
                                        // ->pluck('name')->join(', ')
                                    }} --}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body direct-chat-primary">
                            <div class="direct-chat-messages" style="height: 400px;overflow-y: auto; overflow-x: hidden"
                                id="allMessages">
                                @if (filled($allMessages))
                                    <!-- Conversations are loaded here -->
                                    @foreach ($allMessages as $msg)
                                        @include('home.hotline-inovasi.message-bubble', ['message' => $msg])
                                    @endforeach
                                @endif
                                <div id="last-chat" class="scrollTo"></div>
                            </div>
                        </div>
                        <div class="card-body border-top ">
                            {{-- <form > --}}
                            <form class="row" wire:submit.prevent="SendMessage">
                                <div class="col-8 col-md-10">
                                    <input wire:model="message" type="text" name="message" placeholder="Type Message ..."
                                        class="form-control" autocomplete="off" required>
                                    <input wire:model="chatRoomData.id" class="hidden" type="hidden" required>
                                </div>

                                <div class="col-4 col-md-2 d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="far fa-paper-plane"></i> Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @endauth
        </div> <!-- end row -->
        <script>
            window.addEventListener('goto-last-chat', event => {
                var objDiv = document.getElementById("allMessages");

                // if (objDiv.scrollTop == objDiv.scrollHeight) {
                objDiv.scrollTop = objDiv.scrollHeight;
                // }
            })
        </script>
    </div> <!-- end wrapper div -->
