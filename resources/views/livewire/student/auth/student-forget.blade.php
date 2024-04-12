<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Forgot Password</h4>
              </div>
              @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
              @endif
              @if(session('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
              @endif
              <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <form wire:submit='forget'>
              

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control" wire:model='email'>
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Forgot Password
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
              Return to the? <a  wire:navigate href="{{ route('student_login') }}">Login Page</a>
            </div>
            
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>