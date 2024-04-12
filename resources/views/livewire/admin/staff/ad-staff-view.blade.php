<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <div class="row">
                <div class="col-12">


                    <div class="container-fluid ">
                        <!-- <div class="section mx-auto bg-light " style="width: 70%;  margin-top: 80px;"> -->

                        <div class=" container-fluid">
                            <div class="card">
                                <div class="page-header" style="background:77C7F4; color: ;">
                                    <div class="row">

                                        <div class="col-md-12 col-sm-12" style="text-align:center">
                                            <table class="table" border="" style="margin:0px auto">
                                                <tr>
                                                    <td colspan="3" align="center"
                                                        style="background-color: rgb(59, 15, 129);"></td>
                                                </tr>
                                                <tr>
                                                    <td align=center colspan="5"><img
                                                            src="{{ asset('assets/frontend/logo/logo.png') }}"
                                                            width="100px" height="100px" class="img-fluid" /></td>

                                                </tr>
                                                <tr>
                                                    <td align=center colspan="5">STAFF PERSONAL INFORMATION</td>

                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        {{-- <strong><b>Staff Username:</b></strong> <span
                                                            style=""></span><br> --}}
                                                        <strong><b>First Name:</b></strong>
                                                        <span>{{ $staff->firstname }}</span><br>
                                                        <strong><b>Last Name:</b></strong> <span
                                                            style="">{{ $staff->lastname }}</span><br>
                                                        <strong><b>Middle Name:</b></strong> <span
                                                            style="">{{ $staff->middlename }}</span><br>
                                                        <strong><b>Gender:</b></strong> <span
                                                            style="">{{ $staff->gender }}</span><br>
                                                        <!-- </td> -->

                                                        <!-- <td align=left colspan=""> -->

                                                        <strong><b>Date of Birth:</b></strong>
                                                        <span>{{ $staff->dob }}</span><br>
                                                        <strong><b>State:</b></strong> <span
                                                            style="">{{ $staff->state }}</span><br>
                                                        <strong><b>LGA:</b></strong> <span
                                                            style="">{{ $staff->lga }}</span><br>
                                                        <strong><b>Home Town:</b></strong> <span
                                                            style="">{{ $staff->town }}</span><br>
                                                    </td>

                                                    <td align=center colspan="" width="20%">
                                                        <a href="{{ Storage::url($staff->image) }}">
                                                            <img src="{{ Storage::url($staff->image) }}"
                                                                class="img-fluid" width="150px" height="150">

                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr align=center>
                                                    <td colspan="3">
                                                        STAFF CONTACT INFORMATION

                                                    </td>
                                                </tr>
                                                <tr align=left>
                                                    <td colspan="3">
                                                        <strong><b>Phone Number:</b></strong> <span
                                                            style="margin-bottom:10px">{{ $staff->phone }}</span><br>
                                                        <strong><b>Official Email:</b></strong> <span
                                                            style="">{{ $staff->email }}</span><br>
                                                        <strong><b>Address:</b></strong> <span
                                                            style="">{{ $staff->address }}</span><br>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="center">STAF EMPLOYEMENT INFORMATION</td>
                                                </tr>
                                                <tr align=left>
                                                    <td colspan="3">
                                                        <strong><b>Staff:</b></strong> <span style="">
                                                            @switch($staff->status)
                                                                @case($staff->status = 'TS')
                                                                    Teaching staff
                                                                @break

                                                                @case($staff->status = 'NTS')
                                                                    Non-Teaching Staff
                                                                @break

                                                                @default
                                                            @endswitch
                                                        </span><br>
                                                        <strong><b>Year Employed:</b></strong> <span
                                                            style="">{{ $staff->year_employed }}</span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="center"
                                                        style="background-color: rgb(59, 15, 129);"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- add content stop here-->
                        </div>

    </section>
    <!-- section stop -->

</div>
<!-- Main content stop -->
