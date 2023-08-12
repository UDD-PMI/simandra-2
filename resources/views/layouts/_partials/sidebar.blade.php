<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
  <div class="app-sidebar-header d-none d-lg-flex px-0 pt-10 pb-0" id="kt_app_sidebar_header">
    <div data-kt-element="selected" class="w-100">
      <span class="d-flex flex-start ms-5">
        <img  alt="Logo" src="{{ asset('assets/media/icon.svg') }}" data-kt-element="logo" class="h-40px" />
      </span>
    </div>
  </div>
  <div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
    <div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
      <div class="menu menu-rounded menu-column">
        <div class="app-sidebar-separator separator"></div>

        <div class="menu-item">
          <div class="menu-content menu-heading">Main Menu</div>
        </div>

      </div>
      <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="menu menu-column menu-rounded menu-sub-indention menu-active-bg">
        <div class="menu-item <?php if(route('home') == url()->full()){ echo'here show'; } ?>">
          <a href="{{ route('home') }}" class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-home-2 fs-2"></i>
            </span>
            <span class="menu-title">Home</span>
          </a>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if((route('pending')  == url()->full()) OR (route('show')  == url()->full()) OR (route('finish')  == url()->full())){ echo'here show'; } ?>">
          <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-pulse fs-2"></i>
            </span>
            <span class="menu-title">Blood Request</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <a href="{{ route('pending') }}" class="menu-item menu-accordion <?php if(route('pending')  == url()->full()){ echo'here show'; } ?>">
              <span class="menu-link">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Pending</span>
              </span>
            </a>
            <a href="{{ route('show') }}" class="menu-item menu-accordion <?php if(route('show')  == url()->full()){ echo'here show'; } ?>">
              <span class="menu-link">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Show</span>
              </span>
            </a>
            <a href="{{ route('finish') }}" class="menu-item menu-accordion <?php if(route('finish')  == url()->full()){ echo'here show'; } ?>">
              <span class="menu-link">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Finish</span>
              </span>
            </a>
          </div>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if((route('news')  == url()->full()) OR (route('news_add')  == url()->full())){ echo'here show'; } ?>">
          <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-save-2 fs-2"></i>
            </span>
            <span class="menu-title">News</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <a href="{{ route('news_add') }}" class="menu-item menu-accordion <?php if(route('news_add')  == url()->full()){ echo'here show'; } ?>">
              <span class="menu-link">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Add New</span>
              </span>
            </a>
            <a href="{{ route('news') }}" class="menu-item menu-accordion <?php if(route('news')  == url()->full()){ echo'here show'; } ?>">
              <span class="menu-link">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Publish</span>
              </span>
            </a>
          </div>
        </div>
        <div class="menu-item <?php if(route('bdrs')  == url()->full()){ echo'here show'; } ?>">
          <a href="{{ route('bdrs') }}" class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-flask fs-2"></i>
            </span>
            <span class="menu-title">BDRS</span>
          </a>
        </div>
        <div class="menu-item <?php if(route('bloodstock')  == url()->full()){ echo'here show'; } ?>">
          <a href="{{ route('bloodstock') }}" class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-graph-2 fs-2"></i>
            </span>
            <span class="menu-title">Blood Stock</span>
          </a>
        </div>
        <div class="menu-item <?php if(route('jadwalmu')  == url()->full()){ echo'here show'; } ?>">
          <a href="{{ route('jadwalmu') }}" class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-calendar fs-2"></i>
            </span>
            <span class="menu-title">MU Schedule</span>
          </a>
        </div>
        <div class="menu-item <?php if(route('user')  == url()->full()){ echo'here show'; } ?>">
          <a href="{{ route('user') }}" class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-user fs-2"></i>
            </span>
            <span class="menu-title">Users</span>
          </a>
        </div>
        @if (Auth::user()->role == '2')
        <div class="menu-item <?php if(route('setting')  == url()->full()){ echo'here show'; } ?>">
          <a href="{{ route('setting') }}" class="menu-link">
            <span class="menu-icon">
              <i class="ki-outline ki-gear fs-2"></i>
            </span>
            <span class="menu-title">Setting</span>
          </a>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="app-sidebar-footer d-flex flex-stack px-11 pb-10" id="kt_app_sidebar_footer">
    <div class="">
      <div class="cursor-pointer symbol symbol-circle symbol-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
        <img src="{{Auth::user()->photo}}" alt="image" />
      </div>
      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
        <div class="menu-item px-3">
          <div class="menu-content d-flex align-items-center px-3">
            <div class="symbol symbol-50px me-5">
              <img alt="Logo" src="{{Auth::user()->photo}}" />
            </div>
            <div class="d-flex flex-column">
              <div class="fw-bold d-flex align-items-center fs-5">{{Auth::user()->name}}
              <span class="badge badge-light-danger fw-bold fs-8 px-2 py-1 ms-2">{{Auth::user()->goldar}}</span></div>
              <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
            </div>
          </div>
        </div>
        <div class="separator my-2"></div>
        <div class="menu-item px-5">
          <a href="{{ route('account') }}" class="menu-link px-5">My Profile</a>
        </div>
        <div class="menu-item px-5">
          <a href="{{ route('logout') }}" class="menu-link px-5">Sign Out</a>
        </div>
      </div>
    </div>
    <a href="{{ route('logout') }}" class="btn btn-sm btn-outline btn-flex btn-custom px-3">
    <i class="ki-outline ki-entrance-left fs-2 me-2"></i>Logout</a>
  </div>
</div>