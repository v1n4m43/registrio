<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">

            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">&nbsp;&nbsp;REGISTRIO</span>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <!-- Label -->
          <li class="menu-header small text"><span class="menu-header-text">Administrator Main Menu</span></li>
          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="{{ asset('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>


            <!-- User -->
            <li class="menu-item">
              <a href="{{ asset('user') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Basic">User</div>
              </a>
            </li>

            <!-- Registers Dropdown -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-copy-alt"></i>
                <div data-i18n="Authentications">Register</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ asset('birth') }}" class="menu-link">
                    <div data-i18n="Basic">Birth Certificate</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ asset('marriage') }}" class="menu-link">
                    <div data-i18n="Basic">Marriage Certificate</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ asset('death') }}" class="menu-link">
                    <div data-i18n="Basic">Death Certificate</div>
                  </a>
                </li>
              </ul>
            </li>


            <!-- Database -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bxs-data"></i>
                  <div data-i18n="Authentications">Database</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{ asset('birthstored') }}" class="menu-link">
                      <div data-i18n="Basic">Birth Storage</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ asset('marriagestored') }}" class="menu-link">
                      <div data-i18n="Basic">Marriage Storage</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ asset('deathstored') }}" class="menu-link">
                      <div data-i18n="Basic">Death Storage</div>
                    </a>
                  </li>
                </ul>
              </li>

            <!-- Queuing -->
            <li class="menu-item">
                <a href="{{ asset('queuing') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-slider-alt"></i>
                  <div data-i18n="Basic">Queuing</div>
                </a>
              </li>

              <!-- Reports -->
            <li class="menu-item">
                <a href="{{ asset('reports') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-report"></i>
                  <div data-i18n="Basic">Reports</div>
                </a>
              </li>

          </ul>
        </aside>
