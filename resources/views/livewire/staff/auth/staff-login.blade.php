<div id="app">
  <section class="section">
      <div class="container mt-5">
          <div class="row">

              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                  <div class="card card-primary">

                      <div class="card-header" style="text-align: center;">
                          <h4 style="text-align:center;">Staff LOGIN</h4>
                      </div>
                      <div class="card-body">
                          @if (session('error'))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              {{session('error')}}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                       
                          @endif
                                    @if (session('success'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{session('success')}}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                       
                          @endif
          
                          <form wire:submit.prevent='login'>
                              <div class="form-group">
                                  <label for="email">Username</label>
                                  <input id="text" type="email" class="form-control" wire:model="email">
                                  @error('email')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <div class="d-block">
                                      <label for="password" class="control-label">Password</label>
                                  </div>
                                  <input id="password" type="password" class="form-control" wire:model="password">
                                  @error('password')
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
                                    Login
                                      {{-- <span wire:loading wire:target='login'>Login</span> --}}
                                  </button>
                              </div>
                              <div class="form-group">
                                  <a wire:navigate href="{{ route('staff_forget_password') }}">Forget password</a>
                                  <a class="d-flex" wire:navigate href="{{ route('staff_register') }}">Register</a>
                              </div>
                              {{-- <div class="form-group"> --}}
                              {{-- </div> --}}
                          </form>

                      </div>
                  </div>
                  <div class="mt-5 text-muted text-center">
                      Return to the? <a href="{{ url('/') }}">Main Website</a>
                  </div>

              </div>
          </div>
      </div>
  </section>
</div>
