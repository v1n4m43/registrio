<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">

            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">&nbsp;&nbsp;REGISTRIO</span>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <!-- Label -->
          <li class="menu-header small text"><span class="menu-header-text">Employee Main Menu</span></li>
          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="{{ asset('emdashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>


            <!-- Marriage Certificate -->
            <li class="menu-item">
              <a href="{{ asset('emmarriage') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Basic">Marriage Registration</div>
              </a>
            </li>


            <!-- Marriage Storage -->
            <li class="menu-item">
              <a href="{{ asset('emmarriagestorage') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-data"></i>
                <div data-i18n="Basic">Marriage Storage</div>
              </a>
            </li>


            <!-- Queuing -->
            <li class="menu-item">
                <a href="{{ asset('emqueuing') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-slider-alt"></i>
                  <div data-i18n="Basic">Queuing</div>
                </a>
              </li>


              <!-- Reports -->
            <li class="menu-item">
                <a href="{{ asset('emreports') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-report"></i>
                  <div data-i18n="Basic">Reports</div>
                </a>
              </li>


          </ul>
        </aside>
