<?php
	//ตั้งค่าการเชื่อมต่อฐานข้อมูล
	$database_host 			= "172.18.111.41";
	$database_username 		= '5920310100';
	$database_password 		= '5920310100';
	$database_name 			= "5920310100_alist";

	$mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
	$mysqli->set_charset("utf8");

//กรณีมี Error เกิดขึ้น
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
		//เรียกข้อมูลจาก ตาราง chart 
		$get_data = $mysqli->query("SELECT * FROM chart");
		
		while($data = $get_data->fetch_assoc()){
			
			$result[] = $data;
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ข้อมูลการยืมทรัพยากรสารสนเทศแต่ละคณะ</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="shortcut icon" href="http://tanee.oas.psu.ac.th/images/favicon.ico" />
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
	include 'menu.php';
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
    <h2></h2> <br>   

        <!-- =================== การค้นหา =================== -->
        

		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		
		<table class="table" id="datatable">
			<thead>
				<tr>
					<th></th>
					<th>ทรัพยากรสนเทศ</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($result as $result_tb){
						echo"<tr>";
							echo "<td>".$result_tb['fac']."</td>";
							echo "<td>".$result_tb['namber']."</td>";
						
							
						echo"</tr>";
					}
				?>
			
			</tbody>
		</table>

		
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	
	<script>
	
	$(function () {
				
		$('#container').highcharts({
			data: {
				//กำหนดให้ ตรงกับ id ของ table ที่จะแสดงข้อมูล
				table: 'datatable'
			},
			chart: {
				type: 'column'
			},
			title: {
				text: 'ข้อมูลการยืมทรัพยากรสารสนเทศแต่ละคณะ'
			},
			yAxis: {
				allowDecimals: false,
				title: {
					text: 'จำนวนคน'
				}
			},
			
			tooltip: {
				formatter: function () {
					return '<b>' + this.series.name + '</b><br/>' +
						this.point.y; + ' ' + this.point.name.toLowerCase();
				}
			}
		});
	});
	
	</script>
	
	
	
	
	
	
	






	
  </body>
</html>

	

	
	
	
 













