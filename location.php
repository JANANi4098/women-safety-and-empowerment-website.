<!DOCTYPE html>
<html>
<head>
  <style media="screen">
  .big-title {
    background-color: #FF004D;
    margin: 2%;
    padding: 1%;
  }
  p{
    font-size: 125%;
    font-weight: bold;
  }
  h1{
    color: white;
  }
  body {
    background-image: url(images/bgimg.png);
    background-size: cover;
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


<p>Displaying location using Latitude and Longitude</p>




  <button class="button-24" role="button" style="height:50px;width:150px " class="geeks" onclick="getlocation()">
    Location
  </button>
  <p id="demo1"></p>


</center>

  <script>
    var variable1 = document.getElementById("demo1");
    function getlocation() {
      navigator.geolocation.getCurrentPosition(showLoc);
    }
    function showLoc(pos) {
      variable1.innerHTML =
        "Latitude: " +
        pos.coords.latitude +
        "<br>Longitude: " +
        pos.coords.longitude;
    }
  </script>
</body>

</html>
