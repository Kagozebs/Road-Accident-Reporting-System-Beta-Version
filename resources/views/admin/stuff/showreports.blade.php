
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
   @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
            <!-- partial -->
        
            <div class="container-fluid page-body-wrapper">

            <div align="left" style="padding-top:70px;margin-left:1px" >
          <table>

            <tr style="background-color:black;" align="center">
            <th style="padding:1px;">fullname</th>
            <th style="padding:1px;">email</th>
            <th style="padding:1px;">phone</th>
              <th style="padding:1px;">Date Of Accident</th>
              <th style="padding:1px;">Registered Owner of Vehicle</th>
              <th style="padding:1px;">Person Driving The Vehicle</th>
              <th style="padding:1px;">Vehicle Registration</th>
              <th style="padding:1px;">Location Of Accident</th>
              <th style="padding:1px;">Accident Description</th>
              <th style="padding:1px;">Status</th>
              <th style="padding:1px;">Approved</th>
              <th style="padding:1px;">Canceled</th>
            </tr>

           
    @foreach($reporter as $reports)
<tr style="background-color:skyblue;" align="center">
<td>{{$reports->fullname}}</td>
<td >{{$reports->email}}</td>
<td>{{$reports->phone}}</td>
  <td>{{$reports->DateOfaccident}}</td>
  <td>{{$reports->Registredownerofvehicle}}</td>
  <td>{{$reports->PersonDrivingThevehicle}}</td>
  <td>{{$reports->VehicleRegistration}}</td>
  <td>{{$reports->LocationOfAccident}}</td>
  <td>{{$reports->Describeaccident}}</td>
  <td >{{$reports->status}}</td>
  
  <td><a class="bt btn-success" onclick="return confirm('are you sure you want to approve this')" href="{{url('approved',$reports->id)}}">Approved</td>
  <td><a class="bt btn-danger" onclick="return confirm('are you sure you want to delete this')" href="{{url('canceled',$reports->id)}}">Canceled</td>
</tr>
@endforeach
</table>

            
        

      </div>
            </div>







    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>