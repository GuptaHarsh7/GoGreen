<div id="topbar">
  <div class="temp">
    <div class="left">
      <div class="img"></div>
      <a href="index.php"> GoGreen </a>
    </div>
    <div class="right">
      <ul>
        <li><a href="events.php" class="btn btn-sm btn-outline-success">Event</a></li>
        <li><a href="#" class="btn btn-sm btn-outline-success">Challenges</a></li>
        <li><a href="#" class="btn btn-sm btn-outline-success">Issues</a></li>
        <li><a href="#" class="btn btn-sm btn-outline-success">Nearby</a></li>
        <li><a href="#" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter">More</a></li>
        <li><a href="https://earth.nullschool.net/" class="btn btn-sm btn-outline-success" target="_blank">Login</a></li>
      </ul>
    </div>
    <div style="clear:both">

    </div>
  </div>


<script>
window.onscroll = function() {myFunction()};
var header = document.getElementsByClassName("temp")[0];
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>



<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>
        <ul>
          <li><a href="https://earth.nullschool.net"> Web View </a></li>
          <li><a href="info.php" class="">Envirentopedia</a></li><br>
          <li><a href="air.php" class="">Air</a></li><br>
          <li><a href="#" class="">Issues</a></li><br>
          <li><a href="#" class="">Nearby</a></li><br>
          <li><a href="gogreenbox.php" class="">GoGreen Box</a></li><br>
        </ul>
      </div>
    </div>
  </div>
</div>

</div>
