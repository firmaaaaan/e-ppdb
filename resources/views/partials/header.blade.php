<div class="header-actions d-flex align-items-center justify-content-end">
    <div class="dropdown ms-2">
      <a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <span class="d-none d-md-block">{{ auth()->user()->name }}</span>
        <img src="{{ asset('assets') }}/images/user3.png" class="img-3x m-2 me-0 rounded-5" alt="{{ auth()->user()->name }}" />
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3" style="">
        <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('logout') }}"><i
            class="icon-log-out fs-4 me-3"></i>Keluar</a>
      </div>
    </div>

    <!-- Toggle Menu starts -->
    <button class="btn btn-success btn-sm ms-3 d-lg-none d-md-block" type="button"
      data-bs-toggle="offcanvas" data-bs-target="#MobileMenu">
      <i class="icon-menu"></i>
    </button>
    <!-- Toggle Menu ends -->

  </div>
