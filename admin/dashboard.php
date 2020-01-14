<?php include("../header.php"); ?>
<?php
  if(!$_SESSION["admin"])
  {
  	$_SESSION["message"]="Please login to continue !";
  	header("Location:login.php");
  }
?>
  <link rel="stylesheet" href="../css/adminlogin.css">
  <title>Admin Dashboard</title>
</head>
<body>
  <?php include("../topbar.php"); ?>
</body>
</html>
