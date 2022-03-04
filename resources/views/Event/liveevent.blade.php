
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
               

<div class="box-content">
         <div class="form-group row add">
          <div class="col-md-4">
            <input type="text" class="form-control" id="event_name" name="event_name"
              placeholder="Enter Event Name" required>
                       
            </div>
            <div class="col-md-2">
            <button class="btn btn-sm btn-primary" type="submit" id="add">
              <span class="glyphicon glyphicon-plus"></span> ADD
            </button>
            </div>
         </div>

{{ csrf_field() }}
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Live Eventlist Table</h4>
                  <!--  <p class="card-description"> Add class <code>.table-hover</code>
                    </p>-->
                 
                  <table class="table table-hover" id="table">
                      <thead>
                        <tr>
                          <th>Sr No</th>
                          <th>Event Name</th>
                          <th>Status</th>
                          <th>Event Date</th>
                          <th>Event Type</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $count = 1; ?>
     @foreach($livelist as $live)
    <tr  class="item{{ $live->event_id }}">
        <td><?php echo $count; ?></td>
        <td class="center">{{ $live->event_name }}</td>
         <td class="center">{{ $live->status }}</td>
        <td class="center">{{ $live->event_date }}</td>
        <td class="center">{{ $live->event_type }}</td>
       
                        
                         </tr>
       <?php $count++; ?>
    @endforeach
                     
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

</div></div></div>

                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>







     @include('Layout.footer')


<script type="text/javascript">
$(document).ready(function(){
      $("#add").click(function() {
        //alert('check');
          //alert($('input[name=_token]').val());
          $.ajax({
              type: 'post',
              url: '/Event/liveevent/addEventname',
              data: {
                '_token': $('input[name=_token]').val(),
                'event_name': $('input[name=event_name]').val()
              },
              success: function(data) {
                  alert(data.event_name)
                  // if ((data.errors)){
                  //   $('.error').removeClass('hidden');
                  //     $('.error').text(data.errors.name);
                  // }

                  
                  // else {
                  //     swal("Successfully", "Add Event Name Successfully", "success");
                  //     $('.error').addClass('hidden');
                  //     $('#table').append("<tr class='item" + data.event_id + "'><td>" + data.event_id + "</td><td>" + data.event_name + "</td><td>" + data.status + "</td><td></tr>");
                  // }
              },

        });
       $('#event_name').val('');
    });

}); 



</script>
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
   