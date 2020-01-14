<?php include("adminheader.php"); ?>
<?php
  // if(!$_SESSION["admin"])
  // {
  // 	$_SESSION["message"]="Please login to continue !";
  // 	// header("Location:login.php");
  // }
?>
  <link rel="stylesheet" href="extra/style.css">
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

    <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4">Sidebar #09</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <script src="../lib/jquery.min.js"></script>
  <script src="../lib/Bootsrap/js/bootstrap.min.js"></script>
  <script src="extra/admindashboard.js"></script>
</body>
</html>
