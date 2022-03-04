
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
                    <h4 class="card-title">Eventlist Table</h4>
                    <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <a href="{{URL::to('/')}}/Event/add" class="btn btn-gradient-primary">New Event</a><br/><br/><br/>
               
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
     @foreach($eventlist as $event)
    <tr>
        <td><?php echo $count; ?></td>
        <td class="center">{{ $event->event_name }}</td>
        <td class="center">{{ $event->event_date }}</td>
        <td class="center">{{ $event->event_type }}</td>

       <td class="center">



@if($event->status =='Up Coming') 
   
        <button  type="submit" value="Live" class=" updatestatus" id="<?php echo $event->event_id ?>" >{{ $event->status }}</button>  
          
  @elseif($event->status =='Live') 
           
        <button  type="submit" value="Completed" class="updatestatus" id="<?php echo $event->event_id ?>" >{{ $event->status }}</button>  
 
 @else 
           
        <button  type="submit" value="Up Coming" class="updatestatus" id="<?php echo $event->event_id ?>" >{{ $event->status }}</button>  
                 


@endif

         
       </td> 
                        
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


     <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click', '.updatestatus',function(){
                var Id = $(this).attr("id");
                //alert(Id);
                 $.ajax({  
                    url:'{{URL::route('/Event/eventlist/finalUpdate')}}',  
                    method:"GET",  
                    data:{eId:Id},    
                    success:function(data){  
                       //alert(data['status']);
                       $("#"+Id).html(data['status']); 
                    }  
                    });
            });
          

           
        });
    </script>


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
   