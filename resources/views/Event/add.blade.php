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
                    <h2 class=" text-primary">Add New Event </h2>
<br/>
<br/>
                    <form class="form-sample" action="{{URL::to('/')}}/Event/store" method="get">
                                           
                       <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Name</label>
                            <div class="col-sm-9" id="name">
                               <input type="text" name="event_name" id="eventName"  class="form-control text-primary" placeholder="Event Name">
                              
                            </div>
                          </div>
                        </div>
                       
                 
                        
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Date </label>
                            <div class="col-sm-9" class="eventDataError">
                              <input class="form-control text-primary" id="datepicker" value="" name="event_date" placeholder="DD/MM/YYYY" type="date" autocomplete="off">
                              
                            </div>
                          </div>
                        </div>
                     </div>
                      <div class="row">
                     
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Type</label>
                            <div class="col-sm-9">
                                 <select class="form-control text-primary" name="event_type">
                        <option value="">Select Event Type</option>
                        <option value="Solo">Solo</option>
                        <option value="Duo">Duo</option>
                        <option value="Squad">Squad</option>
                        
                    </select>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Status</label>
                            <div class="col-sm-9">
                              <select class="form-control text-primary" name="status">
                                 <option value="">Select Event Status</option>
                                <option>Live</option>
                                <option>up Coming</option>
                                <option>Completed</option>
                               
                              </select>
                            </div>
                          </div>
                       
                         </div>  

                        </div>
                <div class="col-md-6">
                    <a href="{{URL::to('/')}}/Event/eventlist" class="btn btn-sm btn-success"> Back</a>
                    <button type="submit" id="myBtn" class="btn btn-sm btn-primary">Submit</button>
                    
                </div>
                 

                   @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
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
               