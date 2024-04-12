
<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <div class="main-container">
                <div class="py-3 card bg-primary">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4 class="fw-bold px-3">STAFF EDIT FORM</h4>
                            </div>

                        </div>
                    </div>
                </div>

                <form wire:submit='store'>
                   

                    <h5>Staff Biodata</h5>
                    <hr>
                    <section>
                        <!-- row start -->
                        <div class="row">
<div class="col-md-4">
    <div class="form-group">
        <input  wire:model='firstname' type="hidden" class="form-control" placeholder="" name="serial"  required=required />
    </div>
    
</div>
<div class="col-md-4">
    <div class="form-group">
        <input  wire:model='firstname' type="hidden" class="form-control" placeholder="" name="username"  required=required />
    </div>

</div>
<div class="col-md-4">
    <div class="form-group">
        <input  wire:model='firstname' type="hidden" class="form-control" placeholder=""  required=required />
    </div>

</div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Name :</label>
                                    <input  wire:model='firstname' type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle Name :</label>
                                    <input  wire:model='middlename' type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name :</label>
                                    <input  wire:model='lastname' type="text" class="form-control" placeholder=""/>
                                </div>
                            </div>
                        </div>
                        <!-- row end -->

                        <!-- row start -->
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender :</label>
                                    <select class="custom-select form-control" wire:model="gender">
                                        <option ></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth :</label>
                                    <input  wire:model='date_of_birth' type="date" class="form-control" placeholder="" required="required" />
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State of Origin/Region :</label>
                                    <input  wire:model='state' name="state" type="text" class="form-control" placeholder="" required="required"/>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>L.G.A Origin/Region :</label>
                                    <input  wire:model='lga' name="lga" type="text" class="form-control" placeholder="" required="required" />
                                </div>
                            </div>

                        </div>
                        <!-- row start -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Home Town :</label>
                                    <input  wire:model='town' name="town" type="text" class="form-control" placeholder="" required="required"  />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address :</label>
                                    <input  wire:model='email' type="email" placeholder="@gmail.com" name="email" class="form-control" />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Phone Number :</label>
                                    <input  wire:model='phone' type="text" name="phone" class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Address :</label>
                                    <input  wire:model='address' type="text" name="address" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Staff :</label>
                                    <select wire:model="status" id="" class="custom-select form-control">
                                        <option value="TS">Teaching Staff</option>
                                        <option value="NTS">Non-Teaching Staff</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Year Employed :</label>
                                    <select wire:model="year_employed" id="" class="custom-select form-control">
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                        </select>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <h5>Update Passport</h5>
                                <hr>
                                @if($old_image)
                                <img src="{{ Storage::url($old_image) }}" alt="" class="img-fluid rounded-circle my-2" style="height:50px; width:50px;" id="showImage">
  
                                @endif
                                @if($new_image)
                                <img src="{{ $new_image->temporaryUrl() }}" alt="" class="img-fluid rounded-circle my-2" style="height:50px; width:50px;" id="showImage">
  
                                @endif
                                <div>
                                    <input wire:model='new_image' type="file" class="form-control">
                                </div>
        
                                <br>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary btn-lg mt-3 mb-3" value="Update">Update</button>
                </form>



                <!-- </div> -->
                <!-- add content stop here-->
            </div>

    </section>
    <!-- section stop -->

</div>
<!-- Main content stop -->

