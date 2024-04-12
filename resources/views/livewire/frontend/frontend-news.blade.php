<!-- body -->


<div class="container-fluid">


    <div class="container">
        <!-- <h2 class="mb-3">ADMISSION FORM</h2> -->


        <!--Upcoming event CARD -->
        <div class="row my-3">
            <div class="col-12">

                <h3 class="fw-medium fs-4 d-flex justify-content-center  align-items-center ">News</h3>
            </div>            </h3>
            @if($news->isEmpty())
            <p>No Records</p>
            @endif
            @foreach ($news as $value)


            <div class="col-md-4 my-2">
                <div class="blog-post card p-2" style="max-height: 38rem; max-width:100%">

                    <a href="{{ 'news/view/' . $value->id }}" class="profile"> <img
                            src="{{ Storage::url($value->image) }}" alt="news-img" class="img-fluid"
                            style='height:15rem; width:100%; object-fit:cover; object-position:50% 0%;'></a>


                    <p style="height:20px; padding-bottom: 35px; text-align:justify;" class="mb-5">
                        <a class="page-link" href="{{ 'news/view/' . $value->id }}">{{ Str::limit($value->title, 120, '...') }} </a>
                    </p>
                    <p><a href="{{ 'news/view/' . $value->id }}"
                            class="btn btn-sm btn-primary" style="float: right;"> Read
                            More </a></p>
                </div>
            </div>
            @endforeach
            <div class='text-center'> {{ $news->links() }}</div>

        </div>
        <!--Upcoming event CARD -->

    </div>
</div>


<!-- body -->
