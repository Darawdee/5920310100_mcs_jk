<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
<?php
include "menu.php";
?>
<center>
<h2>ข้อมูลสถิติการยืมทรัพยากรสารสนเทศ</h2>

<div class="dropdown">
  <button class="dropbtn">ประเภทข้อมูล</button>
  <div class="dropdown-content">
    <a href="chart1.php">ข้อมูลทรัพยากร</a>
	<a href="chart3.php">ข้อมูลผู้ใช้บริการ</a>
    <a href="chart2.php">ข้อมูลปีพ.ศ.</a>
    
  </div>
</div>
<p></p>

</center>
<div align="center">
			<!-- &copy; 2009 John F Kennedy Library PSU Pattani Campus -->
			<b>สงวนลิขสิทธิ์ &copy;2010-2011 หอสมุดจอห์น เอฟ เคนเนดี้ สำนักวิทยบริการ มหาวิทยาลัยสงขลานครินทร์. <a href="http://tanee.oas.psu.ac.th/">ติดต่อผู้ดูแลเว็บไซต์</a></b><br>เลขที่ 181 ถ.เจริญประดิษฐ์ ต.รูสะมิแล อ.เมือง จ.ปัตตานี 94000 โทรศัพท์ 0-7331-3486 โทรสาร 0-7333-3587<br>
			Your IP : 171.7.231.165 <br>

			<table>
				<tr>
					<td valign="bottom">
						<script type="text/javascript" language="javascript1.1" src="http://tracker.stats.in.th/tracker.php?uid=16168"></script><noscript><a target="_blank" href="http://www.stats.in.th/">www.Stats.in.th</a></noscript>
						<p></p>
					</td>
		</div></br></table>

</body>
</html>
