<nav class="navbar navbar-expand navbar-bg-color static-top">

  <!-- Sidebar Toggle (Positioned On Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class='bx bx-sm bxs-grid'></i>
  </button>
  
  <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Form -->
    <li class="nav-item d-none">
        <form class="d-none d-sm-inline-block form-inline navbar-search mr-lg-5">
            <div class="input-group">
              <input type="text" class="form-control bg-light" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn" type="button">
                  <i class="fa fa-search fa-sm"></i>
                </button>
              </div>
            </div>
        </form>
    </li>
  
      
    <div class="divider nav-item-divider d-sm-block"></div>
  
    <!-- Nav Item - dashboard home -->
    <li class="nav-item">
        <a href="{{ route('delgont.dashboard') }}" class="nav-link"><i class="bx bx-sm bx-home-circle navbar-icon"></i></a>
    </li>
  
  
    <!-- Nav Item - Notifications -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="bx bx-bell  bx-sm navbar-icon"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Notifications -->
      </li>
  
  
       

    <!-- Nav Item - Messages | Notifications -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="bx bx-sm bx-envelope navbar-icon"></i>
          <!-- Counter - Messages -->
          <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Message Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{ asset('stephendevs/lad/images/default.jpg') }}" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
              <div class="small text-gray-500">Emily Fowler · 58m</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{ asset('storage/ldashboard/avators/default.jpg') }}" alt="">
              <div class="status-indicator"></div>
            </div>
            <div>
              <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
              <div class="small text-gray-500">Jae Chun · 1d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{ asset('storage/ldashboard/avators/default.jpg') }}" alt="">
              <div class="status-indicator bg-warning"></div>
            </div>
            <div>
              <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
              <div class="small text-gray-500">Morgan Alvarez · 2d</div>
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
      </li>
  
  
     
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-user bx-sm navbar-icon"></i>
          </a>
          <!-- Dropdown - Admin Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ route('delgont.dashboard') }}">
                <i class="bx bx-cog mr-2 text-gray-400"></i>
                System Settings
              </a>
              <a class="dropdown-item" href="{{ route('delgont.dashboard') }}">
                <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Administrators
              </a>
              <a class="dropdown-item" href="{{ route('delgont.dashboard') }}">
                <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Artisans
              </a>
          </div>
      </li>
  
      <div class="divider d-sm-block"></div>

  
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle p-2" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline  medium username text-primary">{{ auth()->user()->name }}</span>
                  
              <img class="navbar-img rounded-circle" src="{{ asset('img/avator.jpg') }}">
          </a>
          <!-- Dropdown - Admin Information -->
          <div class="dropdown-menu dropdown-menu-right shadow-sm p-2" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ route('delgont.account') }}">
                <i class="bx bx-user text-gray-400"></i>
                Account
              </a>
              <a class="dropdown-item" href="">
                <i class="bx bx-cog fa-sm text-gray-400"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{ route('delgont.account.activitylog') }}">
                <i class="bx bx-menu  text-gray-400"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                  <i class="bx bx-sign-out text-gray-400"></i>
                   Logout
              </a>
              <form id="logoutForm" action="{{ route('delgont.logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  
  </ul>
  
</nav>