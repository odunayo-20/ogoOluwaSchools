

<div class="container-fluid">
    <div class="container">
        <div class="row">


            <div class="col-md-12 right-cards ">
                <div class="car mt-3 mb-3">



                    <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                      color: white; height: 50px ;">
                        <h3>NEWS</h3>
                    </div>

                    <!-- <div class="container"> -->
                    <div class="row">


                        <div class="container py-2">
                            <div class="row ">

                                <div class="col text-end" style="font-size:x-small;"><strong> Date: {{ $singleNews->date }}  | Time:  {{ $singleNews->time }}</strong></div>
                            </div>

                            <strong>
                                <h1 class="display-4 fw-bold card-text fs-5" style="color:rgb(59, 15, 129); text-align:justify;">{{ $singleNews->title }}</h1>
                                <h1 class="fs-5 fw-medium" style="text-align:justify; font-size:14px;">{{ $singleNews->summary }}</h1>
                            </strong>
                            <p>
                                <!-- news image -->

                                <span class="profile"> <img class="img-fluid px-3" src="{{ Storage::url($singleNews->image) }}" alt="img" style="height:25rem; width:100%; object-fit:cover; object-position:50% 0%;">
                                </span>
                                <!-- news image -->

                            <div class="p-2 fw-medium" style="text-align: justify;"> {{ $singleNews->subtitle }}
                            </div>
                            <div class="p-2" style="text-align: justify;"> {!! $singleNews->content !!}
                            </div>
                            <small class="text-muted" style="float: right; padding: 12px;">Time posted: {{ $singleNews->created_at }}</small>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>

            <!-- OTHER NEWS CARD -->
            @if($news->isNotEmpty())


            <span class="mb-3 ">
                <h5 class="
                mt-3 py-3" style=" border-bottom: 5px solid rgb(59, 15, 129);border-top: 5px solid rgb(59, 15, 129);
          ;"><i class="fa fa-newspaper" aria-hidden="true"></i> | OTHER NEWS</h5>
                    </span>

            @endif
                    <div class="mb-3">

                        <div class="row">
                    @foreach ($news as $value)


                        <div class="col-md-4 my-3">
                            <div class="blog-post card p-2" style="max-height: 38rem; max-width:100%">

                                <a href="{{$value->id }}" class="profile"> <img
                                        src="{{ Storage::url($value->image) }}" alt="news-img" class="img-fluid"
                                        style='height:15rem; width:100%; object-fit:cover; object-position:50% 0%;'></a>


                                <p style="height:20px; padding-bottom: 35px; text-align:justify;">
                                    <a class="page-link" href="{{$value->id }}">{{ Str::limit($value->title, 150, '...') }} </a>
                                </p>
                                <p class="mt-5"><a href="{{$value->id }}"
                                        class="btn btn-sm btn-primary" style="float: right;"> Read
                                        More </a></p>
                            </div>
                        </div>

                        @endforeach



                </div>
            </div>


            <!-- OTHER NEWS CARD -->






        </div>




    </div>


</div>
</div>

<!-- body -->



