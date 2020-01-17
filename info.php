<?php include("header.php"); ?>
<title>GoGreen</title>
<link rel="stylesheet" href="css/info.css">
</head>
<body>

<?php include("topbar.php") ?>
<div id="info">
      <div class="topmenu">
        <div class="containermain"> </div>
        <div class="centered1">GoGreen</div>
        <div class="centered2">Every info you need to know!!</div>
        <div class="bottom-center">
            <div class="tablinks selectedtab" onclick="function1(event,'treatment')"> <div class="vertical"> Authorities </div>  </div>
            <div class="tablinks" onclick="function1(event,'hospitals')"> <div class="vertical"> Standards </div>  </div>
            <div class="tablinks" onclick="function1(event,'doctors')"> <div class="vertical"> Measures </div>  </div>
            <div class= "clear"></div>
        </div>
      </div>


         <div id="treatment" class="subcontent">
           <div class="treat">
            Authorities here
          </div>
         </div>

        <div id="hospitals" class="subcontent">
          <div class="treat">
           Standards here
         </div>
       </div>

       <div id="doctors" class="subcontent">
         <div class="treat">
          Measures here
        </div>
      </div>

      <script type="text/javascript">
      document.getElementsByClassName("tablinks")[0].click();
        function function1(event,id){

           var i, subcontent, sublinks;
                 subcontent = document.getElementsByClassName("subcontent");
                  sublinks = document.getElementsByClassName("tablinks");


                 for (i = 0; i < subcontent.length; i++) {
                   subcontent[i].style.display = "none";
                   }

                   for (i = 0; i < sublinks.length; i++) {
                     sublinks[i].className = sublinks[i].className.replace(" selectedtab", "");
                    }
                    console.log(id);
                    document.getElementById(id).style.display = "block";
                    event.currentTarget.className += " selectedtab";

        }
      </script>
</div>

<?php include('footer.php')?>
