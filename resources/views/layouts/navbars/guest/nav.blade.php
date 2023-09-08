<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none  navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
  <div class="container-fluid {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ (Request::is('static-sign-up') ? 'text-white' : '') }}" href="{{ url('dashboard') }}">
      Legislative MS
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
    
          <a class="nav-link me-2" href="{{ auth()->user() ? url('static-sign-in') : url('login') }}">
            <i class="fas fa-key opacity-6 me-1 {{ (Request::is('static-sign-up') ? '' : 'text-dark') }}"></i>
            Sign In
          </a>
          <a class="nav-link me-2" href="{{ auth()->user() ? url('/') : url('/') }}">
            <i class="fas fa-globe-asia opacity-6 me-1 {{ (Request::is('/') ? '' : 'text-dark') }}"></i>
            Guest
          </a>

          <li class="nav-item px-3 d-flex align-items-center">
              <a href="#" class="nav-link text-body p-0 fixed-plugin-button-nav">
              <i class="fas fa-user-friends fixed-plugin-button-nav cursor-pointer opacity-6 me-1"></i>
                SB Members
              </a>
          </li>
        
    </div>
  </div>
</nav>
<!-- End Navbar -->
