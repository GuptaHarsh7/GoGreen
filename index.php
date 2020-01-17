<?php include("header.php"); ?>
<title>GoGreen</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/footer2.css">
</head>
<body>
<?php include('topbar.php');?>

<div class="img">
  <img src="images/bg_header.jpg" width="100%" height="780px;">
    <div class="centered">GoGreen</div>
      <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
        <span class="text" style="color: black">Scroll down</span>
      </div>
</div>

<div id="index">
    <div>
      <br>
      <h2>Air Quality Index</h2>
    </div>
    <br>

    <div class="main">
        <div id='map' style='height:680px;'>
    <script  src="https://maps.googleapis.com/maps/api/js"></script>

    <script>
          var  map  =  new  google.maps.Map(document.getElementById('map'),  {
                      center:  new  google.maps.LatLng(26.9124, 75.7873),
                      mapTypeId:  google.maps.MapTypeId.ROADMAP,
                      zoom:  7
                  });

                                  var  t  =  new  Date().getTime();
          var  waqiMapOverlay  =  new  google.maps.ImageMapType({
                      getTileUrl:  function(coord,  zoom)  {
                                return  'https://tiles.aqicn.org/tiles/usepa-aqi/'  +  zoom  +  "/"  +  coord.x  +  "/"  +  coord.y  +  ".png?token=_TOKEN_ID_";
                      },
                      name:  "Air  Quality",
            });

          map.overlayMapTypes.insertAt(0,waqiMapOverlay);
    </script>
  </div>
<br>

    <div class="data">
        <div class="data1">
          <div class="left">
            <b>AQI</b>
          </div>
          <div class="right">
            <b>Air Pollution Level</b>
          </div>
        </div>
        <div class="data2">
          <div class="left">
            0 - 50
          </div>
          <div class="right">
            Good
          </div>
        </div>
        <div class="data3">
          <div class="left">
            51 -100
          </div>
          <div class="right">
            Moderate
          </div>
        </div>
        <div class="data4">
          <div class="left">
            101-150
          </div>
          <div class="right">
            Unhealthy for Sensitive Groups
          </div>
        </div>
        <div class="data5">
          <div class="left">
            151-200
          </div>
          <div class="right">
            Unhealthy
          </div>
        </div>
        <div class="data6">
          <div class="left">
            201-300
          </div>
          <div class="right">
            Very Unhealthy
          </div>
        </div>
        <div class="data7">
          <div class="left">
            300+
          </div>
          <div class="right">
            Hazardous
          </div>
        </div>
    </div>

  </div>
</div>

<br><br>
<?php include('footer2.php') ?>
