<div>
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

                    <h4>Event Record Table</h4>

                    <div class="card-header-form">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <div class="input-group">
                                    <input wire:model.live='search' type="search" class="form-control"
                                        placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <select wire:model.live='pagination' class="form-select ">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>

                        </div>
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
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="table-responsive">
                      <table id="mainTable" class="table table-striped">
                        <tr>
                          <th>S/N</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Action</th>
                        </tr>

                        @foreach ($events as $event)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ Str::limit($event->title, 50, '...')  }}</td>
                                <td><img class="img-fluid rounded-circle " style='height:50px; width:50px' src="{{ Storage::url($event->image) }}" alt="" srcset=""></td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td>
                                    <a href="{{ url('staff/event/view/'.$event->id) }}" class="btn btn-sm btn-warning">View</a>
                                </td>
                            </tr>
                        @endforeach


                      </table>

                      {{ $events->links() }}


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
