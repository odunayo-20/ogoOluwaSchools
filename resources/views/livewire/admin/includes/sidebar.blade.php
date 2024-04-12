<div>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('admin') }}">
                <img alt="image" src="{{ asset('assets/frontend/logo/logo.png') }}" class="header-logo" />
                <span
                class="logo-name">OgoOluwa</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown @if(Request::segment(2) == 'dashboard') active @endif">
              <a  href="{{ route('admin_dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'class') active @endif">
              <a href="{{ route('admin_class')}}" class=" nav-link"><i
                  data-feather="briefcase"></i><span>Class</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'subject') active @endif">
              <a href="{{ route('admin_subject')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Subject</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'assignSubject') active @endif">
              <a href="{{ route('admin_assign_subject')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Assign Subject</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'event') active @endif">
              <a href="{{ route('admin_event_list')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Event</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'news') active @endif">
              <a href="{{ route('admin_news')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>News</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'gallery') active @endif">
              <a href="{{ route('admin_gallery')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Gallery</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'contact') active @endif">
              <a href="{{ route('admin_contact')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Contact</span></a>
            </li>

            <li class="dropdown @if(Request::segment(2) == 'staff') active @endif">
              <a href="{{ route('admin_staff_list')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Staff</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'student') active @endif">
              <a href="{{ route('admin_student_list')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Student</span></a>
            </li>
            <li class="dropdown @if(Request::segment(2) == 'admission') active @endif">
              <a href="{{ route('admin_admission')}}" class=" nav-link "><i
                  data-feather="briefcase"></i><span>Admission</span></a>
            </li>

        </aside>
      </div>
</div>
