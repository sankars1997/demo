layoutfile

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename"><h6>{{auth()->user()->username}}</h6></h1>
      </a>

      <nav id="navmenu" class="navmenu">
  <ul>
    <!-- First Dropdown -->
    <li class="dropdown">
      <a href="#hero" class="active">Add</a>
      <ul class="dropdown-menu1">
      <li><a href="adduser">Add User</a></li>
  <li class="divider"></li>
  <li><a href="addlaptop">Add Laptop</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add college</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Partners</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Logistics</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Venue No</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Exam</a></li>
</ul>

    </li>

    <!-- Second Dropdown -->
    <li class="dropdown">
      <a href="#hero" class="active">view</a>
      <ul class="dropdown-menu1">
      <li><a href="adduser">Add User</a></li>
  <li class="divider"></li>
  <li><a href="addlaptop">Add Laptop</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add college</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Partners</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Logistics</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Venue No</a></li>
  <li class="divider"></li>
  <li><a href="addcollege">Add Exam</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

<a class="btn-getstarted" href="{{route('logout')}}">Logout</a>

  </header>

    
