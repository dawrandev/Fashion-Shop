<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ URL::asset('assets2/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ URL::Asset('assets2/css/style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets2/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ URL::asset('assets2/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='assets2/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{Route('clients_table')}}"><img alt="image" src="/assets2/img/logo.png" class="header-logo" />
              <span class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i
                  data-feather="monitor"></i><span>Tiykarǵı panel</span>
              </a>
              <a href="{{Route('clients_table')}}" class="nav-link"><i
                  data-feather="user-check"></i><span>Klientler</span>
              </a>
              <a href="{{Route('admin_products_page')}}" class="nav-link"><i
                  data-feather="grid"></i><span>Ónimler</span></a>
              <a href="{{Route('create_option_page')}}" class="nav-link"><i
                  data-feather="sliders"></i><span>Parametrler</span>
              </a>
              <a href="{{Route('create_product_page')}}" class="nav-link"><i
                  data-feather="shopping-bag"></i><span>Ónim jaratıw</span>
              </a>
              <a href="{{Route('create_pieces_page')}}" class="nav-link"><i
                  data-feather="command"></i><span>Sanın kiritiw</span>
              </a>
              <a href="{{Route('client_checks')}}" class="nav-link"><i
                  data-feather="copy"></i><span>Chekler</span>
              </a>
            </li>
            </li>
          </ul>
        </aside>
      </div>

      {{$slot}}

      </section>
      <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
          <div class=" fade show active">
            <div class="setting-panel-header">Setting Panel
            </div>
            <div class="p-15 border-bottom">
              <h6 class="font-medium m-b-10">Select Layout</h6>
              <div class="selectgroup layout-color w-50">
                <label class="selectgroup-item">
                  <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                  <span class="selectgroup-button">Light</span>
                </label>
                <label class="selectgroup-item">
                  <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                  <span class="selectgroup-button">Dark</span>
                </label>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <h6 class="font-medium m-b-10">Sidebar Color</h6>
              <div class="selectgroup selectgroup-pills sidebar-color">
                <label class="selectgroup-item">
                  <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                  <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                </label>
                <label class="selectgroup-item">
                  <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                  <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                </label>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <h6 class="font-medium m-b-10">Color Theme</h6>
              <div class="theme-setting-options">
                <ul class="choose-theme list-unstyled mb-0">
                  <li title="white" class="active">
                    <div class="white"></div>
                  </li>
                  <li title="cyan">
                    <div class="cyan"></div>
                  </li>
                  <li title="black">
                    <div class="black"></div>
                  </li>
                  <li title="purple">
                    <div class="purple"></div>
                  </li>
                  <li title="orange">
                    <div class="orange"></div>
                  </li>
                  <li title="green">
                    <div class="green"></div>
                  </li>
                  <li title="red">
                    <div class="red"></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <div class="theme-setting-options">
                <label class="m-b-0">
                  <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                    id="mini_sidebar_setting">
                  <span class="custom-switch-indicator"></span>
                  <span class="control-label p-l-10">Mini Sidebar</span>
                </label>
              </div>
            </div>
            <div class="p-15 border-bottom">
              <div class="theme-setting-options">
                <label class="m-b-0">
                  <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                    id="sticky_header_setting">
                  <span class="custom-switch-indicator"></span>
                  <span class="control-label p-l-10">Sticky Header</span>
                </label>
              </div>
            </div>
            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
              <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                <i class="fas fa-undo"></i> Restore Default
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="main-footer">
      <div class="footer-left">
        <a href="templateshub.net">Templateshub</a></a>
      </div>
      <div class="footer-right">
      </div>
    </footer>
  </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ URL::asset('assets2/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ URL::asset('assets2/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ URL::asset('assets2/js/custom.js')}}"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>