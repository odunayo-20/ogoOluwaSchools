

    <div class="container-fluid">
        <div class="container">
            <div class="row">


                <div class="col-md-12 right-cards ">
                    <div class="car mt-3 mb-3">



                        <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                          color: white; height: 50px ;">
                            <h3>EVENTS</h3>
                        </div>

                        <!-- <div class="container"> -->
                        <div class="row">


                            <div class="container py-2">
                                <div class="row ">

                                    <div class="col-md-12 text-en px-4" style="font-size:small;"><strong> Date: {{ $event->date }}  | Time:  {{ \Carbon\Carbon::createFromFormat('H:i:s', $event->time)->format('h:i A') }}</strong></div>
                                </div>

                                <div class="card-title">

                                    <div class="px-2 card-title" style="color:rgb(59, 15, 129); font-weight:bold; text-align:justify;">{{ $event->title }}</div>
                                </div>
                                <p>
                                    <!-- news image -->

                                    <span class="profile"> <img class="img-fluid px-3" src="{{ Storage::url($event->image) }}" alt="img" style="height: 25rem;width:100%; object-fit:cover; object-position:50% 0%;">
                                    </span>
                                    <!-- news image -->

                                <div class="px-3" style="font-size:14px;"> {!! $event->message !!}
                                </div>
                                <div class="py-3 px-3" style="text-align: justify; font-size:13px;"><span style='font-size:bold' class='text-bold'>Location:</span>  {{ $event->location }}
                                </div>
                                <small class="text-muted" style="float: right; padding: 12px;">Time posted: {{ $event->created_at->format('j F, Y, h : iA' )  }} </small>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>


                <!-- OTHER NEWS CARD -->
                @if($events->isNotEmpty())

                <h5 class="
                mt-3 p-3" style=" border-bottom: 5px solid rgb(59, 15, 129);border-top: 5px solid rgb(59, 15, 129);
          ;"><i class="fa fa-newspaper" aria-hidden="true"></i> | OTHER EVENTS</h5>
                    </span>
                @endif
                <span class="mb-3 ">

                        <div class="car mb-3">

                            <div class="row">
                                @foreach ($events as $value)



                            <div class="col-md-4 my-3">
                                <div class="blog-post card p-2" style="max-height: 38rem; box-sizing:border-box;">
                                    <a href="{{ $value->id }}" class="profile">
                                         <img src="{{ Storage::url($value->image) }}" alt="blog-img" class="img-fluid" style="height: 15rem;width:100%; object-fit:cover; object-position:50% 0%;"></a>
                                    <h6 class="d-block">

                                        <small class="" style="float: left; font-size:x-small;"><i class="fa fa-calendar" aria-hidden="true" style=" color: blue;"></i> {{ $value->date }} </small>
                                        <small class="" style="float: right;font-size:x-small;"><i class="fa fa-clock" aria-hidden="true" style=" color: blue;"></i> {{ $value->time }}  </small>

                                    </h6>
                                    <!-- <br> -->
                                    <p class="text-center" style="text-decoration: underline; font-size:14px;"><a href="{{ $value->id }}">{{ Str::limit($value->title, 100, '...')  }} </a></p>
                                    <p class=""> <small class="text-muted">Time posted: {{ $value->created_at }} </small> <a href="{{ $value->id }}" class="text-end btn btn-sm btn-primary" style="float: right; font-size:x-small;"> Read More </a></p>
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



