
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
              <h4>ADD GALLERY</h4>
            </div>
            <div class="card-body">





              <form wire:submit='store'>


                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    @if($images)
                        @foreach ($images as $image)

                        <img src="{{ $image->temporaryUrl() }}" alt="" srcset="" id="showImage" class="image-preview" style="height: 100px; width:100px">
                        @endforeach
                    @endif
                    <div id="image-preview" class="image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input multiple wire:model='images'  type="file" name="pic" id="image-upload"/>
                    </div>
                  </div>
                </div>


                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" wire:model="category">
                      <option>---Choose category---</option>
                      <option value="classroom">Classroom</option>
                      <option value="hostel">Hostel</option>
                      <option value="library">Library</option>
                      <option value="laboratory">Laboratory</option>

                    </select>
                  </div>
                </div>


                <div class="form-group row mb-4">
                  <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Upload</button>
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

<script>
    document.addEventListener('livewire:initialized', ()=>{
        @this.on('swal',(event)=>{
            const data=event
            swal.fire({
                icon:data[0]['icon'],
                title:data[0]['title'],
                text:data[0]['text'],
            })
        });
    });
</script>
