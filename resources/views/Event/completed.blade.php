
<!DOCTYPE html>
<html lang="en">@include('Layout.header')

 <body>
      <div class="container-scroller">
      <!-- topbar starts -->
   @include('Layout.topbar') 
    <!-- topbar ends -->
<div class="container-fluid page-body-wrapper">
@include('Layout.leftmenu') 
<!-- partial -->
     
<div class="main-panel">
  
      <div class="content-wrapper">
 
<div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Completed Eventlist Table</h4>
                  <!--  <p class="card-description"> Add class <code>.table-hover</code>
                    </p>-->
                 
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr No</th>
                          <th>Event Name</th>
                          <th>Event Date</th>
                          <th>Event Type</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php $count = 1; ?>
     @foreach($completedlist as $live)
    <tr>
        <td><?php echo $count; ?></td>
        <td class="center">{{ $live->event_name }}</td>
        <td class="center">{{ $live->event_date }}</td>
        <td class="center">{{ $live->event_type }}</td>
        <td class="center">{{ $live->status }}</td>
                        
                         </tr>
       <?php $count++; ?>
    @endforeach
                     
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>


     @include('Layout.footer')


     <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
   </body>
   </html>
   