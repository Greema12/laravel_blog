 <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           <!-- <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                 <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  change to offline or busy as needed
                </div>
               <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}/home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>

<li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">All Events</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/')}}/Event/liveevent">Live Event</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/')}}/Event/completed">Completed Event</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/')}}/Event/eventlist">All Event List</a></li>
                </ul>
              </div>
            </li>

        

            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}/User/user">
                <span class="menu-title">User</span>
              <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
         <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}/Student/student">
                <span class="menu-title">Student</span>
              <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}/Student/studentview">
                <span class="menu-title">Student View</span>
              <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}/AAA/test">
                <span class="menu-title">Testing menu</span>
              <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
          
           
          </ul>
        </nav>
        <!-- partial -->
       
          <!-- content-wrapper ends -->