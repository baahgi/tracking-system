 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Diretez App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Diretez</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
            <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
            </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-gear"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/station" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/group" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Groups</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statuses</p>
                </a>
              </li> --}}
            </ul>
          </li>

          <li class="nav-item">
            <a href="/customer" class="nav-link">
                <i class="nav-icon fas "></i>
                <p>
                Customers
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/shipment/create" class="nav-link">
                <i class="nav-icon fas "></i>
                <p>
                Book Shipments
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/shipment" class="nav-link">
                <i class="nav-icon fas "></i>
                <p>
                Shipments
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas "></i>
              <p>
                Shipment update
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/shipmentupdate/dispatch" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dispatch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/shipmentupdate/arrived" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arrived</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/shipmentupdate/outfordelivery" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>out for delivery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/shipmentupdate/delivered" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivered</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/shipmentupdate/hold" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hold/Lost</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/shipmentupdate/return" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Return</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas "></i>
              <p>
                Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/report/datewise" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datewise</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/report/finance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Finance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Others</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
