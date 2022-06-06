<!--<div id="map" style="width:1000px; height:400px; background:grey"></div>  
<script>  
function initMap() {  
var mapOptions = {  
    center: new google.maps.LatLng(70.5, -0.12),  
    zoom: 10,  
    mapTypeId: google.maps.MapTypeId.HYBRID  
}  
var map = new google.maps.Map(document.getElementById("map"), mapOptions);  
}  
</script> 

<script async defer src="AIzaSyARYuFXx4oxJtH1Fkhkznofa0NFa847ToU&callback=initMap"></script>-->


<div class="page-section">
<div class="container">
<div class="card">
  <h3 class="card-header">Registration Information</h3>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Complete this form to apply for Traffic Accident Report. Once submitted, your application will be reviewed and you should be notified within 5 working days that your application has been received.  At that time you will also be informed when to collect the report.
        <br>
        Kindly upload a copy of your drivers’ license AND your passport with your application. Even if uploaded, your driver’s license and passport are required to be presented when you pick up the report.
        <br>
        Those picking up a record on behalf of someone else must have a signed and notarized letter from that individual authorizing the release of the record to you
    </p>
    
  </div>
</div>
</div>
</div>

<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Report Accident</h1>

      <form action="{{route('store')}}" method="POST" class="main-form">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="fullname" placeholder="Full name..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="email" placeholder="Email address..">
          </div>
         
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" name="phone" placeholder="Phone number..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="DateOfaccident" placeholder="Date Of accident">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="Registredownerofvehicle" placeholder="Registred owner of vehicle..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="PersonDrivingThevehicle" placeholder="Person Driving The vehicle..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="VehicleRegistration" placeholder="Vehicle Registration..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <input type="text" class="form-control" name="LocationOfAccident" placeholder="Location Of Accident..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" name="Describeaccident" placeholder="Describe accident.."></textarea>
          </div>
          </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">REPORT</button>
      </form>
    
    </div>
  </div> <!-- .page-section -->