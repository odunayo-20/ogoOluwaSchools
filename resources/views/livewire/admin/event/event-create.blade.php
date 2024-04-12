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
                            <h4>Write Your Event Post</h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='store'>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input wire:model='title' type="text" class="form-control">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input wire:model='image' type="file" class="form-control">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if ($image)
                                            <img class="img-fluid rounded " style="height: 100px; width:100px"
                                                src="{{ $image->temporaryUrl() }}" alt="">
                                        @endif
                                    </div>
                                    <div wire:loading wire:target='image'>
                                        <span class="text-success">Uploading...</span>
                                    </div>
                                </div>

                                <div wire:ignore class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Message</label>
                                    <div  class="col-sm-12 col-md-7">

                                        <textarea id="message" wire:model='message' class="form-control" name="message"></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input wire:model='date' type="date" class="form-control">
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input wire:model='time' type="time" class="form-control">
                                        @error('time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">location</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input wire:model='location' type="text" class="form-control">
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group row mb-4">

                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Create Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <!-- add content stop here-->
</div>

</section>
<!-- section stop -->

<!-- Main content stop -->
</div>
@push('script')
    <script>
$(function (){

    $('#message').summernote({
        placeholder: 'Enter Message'
        , tabsize: 2
        , height: 300
        , toolbar: [
            ['style', ['style']]
            , ['font', ['bold', 'underline', 'clear']]
            , ['color', ['color']]
            , ['para', ['ul', 'ol', 'paragraph']]
            , ['table', ['table']]
            , ['view', ['fullscreen', 'codeview', 'help']],
            ['insert', ['picture', 'link']],
           
        ]
        , callbacks: {
            onChange: function(contents, $editable) {
                @this.set('message', contents);
            }
        }
    });
});


        </script>
    @endpush

