<div>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('staff') }}">
                <img alt="image" src="{{ asset('assets/frontend/logo/logo.png') }}" class="header-logo" /> 
                <span
                class="logo-name">OgoOluwa</span>
            
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown  @if(Request::segment(2) == 'dashboard') active @endif">
              <a   href="{{ route('staff_dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
           
            <li class="dropdown  @if(Request::segment(2) == 'assignment') active @endif">
              <a href="{{ route('staff_assignment') }}" class=" nav-link"><i
                  data-feather="briefcase"></i><span>Assignment</span></a>
            </li>
            <li class="dropdown  @if(Request::segment(2) == 'event') active @endif">
              <a  href="{{ route('staff_event')}}" class=" nav-link"><i
                  data-feather="briefcase"></i><span>Event</span></a>
            </li>
            <li class="dropdown  @if(Request::segment(2) == 'news') active @endif">
              <a  href="{{ route('staff_news')}}" class=" nav-link"><i
                  data-feather="briefcase"></i><span>News</span></a>
            </li>

        </aside>
      </div>
</div>
