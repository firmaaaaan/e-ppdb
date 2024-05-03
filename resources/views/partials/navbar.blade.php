<nav class="navbar navbar-expand-lg p-0">
    <div class="container">
      <div class="offcanvas offcanvas-end" id="MobileMenu">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title semibold">Navigation</h5>
          <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="offcanvas">
            <i class="icon-clear"></i>
          </button>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if(auth()->user()->role == 'admin')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index.periode') }}"> Periode Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('siswa.show') }}"> Data Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}"> Data User</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
