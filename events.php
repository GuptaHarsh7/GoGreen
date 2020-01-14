<?php include("header.php"); ?>
<link rel="stylesheet" href="css/adminlogin.css">
<link rel="stylesheet" href="css/events.css">
<title>Events</title>
</head>
<body>
<?php include("topbar.php"); ?>

<?php
  if(isset($_POST['host']) && ! empty ($_POST['host']))
  {
    $event_name=mysqli_real_escape_string($conn,$_POST['event-name']);
    $type=mysqli_real_escape_string($conn,$_POST['type']);
    $venue=mysqli_real_escape_string($conn,$_POST['venue']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $start_date=mysqli_real_escape_string($conn,$_POST['start-date']);
    $end_date=mysqli_real_escape_string($conn,$_POST['end-date']);
    // $event_name=mysqli_real_escape_string($conn,$_POST['event-name']);

    $query="Insert into `event` (`name`,`type`,`venue`,`city`,`start-date`,`end-date`,`registrations`,`active`,`host`,`description`) values('$event_name','$type','$venue','$city','$start_date','$end_date','1','0','dhruv','file')";
    $result=$db->insertQuery($query);
    header("Location:events.php");
  }
?>

<div class="modal fade" id="hostevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Host A New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" method="post" action="events.php">
          <div class="row">
          	<div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Event Name</label>
            <input type="text" class="form-control" name="event-name"  placeholder="Enter event name" required>
          </div>
            </div>
          </div>
          <div class="row">
          	<div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Type</label>
            <select class="form-control" name="type">
              <option value="cleanliness">Cleanliness Drive</option>
              <option value="tree-plantation">Tree plantation</option>
              <option value="awareness">Awareness</option>
              <option value="other">Other</option>
            </select>
          </div>
            </div>
          </div>
          <div class="row">
          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Venue</label>
            <input type="text" class="form-control" name="venue"  placeholder="Enter Venue" required>
          </div>
            </div>
            <div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">City</label>
            <input type="text" class="form-control" name="city"  placeholder="Enter City" required>
          </div>
            </div>
          </div>
          <div class="row">
          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Start Date</label>
            <input type="date" class="form-control" name="start-date"  placeholder="Enter start date" required>
          </div>
            </div>
            <div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">End Date</label>
            <input type="date" class="form-control" name="end-date"  placeholder="Enter end  date" required>
          </div>
            </div>
          </div>
          <div class="row">
          	<div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Description</label><br>
            <input type="file"  name="description"  placeholder="Enter Description" required>
          </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="host" value="host" class="btn btn-secondary">Host!</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="events-body">

  <div class="new-event">
    <button type="button" class="btn btn-success btn-lg  float-right" data-toggle="modal" data-target="#hostevent">Host An Event!</button>
  </div>
<br>
<br>
<br>
  <div class="current_events">
    <h3 style="text-align:center;">Current Events</h3>
    <div class="row">
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
    </div>
  </div>

  <div class="past_events">
    <h3 style="text-align:center;">Past Events</h3>
    <div class="row">
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
      <div class="col-md-4">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Event name</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Dates</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12 - Dec 12</div>
               <p class="card-text mb-auto">Venue : ____</p>
               <div class="">
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">Register</a>
                 <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/" style="display:inline;">More Info</a>
               </div>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: auto;">
         </div>
      </div>
    </div>
  </div>
</div>
