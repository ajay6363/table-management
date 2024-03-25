<!----log out---->
@if(empty(Session::get('emailid')))
<script>
  window.location = "{{url('/admin')}}";
</script>
@endif

<!DOCTYPE html>

<!---beautify ignore:start---->
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{url('public/assets/admin/assets/')}}" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Phoenix</title>

  <meta name="description" content="" />

  <!-- Logo -->
  <link rel="icon" type="image/x-icon" href="{{url('public/assets/admin/assets/img/logo/logo.png')}}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{url('public/assets/admin/assets/vendor/fonts/boxicons.css')}}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{url('public/assets/admin/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{url('public/assets/admin/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{url('public/assets/admin/assets/css/demo.css')}}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{url('public/assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

  <link rel="stylesheet" href="{{url('public/assets/admin/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

  <!--  Table CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  


  <!-- Helpers -->
  <script src="{{url('public/assets/admin/assets/vendor/js/helpers.js')}}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{url('public/assets/admin/assets/js/config.js')}}"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="{{url('/dashboard')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="{{url('public/assets/admin/assets/img/logo/logo.png')}}" height="50px" width="50px">
            </span>
            <span class="app-brand-text demo text-body fw-bolder">Phoenix</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>
        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <!-- Dashboard -->
          <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{url('/dashboard')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>

          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Admin</span>
          </li>

         

            <li class="menu-item {{ request()->is('index_details') || request()->is('index_add') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-user'></i>
              <div data-i18n="employee">Restaurant</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <!-- <a href="{{url('/index_add')}}" class="menu-link">
                  <div data-i18n="add restaurant index">Add Restaurant Index</div>
                </a> -->
              </li>
              <li class="menu-item">
                <a href="{{url('/index_details')}}" class="menu-link">
                  <div data-i18n="Restaurant Details">Restaurant Details</div>
                </a>
              </li>
            </ul>
</li>


          <li class="menu-item {{ request()->is('employee/add_employee') || request()->is('employee/view_employee') || request()->is('addrole') || request()->is('employee/view__employee_role') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-user'></i>
              <div data-i18n="employee">Employee</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{url('/employee/add_employee')}}" class="menu-link">
                  <div data-i18n="add employee">Add Employee</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="{{url('/employee/view_employee')}}" class="menu-link">
                  <div data-i18n="view employee">Employee Details</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="{{url('/addrole')}}" class="menu-link">
                  <div data-i18n="add role">Add Role</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="{{url('/employee/view__employee_role')}}" class="menu-link">
                  <div data-i18n="view employee">Role Details</div>
                </a>
              </li>

            </ul>
          </li>

         


          <!-- Restaurant -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Restaurant</span></li>
          <!-- order -->
          <li class="menu-item {{ request()->is('table_booking') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class=' menu-icon tf-icons bx bx-shopping-bag'></i>
              <div data-i18n="table booking">Table Booking</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{url('/table_booking')}}" class="menu-link">
                  <div data-i18n="booking list">booking list</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item {{ request()->is('menu/add_menu') || request()->is('menu/view_menu_list') || request()->is('addtype') || request()->is('view__menu_type_list') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-food-menu'></i>
              <div data-i18n="menu">Menu</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{url('/menu/add_menu')}}" class="menu-link">
                  <div data-i18n="Add Menu">Add Menu</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{url('/menu/view_menu_list')}}" class="menu-link">
                  <div data-i18n="menu list">Menu list</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{url('/addtype')}}" class="menu-link">
                  <div data-i18n="Add Menu Type">Add Menu Type </div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{url('/view__menu_type_list')}}" class="menu-link">
                  <div data-i18n="Menu Type list">Menu Type list </div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item {{ request()->is('add_package') || request()->is('package_list') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-package'></i>
              <div data-i18n="package">Package</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{url('/add_package')}}" class="menu-link">
                  <div data-i18n="Add package">Add Package</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{url('/package_list')}}" class="menu-link">
                  <div data-i18n="package list">Package list</div>
                </a>
              </li>
            </ul>
          </li>

<li class="menu-item {{ request()->is('banner_view')  ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-user'></i>
              <div data-i18n="Banner">Banner</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{url('/banner_view')}}" class="menu-link">
                  <div data-i18n="Banner Details">Banner Details</div>
                </a>
              </li>
            </ul>
</li>

          <li class="menu-item {{ request()->is('add_image') || request()->is('image_list') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-images'></i>
              <div data-i18n="image">Image</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{url('/add_image')}}" class="menu-link">
                  <div data-i18n="Add image">Add Image</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{url('/image_list')}}" class="menu-link">
                  <div data-i18n="image list">Image list</div>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="menu-item {{ request()->is('customer_view') || request()->is('view_contact') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-group'></i>
              <div data-i18n="customer">Customer</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{url('/customer_view')}}" class="menu-link">
                  <div data-i18n="login list">Login list</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{url('/view_contact')}}" class="menu-link">
                  <div data-i18n="contact list">contact list</div>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="{{url('public/assets/admin/assets/img/avatars/default_profile.jpg')}}" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">

                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="{{url('public/assets/admin/assets/img/avatars/default_profile.jpg')}}" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">{{ session('emailid') }}</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>

                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{url('/logout_action')}}">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->