<!-- body -->


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-3 left-cards">


                <!-- admission info -->

                <div class="card bg-warning mx-auto mb-3 mt-3 text-center " style="height: auto;">
                    <div class="card-header" style=" background-color:  rgb(59, 15, 129);
    color: white; height: 50px ;">
                        <div class="card-title ">ADMISSION INFO</div>
                    </div>
                    <div class="card-body mb-3">
                        <div class="card-text ">
                            <a href="{{ route('guideline') }}" class="btn btn-light mb-2"> Admission Guildlines </a>
                            <a href="#" class="btn btn-light mb-2 disabled">Fill Admission Form </a>

                            <a href="{{asset('assets/frontend/admission form/ogo oluwa Admission Form.pdf')}}"
                                class="btn btn-light btn-default text-capitalise mb-2" style="font-size: 12px"> <span
                                    class="glyphicon glyphicon-download-alt"></span> Download Admission Form </a>
                        </div>
                    </div>


                </div>

                <!-- admission info -->

                <!-- school anthem -->

                <div class="card bg-warning mx-auto mb-3 mt-3 text-center " style="height: auto;">
                    <div class="card-header" style=" background-color:  rgb(59, 15, 129);
    color: white; height: 50px ;">
                        <div class="card-title ">SCHOOL ANTHEM</div>
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
                    <div class="card-header " style=" background-color:  rgb(59, 15, 129);
    color: white; height: 50px ;">
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
                <div class="card mt-3 mb-3">

                    <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                      color: white; height: 50px ;">
                        <h3>STUDENT'S INFORMATION</h3>
                    </div>

                    <!-- <div class="container-fluid"> -->

                    <div class="container">

                        <!--student form -->

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form wire:submit.prevent='store'>


                            <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">Surname : </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Surname" wire:model="surname">
                                    @error('surname')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                                <label class="form-label col-md-2">Othernames : </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Othername"
                                        wire:model="othername">
                                    @error('othername')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">Email : </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Email address"
                                        wire:model="email">
                                    @error('email')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                                <label class="form-label col-md-2">Gender : </label>
                                <div class="col-md-4">
                                    <select wire:model="gender" class="form-control" id="gender">
                                        <option>--Select gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">Nationality : </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="" wire:model="nation">
                                    @error('nation')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                                <label class="form-label col-md-2">State Of Origin : </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="" wire:model="state">
                                    @error('state')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">Home town : </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Town / City" wire:model="town">
                                    @error('town')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                                <label class="form-label col-md-2">D . O . B : </label>
                                <div class="col-md-4 ">
                                    <input type="date" class="form-control" wire:model="dob" placeholder="">
                                    @error('dob')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">School branch : </label>
                                <div class="col-md-4">
                                    <select wire:model="branch" class="form-control" id="branch">
                                        <option>--Select Location--</option>
                                        <option value="emure">Emure Campus</option>
                                        <option value="uso">Uso Campus</option>
                                    </select>
                                    @error('branch')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                                <label class="form-label col-md-2">School section : </label>
                                <div class="col-md-4">
                                    <select wire:model="section" class="form-control" id="section">
                                        <option>--Select Section--</option>
                                        <option value="nursery">Nursery</option>
                                        <option value="primary">Primary</option>
                                        <option value="secondary">Secondary</option>
                                    </select>
                                    @error('section')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">Phone number : </label>
                                <div class="col-md-4">
                                    <input type="phone" class="form-control" placeholder="" wire:model="phone">
                                    @error('phone')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                                <label class="form-label col-md-2">Class : </label>
                                <div class="col-md-4">

                                    <select wire:model='class' class='form-control' id="">
                                        <option>--Select Class--</option>
                                        @if($classes->isEmpty())
                                        <option value="" disabled>No Class</option>
                                        @endif
                                        @foreach ($classes as $value)
                                            <option class='text-capitalize' value="{{ $value->name }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('class')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>


                            </div>

                            <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">Upload Image : </label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" wire:model="image">
                                    @error('image')
                                    <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                    @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" class="img-fluid mt-2"
                                        style="width: 100px; height: 100px; object-fit:cover;" alt="Image Preview"
                                        srcset="">
                                    @endif
                                </div>
                            </div>





                            <!-- </div> -->
                    </div>

                </div>

                <!-- guardian form -->
                <div class="card mb-3">
                    <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                            color: white; height: 50px ;">
                        <h3>GUARDIAN'S
                            INFORMATION</h3>
                    </div>

                    <div class="container mt-3 mb-2 py-2">
                        <!-- <form class="mt-3 mb-2"> -->
                        Relationship with Guardian
                        <select wire:model="relationship" class="form-control" id="type_of_guardian">
                            <option>--Select Type--</option>
                            <option value="parent">Parent</option>
                            <option value="uncle">Uncle</option>
                            <option value="aunty">Aunty</option>
                            <option value="others">Others</option>
                        </select>
                        @error('relationship')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <br>
                        Guardians Fullname: <input wire:model="guardians_name" type="text" class="form-control"
                            id="guardians_name" />
                        @error('guardians_name')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <br>
                        Guardians_Phone:
                        <input wire:model="guardians_phone" type="text" class="form-control" id="guardians_phone" />
                        @error('guardians_phone')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <br>
                        Guardians E-mail: <input wire:model="guardians_email" type="text" class="form-control"
                            id="guardians_email" />
                        @error('guardians_email')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <br>
                        Guardians Address:<br> <textarea wire:model="guardians_address" class="form-control"></textarea>
                        @error('guardians_address')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <br>
                        <button class="btn btn-md btn-primary mb-3" type='submit'>Apply For Admission</button>
                    </div>


                    </form>
                    <!-- guardian form -->
                </div>
            </div>
        </div>
    </div>
</div>





<!-- body -->
