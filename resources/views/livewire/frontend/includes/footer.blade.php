
    <!-- footer -->
    <div class="container-fluid quick-links" id="links">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-lo">
                        <div class="mx-auto mt-2 text-cente">

                            <a href="{{ route('index') }}" class="d-block text-center">
                                <img class="" src="{{ asset('assets/frontend/logo/logo.png') }} " alt="logo" height="150px" width="150px"></a>
                        </div>
                        <div class="text-center">

                            <strong class="title2" style="color: white;">OGO OLUWA GROUP OF SCHOOLS</strong>

                            <h6 class="subtitle" style="color: white;">Education for better future!</h6>

                            <strong>WE ARE ON SOCIAL MEDIA</strong>

                            <div class="footer-icon mt-3">

                                <a href="#"><i class="bi-facebook"></i></a>
                                <a href="#"><i class="bi-twitter"></i></a>
                                <a href="#"><i class="bi-whatsapp"></i></a>
                                <a href="#"><i class="bi-instagram"></i></a>
                                <!-- <a href="#"><i class="bi-telegram"></i></a>
                                <a href="#"><i class="bi-linkedin"></i></a> -->

                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-md-3 mt-3 mx-md-auto   text-l-center">
                    <strong >Quick links</strong><br>

                    <a href="{{ route('index') }}" class="page-link ">Home</a>
                    <a href="{{ route('about') }}" class="page-link">About Us</a>
                    <a href="{{ route('service') }}" class="page-link">Our Facilities</a>
                    <a href="{{ route('admission') }}" class="page-link">Online Admission</a>
                    <a href="{{ route('admission') }}" class="page-link">Academics</a>
                    <!-- <a href="">Login portal</a><br> -->



                    <a class="dropdown-toggle page-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        style="color: white;">
                        Login portal
                    </a>
                    <ul class="dropdown-menu">
                        <a href="{{ route('staff_login') }}" class="dropdown-item"
                            style="color:rgb(59, 15, 129)">
                            Staff
                        </a>
                        <a href="{{ route('student_login') }}" class="dropdown-item"
                            style="color:rgb(59, 15, 129)">
                            Student
                        </a>
                    </ul>

                    <a href="{{ route('contact') }}" class="page-link">Contact Us</a><br>



                </div>
                <div class="col-md-4 mt-3 ">
                    <strong>Emure campus:</strong><br>
                    <!-- <div class="footer-icon"> -->
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i> Obada market, via energy filling station,
                    Emure-ile, Owo. <br>
                    <i class="fa fa-phone-square" aria-hidden="true"></i> 08136089968, 080601805
                    <br>
                    <!-- </div> -->
                    <strong>Uso campus:</strong> <br>
                    <!-- <div class="footer-icon"> -->
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i> Behind water reservoir, oke-uso, uso, Owo.
                    <br>
                    <i class="fa fa-phone-square" aria-hidden="true"></i> 08136089968, 080601805
                    <!-- </div> -->
                </div>
            </div>
            <p class="text-center" style="font-size: 1rem;"> Copyright &copy
                {{ date("Y") }}

            <a href="{{ route('admin_login') }}" class="text-uppercase page-link d-inline-block ">Ogo oluwa group of schools.</a> All Rights Reserved.</p>
            <hr class="mt-2 mb-2" style="height: 2px; color: white;">

            <div class="row text-center">
                <h6 style="font-size: 1rem;"> Powered by: Winatech Solutions. </h6>

            </div>


<script>



    setTimeout(function() {
$(".alert").alert('close');
    }, 3500);

</script>

        </div>

    </div>
    <!-- footer -->
