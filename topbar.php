body{
  box-sizing: border box;
  background-color: #F3EFE0;
  margin: 0;
  padding: 0;
}
#temp{
  background-color: white;
}
.left{
  padding: 1.5%;
  background-color: white;
  display: inline-block;
  float: left;
  width: 47%;
  font-size: 40px;
}
#temp{
  background-color: white;
  overflow: auto;
  position: fixed;
  top: 5%;
  left: 5%;
  width: 90%;
  margin: auto;
  box-shadow: 5px 5px 10px lightgrey;
  border-radius: 5px;
}
.right{
  width: 47%;
  padding: 1.5%;
  background-color: white;
  display: inline-block;
  float: right;
}
ul{
  list-style-type: none;
  padding: 0;
  margin: 0;
}
a{
  text-decoration: none;
  border: 2px solid #2c774b;
  color: #2c774b;
  padding: 0.15em 0.6em;
  transition: all .3s;
}
li:hover a{
  background-color: lightgreen;
}
li{
  display: inline-block;
  cursor: pointer;
  padding: 15px 10px;
}
  <div id="temp">
    <div class="left">
      GoGreen
    </div>
    <div class="right">
      <ul>
        <li><a href="#">Event</a></li>
        <li><a href="#">Challenges</a></li>
        <li><a href="#">Issues</a></li>
        <li><a href="#">Nearby</a></li>
      </ul>
    </div>
  </div>
