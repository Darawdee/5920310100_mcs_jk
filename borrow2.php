<?php

session_start();

if (!$_SESSION['userid']) {
	header("Location: index2.php");
} else {

?>
	<!DOCTYPE html>
	<html lang="en">
	<title>ระบบสารสนเทศฯ</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2020.2.513/styles/kendo.default-v2.min.css" />

	<script src="https://kendo.cdn.telerik.com/2010.2.513/js/jquery.min.js"></script>


	<script src="https://kendo.cdn.telerik.com/2020.2.513/js/kendo.all.min.js"></script>

	<body>
		<?php
		//include "login.php";
		include "menu.php";

		?>




		<center>
			<table>
				<h3>การยืมทรัพยากรสารสนเทศ</h3>

				<td>
					<form id="form1" name="form1" method="post" action="">
						<br>
						<br>
						<span class="mylabel">ประเภททรัพยากรสารสนเทศ : </span>
						<select name="call_no" id="call_no">
							<option value=00> -- เลือก --</option>
							<option value=0>วิทยาการคอมพิวเตอร์ สารสนเทศ และความรู้ทั่วไป</option>
							<option value=1>ปรัชญา</option>
							<option value=2>ศาสนา</option>
							<option value=3>สังคมศาสตร์</option>
							<option value=4>ภาษา</option>
							<option value=5>วิทยาศาสตร์</option>
							<option value=6>เทคโนโลยี</option>
							<option value=7>ศิลปะและนันทนาการ</option>
							<option value=8>วรรณคดี</option>
							<option value=9>ประวัติศาสตร์และภูมิศาสตร์</option>
							<option value=น>นวนิยาย</option>
							<option value=ก>วารสาร</option>
							<option value=CD>โสตทัสนวัสดุ CD</option>
							<option value=DVD>โสตทัสนวัสดุ DVD</option>
						</select><p></p>
						


						<br>
						<span class="mylabel">คณะที่ศึกษา : </span>
						<select name="fac_name_thai" id="facu_name_thai">
							<option value=''> -- เลือก --</option>
							<option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
							<option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
							<option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
							<option value="บัณฑิตวิทยาลัย">บัณฑิตวิทยาลัย</option>
							<option value="วิทยาลัยอิสลามศึกษา">วิทยาลัยอิสลามศึกษา</option>
							<option value="คณะวิทยาการสื่อสาร">คณะวิทยาการสื่อสาร</option>
							<option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
							<option value="คณะรัฐศาสตร์">คณะรัฐศาสตร์</option>
							<option value="คณะพยาบาลศาสตร์ วิทยาเขตปัตตานี">คณะพยาบาลศาสตร์ วิทยาเขตปัตตานี</option>
						</select><p></p>

						<br>
						<span class="mylabel">หน่วยงาน : </span>
						<select name="faculty_name_thai" id="faculty_name_thai">
							<option value=''> -- เลือก --</option>
							<option value="ส่วนกลางมหาวิทยาลัย">ส่วนกลางมหาวิทยาลัย</option>
							<option value="สำนักงานอธิการบดี">สำนักงานอธิการบดี</option>
							<option value="สำนักงานอธิการบดี วิทยาเขตปัตตานี">สำนักงานอธิการบดี วิทยาเขตปัตตานี</option>
							<option value="หน่วยคอมพิวเตอร์ วิทยาเขตปัตตานี">หน่วยคอมพิวเตอร์ วิทยาเขตปัตตานี</option>
							<option value="สำนักวิจัยและพัฒนา">สำนักวิจัยและพัฒนา</option>
							<option value="สำนักส่งเสริมและการศึกษาต่อเนื่อง">สำนักส่งเสริมและการศึกษาต่อเนื่อง</option>
							<option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
							<option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
							<option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
							<option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
							<option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
							<option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
							<option value="คณะทรัพยากรธรรมชาติ">คณะทรัพยากรธรรมชาติ</option>
							<option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
							<option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
							<option value="คณะทันตแพทยศาสตร์">คณะทันตแพทยศาสตร์</option>
							<option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
							<option value="บัณฑิตวิทยาลัย">บัณฑิตวิทยาลัย</option>
							<option value="สำนักวิทยบริการ">สำนักวิทยบริการ</option>
							<option value="ศูนย์เครื่องมือวิทยาศาสตร์">ศูนย์เครื่องมือวิทยาศาสตร์</option>
							<option value="วิทยาลัยอิสลามศึกษา">วิทยาลัยอิสลามศึกษา</option>
							<option value="สถาบันวัฒนธรรมศึกษากัลยาณิวัฒนา">สถาบันวัฒนธรรมศึกษากัลยาณิวัฒนา</option>
							
						</select><p></p>
						<br>
						<span class="mylabel">ประเภทผู้ใช้บริการ: </span>
						<select name="description" id="description">
							<option value=''> -- เลือก --</option>
							<option value="นักศึกษาปริญญาตรี">นักศึกษาปริญญาตรี</option>
							<option value="บัณฑิตวิทยาลัย">นักศึกษาบัณฑิตศึกษา</option>
							<option value="อาจารย์">อาจารย์</option>
							<option value="บุคคลภายนอกนักศึกษา(ยืมได้)">บุคคลากร</option>
							<option value="บุคคลภายนอกทั่วไป(ยืมได้)">บุคคลภายนอก</option>
						</select><p></p>

						<br>
						<span class="mylabel">ปี: </span>
						<select name="date1" id="date1">
							<option value=''> -- เลือก --</option>
							<option value="date1">ปีการศึกษา</option>
							<option value="date1">ปีงบประมาณ</option>
							

						</select><p></p>

						<br>

						<span class="mylabel">ช่วงเวลา:
							<div class="demo-section k-content wide" style="display: inline-block;">

								
								<div id="daterangepicker" title="daterangepicker"></div>
							</div>
				</td>
				</tr>
						

	

	





				<tr>
					<center>
						<td height="50" colspan="5" align="center"><input type="submit" name="Submit" value="ค้นหา" />
							
								
					</center>
					
				</tr>
				</form>
				
			</table>
			<script>
				$(document).ready(function() {
					$("#daterangepicker").kendoDateRangePicker();
				});
			</script>
			<?php
			include "db_link.php";
			require "function.php";

			
			//$x1 = $_POST['call_no'];
			$x1 = '';
			$x2 = '';
			$x3 = '';
			$x4 = '';
			$x5 = '';


			if (isset($_POST['call_no'])) {
				//$x1.= "SELECT * FROM cir2 WHERE call_no LIKE '%".$x1."%' ";
				$x1 = $_POST['call_no'];

				//echo "$x1";
			}
			if (isset($_POST['fac_name_thai'])) {
				$x2 = $_POST['fac_name_thai'];

				//echo "$x2";
			}
			if (isset($_POST['faculty_name_thai'])) {
				$x3 = $_POST['faculty_name_thai'];

				//echo "$x3";
			}
			if (isset($_POST['description'])) {
				$x4 = $_POST['description'];

				//echo "$x4";
			}
			if (isset($_POST['date1'])) {
				$x5 = $_POST['date1'];

				//echo "$x5";
			}




			?>
			<?php

			
			//if((isset($x1))&&(isset($x2))&&(isset($x3))&&(isset($x4))) {
				if (isset($_POST['call_no']) || (isset($_POST['fac_name_thai'])) || (isset($_POST['faculty_name_thai'])) || (isset($_POST['description']))) {
				
			$sql = "select c4.date1 as date,c4.time1 as time,c4.staff as staff,c4.patron_name ,c4.patron_barcode,c4.call_no,c4.item_title ,fc.fac_name_thai,f.faculty_name_thai ,cm.description from cir2 as c4 
					INNER JOIN cirmember as cmb on cmb.membercode=c4.patron_barcode
					INNER JOIN alist_faculty as f on f.faculty_id=cmb.faculty
					 INNER JOIN cirmembertype as cm on cm.membertype = cmb.membertype
					 INNER JOIN r_faculty_alist as fc on fc.fac_id=f.faculty_id
	
	where c4.call_no LIKE '$x1%' AND fc.fac_name_thai LIKE '$x2%' AND f.faculty_name_thai LIKE '$x3%' AND cm.description LIKE '$x4%'";
			// echo "ค้นหา4ตัว";
			//echo $sql;
			$result = mysqli_query($conn, $sql);
		
			
			//echo "<table class='w3-table-all w3-card-4' style = 'width: 10%'>";

			?>
			<?php
			//if (isset($_POST['call_no']) || (isset($_POST['fac_name_thai'])) || (isset($_POST['faculty_name_thai'])) || (isset($_POST['description']))) {
				//if ($sql) {
					
			"<body>";
			
			echo "<table border='1' align='center' class='table table-hover'>";
				
			echo "<tr align='center' bgcolor='#CCCCCC'>
    
	
	<td>วันเดือนปี</td>
	

	<td>ชื่อเจ้าหน้าที่บริการ</td>
	<td>ชื่อผู้ยืม</td>
	<td>บาร์โค้ตของผู้ยืม</td>
	<td>เลขหนังสือ</td>
	
	
	<td>ชื่อหัวข้อหนังสือ</td>
	<td>คณะที่ศึกษา</td>
	<td>หน่วยงาน</td>
	<td>ผู้ใช้บริการ</td>

   
   
   </tr>";
			}
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

				 
				echo "<tr>"; //. date("Y/m/d")
				//echo "<td>" .$row['id']. "</td> ";
				//echo "<td>" .substr($row['date'])."</td> ";
				echo "<td>" . convert_date($row['date']) .  "</td> ";
				//   echo "<td>" .ไม่พบ ."</td>";
				//echo "<td>" .$row['date'].  "</td> ";
				//echo "<td>" . substr($row['time'], 0, 2) . "." . substr($row['time'], 3, 2) . "น." .  "</td> ";
				//echo "<td>" .$row['time']. "</td> ";
				echo "<td>" . $row['staff'] .  "</td> ";
				echo "<td>" . $row['patron_name'] .  "</td> ";
				echo "<td>" . $row['patron_barcode'] .  "</td> ";
				echo "<td>" . $row['call_no'] .  "</td> ";
				//echo "<td>" .convert_type(@$row['patron_type']) .  "</td> ";
				//echo "<td>" .$row['item_barcode'] .  "</td> ";
				echo "<td>" . $row['item_title'] .  "</td> ";
				echo "<td>" . $row['fac_name_thai'] .  "</td> ";
				echo "<td>" . $row['faculty_name_thai'] .  "</td> ";
				echo "<td>" . $row['description'] .  "</td> ";
				
				
				 
			}



			?>




		</center>
		<?php
		
		mysqli_close($conn);
		?>
		<div align="center"><body><?php echo $_SESSION['user']; ?><p>
		<a href="logout.php">Logout</a></p></body>
		</div>

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


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>User Page</title>

		<link rel="stylesheet" href="style.css">

	</head>

	

	</html>
<?php
}
?>