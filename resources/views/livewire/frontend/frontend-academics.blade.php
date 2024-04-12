

    <!-- body -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-3 left-cards">

                    <!-- admission info -->

                    <div class="card bg-warning mx-auto mb-3 mt-3 text-center " style="height: auto;">
                        <div class="card-header">
                            <div class="card-title ">ADMISSION INFO</div>
                        </div>
                        <div class="card-body mb-3">
                            <div class="card-text">
                                <a href="{{ route('guideline') }}" class="btn btn-light"> Admission Guildlines </a>
                                <a href="{{ route('admission') }}" class="btn btn-light"> Fill Admission Form </a>
                                {{-- <button wire:click='downloadAdmission' class="btn btn-light text-capitalise"> Download Admission Form </button> --}}
                                <a href="{{asset('assets/frontend/admission form/ogo oluwa Admission Form.pdf')}}"
                                class="btn btn-light btn-default text-capitalise mb-2" style="font-size: 12px"> <span
                                    class="glyphicon glyphicon-download-alt"></span> Download Admission Form </a>
                            </div>
                        </div>


                    </div>

                    <!-- admission info -->

                    <!-- school anthem -->

                    <div class="card bg-warning mx-auto mb-3 mt-3 text-center " style="height: auto;">
                        <div class="card-header">
                            <div class="card-title ">SCHOOL ANTHEM</div>
                            @if(session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                            @if(session('error'))
                                <span class="text-error">{{ session('error') }}</span>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="card-text text-start mb-3">
                                Great Ogo Oluwa, My alma mater
                                We hail thee, the hope of all
                                Where discipline and hard work rule
                                Ogo Oluwa we are proud of you
                                We are the future leader
                                We shall not forget thee
                                We hail the light of life
                                Education for better future.
                            </div>
                        </div>
                        <div class="card-header ">
                            <div class="card-title ">SCHOOL PLEDGE</div>
                        </div>
                        <div class="card-body">
                            <div class="card-text text-start">
                                I pledge to Ogo Oluwa, my school,
                                To lift her up to the mountain top
                                To be truthful and faithful
                                To become responsible
                                leaders of tomorrow
                                So help me God.
                            </div>
                        </div>


                    </div>

                    <!-- school anthem -->

                </div>
                <div class="col-md-9 right-cards ">
                    <div class="mt-3">
                        <div class="card mb-2" id="pre-school">
                            <div class="card-body">
                                <div class="card-header mb-2"><strong>
                                        <h5>PRE-SCHOOL</h5>
                                    </strong></div>
                                <!-- <div class="pic"> -->
                                    <div class="row">

                                        <img src="{{ asset('assets/frontend/academics/22.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">
                                        <img src="{{ asset('assets/frontend/academics/23.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">
                                        <img src="{{ asset('assets/frontend/academics/24.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">
                                        <img src="{{ asset('assets/frontend/academics/25.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">

                                    </div>
                                <!-- </div> -->
                                The education journey begins in the homely and friendly surroundings of our early years
                                department “Kinderfun”. its comprises of <strong>CRECHE,</strong>
                                <strong>KINDERGARTEN,</strong> and <strong>PRE-NURSERY.</strong>
                            </div>
                        </div>
                        <div class="card mb-2" id="primary">
                            <div class="card-body">
                                <div class="card-header mb-2">
                                    <div class="card-title"><strong>
                                            <h5>NURSERY AND PRIMARY SCHOOL</h5>
                                        </strong></div>
                                </div>
                                <div class="row py-2">
                                    <img src="{{ asset('assets/frontend/academics/22.jpg') }}" style="object-fit:cover; object-position:50% 0%;" alt="img" class="img-fluid d-block col-md-3 py-1">
                                    <img src="{{ asset('assets/frontend/academics/23.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">
                                    <img src="{{ asset('assets/frontend/academics/24.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">
                                    <img src="{{ asset('assets/frontend/academics/25.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">

                                </div>
                                Our Nursery and Primary school accepts children in the age group of 2 to 10 years.
                                Children can then progress to Nursery department. The
                                academic thrust of the Nursery and Primary school is central to our purpose. Major
                                emphasis is placed on providing individual attention to enable every child perform to
                                the best of their ability. The school is well resourced for teaching all subjects. Our
                                academic programme allows pupils to discover talents in everything from the classroom,
                                assembly presentations, games, sporting activities, art exhibitions and musical shows.
                                We encourage and reward learning and achievements. The balance of individuals and
                                communal commitment fostered at Ogooluwa School will enrich and guide a life of personal
                                fulfillment as well as service to others. The library is well stocked with reference
                                books, reading trees and fictions. Pupils are encouraged from an early age to make use
                                of the library. A book review is held annually to encourage reading. Ogooluwa teachers
                                are dedicated to helping each child develop their unique talents. We realize that
                                learning must take place in a fun and nurturing environment. We also recognize that
                                parents’ involvement is important to children's success in school. Parents are
                                encouraged to communicate frequently and openly with teachers and the school leadership.
                            </div>
                        </div>
                        <div class="card mb-2" id="secondary">
                            <div class="card-body">
                                <div class="card-header mb-2">
                                    <div class="card-title"><strong>
                                            <h5>SECONDARY SCHOOL</h5>
                                        </strong></div>
                                </div>
                                <div class="row py-2">
                                    <img src="{{ asset('assets/frontend/academics/22.jpg') }}" style="object-fit:cover; object-position:50% 0%;" alt="img" class="img-fluid d-block col-md-3 py-1">
                                    <img src="{{ asset('assets/frontend/academics/23.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">
                                    <img src="{{ asset('assets/frontend/academics/24.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">
                                    <img src="{{ asset('assets/frontend/academics/25.jpg') }}" style="object-fit:cover; object-position:50% 0%;"  alt="img" class="img-fluid d-block col-md-3 py-1">


                                </div>
                                This is a six-year programme which is divided into two:The Junior Secondary School and
                                Senior Secondary School. <br>
                                <span><strong>The Junior Secondary School</strong></span> is a three-year programme. The
                                qualification for entrance is
                                common Entrance Examination. Any child who passed his/her Common Entrance is eligible
                                for the Junior Secondary School. Also the second qualification which must go together
                                with the Common Entrance Examination is First School Leaving Certificate. <br>
                                <span><strong>The Senior Secondary School</strong></span> is also a three-year
                                programme. The qualification for
                                admission here is Junior Secondary School Certificate Examination. After SS1, the
                                student is allowed to specialize either in Science or Arts or Commercial where he/she is
                                prepared fully for Senior Secondary Certificate Examination.
                            </div>
                        </div>
                        <div class="card mb-2" id="vocational">
                            <div class="card-body ">
                                <div class="card-header mb-2">
                                    <div class="card-title"><strong>
                                            <h5>VOCATIONAL STUDIES</h5>
                                        </strong></div>
                                </div>

                                Our vocational workshops makes us stand out in the crowd. In Ogo Oluwa Group of Schools,
                                we have chosen the right way to technological greatness. Our students are exposed to
                                appropriate technological concepts right from the Junior classes. <br>
                                <strong>Some of our vocation workshops include but are not limited to:</strong><br>
                                Home Economics,
                                Auto-Mechanic Work,
                                Air-Conditioning/Refrigeration Welding & Fabrication,
                                Engineering/Craft Practice, Block Laying, Brick Laying & Concrete Work,
                                Plumbing & Pipe Fitting,
                                Auto Electrical Work,
                                Radio, Tv, Electrical Work, Electrical Installation & Maintenance Work,
                                Animal Husbandry,
                                Fisheries,
                                Catering Craft Practice, and
                                Enterpreneurship Skills.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- body -->



