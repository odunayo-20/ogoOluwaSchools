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
                                                    <td colspan="3" align="center" style="background-color: rgb(59, 15, 129);"></td>
                                                </tr>
                                                <tr>
                                                    <td align=center colspan="5"><img src="{{ asset('assets/frontend/logo/logo.png') }}" width="100px" height="100px" class="img-fluid" /></td>

                                                </tr>
                                                <tr>
                                                    <td align=center colspan="5">ADMISSION PERSONAL INFORMATION</td>

                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        {{-- <strong><b>student Username:</b></strong> <span style=""></span><br> --}}
                                                        <strong><b>Surname:</b></strong> <span>{{ $admission->surname }}</span><br>
                                                        
                                                        <strong><b>Othersname:</b></strong> <span style="">{{ $admission->othername  }}</span><br>
                                                        <strong><b>Gender:</b></strong> <span style="">{{ $admission->gender }}</span><br>
                                                        <!-- </td> -->

                                                        <!-- <td align=left colspan=""> -->

                                                        <strong><b>Date of Birth:</b></strong> <span>{{ $admission->dob  }}</span><br>
                                                        <strong><b>Nationality:</b></strong> <span style="">{{ $admission->nation }}</span><br>
                                                        <strong><b>State:</b></strong> <span style="">{{ $admission->state }}</span><br>
                                                        <strong><b>Home Town:</b></strong> <span style="">{{ $admission->town }}</span><br>
                                                       
                                                    </td>

                                                    <td align=center colspan="" width="20%">
<a href="{{ Storage::url($admission->image) }}">
    <img src="{{ Storage::url($admission->image) }}" class="img-fluid" width="150px" height="150">

</a>
                                                    </td>
                                                </tr>
                                                <tr align=center>
                                                    <td colspan="3">
                                                        ADMISSION CONTACT INFORMATION

                                                    </td>
                                                </tr>
                                                <tr align=left>
                                                    <td colspan="3">
                                                        <strong><b>Phone Number:</b></strong> <span style="margin-bottom:10px">{{ $admission->phone }}</span><br>
                                                        <strong><b>Official Email:</b></strong> <span style="">{{ $admission->email }}</span><br>
                                                        <strong><b>Branch:</b></strong> <span style="">{{ $admission->branch }}</span><br>
                                                        <strong><b>Class:</b></strong> <span style="">{{ $admission->class }}</span><br>

                                                    </td>
                                                </tr>
                                                <tr align=center>
                                                    <td colspan="3">
                                                        ADMISSION GUARDIANS INFORMATION

                                                    </td>
                                                </tr>
                                                <tr align=left>
                                                    <td colspan="3">
                                                        <strong><b>Guardians Name::</b></strong> <span style="margin-bottom:10px">{{ strtoupper($admission->guardians_name) }}</span><br>
                                                        <strong><b>Guardians Relationship:</b></strong> <span style="margin-bottom:10px">{{ strtoupper($admission->relationship) }}</span><br>
                                                        <strong><b>Guardians Address:</b></strong> <span style="">{{ $admission->guardians_address }}</span><br>
                                                        <strong><b>Guardians Email:</b></strong> <span style="">{{ $admission->guardians_email }}</span><br>
                                                       

                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="3" align="center" style="background-color: rgb(59, 15, 129);"></td>
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
