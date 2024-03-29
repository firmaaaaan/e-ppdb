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
          <li class="nav-item dropdown active-link">
            <a class="nav-link dropdown-toggle" href="{{ route('index.dashboard') }}" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dashboard
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Master Data
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="open-tickets.html"><span>Periode pendaftaran</span></a>
              </li>
              <li>
                <a class="dropdown-item" href="pending-tickets.html"><span>Siswa baru</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clients.html"> Clients </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
