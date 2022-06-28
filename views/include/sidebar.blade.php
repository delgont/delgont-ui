<!-- Sidebar -->
<ul class="navbar-nav sidebar accordion sidebar-bg-color sidebar-shadow" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
      <div class="sidebar-brand sidebar-brand-img">
        <img src="{{ asset('img/logo.png') }}" alt="Lad Logo" class="brand-img" />
      </div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item sidebar-nav-item mt-2">
      <a class="nav-link sidebar-nav-link" href="">
        <i class="bx bx-home-circle bx-sm sidebar-icon"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item sidebar-nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pages" aria-expanded="true" aria-controls="pages">
        <i class='bx bxl-html5 bx-sm sidebar-icon'></i>
        <span>Pages</span>
      </a>
      <div id="pages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a href="{{route('delgont.pages')}}" class="collapse-item">{{ __('All Pages') }}</a>
          <a class="collapse-item dev" href="{{ route('delgont.pages.create') }}">{{ __('Create Page') }}</a>
          <a class="collapse-item dev" href="">{{ __('Categories') }}</a>
        </div>
      </div>
    </li>

  
    <!-- Divider -->
    <!--<hr class="sidebar-divider">-->

    <li class="nav-item sidebar-nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#posts" aria-expanded="true" aria-controls="posts">
        <i class='bx bxs-box bx-sm sidebar-icon'></i>
        <span>Posts</span>
      </a>
      <div id="posts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item dev">{{ __('All Posts') }}</a>
          <a class="collapse-item dev" href="">{{ __('Add New') }}</a>
          <a class="collapse-item dev" href="">{{ __('Categories') }}</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Posts -->
    @for ($i = 0; $i < 30; $i++)
    <li class="nav-item sidebar-nav-item">
      <a class="nav-link" href="">
        <i class='bx bx-images sidebar-icon'></i>
        <span>Media</span></a>
    </li>
    @endfor


<li class="nav-item sidebar-nav-item ">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pageManagerMenu" aria-expanded="true" aria-controls="pageManagerMenu">
    <i class='bx bx-globe bx-sm sidebar-icon'></i>
    <span>Web</span>
  </a>
  <div id="pageManagerMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item dev" href="">{{ __('Theme Options | Settings') }}</a>
    </div>
  </div>
</li>
  

  
    <!-- Divider -->

     <!-- Users Nav Item - Pages Collapse Menu -->
     <li class="nav-item sidebar-nav-item">
      <a class="nav-link sidebar-nav-link" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
        <i class='bx bx-user bx-sm sidebar-icon'></i>
        <span>Users</span>
      </a>
      <div id="collapseUsers" class="collapse sidebar-collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <h6 class="collapse-header">Manage Users:</h6>
          <a class="collapse-item" href="{{route('delgont.users')}}"><span>All Users</span></a>
          <a class="collapse-item" href="{{route('delgont.users.create')}}"><i class='bx bxs-user-plus'></i> Create User</a>
        </div>
      </div>
    </li>

    <!-- Settings -->
    <li class="nav-item sidebar-nav-item">
      <a class="nav-link sidebar-nav-link" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseUsers">
        <i class='bx bx-cog sidebar-icon bx-sm'></i>
        <span>Settings</span>
      </a>
      <div id="collapseSettings" class="collapse sidebar-collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item" href="">System Settings <i class="fa fa-mars float-right" style="font-size: 0.89rem;"></i></a>
          <!-- CMS Settings -->
          @if (config('lad.pagman', false))
            <a class="collapse-item" href="">CMS Settings</a>
          @endif
        </div>
      </div>
    </li>
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center mt-5 sidebar-toggle-wrapper">
      <button class="rounded-circle border-0 sidebar-toggle bg-primary text-white" id="sidebarToggle"><i class='bx bx-collapse-horizontal'></i></button>
      
    </div>
  
  </ul>