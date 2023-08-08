<div>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Profileku</h2>
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

                            <form wire:submit.prevent="save">
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
                                            <input type="name" wire:model.defer="name"
                                                class="form-control
                                                        @error('name')
                                                            is-invalid
                                                        @enderror"
                                                >
                                            @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-2">
                                            <label for="">Email</label>
                                            <input type="email" readonly value="{{ $user->email }}" class="form-control">
                                        </div>

                                        <fieldset>
                                        <div class="mb-2">
                                            <label for="">Password Sekarang</label>
                                            <input type="password" wire:model.defer="current_password"
                                                class="form-control
                                                        @error('current_password')
                                                            is-invalid
                                                        @enderror"
                                                autocomplete="off">
                                            @error('current_password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="mb-2">
                                            <label for="">Password Baru</label>
                                            <input type="password" wire:model.defer="password"
                                                class="form-control
                                                        @error('password')
                                                            is-invalid
                                                        @enderror"
                                                autocomplete="off">
                                            @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Konfirmasi Password</label>
                                            <input type="password" wire:model.defer="password_confirmation"
                                                class="form-control @error('password_confirmation')
                                                is-invalid
                                            @enderror">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    </fieldset>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary mr-2" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
