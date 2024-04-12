
<div class="main-content">
    <!-- section start -->
    <section class="section">
      <div class="section-body">
        <!-- add content start here -->

        <div class="row">
        <div class="col-12 my-2">
                      <a href="{{ route('admin_assignment_create') }}" class="btn btn-primary" style="float: right;">Add Assignment</a>
                  </div>

          <div class="col-12">


            <div class="card">
              <div class="card-header">

                <h4>Assignment Record Table</h4>

                <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- <div class="card-body p-0"> -->

              <!-- query to check for staff count stop -->
              <div class="row">
                <div class="col-12">
                  <div class="card mb-0">
                    <div class="card-body">
                      <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">All <span class="badge badge-white"></span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Publish <span class="badge badge-primary"></span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Draft <span class="badge badge-primary"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card-body">
                <div class="table-responsive">
                  <table id="mainTable" class="table table-striped">
                    <tr>
                      <th>S/N</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Publish</th>
                      <th>Draft</th>
                      <th>Action</th>
                    </tr>


                      <tr>


                  </table>


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
</div>

    <!-- Main Content start -->

