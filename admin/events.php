<?php include("adminheader.php"); ?>
<?php
  // if(!$_SESSION["admin"])
  // {
  // 	$_SESSION["message"]="Please login to continue !";
  // 	// header("Location:login.php");
  // }
?>
  <link rel="stylesheet" href="extra/style.css">
  <link rel="stylesheet" href="extra/dashboard.css">
  <title>Admin Dashboard</title>
</head>
<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
      </div>
      <div class="img bg-wrap text-center py-4" style="background-image: url(../images/adminav.jpg);">
        <div class="user-logo">
          <div class="img" style="background-image: url(images/logo.jpg);"></div>
          <h3>Hello Admin</h3>
        </div>
      </div>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="dashboard.php"><i class="fas fa-adjust"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-bell mr-3 notif"></span>Issues</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-gift mr-3"></span>Challenges</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-trophy mr-3"></span>Events</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
        </li>
      </ul>

    </nav>

    <div id="content" class="events p-4 p-md-5 pt-5">

      <div class="row bg-title">
              <h2>Events</h2> <br> <br> <br>
      </div>

      <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
              <div style="padding:15px">
                <div class="card shadow-lg mb-5 bg-white rounded" style="width:100%;">
                  <img src="../images/adminav.jpg" width="100%" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tree Plantation</h5>
                    <div class="card-text">
                      <li><b>Start Time:</b> 10/12/19</li>
                      <li><b>End Time:</b> 10/12/19</li>
                      <li><b>Venue:</b> 550, party plot and more </li>
                      <li><b>Registration Fees:</b> 550</li>
                      <li><b>Hosted By:</b> 550</li>
                      <li><b>Contact No:</b> 550</li>
                      <li><b>Event details:</b> xyz.pdf </li>
                    </div>
                    <br>
                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                    <a href="#" class="btn btn-sm btn-primary">Approve</a>
                    <a href="#" class="btn btn-sm btn-danger">Decline</a>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
              <div style="padding:15px">
                <div class="card" style="width:100%;">
                  <img src="../images/adminav.jpg" width="100%" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Event 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
              <div style="padding:15px">
                <div class="card" style="width:100%;">
                  <img src="../images/adminav.jpg" width="100%" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Event 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
              <div style="padding:15px">
                <div class="card" style="width:100%;">
                  <img src="../images/adminav.jpg" width="100%" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Event 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
          </div>
      </div>

    </div>
  </div>

  <script src="../lib/jquery.min.js"></script>
  <script src="../lib/Bootsrap/js/bootstrap.min.js"></script>
  <script src="extra/admindashboard.js"></script>
</body>
</html>
