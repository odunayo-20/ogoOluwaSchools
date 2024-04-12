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
              <h4>Admin</h4>
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
                      @if(Auth::guard('admin')->user()->image != null)
                      <img src="{{Storage::url(Auth::guard('admin')->user()->image)}}" alt="Admin profile"
                        style="width: 100%; height:300px">

                      @else
                      <img src="{{asset('assets/img/no-image/no-image1.png') }}" alt="Admin profile"
                        style="width: 100%; height:300px">

                      @endif
                      @if($new_image)

                      <img src="{{ $new_image->temporaryUrl()}}" alt="" style="width: 50px; height:50px"
                        class="img-fluid rounded-circle">
                      @endif
                    </div>
                    <div class="row">

                      <input wire:model.lazy='new_image' type="file" name="" id="" class="form-control">
                      @error('new_image')
                      <span class='text-danger'>{{$message}}</span>
                      @enderror

                      @if(!empty($new_image))
                      <button class='btn btn-primary mt-2'>Upload Image</button>

                      @endif
                    </div>
                  </form>
                </div>
                @auth('admin')

                <div class="col-md-8">
                  <form wire:submit='updateAdmin'>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name:</label>
                      <div class="col-sm-12 col-md-7">

                        <input wire:model.lazy='name' type="text" class="form-control">
                        @error('name')
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