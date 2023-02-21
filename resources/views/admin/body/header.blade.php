  <header id="page-topbar">
      <div class="navbar-header">
          <div class="d-flex">
              <!-- LOGO -->
              @php
                  $id = Auth::user()->id;
                  $adminData = App\Models\User::find($id);
              @endphp
              <div class="navbar-brand-box">
                  <a class="logo logo-dark" href="{{ route('dashboard') }}">
                      <span class="logo-sm">
                          <img src="{{ asset('logo/shr_creation.png') }}" alt="logo-sm" height="22">
                      </span>
                      <span class="logo-lg">
                          <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" height="20">
                      </span>
                  </a>

                  <a class="logo logo-light" href="{{ route('dashboard') }}">
                      <span class="logo-sm">
                          <img src="{{ asset('logo/shr_creation.png') }}" alt="logo-sm-light" height="22">
                      </span>
                      <span class="logo-lg">
                          {{-- <img src="{{ asset('logo/shr_creation.png') }}" alt="logo-light" height="20"> --}}
                          <h4 class="mt-4 text-center text-white">{{ $adminData->username }}</h4>
                      </span>
                  </a>
              </div>

              <button class="btn btn-sm font-size-24 header-item waves-effect px-3" id="vertical-menu-btn"
                  type="button">
                  <i class="ri-menu-2-line align-middle"></i>
              </button>

              <!-- App Search-->
              <form class="app-search d-none d-lg-block">
                  <div class="position-relative">
                      <input class="form-control" type="text" placeholder="Search...">
                      <span class="ri-search-line"></span>
                  </div>
              </form>
          </div>
          <div class="d-flex">
              <div class="dropdown d-none d-lg-inline-block ms-1">
                  <button class="btn header-item noti-icon waves-effect" data-toggle="fullscreen" type="button">
                      <i class="ri-fullscreen-line"></i>
                  </button>
              </div>

              <div class="dropdown d-inline-block user-dropdown">
                  <button class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                      type="button" aria-haspopup="true" aria-expanded="false">
                      <img class="rounded-circle header-profile-user"
                          src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/no_image.jpg') }}"
                          alt="Header Avatar">
                      <span class="d-none d-xl-inline-block ms-1">{{ $adminData->username }}</span>
                      <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                      <!-- item-->
                      <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                              class="ri-user-line me-1 align-middle"></i> Profile</a>
                      <a class="dropdown-item" href="{{ route('change.password') }}"><i class="ri-wallet-2-line me-1 align-middle"></i> Change
                          Password</a>
                      {{-- <a class="dropdown-item d-block" href="#"><span
                              class="badge bg-success float-end mt-1">11</span><i
                              class="ri-settings-2-line me-1 align-middle"></i> Settings</a>
                      <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line me-1 align-middle"></i> Lock
                          screen</a> --}}
                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                              class="ri-shut-down-line me-1 text-danger align-middle"></i> Logout</a>
                  </div>
              </div>

          </div>
      </div>
  </header>
