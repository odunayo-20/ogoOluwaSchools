<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">

                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">

                        <div class="card-header" style="text-align: center;">
                            <h4 style="text-align:center;">STUDENT RESET PASSWORD</h4>
                        </div>
                        <div class="card-body">
                            @if (session('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <form wire:submit.prevent='reset_password'>
                                <input wire:model='email' type="hidden" value="{{ $student->email }}">
                                <input  wire:model='token' type="hidden" value="{{ $student->token }}">
                                <div class="form-group">
                                    <label for="password">PASSWORD</label>
                                    <input id="text" type="password" class="form-control" wire:model="password">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="confirm-password" class="control-label">Confirm Password</label>
                                    </div>
                                    <input id="confirm_password" type="password" class="form-control" wire:model="confirm_password">
                                    @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        <span wire:loading.remove wire:target='login'>SUBMIT</span>
                                        <span wire:loading wire:target='login'>Loading...</span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Return to the? <a href="./">Main Website</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
