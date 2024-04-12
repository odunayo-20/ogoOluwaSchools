<!-- body -->

<div class="container-fluid">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-3 mb-3">


                <strong class="mt-3 mb-3 text-center" style=" color:  rgb(59, 15, 129);">
                    <h4>PICTURE SPEAKS</h4>
                </strong>

                <div class="container">
                    <div class="feature-filters clearfix center">
                        <ul class="nav nav-pills  mb-3 mt-3 d-flex flex-row" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-classroom-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-classroom" type="button" role="tab"
                                    aria-controls="pills-classroom" aria-selected="false">Classrooms</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-hostel-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-hostel" type="button" role="tab" aria-controls="pills-hostel"
                                    aria-selected="false">Hostel</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-library-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-library" type="button" role="tab"
                                    aria-controls="pills-library" aria-selected="false">Library</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-laboratory-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-laboratory" type="button" role="tab"
                                    aria-controls="pills-laboratory" aria-selected="false">Laboratory</button>
                            </li>

                        </ul>


                    </div>
                </div>


                <div class=" clearfix">
                    <div class="tab-content" id="pills-tabContent">

                        <!-- ALL TAB -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">



                            <div id="animated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="display: none;">
                                    <a href="" data-sub-html="gallery">
                                        <img class="img-responsive thumbnail" src="" alt=""
                                            style="height: 250px; width:100%; display: none;">
                                    </a>
                                </div>


                                @foreach ($gallery as $value)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 my-2">
                                    <a href="{{ Storage::url($value->image) }}" target="_blank" data-sub-html="GALLERY"
                                        class="profile">
                                        <img class="img-fluid img-responsive thumbnail rounded"
                                            src="{{ Storage::url($value->image) }}"
                                            style="width:100%; height: 15rem; object-fit:cover; object-position:50% 20%;"
                                            alt="">
                                    </a>
                                </div>
                                @endforeach
                                <div class="d-flex justify-content-center pt-4">{{ $gallery->links() }}</div>
                            </div>


                        </div>
                        <!-- ALL TAB -->


                        <!-- CLASSROOM TAB -->
                        <div class="tab-pane fade" id="pills-classroom" role="tabpanel"
                            aria-labelledby="pills-classroom-tab" tabindex="0">

                            <div id="animated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="display: none;">
                                    <a href="" data-sub-html="Demo Description" class="profile">
                                        <img class="img-responsive thumbnail rounded" src="" alt=""
                                            style="width:100%; height: 15rem; object-fit:cover; object-position:50% 20%;">
                                    </a>
                                </div>
                                @foreach ($classroom as $value)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 my-2">
                                    <a href="{{ Storage::url($value->image) }}" target="_blank"
                                        data-sub-html="Demo Description" class="profile">
                                        <img class="img-responsive thumbnail rounded"
                                            src="{{ Storage::url($value->image) }}"
                                            style="width:100%; height: 15rem; object-fit:cover; object-position:50% 20%;"
                                            alt="">
                                    </a>
                                </div>
                                @endforeach
                                
                                <div class="d-flex justify-content-center pt-4">{{ $classroom->links() }}</div>



                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- CLASSROOM TAB -->


                        <!-- HOSTEL TAB -->
                        <div class="tab-pane fade" id="pills-hostel" role="tabpanel" aria-labelledby="pills-hostel-tab"
                            tabindex="0">
                            <div class="row">
                                @foreach ($hostel as $value)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <span class="badge badge-primary">
                                    </span>
                                    <a href="{{ Storage::url($value->image) }}" target="_blank" class="profile">
                                        <img class="img-fluid rounded"
                                            style="width:100%; height: 15rem; object-fit:cover; object-position:50% 20%;"
                                            src="{{ Storage::url($value->image) }}" alt="img">
                                    </a>
                                </div>
                                @endforeach
                                
                                <div class="d-flex justify-content-center pt-4 ">{{ $hostel->links() }}</div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- HOSTEL TAB -->

                        <!--LIBRARY TAB -->
                        <div class="tab-pane fade" id="pills-library" role="tabpanel"
                            aria-labelledby="pills-library-tab" tabindex="0">
                            <div class="row">
                                @foreach ($library as $value)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <span class="badge badge-primary">
                                    </span>
                                    <a href="{{ Storage::url($value->image) }}" target="_blank" class="profile">
                                        <img class="img-fluid rounded"
                                            style="width:100%; height: 15rem; object-fit:cover; object-position:50% 20%;"
                                            src="{{ Storage::url($value->image) }}" alt="img">
                                    </a>
                                </div>
                                @endforeach
                                <div class="d-flex justify-content-center pt-4">{{ $library->links() }}</div>
                                


                            </div>
                        </div>
                        <!-- LIBRARY TAB -->

                        <!-- LABORATORY TAB -->
                        <div class="tab-pane fade" id="pills-laboratory" role="tabpanel"
                            aria-labelledby="pills-laboratory-tab" tabindex="0">
                            <div class="row">
                                @foreach ($laboratory as $value)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <span class="badge badge-primary">
                                    </span>
                                    <a href="{{ Storage::url($value->image) }}" target="_blank" class="profile">
                                        <img class="img-fluid rounded"
                                            style="width:100%; height: 15rem; object-fit:cover; object-position:50% 20%;"
                                            src="{{ Storage::url($value->image) }}" alt="img">
                                    </a>
                                </div>
                                @endforeach
                                
                                <div class="d-flex justify-content-center pt-4">{{ $laboratory->links() }}</div>


                            </div>
                        </div>
                        <!-- LABORATORY TAB -->



                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
</div>
</div>
</div>



<!-- body -->