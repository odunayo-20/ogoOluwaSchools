<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
      <div class="section-body">
        <!-- add content start here -->
  
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Admin Change Password</h4>
              </div>
              <div class="card-body">
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{session('success')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               
                  @endif
  
                <div class="row">
                  @auth('admin')
  
                  <div class="col-md-8">
                    <form wire:submit='store'>
                      {{-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Old Password:</label>
                        <div class="col-sm-12 col-md-7">
  
                          <input wire:model.lazy='Old_password' type="text" class="form-control">
                          @error('Old_password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div> --}}
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password:</label>
                        <div class="col-sm-12 col-md-7">
  
                          <input wire:model.lazy='password' type="text" class="form-control">
                          @error('password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password:</label>
                        <div class="col-sm-12 col-md-7">
                          <input wire:model='Confirm_password' type="text" class="form-control">
                          @error('Confirm_password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
  
  
                      <div class="form-group row mb-4">
  
                        <div class="col-md-4 text-end">
                          <button class="btn btn-sm btn-primary">Update</button>
                        </div>
                      </div>
  
                  </div>
                  @endauth
                </div>
                </form>
              </div>
  
            </div>
          </div>
  
  
        </div>
      </div>
  
      <!-- add content stop here-->
  </div>
  
  </section>
  <!-- section stop -->
  
  </div>
  <!-- Main content stop -->