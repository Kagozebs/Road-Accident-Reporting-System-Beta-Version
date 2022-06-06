
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
<th style="padding:10px;font-size:10px;color:white;">Stuff name</th>
<th style="padding:10px;font-size:10px;color:white;">phone</th>
<th style="padding:10px;font-size:10px;color:white;">speciality</th>
<th style="padding:10px;font-size:10px;color:white;">Image</th>
<th style="padding:10px;font-size:10px;color:white;">Update</th>
<th style="padding:10px;font-size:10px;color:white;">Delete</th>

</tr>


@foreach($stuff as $stuffs)
<tr style="background-color:skyblue;" align="center">
<td>{{$stuffs->sname}}</td>
<td>{{$stuffs->phone}}</td>
<td >{{$stuffs->speciality}}</td>
<td><img height="90px" width="90px" src="stuffimage/{{$stuffs->image}}"></td>


<td><a class="bt btn-primary" onclick="return confirm('are you sure you want to update this')" href="{{url('updatestuff',$stuffs->id)}}">Update</td>
<td><a class="bt btn-danger" onclick="return confirm('are you sure you want to delete this')" href="{{url('deletestuff',$stuffs->id)}}">Delete</td>
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