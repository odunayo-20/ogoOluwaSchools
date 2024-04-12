<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Assignment Submission</h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='store'>

                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" class="form-control"value="" wire:model.live="class">

                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" class="form-control"value="" wire:model.live="subject">
  
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" class="form-control"value="" wire:model.live="staff">
  
                                    </div>
                                </div>




                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Document</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input class="form-control" type="file" wire:model="document" id="">

                                        @error('document')
                                          <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
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
