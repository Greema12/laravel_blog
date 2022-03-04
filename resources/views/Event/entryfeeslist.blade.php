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
                    <h4 class="card-title">Live Eventlist Table</h4>
                  <!--  <p class="card-description"> Add class <code>.table-hover</code>
                    </p>-->
                 





 <table class="table table-hover">
    <thead>
    <tr>
        <th>Sr No</th>
        <th>Entry Fee</th>
        <th>Status</th>
        <th >Action</th>
    </tr>
    </thead>
    <tbody>
       <?php $count = 1; ?>
     @foreach($entryFees as $fees)
    <tr  class="item{{ $fees->ef_id }}">
        <td><?php echo $count; ?></td>
        <td class="center">{{ $fees->entry_fee }}</td>
        <td class="center">{{ $fees->status }}</td>
 
   
        <td class="center">
          
            <a class="edit-modal btn btn-info" href="#" data-id="{{ $fees->ef_id }}" data-name="{{ $fees->entry_fee }}">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                
            </a>
            <a class="delete-modal btn btn-danger" data-id="{{ $fees->ef_id }}" data-name="{{ $fees->entry_fee }}" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
              </a>

            
        </td>
    </tr>
       <?php $count++; ?>
    @endforeach
    </tbody>
    </table>