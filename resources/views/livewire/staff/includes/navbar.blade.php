<div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          <div class="navbar-bg"></div>
    
    <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline mr-auto">
              <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                        collapse-btn"> <i data-feather="align-justify"></i></a></li>
                <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                  </a></li>
                <li>
                  <form class="form-inline mr-auto">
                    <div class="search-element">
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                      <button class="btn" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                </li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-right">
              
                
              <li class="dropdown"><a href="#" data-toggle="dropdown"
                  class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                  @auth('staff')
                    
                  <img alt="image" src="{{ Storage::url(Auth::guard('staff')->user()->image ) }}" class="user-img-radious-style"> 
                  @endauth
                    <span class="d-sm-none d-lg-inline-block"></span></a>
                <div class="dropdown-menu dropdown-menu-right pullDown">
                  <div class="dropdown-title">
                    @auth('staff')
                    @if(Auth::guard('staff'))
                    {{ Auth::guard('staff')->user()->firstname }}
                    {{ Auth::guard('staff')->user()->lastname }}
                  @endif

                    @endauth
                </div>
                  <a href="{{ route('staff_profile') }}" class="dropdown-item has-icon"> <i class="far
                                            fa-user"></i> Profile
                  </a> 
                  <div class="dropdown-divider"></div>
                  @livewire('staff.auth.StaffLogout')
                </div>
              </li>
            </ul>
          </nav>
    </div>
