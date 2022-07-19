<!-- Sidebar -->
<ul class="navbar-nav sidebar accordion sidebar-bg-color sidebar-shadow" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
      <div class="sidebar-brand sidebar-brand-img">
        <img src="" alt="Lad Logo" class="brand-img" /> Delgont
      </div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item sidebar-nav-item">
      <a class="nav-link sidebar-nav-link" href="">
        <i class="bx bx-home-circle bx-sm sidebar-icon"></i>
        <span>Dashboard</span>
      </a>
    </li>

  
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item sidebar-nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pages" aria-expanded="true" aria-controls="pages">
        <i class='bx bxl-html5 bx-sm sidebar-icon'></i>
        <span>Pages</span>
      </a>
      <div id="pages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a href="{{route('delgont.pages')}}" class="collapse-item">{{ __('All Pages') }}</a>
          <a class="collapse-item dev" href="{{ route('delgont.pages.create') }}">{{ __('Create Page') }}</a>
        </div>
      </div>
    </li>

    <li class="nav-item sidebar-nav-item ">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#posts" aria-expanded="true" aria-controls="posts">
        <i class='bx bxs-box bx-sm sidebar-icon'></i>
        <span>Posts</span>
      </a>
      <div id="posts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('delgont.posts')}}" >{{ __('All Posts') }}</a>
          <a class="collapse-item" href="{{route('delgont.posts.create')}}">{{ __('Add New') }}</a>
        </div>
      </div>
    </li>

     <!-- Categories -->
     <li class="nav-item sidebar-nav-item">
      <a class="nav-link" href="{{route('delgont.categories')}}">
        <i class='bx bx-tag sidebar-icon'></i>
        <span>Categories</span></a>
    </li>

    <!-- Nav Item - Posts -->
    <li class="nav-item sidebar-nav-item">
      <a class="nav-link" href="">
        <i class='bx bx-images sidebar-icon'></i>
        <span>Media</span></a>
    </li>

    <hr class="sidebar-divider">

<li class="nav-item sidebar-nav-item ">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pageManagerMenu" aria-expanded="true" aria-controls="pageManagerMenu">
    <i class='bx bx-globe bx-sm sidebar-icon'></i>
    <span>Web</span>
  </a>
  <div id="pageManagerMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      @includeIf('dashboard.sidebar.collapseitems')
    </div>
  </div>
</li>
@includeIf('dashboard.sidebar.navitems')

<hr class="sidebar-divider">

  

  
    <!-- Divider -->

     <!-- Users Nav Item - Pages Collapse Menu -->
     <li class="nav-item sidebar-nav-item">
      <a class="nav-link sidebar-nav-link" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
        <i class='bx bx-group sidebar-icon bx-sm'></i>
        <span>Users</span>
      </a>
      <div id="collapseUsers" class="collapse sidebar-collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('delgont.users')}}"><span>All Users</span></a>
          <a class="collapse-item" href="{{route('delgont.users.create')}}"><i class='bx bxs-user-plus'></i> Create User</a>
        </div>
      </div>
    </li>

        <!-- Nav Item - Posts -->
        <li class="nav-item sidebar-nav-item">
          <a class="nav-link" href="{{ route('delgont.account') }}">
            <i class='bx bx-user sidebar-icon'></i>
            <span>Acount</span></a>
        </li>

    <!-- Settings -->
    <li class="nav-item sidebar-nav-item">
      <a class="nav-link sidebar-nav-link" href="{{ route('delgont.settings.general') }}" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseUsers">
        <i class='bx bx-cog sidebar-icon bx-sm'></i>
        <span>Settings</span>
      </a>
      <div id="collapseSettings" class="collapse sidebar-collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('delgont.settings.general') }}">System Settings <i class="fa fa-mars float-right" style="font-size: 0.89rem;"></i></a>
          <a class="collapse-item" href="">CMS Settings</a>
        </div>
      </div>
    </li>
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center mt-5 sidebar-toggle-wrapper">
      <button class="rounded-circle border-0 sidebar-toggle bg-primary text-white" id="sidebarToggle"><i class='bx bx-collapse-horizontal'></i></button>
      
    </div>
  
  </ul>