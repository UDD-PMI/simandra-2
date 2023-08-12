<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
  <div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">
    <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
      <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
        <i class="ki-outline ki-abstract-14 fs-2"></i>
      </div>
      <a href="{{ route('home') }}">
        <img alt="Logo" src="{{ asset('assets/media/icon.svg') }}" class="h-30px theme-light-show" />
        <img alt="Logo" src="{{ asset('assets/media/icon.svg') }}" class="h-30px theme-dark-show" />
      </a>
    </div>
    <div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
      <div class="page-title gap-4 me-3 mb-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-2">
          <li class="breadcrumb-item text-gray-600 fw-bold lh-1">
            <a href="../../demo27/dist/index.html" class="text-gray-700 text-hover-primary me-1">
              <i class="ki-outline ki-home text-gray-700 fs-6"></i>
            </a>
          </li>
          <li class="breadcrumb-item">
            <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
          </li>
          <li class="breadcrumb-item text-gray-600 fw-bold lh-1">
            @if (empty($data['title']))
            404
            @else
              {{$data['title']}}
            @endif	
          </li>
        </ul>
        <h1 class="text-gray-900 fw-bolder m-0">
          @if (empty($data['title']))
          404
          @else
            {{$data['title']}}
          @endif	
        </h1>
      </div>
      <div class="d-flex align-items-center gap-2 gapl-lg-4">
        <div class="m-0">
          <a href="#" class="btn btn-flex  btn-icon h-40px btn-light fw-bold" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
            <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
          </a>
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                <span class="menu-icon" data-kt-element="icon">
                  <i class="ki-outline ki-night-day fs-2"></i>
                </span>
                <span class="menu-title">Light</span>
              </a>
            </div>
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                <span class="menu-icon" data-kt-element="icon">
                  <i class="ki-outline ki-moon fs-2"></i>
                </span>
                <span class="menu-title">Dark</span>
              </a>
            </div>
            <div class="menu-item px-3 my-0">
              <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                <span class="menu-icon" data-kt-element="icon">
                  <i class="ki-outline ki-screen fs-2"></i>
                </span>
                <span class="menu-title">System</span>
              </a>
            </div>
          </div>
        </div>
        <button onclick="toggleFullScreen()" class="btn btn-flex  btn-icon h-40px fw-bold btn-dark">
          <i class="ki-outline ki-duotone ki-arrow-two-diagonals fs-2"></i>
        </button>
      </div>
    </div>
  </div>
</div>