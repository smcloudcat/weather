<?php
   if($_GET["c"]=="tq"){
echo file_get_contents("http://tool.lq520.club:66/api/tq.php?city=".$_GET['city']."");
   }else
   if($_GET["c"]=="bm"){
echo file_get_contents("http://tool.lq520.club:66/api/citybm.php?city=".$_GET['city']."");
   }else
   {echo "无指令";}
   ?>