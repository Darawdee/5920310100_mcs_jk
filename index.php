
<!DOCTYPE html>
<html lang="en">
<title>ระบบสารสนเทศฯ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://tanee.oas.psu.ac.th/images/favicon.ico" />

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">


<style>
.mySlides {display:none;}
</style>

<body>
<?php
	include "menu.php";
?>

<center>
<a href="http://localhost/JK/%e0%b8%a3%e0%b8%b0%e0%b8%9a%e0%b8%9a%e0%b8%aa%e0%b8%b2%e0%b8%a3%e0%b8%aa%e0%b8%99%e0%b9%80%e0%b8%97%e0%b8%a8/index.php" ><h1 style="color:blue">ระบบสารสนเทศการยืมทรัพยากรสารสนเทศหอสมุดจอห์นเอฟ เคนเนดี้ วิทยบริการ มหาวิทยาลัยสงขลานครินทร์ วิยาเขตปัตตานี</h1></a>
<div class="w3-content w3-section" style="max-width:400px">
  <img class="mySlides" src="img\01.jpg" style="width:100%">
 
  <img class="mySlides" src="img\04.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<img  src="img\chart.jpeg" style="width:80%">


       
        <div align="center">
						<!-- &copy; 2009 John F Kennedy Library PSU Pattani Campus -->
						 <b>สงวนลิขสิทธิ์ &copy;2010-2011 หอสมุดจอห์น เอฟ เคนเนดี้ สำนักวิทยบริการ มหาวิทยาลัยสงขลานครินทร์. <a href="http://tanee.oas.psu.ac.th/">ติดต่อผู้ดูแลเว็บไซต์</a></b><br>เลขที่ 181 ถ.เจริญประดิษฐ์ ต.รูสะมิแล อ.เมือง จ.ปัตตานี 94000 โทรศัพท์ 0-7331-3486 โทรสาร 0-7333-3587<br>
						 Your IP : 171.7.231.165						 <br>
 						
						<table>
						<tr>
						<td valign="bottom">
						<script type="text/javascript" language="javascript1.1" src="http://tracker.stats.in.th/tracker.php?uid=16168"></script><noscript><a target="_blank" href="http://www.stats.in.th/">www.Stats.in.th</a></noscript>
						<p></p>
                        </td>
                        </div></br></table>
    
</body>
</html>



