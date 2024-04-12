<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-6 col-md-8 offset-md-6 col-lg-8  mx-auto">
                    <div class="card card-primary">
                        <div class="card-header" style="text-align: center;">
                            <h4 style="text-align:center;" class="text-uppercase">Student Form</h4>
                        </div>
                        <div class="card-body">

                            <form wire:submit='store'>
                                <h5>Student Biodata</h5>


                                <hr>
                                <section>
                                    <!-- row start -->
                                    <div class="row">


                                        <div class="col-md-12">
                                            <!-- <label>Serial :</label> -->
                                            {{-- <input wire:model='firstname' type="hidden" value=""
                                                class="form-control" name="serial" autofocus /> --}}


                                        </div>

                                        <div class=" col-md-4">
                                            <div class="form-group">
                                                <label>First Name :</label>
                                                <input wire:model='firstname' type="text" class="form-control"
                                                    placeholder="" />
                                                @error('firstname')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Middle Name :</label>
                                                <input wire:model='middlename' type="text" class="form-control"
                                                    placeholder="" />
                                                @error('middlename')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name :</label>
                                                <input wire:model='lastname' type="text" class="form-control"
                                                    placeholder="" />
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
                                                <select wire:model='gender' class="custom-select form-control">
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
                                                <input wire:model='date_of_birth' type="date" class="form-control"
                                                    placeholder="" />
                                                @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State of Origin/Region :</label>
                                                <input wire:model='state' type="text" class="form-control"
                                                    placeholder="" />
                                                @error('state')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>L.G.A Origin/Region :</label>
                                                <input wire:model='lga' type="text" class="form-control"
                                                    placeholder="" />
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
                                                <input wire:model='town' type="text" class="form-control"
                                                    placeholder="" />
                                                @error('town')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address :</label>
                                                <input wire:model='email' type="text" placeholder="@gmail.com"
                                                    class="form-control" />
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
                                                <input wire:model='address' type="text" name="address"
                                                    class="form-control" />
                                                @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- </div> -->

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Class :</label>
                                                <select wire:model='class' id="" class="custom-select form-control">
                                                    <option value="--Select Year--">--Select Class--</option>
                                                    @if($classes->isEmpty())
                                                    <option value="" disabled>No Record</option>
                                                    @endif
                                                    @foreach ($classes as $values)
                                                    <option class="text-capitalize" value="{{ $values->name }}">{{
                                                        $values->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            @error('class')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password :</label>
                                                <input wire:model='password' type="password" class="form-control"
                                                    placeholder="**********">
                                            </div>
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Confirm Password :</label>
                                                <input wire:model='confirm_password' type="password"
                                                    class="form-control" placeholder="**********">
                                            </div>
                                            @error('confirm_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>



                                    <h5>Upload Passport</h5>
                                    <hr>
                                    @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid rounded-circle"
                                        style='width:50px; height:50px'>
                                    @endif
                                    <input wire:model='image' type="file" id="" class="form-control">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <button type="submit" class="btn-primary btn-lg mt-3 form-control"
                                        value="Submit">Submit</button>
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