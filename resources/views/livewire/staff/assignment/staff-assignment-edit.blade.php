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
                            <h4>Assignment Post</h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='store'>

                                <div class="form-group row mb-4">
                                    <input type="hidden" value="" wire:model.live="staff_name">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Class</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" wire:model.live='selectedClass'>
                                            <option>--SELECT CLASS--</option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('selectedClass')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select wire:model.live='selectedSubject' class="form-control selectric">
                                            <option>--SELECT SUBJECT--</option>
                                            @foreach ($AssignSubject as $subject)
                                            <option value="{{ $subject->subject->id }}">{{ $subject->subject->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('selectedSubject')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
  
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Submit</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date" class="form-control" wire:model.live="date">
                                        @error('date')
                                        <span class="text-danger text-center">{{ $message }}</span>
                                      @enderror
                                    </div>

                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="time" class="form-control" wire:model.live="time">
                                        @error('time')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" wire:model.live="status">
                                            <option>--SELECT STATUS--</option>
                                            <option value="published">Publish</option>
                                            <option value="drafted">Draft</option>
                                            <!-- <option value="pending">Pending</option> -->
                                        </select>
                                        @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>

                                </div>

                                <div class="form-group row mb-4">
                                    {{-- @if($old_document)
                                        <img src="{{ Storage::url($old_document) }}" alt="">      
                                    @endif
                                    @if($new_document)
                                        <img src="{{ $new_document->temporaryUrl() }}" alt="">      
                                    @endif --}}
                                    <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Document</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input class="form-control" type="file" wire:model.live="new_document"  id="">

                                        @error('new_document')
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
