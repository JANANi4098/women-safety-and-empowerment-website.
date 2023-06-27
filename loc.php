<!DOCTYPE html>
<html>

<head>
  <title>Display location in map</title>
  <style>
  .big-title {
  background-color: #FF004D;
  margin: 2%;
  padding: 1%;
}
    h1{
      color: white;
    }

    p {
      font-size: 20px;
      margin-left: 20px;
    }
    body {
      background-image: url(images/bgimg.png);
      background-size: cover;x
    }
    .button-24 {
      background: #FF004D;
      border: 1px solid #FF4742;
      border-radius: 6px;
      box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
      font-size: 16px;
      font-weight: 800;
      line-height: 16px;
      min-height: 40px;
      outline: 0;
      padding: 12px 14px;
      text-align: center;
      text-rendering: geometricprecision;
      text-transform: none;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      vertical-align: middle;
    }

    .button-24:hover,
    .button-24:active {
      background-color: initial;
      background-position: 0 0;
      color: #FF4742;
    }

    .button-24:active {
      opacity: .5;
    }

  </style>
</head>

<body>
  <div class="big-title">
    <center>
      <h1>LIVE LOCATION</h1>
    </center>
  </div>



  <center>
<p>Display location in map</p>




  <button  class="button-24" role="button" style="height:50px;width:200px " class="geeks" type="button" onclick="getlocation();">
    Current Position
  </button>
  <br>
  <div id="demo2"
       style="width: 500px; height: 500px"></div>
     </center>
  <script src=
"https://maps.google.com/maps/api/js?sensor=false">
  </script>
  <script type="text/javascript">
    function getlocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLoc, errHand);
      }
    }
    function showLoc(pos) {
      latt = pos.coords.latitude;
      long = pos.coords.longitude;
      var lattlong = new google.maps.LatLng(latt, long);
      var OPTions = {
        center: lattlong,
        zoom: 10,
        mapTypeControl: true,
        navigationControlOptions: {
          style: google.maps.NavigationControlStyle.SMALL,
        },
      };
      var mapg = new google.maps.Map(
        document.getElementById("demo2"),
        OPTions
      );
      var markerg = new google.maps.Marker({
        position: lattlong,
        map: mapg,
        title: "You are here!",
      });
    }

    function errHand(err) {
      switch (err.code) {
        case err.PERMISSION_DENIED:
          result.innerHTML =
            "The application doesn't have the permission" +
            "to make use of location services";
          break;
        case err.POSITION_UNAVAILABLE:
          result.innerHTML = "The location of the device is uncertain";
          break;
        case err.TIMEOUT:
          result.innerHTML = "The request to get user location timed out";
          break;
        case err.UNKNOWN_ERROR:
          result.innerHTML =
            "Time to fetch location information exceeded" +
            "the maximum timeout interval";
          break;
      }
    }
  </script>
</body>

</html>
