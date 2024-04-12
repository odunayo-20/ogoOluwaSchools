<div>
    <div class="carousel slide mb-1" id="hero-carousel" data-bs-ride="carousel" class="vw-100">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" aria-label="Slide 0" class="active">
            </button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 2">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/frontend/banner/school banner/1684322091764.jpg') }} " alt="banner1"
                    class="d-block w-100 c-img">
                <div class="carousel-caption">
                    <h3 class="text-capitalize ">Some Group Of students</h3>
                    {{-- <p>It's a great time to share idea's even when they are not in their various class, time management.</p>
                    <div class="btn btn-primary">
                        <a href="#"> Learn more</a>
                    </div> --}}
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/banner/school banner/1684322087370.jpg') }}" alt="banner2"
                    class="d-block w-100 c-img">
                <div class="carousel-caption">
                    <h3 class="text-capitalize">Students at the computer lab</h3>
                    {{-- <p>Experiments may not always go as planned. Students need to be adaptable, troubleshoot problems, and modify their approach when necessary.</p>
                    <div class="btn btn-primary">
                        <a href="#"> Learn more</a>
                    </div> --}}
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/banner/school banner/1684321981260.jpg') }} " alt="banner3"
                    class="d-block w-100 c-img">
                <div class="carousel-caption">
                    <h3 class="text-capitalize">Students at the laboratory</h3>
                    {{-- <p>Clear communication skills are vital, especially when working in groups. Students should be able to articulate their thoughts, discuss findings, and present their work coherently. </p>
                    <div class="btn btn-primary">
                        <a href="#"> Learn more</a>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="banner-button">
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- admin-message -->

    <div class="container-fluid  admin-message mb-2">

        <div class="container">
            <div class="card mb-3 mx-auto">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"
                                style="font-style: oblique; font-size: medium; font-weight: bolder; text-decoration: underline 2px solid rgb(59, 15, 129);;">
                                From the director-general desk</h5>
                            <p class="card-text">Ogo-oluwa Group of Schools was established in 25th September, 1998.
                                The school was founded out of zeal for academic excellence. The school started in
                                form of nursery school with three students and four teachers. Since the
                                establishment of the school, it has achieved a lot of developments and advancements
                                in terms of structures, learning facilities and students performance. The school
                                presently has two campuses: one at Emure-Ile behind Obada market and the other at
                                Oke Uso. Ogo-Oluwa Group of Schools is co-educational with boarding facilities.
                                Presently, Ogo-Oluwa Group of Schools is one of the best private schools in Nigeria.
                                The general function of the school is to provide necessary materials needed for
                                effective teaching and learning. This function can be seen in the availability of
                                standard Laboratories, Library and workshop provided for the students.
                            </p>
                            <h6 class="card-text ">Engr P.O. Ojo B.eng (Benin); M.Eng (Benin), MNSE,MIRDI,FHRD,MNI
                                Mech E, C.Eng, R.Eng. (COREN)
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/frontend/images/prop.jpg') }} " class="img-responsive "
                            style="width: 100%; height: 400px;" alt="image">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- admin-message -->
    <!-- about -->
    <div class="container-fluid bg-light">
        <div class="container">

            <section class="row py-0 bg-light mb-1" id="about">
                <div class="col-lg-6 col-img"></div>
                <div class="col-lg-6 py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h6 class="text-primary">Why to choose us?</h6>
                                <h2 class="mb-3">Best academia for your children!</h3>

                                    <div class="feature d-flex">
                                        <div class="iconbox me-2 justify-content-center">
                                            <!-- <i class='bx bxs-download'></i> -->
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                        </div>
                                        <div>
                                            <h5>Clubs and Socialities </h5>
                                            <p>The formation of clubs and societies by students help to enhance the
                                                intellectual, social and cultural development of its members. The clubs
                                                develop
                                                talents and leadership qualities in students, help the students to work
                                                in teams
                                                and enhance national integration.</p>
                                        </div>
                                    </div>
                                    <div class="feature d-flex">
                                        <div class="iconbox me-2 justify-content-center">
                                            <!-- <i class='bx bxs-comment-edit'></i> -->
                                            <!-- <i class="bi-dorm"></i> -->
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <h5>Boarding Facility </h5>
                                            <p>Here are male and female hostels located in the school premises. The
                                                hostels are
                                                spacious and are well furnished. The necessary facilities in the
                                                boarding house
                                                which have helped to achieve the comfortability of the students. Its
                                                literarily
                                                a HOME AWAY FROM HOME. </p>
                                        </div>
                                    </div>
                                    <div class="feature d-flex">
                                        <div class="iconbox me-2 justify-content-center">
                                            <!-- <i class='bx bxs-download'></i> -->
                                            <i class="fa fa-hospital" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <h5>Health Center </h5>
                                            <p>The school have nurses to attend to first aids and general ailment
                                                requiring no
                                                specialist attention. Serious ailment and emergences are sent to outside
                                                hospitals to which school is affiliated. Students who cannot respond to
                                                intensive treatment from the system are sent back their parents for
                                                further
                                                investigations.</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <style>
            .services {
                color: white;
                background-image: url({{ asset('assets/frontend/images/service1.jpg') }});
                background-position: center;
                background-size: cover;
                position: relative;
                z-index: 2;


            }

            .services::after {
                content: "";
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                background-color: rgba(21, 20, 51, 0.8);
                z-index: -1;
            }

            .services .col {
                justify-content: center;
                border: 1px solid white;

            }

            .col-img {
                background-image: url({{ asset('assets/frontend/images/banner1.jpg') }});
                background-position: center;
                background-size: cover;
                min-height: 500px;
            }
        </style>

        <!-- services -->
        <div class="services   d-flex  align-items-center mb-1" id="services" style="height: auto;">
            <div class="container">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white"> OUR FACILITIES </h1>
                    <p class="text-white my-3 ">
                        Students of Ogo Oluwa Group of Schools are exposed to a series of well-articulated practical
                        sessions in the course of their study. Teaching is synchronized with practical classes to
                        facilitate
                        teaching and learning. We develop students with balanced knowledge. Apart from science
                        laboratories,
                        the school has laboratories for language, electronics, introductory technology, computing and
                        typewriting. This is unprecedented and unrivalled within and outside the country.
                    </p>


                </div>
                <div class="row  mb-2 ">
                    <div class="col col-lg-3 col-md-3 col-sm-3 b-2  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">
                            <i class="fa fa-sun" aria-hidden="true"></i>
                        </div>
                        <br>
                        HIGH STANDARDS & VERY AFFORDABLE
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">
                            <i class="fas fa-school" aria-hidden="true"></i>
                        </div>
                        <br>
                        CONDUCIVE AND MODERN CLASSROOM
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">
                            <i class=" fa fa-lightbulb" aria-hidden="true"></i>
                        </div>
                        <br>
                        ENTERPRENEUR SKILL AQUISITION DEVELOPMENT
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">
                            <i class="fa fa-bus" aria-hidden="true"></i>
                        </div>
                        <br>
                        SCHOOL BUS SERVICE
                    </div>
                </div>
                <div class="row mt-3 text-light mb-3">
                    <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">

                            <i class="fa fas fa-money-check-alt" aria-hidden="true"></i>
                        </div>
                        <br>
                        CONVENIENT PAYMENT PLATFORMS
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">
                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                        </div>
                        <br>
                        SECURITY (CCTV CAMERAS,ETC)
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">
                            <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                        <br>
                        APPROPRIATE TEACHING AIDS
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                        <div class="icon mt-2 mx-auto">
                            <i class="far fas fa-university" aria-hidden="true"></i>
                        </div>
                        <br>
                        GREAT ENVIRONMENT & LANDSCAPE
                    </div>
                </div>

            </div>
        </div>
        <!-- services -->

        <!-- gallery -->

        <div class="container-fluid gallery py-2" id="gallery">
            <div class="container">
                <div class="row g-3 ">
                    <h4 class="gal-text text-center"> ----- Picture Archieve ----- </h4>

                    <div class="col-md-3 ">
                        <div class="project mb-3 text-center">
                            @if ($classroom && $classroom->image)
                                <img src="{{ Storage::url($classroom->image) }}" class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Image">
                            @else
                                <img src="{{ asset('assets/img/no-image/no-image1.png') }}"
                                    class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Default Image">
                            @endif

                            <div class="overlay">
                                <div>
                                    @if ($classroom && $classroom->category)
                                        <h4 class="text-white">{{ Str::upper($classroom->category) }}</h4>
                                    @else
                                        <h4 class="text-white">No category available</h4>
                                    @endif


                                    <h6 class="text-white"><a href="{{ route('gallery') }}" style="color: white;">See
                                            more...</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3 ">
                        <div class="project mb-3">
                            @if ($laboratory && $laboratory->image)
                                <img src="{{ Storage::url($laboratory->image) }}" class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Image">
                            @else
                                <img src="{{ asset('assets/img/no-image/no-image1.png') }}"
                                    class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Default Image">
                            @endif
                            <div class="overlay">
                                <div>
                                    @if ($laboratory && $laboratory->category)
                                        <h4 class="text-white">{{ Str::upper($laboratory->category) }}</h4>
                                    @else
                                        <h4 class="text-white">No category available</h4>
                                    @endif
                                    <h6 class="text-white"><a href="{{ route('gallery') }}"
                                            style="color: white;">See
                                            more...</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-3 ">
                        <div class="project mb-3">


                            @if ($library && $library->image)
                                <img src="{{ Storage::url($library->image) }}" class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Image">
                            @else
                                <img src="{{ asset('assets/img/no-image/no-image1.png') }}"
                                    class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Default Image">
                            @endif
                            <div class="overlay">
                                <div>
                                    @if ($library && $library->category)
                                        <h4 class="text-white">{{ Str::upper($library->category) }}</h4>
                                    @else
                                        <h4 class="text-white">No category available</h4>
                                    @endif
                                    <h6 class="text-white"><a href="{{ route('gallery') }}"
                                            style="color: white;">See
                                            more...</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="project mb-3">

                            @if ($hostel && $hostel->image)
                                <img src="{{ Storage::url($hostel->image) }}" class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Image">
                            @else
                                <img src="{{ asset('assets/img/no-image/no-image1.png') }}"
                                    class="img-fluid card-img-bottom"
                                    style="height:15rem; width:100%; object-fit:cover; object-position: 50% 0%;"
                                    alt="Default Image">
                            @endif

                            <div class="overlay">
                                <div>
                                    @if ($hostel && $hostel->category)
                                        <h4 class="text-white">{{ Str::upper($hostel->category) }}</h4>
                                    @else
                                        <h4 class="text-white">No category available</h4>
                                    @endif
                                    <h6 class="text-white"><a href="{{ route('gallery') }}"
                                            style="color: white;">See
                                            more...</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>

        <!-- gallery -->
        <section id="blog" class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h2 class="text-primary">BLOG</h2>
                        <h1 class="fw-medium fs-4">Latest news and events from the school</h1>
                        <p class="text-lowercase">We are here to update students, parents and so on... concerning activities and things which will be taken or that already taken place in OGO OLUWA GROUP OF SCHOOLS</p>
                    </div>
                </div>
                <!-- News CARD -->
                <div class="row" id="news">

                    <h2 class="text-center" style="text-decoration: underlin">NEWS</h2>
                    @if ($singleNews->isEmpty())
                        <p>No Record Found</p>
                    @endif
                    @foreach ($singleNews as $value)
                        <div class="col-md-4 my-2">
                            <div class="blog-post card p-2" style="max-height: 38rem; max-width:100%">

                                <a href="{{ 'news/view/' . $value->id }}" class="profile"> <img
                                        src="{{ Storage::url($value->image) }}" alt="news-img" class="img-fluid"
                                        style='height:15rem; width:100%; object-fit:cover; object-position:50% 0%;'></a>


                                <p style="height:20px; padding-bottom: 25px; text-align:justify;" class="mb-5">
                                    <a class="page-link" href="{{ 'news/view/' . $value->id }}">{{ Str::limit($value->title, 120, '...') }} </a>
                                </p>
                                <p><a href="{{ 'news/view/' . $value->id }}"
                                        class="btn btn-sm btn-primary" style="float: right;"> Read
                                        More </a></p>
                            </div>
                        </div>
                    @endforeach
                    @if ($singleNews->isNotEmpty())
                        <div class="text-center my-2">
                            <a href="{{ route('news') }}" class="btn btn-primary ">Read
                                More</a></div>
                    @endif

                </div>

                <!-- // News CARD -->

                <h2 class="text-center" id="event" style="text-decoration: underlinee">EVENTS</h2>


                <!--Upcoming event CARD -->
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="row">

                            @if ($singleEvent->isEmpty())
                                <p>No Record Found</p>
                            @endif
                            @foreach ($singleEvent as $value)
                                <div class="col-md-4 my-2">


                                    <div class="blog-post card p-2" style="max-height: 38rem; max-width:100%">
                                        <a href="{{ 'events/view/' . $value->id }}" class="profile"> <img
                                                src="{{ Storage::url($value->image) }}" alt="event-img"
                                                class="img-fluid"
                                                style="height:15rem; width:100%; object-fit:cover; object-position:50% 0%;"></a>

                                        <!-- <br> -->
                                        <p style="height:20px;padding-bottom: 25px;text-align:justify;" class="mb-5">
                                            <a class="page-link" href="{{ 'events/view/' . $value->id }}">{{ Str::limit($value->title, 120, '...') }}
                                            </a> </p>
                                        <p><a href="{{ 'events/view/' . $value->id }}"
                                                class="btn btn-sm btn-primary"
                                                style="float: right;"> Read More </a></p>
                                        <p>
                                            <?php ?>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if ($singleEvent->isNotEmpty())
                            <div class="text-center mt-2"><a href="{{ route('event') }}"
                                    class="btn btn-primary ">Read More</a></div>
                        @endif
                    </div>

                </div>
                <!--Upcoming event CARD -->

                <!-- Testimonies -->

                <!-- Testimonies -->
            </div>
        </section>
    </div>
</div>
