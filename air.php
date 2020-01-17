<?php include("header.php"); ?>
<title>GoGreen</title>
<link rel="stylesheet" href="css/air.css">
<link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />
<script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
</head>
<body>
<?php include('topbar.php');?>

<div id="air">
    <div class="centerbox">
      <form class="" action="air.php" method="post">
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label font-weight-bold">Enter City</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="inputPassword" placeholder="Search City">
          </div>
        </div>
      </form>
    </div>
    <hr>
    <div class="recent">
      <br>
      
      <div class="box row">
          <div class="col-md-4 sp">
            <div class="innerbox">
              <div class="inhherhead">
                <a href="" class="btn btn-outline-success"> Jaipur (AQI) </a>
              </div>
              <div  class="mmap" id='map1'> </div>
            </div>
          </div>
        <div class="col-md-4 sp">
          <div class="innerbox">
            <div class="inhherhead">
              <a href="" class="btn btn-outline-success"> Jaipur (PM2.5) </a>
            </div>
            <div  class="mmap" id='map2'> </div>
          </div>
        </div>
        <div class="col-md-4 sp">
          <div class="innerbox">
            <div class="inhherhead">
            <a href="" class="btn btn-outline-success"> Jaipur (PM10.) </a>
            </div>
            <div  class="mmap" id='map3'></div>
          </div>
        </div>
        <div class="col-md-4 sp">
          <div class="innerbox">
            <div class="inhherhead">
              <a href="" class="btn btn-outline-success"> Jaipur (Ozone)</a>
            </div>
            <div  class="mmap" id='map4'></div>
          </div>
        </div>
        <div class="col-md-4 sp">
          <div class="innerbox">
            <div class="inhherhead">
              <a href="" class="btn btn-outline-success"> Jaipur (Sulfur Dioxide.)</a>
            </div>
            <div  class="mmap" id='map5'></div>
          </div>
        </div>
        <div class="col-md-4 sp">
          <div class="innerbox">
            <div class="inhherhead">
              <a href="" class="btn btn-outline-success"> Jaipur (Carbon Monoxide.)</a>
            </div>
            <div  class="mmap" id='map6'></div>
          </div>
        </div>


        <script>
          var a = ["usepa-no2" ,"usepa-pm25" , "asean-pm10" , "usepa-o3" , "usepa-so2" , "usepa-co" ];
          for(var i = 1;i<=6; i++){
          var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
          var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';
          var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});
          var  WAQI_URL    =  "https://tiles.waqi.info/tiles/"+a[i-1]+"/{z}/{x}/{y}.png?token=_TOKEN_ID_";
          var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';
          var  waqiLayer  =  L.tileLayer(WAQI_URL,  {attribution:  WAQI_ATTR});
          var map  =  L.map('map'+i).setView([26.9124,  75.7873],  9);
          map.addLayer(osmLayer).addLayer(waqiLayer);
          }
        </script>
      </div>
    </div>

</div>

<?php include('footer.php')?>
