<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Login</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
                    <li>Login</li>
                </ol>
            </div>
        </div>
    </section>
    <section id="content" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 entries">
                    <div class="card shadow">
                        <div class="card-body">
                            <form wire:submit.prevent="login">
                                <div class="row">
                                    <div class="col-12">
                                        @if (session()->has('msg-error'))
                                            <div class="alert alert-danger">
                                                {{ session('msg-error') }}
                                            </div>
                                        @endif
                                        @if (session()->has('msg-success'))
                                            <div class="alert alert-success">
                                                {{ session('msg-success') }}
                                            </div>
                                        @endif
                                        <div class="mb-2">
                                            <label for="">Email</label>
                                            <input type="text" wire:model.defer="email"
                                                class="form-control
                                                        @error('email')
                                                            is-invalid
                                                        @enderror"
                                                autocomplete="off" autofocus="true">
                                            @error('email')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Password</label>
                                            <input type="password" wire:model.defer="password"
                                                class="form-control @error('password')
                                                is-invalid
                                            @enderror">
                                            @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <button class="btn btn-primary mr-2" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="{{ route('home-register') }}">Daftar</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('home-forgot-password') }}">Lupa Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.addEventListener('goto', event => {
            window.location.href = event.detail.url;
        });
    </script>
</div>
