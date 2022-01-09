<div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <!--Add books  -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('books')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add Books</span>
            </a>
          </li>

          <!--Add CDs -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('cds')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add cds</span>
            </a>
          </li>

          <!--Add Games -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('games')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add games</span>
            </a>
          </li>

          <!-- Show Books -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showbooks')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Show All Books</span>
            </a>
          </li>

          <!-- Show cds -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showcds')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Show All Cds</span>
            </a>
          </li>


          <!-- Show Games  -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showgames')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Show All Games</span>
            </a>
          </li>

          
        </ul>
      </nav>