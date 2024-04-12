

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
                <h4>ADD Class</h4>
              </div>
              <div class="card-body">


                <form wire:submit='store'>
  @if(session('status'))
    <div class='alert alert-info'>{{session('status')}}</div>
  @endif

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Class</label>
                    <div class="col-sm-12 col-md-7">

                    <select wire:model='class' class="form-control" >
                        <option value="">--Select Class--</option>
                        @foreach ($classes as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>

                        @endforeach
                    </select>
                    @error('class')
                    <span class='text-danger'> {{ $message }}</span>
                @enderror

                    </div>
                  </div>

                                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Subject</label>
                    <div class="col-sm-12 col-md-7">
                        <select wire:model='subject' class="form-control">
                            <option value="">--Select Subject--</option>
                            @foreach ($subjects as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>

                            @endforeach
                        </select>
                        @error('subject')
                        <span class='text-danger'> {{ $message }}</span>
                    @enderror

                        </div>
                  </div>


                 


                  <div class="form-group row mb-4">
                    <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>


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




