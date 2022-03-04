

<!DOCTYPE html>
<html lang="en">@include('Layout.header')

 <body>
      <div class="container-scroller">
      <!-- topbar starts -->
   @include('Layout.topbar') 
    <!-- topbar ends -->
<div class="container-fluid page-body-wrapper">
@include('Layout.leftmenu') 


 <style type="text/css">
        .image {
  width: 250px;
  height: 400px;
}
</style>

<!-- partial -->
<div class="main-panel">

      <div class="content-wrapper">
 
          
<div class="col-12">
     
   
                <div class="card">
                  <div class="card-body">
                
                    <div class="col-lg-6 grid-margin stretch-card">
               

<div class="box-content">
         <div class="form-group row add">
        
          

{{ csrf_field() }}
                <div class="card">
                  <div class="card-body">
                    <h1 class="text-primary ">Studentlist Table</h1>
                 <br/><br/><br/>
                 
                  <table class=" table table-hover" id="table">
                      <thead>
                        <tr class="text-primary" >
                          <th>Sr No</th>
                          <th>Student Name</th>
                          <th>Email</th>
                          <th>Image</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                         <?php $count = 1; ?>
     @foreach($studentlist as $list)
    <tr  class="item{{ $list->id }}">
        <td><?php echo $count; ?></td>
        <td class="center">{{ $list->std_name }}</td>
         <td class="center">{{ $list->email }}</td>
        <td class="center"> <img class="image" src="{{ URL::to('/') }}/images/{{ $list->image }}"  /> </td>
        
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
   