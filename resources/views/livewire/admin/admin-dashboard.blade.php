
<!-- Main Content start -->
<div class="main-content">
  <!-- section start -->
  <section class="section">
    <div class="section-body">
      <!-- add content start here -->
      <div class="row">
        <!-- <div class="col-md-12 col-sm-12 col-lg-7"> -->
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-user-tie" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> {{ count($staff) }}
                  </h3>
                  <span class="text-muted"><a href="{{ route('admin_staff_list') }}">Staff Records</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-id-card" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i>  {{ count($admission) }}
                  </h3>
                  <span class="text-muted"><a href="{{ route('admin_admission') }}">Admission Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-envelope" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> {{ count($contact) }}
                  </h3>
                  <span class="text-muted"><a href="{{ route('admin_contact') }}">Contact Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-book" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> {{ count($event) }}
                  </h3>
                  <span class="text-muted"><a href="{{ route('admin_event_list') }}">Event Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-book-open" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i>{{ count($news) }}
                  </h3>
                  <span class="text-muted"><a href="{{ route('admin_news') }}">News Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-images" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> {{ count($gallery) }}
                  </h3>
                  <span class="text-muted"><a href="{{ route('admin_gallery') }}">Gallery Record</a></span>
                </div>
              </div>
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

