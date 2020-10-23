<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="https://seeklogo.com/images/U/uin-sunan-gunung-djati-bandung-logo-8FC4246A2C-seeklogo.com.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaaan</span>
    </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Navigation
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ route('admin.author.index') }}" class="nav-link">
                <i class="fa fa-user nav-icon"></i>
                <p>Authors</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.book.index') }}" class="nav-link">
                <i class="fa fa-book nav-icon"></i>
                <p>Book</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.borrow.index') }}" class="nav-link">
                <i class="fa fa-bookmark nav-icon"></i>
                <p>Book Yang Sedang Dipinjam</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.report.top-book') }}" class="nav-link">
                <i class="fa fa-star nav-icon"></i>
                <p>Buku Favorit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.report.top-user') }}" class="nav-link">
                <i class="fa fa-users nav-icon"></i>
                <p>User </p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-users nav-icon"></i>
                <p>Manage User
                <span class="right badge badge-info">{{ auth()->user()->id}} ++</span>
                </p>
              </a>
            </li> --}}
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  
    </div>
    <!-- /.sidebar -->
  </aside>