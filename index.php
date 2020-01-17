<?php include("header.php"); ?>
<title>GoGreen</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/footer2.css">
<link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />
<script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
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

    <div class="main row">
        <div id='map' style='height:700px;' class="col-md-9">
        <script>
          var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
          var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';
          var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});
          var  WAQI_URL    =  "https://tiles.waqi.info/tiles/usepa-aqi/{z}/{x}/{y}.png?token=_TOKEN_ID_";
          var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';
          var  waqiLayer  =  L.tileLayer(WAQI_URL);
          var map  =  L.map('map').setView([26.9124,  75.7873],  12);
          map.addLayer(osmLayer).addLayer(waqiLayer);
        </script>
      </div>

      <div class="data col-md-3">
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

<hr>

<div class="recent">
  <br>
  <h3 style="text-align:center;"> Greeny News </h3>
  <div class="scrollbox">
    <marquee direction="up">
        <li> Suryaprakash Agarwal Donated Rs 2000 to the GoGreen Box. Cheers to Him!</li>
        <li> GoGreen sponsored Energy Club to distribute 50 solar lamps in unelectrified villages. </li>
        <li> Tesla promised investment of Rs 1 crore for 1 million tree plantations. </li>
        <li> Anmol Mittal Donatated Rs 10 to GoGreen Box. Cheers to Him!</li>
        <li> Keshav Sarraf requested Rs 3000 for seminar on renewable sources of energy.</li>
        <li> GoGreen joined hands with Greenify for plantation of 1 million tree.</li>
        <li> GoGreen funded Simpura village to build compost pits. </li>
        <li> Suryaprakash Agarwal Donated Rs 2000 to the GoGreen Box. Cheers to Him!</li>
        <li> GoGreen sponsored Energy Club to distribute 50 solar lamps in unelectrified villages. </li>
        <li> Tesla promised investment of rs 1 crore for 1 million tree plantations. </li>
        <li> Anmol Mittal Donatated Rs 10 to GoGreen Box. Cheers to Him!</li>
        <li> Keshav Sarraf requested Rs 3000 for seminar on renewable sources of energy.</li>
        <li> GoGreen joined hands with Greenify for plantation of 1 million tree.</li>
        <li> GoGreen funded Simpura village to build compost pits. </li>
    </marquee>
  </div>
  <br><br>
</div>
<?php include('footer2.php') ?>
