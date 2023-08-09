<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Reset Password</h2>
                <ol>
                    <li><a href="{{ url('') }}" class="fw-bold">Beranda</a></li>
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
                            @if ($is_token_invalid)
                                <center>Token tidak valid, silahkan request ulang reset password</center>
                            @else
                                <form wire:submit.prevent="reset_password">
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
                                                <label for="">Nama</label>
                                                <input type="name" class="form-control" value="{{ $name }}"
                                                    readonly>
                                            </div>

                                            <div class="mb-2">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" value="{{ $email }}"
                                                    readonly>
                                            </div>

                                            <fieldset>
                                                <div class="mb-2">
                                                    <label for="">Password Baru</label>
                                                    <input type="password" wire:model.defer="password"
                                                        autocomplete="off"
                                                        class="form-control
                                                        @error('password')
                                                            is-invalid
                                                        @enderror">
                                                    @error('password')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-2">
                                                    <label for="">Konfirmasi Password</label>
                                                    <input type="password" wire:model.defer="password_confirmation"
                                                        class="form-control @error('password_confirmation') is-invalid @enderror">
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <button class="btn btn-primary mr-2" type="submit">Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
