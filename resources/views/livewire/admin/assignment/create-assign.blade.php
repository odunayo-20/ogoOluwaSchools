

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
                <h4>Assignment Post</h4>
              </div>
              <div class="card-body">
                <form action="assign-process.php" method="post" enctype="multipart/form-data">


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Class</label>
                    <div class="col-sm-12 col-md-7">
                      <select wire:model.live='selectedClass' class="form-control selectric">
                          <option>--SELECT CLASS--</option>
                        @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>

                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
                    <div class="col-sm-12 col-md-7">
                      <select wire:model.live='selectedSubject' class="form-control selectric" name="subject">
                          <option>--SELECT SUBJECT--</option>
                        @foreach ($AssignSubjects as $subject)
                            <option value="">{{ $subject->subject->name }}</option>
                        @endforeach


                      </select>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Submit</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="date" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="time" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric" name="status">
                        <option>--SELECT STATUS--</option>
                        <option value="published">Publish</option>
                        <option value="drafted">Draft</option>
                        <!-- <option value="pending">Pending</option> -->
                      </select>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Document</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" name="document" id="">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary">Submit</button>
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

