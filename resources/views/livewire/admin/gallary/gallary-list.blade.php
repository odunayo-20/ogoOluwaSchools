<!-- Main Content start -->
<div class="main-content">

    @include('livewire.admin.deleteForm.delete-form')
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <div class="row">
                <div class="col-12 my-2">
                    <a href="{{ route('admin_gallery_create') }}" class="btn btn-primary" style="float: right;">Add Gallery</a>
                </div>

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>PREVIEW GALLERY</h4>
                        </div>
                        <div class="card-body">

                            @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
    {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                            @endif


                            <!-- query to display count stop -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <ul class="nav nav-pills mb-3 " role="tablist">
                                                <li class="nav-item ms-2" role="presentation">
                                                    <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All <span class="badge badge-white"></span></a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-classroom" type="button" role="tab" aria-controls="pills-classroom" aria-selected="false">Classroom <span class="badge badge-primary"></span></a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-hostel" type="button" role="tab" aria-controls="pills-hostel" aria-selected="false">Hostel <span class="badge badge-primary"></span></a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-library" type="button" role="tab" aria-controls="pills-library" aria-selected="false">Library <span class="badge badge-primary"></span></a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-laboratory" type="button" role="tab" aria-controls="pills-laboratory" aria-selected="false">Laboratory <span class="badge badge-primary"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="tab-content" id="pills-tabContent">


                                <!-- all gallery -->
                                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                                    <div class="row">
                                        @foreach ($gallery as $value)
                                        <div class="col-md-2 p-2">
                                            <div class="project mb-3 card">
                                                <img class="img-fluid" style="height: 200px; width:100%; object-fit:cover;" src="{{ Storage::url($value->image) }}" alt="img">
                                                <div class="overlay">
                                                    <div>

                                                        <div class="row">
                                                            <div class="edit-icons  ">
                                                                <a class="btn btn-sm btn-primary" wire:confirm='Are you sure' href="gallery/edit/{{ $value->id }}" title="Edit"><i class='fa fa-edit'></i></a>
                                                            </div>
                                                            <div class="trash-icons  ">
                                                                <a href="#" wire:click='delete({{ $value->id }})' data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i></a>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach





                                    </div>
                                </div>
                                <!-- all gallery -->

                                <!-- CLASSROOM TAB -->
                                <div class="tab-pane fade" id="pills-classroom" role="tabpanel" aria-labelledby="pills-classroom-tab" tabindex="0">
                                    <!-- classroom  query start -->
                                    <div class="row">
                                        @foreach ($classroom as $value)
                                        <div class="col-md-2 p-2">
                                            <div class="project mb-3 card">
                                                <img class="img-fluid" style="height: 200px; width:100%; object-fit:cover;" src="{{ Storage::url($value->image) }}" alt="img">
                                                <div class="overlay">
                                                    <div>


                                                        <div class="row">
                                                            <div class="edit-icons  ">
                                                                <a class="btn btn-sm btn-primary" wire:confirm='Are you sure' href="gallery/edit/{{ $value->id }}" title="Edit"><i class='fa fa-edit'></i></a>
                                                            </div>
                                                            <div class="trash-icons  ">
                                                                
                                                                <a href="#" wire:click='delete({{ $value->id }})' data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach



                                    </div>
                                    <!-- classroom query stop -->


                                </div>
                                <!-- CLASSROOM TAB -->


                                <!-- HOSTEL TAB -->
                                <div class="tab-pane fade" id="pills-hostel" role="tabpanel" aria-labelledby="pills-hostel-tab" tabindex="0">

                                    <!-- hostel  query start -->
                                    <div class="row">
                                        @foreach ($hos as $value)

                                        <div class="col-md-2 p-2">
                                            <div class="project mb-3 card">
                                                <img class="img-fluid" style="height: 200px; width:100%; object-fit:cover;" src="{{ Storage::url($value->image) }}" alt="img">
                                                <div class="overlay">
                                                    <div>


                                                        <div class="row">
                                                            <div class="edit-icons  ">
                                                                <a class="btn btn-sm btn-primary" wire:confirm='Are you sure' href="gallery/edit/{{ $value->id }}" title="Edit"><i class='fa fa-edit'></i></a>
                                                            </div>
                                                            <div class="trash-icons  ">
                                                                <a href="#" wire:click='delete({{ $value->id }})' data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i></a>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach

                                    </div>
                                    <!-- hostel query stop -->


                                </div>
                                <!-- HOSTEL TAB -->

                                <!--LIBRARY TAB -->
                                <div class="tab-pane fade" id="pills-library" role="tabpanel" aria-labelledby="pills-library-tab" tabindex="0">

                                    <!-- library  query start -->
                                    <div class="row">
                                        @foreach ($lib as $value)
                                        <div class="col-md-2 p-2">
                                            <div class="project mb-3 card">
                                                <img class="img-fluid" style="height: 200px; width:100%; object-fit:cover;" src="{{ Storage::url($value->image) }}" alt="img">
                                                <div class="overlay">
                                                    <div>


                                                        <div class="row">
                                                            <div class="edit-icons  ">
                                                                <a class="btn btn-sm btn-primary" wire:confirm='Are you sure' href="gallery/edit/{{ $value->id }}" title="Edit"><i class='fa fa-edit'></i></a>
                                                            </div>
                                                            <div class="trash-icons  ">
                                                                <a href="#" wire:click='delete({{ $value->id }})' data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i></a>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        @endforeach
                                    </div>

                                    <!-- library query stop -->


                                </div>
                                <!-- LIBRARY TAB -->

                                <!-- LABORATORY TAB -->
                                <div class="tab-pane fade" id="pills-laboratory" role="tabpanel" aria-labelledby="pills-laboratory-tab" tabindex="0">

                                    <!-- laboratory  query start -->
                                    <div class="row">

                                        @foreach ($laboratory as $value)
                                        <div class="col-md-2 p-2">
                                            <div class="project mb-3 card">
                                                <img class="img-fluid" style="height: 200px; width:100%; object-fit:cover;" src="{{ Storage::url($value->image) }}" alt="img">
                                                <div class="overlay">
                                                    <div>


                                                        <div class="row">
                                                            <div class="edit-icons  ">
                                                                <a class="btn btn-sm btn-primary" wire:confirm='Are you sure' href="gallery/edit/{{ $value->id }}" title="Edit"><i class='fa fa-edit'></i></a>
                                                            </div>
                                                            <div class="trash-icons  ">
                                                                <a href="#" wire:click='delete({{ $value->id }})' data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i></a>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach


                                    </div>
                                    <!-- laboratory query stop -->


                                </div>
                                <!-- LABORATORY TAB -->

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

@push('script')
<script>

    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
    </script>
@endpush
