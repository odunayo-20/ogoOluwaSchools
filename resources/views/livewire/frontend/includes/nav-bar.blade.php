    <!-- contact-bar -->
    <div class="container-fluid contact py-2 ">


        <div class="container">
            <div class="row  mx-auto">
                <div class="col-lg-4 col-md-4 col-sm-4  ">

                        <strong class="text-start"> <i class="fa fa-phone" aria-hidden="true"></i> +2348160180552 </strong>
                </div>



                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <strong class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i>
                        ogooluwaschools@yahoo.com
                    </strong>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 text-end ">
                    <strong>
                        <a href="#"><i class="bi-facebook"></i></a>
                        <a href="#"><i class="bi-twitter"></i></a>
                        <a href="#"><i class="bi-whatsapp"></i></a>
                        <a href="#"><i class="bi-instagram"></i></a>
                    </strong>

                </div>
            </div>
        </div>
    </div>
    <!-- contact-bar -->

    <!-- top-bar -->
    <div class="container">

        <div class="d-flex align-items-center ">

            <a href="./" class="d-inline-block"><img class="mx-0" src="{{ asset('assets/frontend/logo/logo.png') }}" alt="logo" height="100px"></a>
            <div class="d-inline-block justify-content-center align-content-center ">
                <span>
                    <h5 class="title2" style="color: rgb(59, 15, 129);">OGO OLUWA GROUP OF SCHOOLS</h5>
                </span>
                <h6 class="subtitle">Education for better future!</h6>
            </div>

        </div>


    </div>
    <!-- top-bar -->

    <!-- link-bar -->

    <nav class="navbar navbar-expand-lg navbar-light link-bar sticky-top py-3  ">
        <div class="container-fluid ">
            <div class="container  ">
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}"
                                style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}" style="color: white;">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service') }}" style="color: white;">Our Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('academics') }}" style="color: white;">
                                Academics
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admission') }}" style="color: white;">Online Admission</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: white;">
                                Login portal
                            </a>
                            <ul class="dropdown-menu">

                                <li><a  href="{{ route('staff_login') }}" class="dropdown-item">
                                        Staff
                                    </a></li>
                                <li><a  href="{{ route('student_login') }}" class="dropdown-item">
                                        Student
                                    </a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: white;">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('news') }}">News</a></li>
                                <li><a class="dropdown-item" href="{{ route('event') }}">Events</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gallery') }}" class="nav-link" style="color: white;">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}" style="color: white;">Contact Us</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>




    <!-- link-bar -->
