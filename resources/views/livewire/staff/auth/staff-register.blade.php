<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-6 col-md-8 offset-md-6 col-lg-8  mx-auto">
                    <div class="card card-primary">
                        <div class="card-header" style="text-align: center;">
                            <h4 style="text-align:center;" class="text-uppercase">Staff Form</h4>
                        </div>
                        <div class="card-body">

                            <form wire:submit='store'>
                                <h5>Staff Biodata</h5>


                                <hr>
                                <section>
                                    <!-- row start -->
                                    <div class="row">


                                        <div class="col-md-12">
                                            <!-- <label>Serial :</label> -->
                                            {{-- <input wire:model='firstname' type="hidden" value="" class="form-control" name="serial" autofocus /> --}}
                                           

                                        </div>

                                        <div class=" col-md-4">
                                            <div class="form-group">
                                                <label>First Name :</label>
                                                <input wire:model='firstname' type="text" class="form-control" placeholder="" />
                                                @error('firstname')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle Name :</label>
                                                <input wire:model='middlename' type="text" class="form-control" placeholder="" />
                                                @error('middlename')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name :</label>
                                                <input wire:model='lastname' type="text" class="form-control" placeholder="" />
                                                @error('lastname')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row end -->

                                    <!-- row start -->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender :</label>
                                                <select wire:model='gender' class="custom-select form-control" >
                                                    <option value="--Select Gender--">--Select Gender--</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>

                                                </select>
                                            </div>
                                            @error('gender')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth :</label>
                                                <input wire:model='date_of_birth' type="date" class="form-control" placeholder="" />
                                                @error('date_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State of Origin/Region :</label>
                                                <input wire:model='state' type="text" class="form-control" placeholder="" />
                                                @error('state')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>L.G.A Origin/Region :</label>
                                                <input wire:model='lga' type="text" class="form-control" placeholder="" />
                                                @error('lga')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <!-- row start -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Home Town :</label>
                                                <input wire:model='town' type="text" class="form-control" placeholder="" />
                                                @error('town')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address :</label>
                                                <input wire:model='email' type="email" placeholder="@gmail.com" class="form-control" />
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Phone Number :</label>
                                                <input wire:model='phone' type="text" class="form-control" />
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Address :</label>
                                                <input wire:model='address' type="text" name="address" class="form-control" />
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- </div> -->

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Staff :</label>
                                                <select wire:model='status' id="" class="custom-select form-control">
                                                    <option value="--Select Category--">--Select Category--</option>
                                                    <option value="TS">Teaching Staff</option>
                                                    <option value="NTS">Non-Teaching Staff</option>
                                                </select>
                                            </div>

                                            @error('status')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Year Employed :</label>
                                                <select wire:model="year_employed" id="" class="custom-select form-control">
                                                    <option value="--Select Year--">--Select Year--</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                </select>
                                            </div>
                                            @error('year_employed')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password :</label>
                                                <input wire:model='password' type="password" class="form-control"  placeholder="**********">
                                            </div>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Confirm Password :</label>
                                                <input wire:model='confirm_password' type="password" class="form-control" placeholder="**********">
                                            </div>
                                            @error('confirm_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        </div>
                                    </div>



                                    <h5>Upload Passport</h5>
                                    <hr>

                                    <input wire:model='image' type="file" id="" class="form-control">
                                    @if($image)
                                        <img class="img-fluid" style="width: 100px; height:100px; object-fit:cover;" src="{{ $image->temporaryUrl() }}" alt="">
                                    @else
                                        
                                    @endif
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <button type="submit" class="btn-primary btn-lg mt-3 form-control" value="Submit">Submit</button>
                            </form>

                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Return to the? <a href="{{ url('/') }}">Main Website</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
