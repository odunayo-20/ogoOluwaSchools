<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <div class="row">
                <div class="col-md-12">
                    <a wire:navigate href="{{ route('student_assignment_submit') }}" class="btn btn-danger my-3" style="float: right;">Submitted
                        Assignment</a>
                </div>
                <div class="col-12">

                    <div class="card">
                        @if (session('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-header">
                            <h4>Assignment Record Table</h4>
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
                                        <th>Teacher Name</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Document</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>


                                    @foreach ($assignments as $value)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="text-uppercase">{{ $value->staff->firstname }}
                                            {{ $value->staff->lastname }}</td>
                                        <td>{{ $value->class->name }}</td>
                                        <td>{{ $value->subject->name }}</td>
                                        <td><button wire:click="downloadfile({{ $value->id }})" class="btn btn-sm btn-warning">download</button></td>
                                        <td>{{ $value->date }}</td>
                                        <td>{{ $value->time }}</td>
                                        <td>

                                       
                                           
                                            <a wire:navigate class="btn btn-sm btn-primary" href="{{ url('student/assignment/submit/'. $value->id) }}">Submit</a>
                                           
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                                {{ $assignments->links() }}
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
