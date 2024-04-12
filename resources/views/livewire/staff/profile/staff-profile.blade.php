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
                <h4>Staff</h4>
              </div>
              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             
                @endif
                <div class="row">
                  <div class="col-md-4">
                    <form wire:submit='updateImage'>
                      <div class="row mb-3">
                        @if(Auth::guard('staff')->user()->image != null)
                        <img src="{{Storage::url(Auth::guard('staff')->user()->image)}}" alt="staff profile"
                          style="width: 100%; height:300px">

                        @else
                        <img src="{{asset('assets/img/no-image/no-image1.png') }}" alt="staff profile"
                          style="width: 100%; height:300px">

                        @endif
                        @if($new_image)

                        <img src="{{ $new_image->temporaryUrl()}}" alt="" style="width: 50px; height:50px"
                          class="img-fluid rounded-circle">
                        @endif
                      </div>
                      <div class="row">

                        <input wire:model.live='new_image' type="file" name="" id="" class="form-control">
                        @error('new_image')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror

                        @if(!empty($new_image))
                        <button class='btn btn-primary mt-2'>Upload Image</button>

                        @endif
                      </div>
                    </form>
                  </div>
                  @auth('staff')

                  <div class="col-md-8">
                    <form wire:submit='updateStaff'>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Firstname:</label>
                        <div class="col-sm-12 col-md-7">

                          <input wire:model='firstname' type="text" class="form-control">
                          @error('name')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Middlename:</label>
                        <div class="col-sm-12 col-md-7">

                          <input wire:model='middlename' type="text" class="form-control">
                          @error('middlename')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lastname:</label>
                        <div class="col-sm-12 col-md-7">

                          <input wire:model='lastname' type="text" class="form-control">
                          @error('lastname')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email:</label>
                        <div class="col-sm-12 col-md-7">
                          <input wire:model='email' type="text" class="form-control">
                          @error('email')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone:</label>
                        <div class="col-sm-12 col-md-7">
                          <input wire:model='phone' type="text" class="form-control">
                          @error('phone')
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