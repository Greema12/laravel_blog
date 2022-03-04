<!DOCTYPE html>
<html lang="en">
@include('Layout.header')
<body>
      <div class="container-scroller">
      <!-- topbar starts -->
      @include('Layout.topbar') 
      <!-- topbar ends -->

      @include('Layout.leftmenu') 


       <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h2 class=" text-primary">Add New Student </h2>
<br/>
<br/>
                    <form class="form-sample" action="{{URL::to('/')}}/Student/store" method="POST" enctype="multipart/form-data">

                        {{ csrf_field()}}                   
                       <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">Name:</label>
                            <div class="col-sm-9" id="name">
                               <input type="text" name="std_name" value=""   class="form-control text-primary" placeholder=" Name">
                              
                            </div>
                          </div>
                        </div>
                       
                 
                        
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email </label>
                            <div class="col-sm-9" class="eventDataError">
                              <input class="form-control text-primary" value="" name="email" placeholder="Email" type="email" >
                              
                            </div>
                          </div>
                        </div>
                     </div>
                      <div class="row">
                     <div class="col-md-4">
                       <div class="input-group">
                         <label >Image:</label>
                        
                        <div class="col-sm-8" class="custom-file">

                        <input type="file" name="image" value="" class="custom-file input">
                          
                     </div>   
                     </div>
                      </div>  
                         </div>  

                        </div>
                        <br/>

                <div class="col-md-6">
                    
                    <button type="submit"  class="btn btn-sm btn-primary">Submit</button>
                    
                </div>


                
               @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class=" close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif

  

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif   
          
                    </form>
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
               