<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="adminpanel.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Shared Stories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="adminshared.php">Shared</a></li>
                <li class="nav-item"> <a class="nav-link" href="sharedAll.php">Shared to all</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pofile.php"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Activity log </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Feedback</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-login.php">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Sign out</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->