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

 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>

    @if($message = Session::get('success'))
       <!--  <div class="alert alert-success">
            <p>{{$message}}</p>
        </div> -->
        
   
       <!--  <script type="text/javascript">
             swal('Successfully', <?php echo $message ?>, 'success');
        </script> -->
         <?php
   echo '<script type="text/javascript">
             swal("Successfully", "' . $message . '", "success");
        </script>';
    ?>
    @endif
                    
                  <h4 class="card-title">Userlist Table</h4>
              
                  <table class="table table-hover" id="table">
                          <thead>
                          <tr >
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
                          
                          <td class="center">
                            <a class="edit-modal mdi mdi-etsy" data-id="{{ $event->user_id }}" data-name="{{ $event->city }}" data-Fname="{{ $event->first_name }}" 
                               href="#" data-toggle="modal" data-target="#myModal">
                            </a><i class="glyphicon glyphicon-edit icon-white"></i>
                
<br/><br/><br/>
                            <a class="delete-modal mdi mdi-delete" data-id="{{ $event->user_id }}" data-name="{{ $event->city }}" href="#" data-toggle="modal" data-target="#myModal">
                            <i class="glyphicon glyphicon-trash icon-white"></i>
                            </a>




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


      <!-- Modal content-->
   {{ csrf_field() }}   
   
     <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="id">ID:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="fid" disabled>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="name">City Name:</label>
                <div class="col-sm-10">
                <input type="name" class="form-control" id="n">
                </div>

                 <div class="form-group">
                <label class="control-label col-sm-2" for="Fname">First Name:</label>
                <div class="col-sm-10">
                  <input type="Fname" class="form-control" id="fname" >
                </div>
                </div>
                </form>

                   </div>
                <div class="deleteContent">
                  Are you Sure you want to delete <span class="dname"></span> ? <br/>
                  <span class="hidden did"></span><br/> 
                </div>
 </div> 
                
                <div class="modal-footer">
                <button type="button" class="btn  actionBtn" data-dismiss="modal">
                <span id="footer_action_button" class='glyphicon'> </span>
                </button>
                <button type="button" class="btn btn-warning " data-dismiss="modal">
                <span class='glyphicon glyphicon-remove'></span> Close
                </button>


            </div>
          </div>
        </div>
      </div>
      
          
 <script type="text/javascript">
      $('.modal-footer').on('click', '.edit', function() {
      //alert('Done');
        $.ajax({
            type: 'post',
            url: '/User/user/editUsercity',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#n').val(),
                'Fname': $('#fname').val()
            },
            success: function(data) {
              //alert(data);
                swal("Successfully", "Edit City Successfully", "success");
                $('.item' + data.user_id).replaceWith(
                  "<tr class='item" + data.user_id + "'><td>" + data.user_id +
                   "</td><td>" + data.city + "</td><td>" + data.first_name
                    + "</td><td><a class='edit-modal btn btn-info' href='#'><i class='glyphicon glyphicon-edit icon-white'></i></a></td></tr>");
            }
        });
 
 });






$(document).on('click', '.edit-modal', function() {
  //alert($(this).data('Fname'));
        $('#footer_action_button').text("Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));

        $('#fname').val($(this).data('Fname'));
        $('#myModal').modal('show');
    });


 $(document).on('click', '.delete-modal', function() {
  //alert('Done');
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
        //$('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/User/user/deleteCity',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
               swal("Successfully", "Delete City Successfully", "success");
                $('.item' + $('.did').text()).remove();
            }
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
   