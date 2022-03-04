<!DOCTYPE html>
<html lang="en">

@include('Layout.header')

 <body>
      <div class="container-scroller">
      <!-- topbar starts -->
   @include('Layout.topbar') 
    <!-- topbar ends -->

@include('Layout.leftmenu') 
<!-- partial -->
       
       

<div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Userlist Table</h4>
                  <!--  <p class="card-description"> Add class <code>.table-hover</code>
                    </p>-->
                 
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sr No</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Status</th>
                           <th>City</th>
                          <th> Type</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php $count = 1; ?>
     @foreach($userlist as $event)
    <tr class="item{{ $event->user_id }}">


        <td><?php echo $count; ?></td>
        <td class="center">{{ $event->first_name }}</td>
          <td class="center">{{ $event->last_name }}</td>
        <td class="center">{{ $event->email }}</td>
        <td class="center">{{ $event->password }}</td>
        
        <td class="center">  

@if($event->status =='Active') 

        
                
        <button  type="submit" value="Deactive" class="updateStatus" id="<?php echo $event->user_id ?>" >{{ $event->status }}</button>  
          
  @else
           
        <button  type="submit" value="Active" class="updateStatus" id="<?php echo $event->user_id ?>" >{{ $event->status }}</button>  
          


@endif

        </td>
       



        <td class="center">{{ $event->city }}</td>
        <td class="center">{{ $event->type }}</td>

       




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
            $(document).on('click', '.updateStatus',function(){
                var Id = $(this).attr("id");
               // alert(Id);
                 $.ajax({  
                    url:'{{URL::route('/User/user/masterUpdate')}}',  
                    method:"GET",  
                    data:{eId:Id},    
                    success:function(data){  
                       //alert(data['status']);
                       $("#"+Id).html(data['status']); 
                    }  
                    });
            });
          

           
        });


 $('.modal-footer').on('click', '.edit', function() {
      alert('Done');
        $.ajax({
            type: 'post',
            url: '/User/user/editUsercity',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#n').val()
            },
            success: function(data) {
              //alert(data);
                swal("Successfully", "Edit City Successfully", "success");
                $('.item' + data.user_id).replaceWith("<tr class='item" + data.user_id + 
                  "'><td>" + data.user_id + "</td> <td>" + data.city + "</td><td>" + data.status + "</td><td><a class='edit-modal mdi mdi-etsy' href='#'></td></tr>");

            }
        });
    });


    $(document).on('click', '.edit-modal', function() {

        $('#footer_action_button').text("Update");
        $('.actionBtn').addClass('mdi-success');
       
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
       
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
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
   