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
                 
                  <table class="table table-hover" id="table">
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
    <tr>


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
          <td class="center">
          
            <a class="edit mdi mdi-etsy" data-id="{{ $event->user_id }}" data-name="{{ $event->city }}" href="#" data-toggle="modal" data-target="#myModal">
             
            </a>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
            <div class="modal-header">
            <p class="text-primary"> <h3>Modal Header</h3></p>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
            <p>Some text in the modal.</p>
             <form>
                <div class="row">
                   <div class="col-md-6">
                    <strong>User Id</strong>
                    <input type="text" name="user_id" id="user_id" value="{{ $event->user_id }}" class="form-control" placeholder="user_id">
                    
                </div>




                <div class="col-md-6">
                    <strong>City</strong>
                    <input type="text" name="city" id="username" value="{{ $agent->city }}" class="form-control" placeholder="city">
                    
                </div>

                </form>    

                <div class="deleteContent">
               Are you Sure you want to delete <span class="dname"></span> ? <span
                class="hidden did"></span>
                </div>



                  
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
            <button type="button" class="btn btn-sm btn-primary"data-dismiss="modal">close</button>

            <button type="button" class="btn btn-warning" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Close
              </button>
            </div>
      </div>
      
    </div>
  </div>
            <br/>
          <!--  <a class="mdi mdi-delete" data-id="{{ $event->user_id }}" data-name="{{ $event->city }}" href="#">
                
              </a>-->

            
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
            $(document).on('click', '.updateStatus',function(){
                var Id = $(this).attr("id");
                //alert(Id);
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
                $('.item' + data.user_id).replaceWith(" "+
                  "<tr class='item" + data.user_id +  "'>"+
                  "<td>" + data.user_id + "</td>"+
                  "<td>" + data.city + "</td>"+
                  "<td><a class='edit-modal mdi mdi-etsy' data-id='"+ data.id +"'data-title'"+"<i class='mdi mdi-etsy'> </a>"+
                  "</td>"+
                  "</tr>");

            }
        });
   



    $(document).on('click', '.edit', function() {
alert(done);
        $('#footer_action_button').text("Update");
        $('.actionBtn').addClass('mdi-success');
       
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
       
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });
 
 $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/Events/entryFees/deleteEntryFee',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
               swal("Successfully", "Delete Event Fee Successfully", "success");
                $('.item' + $('.did').text()).remove();
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
   