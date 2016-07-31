<!DOCTYPE html>
<html>
<head>

	<title>ระบบตรวจสอบตารางสอบ นักศึกษา v.beta</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/layout.css">

	<style>

		table.t1 {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		table.t1 th {
			border: 1px solid #dddddd;
			background-color: #ffffcc;

			text-align: center;
			padding: 8px;
		}

		table.t1 td {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		table.t1 tr:nth-child(even) {
			background-color: #ccff99;
		}

		table.t2 {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 30%;
		}

		table.t2 th {
			border: 1px solid #dddddd;
			background-color: #ffffcc;
			text-align: center;
			padding: 8px;
		}

		table.t2 td {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		table.t2 tr:nth-child(even) {
			background-color: #ccccff;
		}


		table.t3 {
			background: #f5f5f5;
			border-collapse: separate;
			box-shadow: inset 0 1px 0 #fff;
			font-size: 15px;
			line-height: 24px;
			margin: 30px auto;
			text-align: left;
			width: 100%;
		}	

		table.t3 th {
			background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
			border-left: 1px solid #555;
			border-right: 1px solid #777;
			border-top: 1px solid #555;
			border-bottom: 1px solid #333;
			box-shadow: inset 0 1px 0 #999;
			color: #fff;
			font-weight: bold;
			padding: 10px 15px;
			position: relative;
			text-shadow: 0 1px 0 #000;	
		}

		table.t3 th:after {
			background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
			content: '';
			display: block;
			height: 25%;
			left: 0;
			margin: 1px 0 0 0;
			position: absolute;
			top: 25%;
			width: 100%;
		}

		table.t3 th:first-child {
			border-left: 1px solid #777;	
			box-shadow: inset 1px 1px 0 #999;
		}

		table.t3 th:last-child {
			box-shadow: inset -1px 1px 0 #999;
		}

		table.t3 td {
			border-right: 1px solid #fff;
			border-left: 1px solid #e8e8e8;
			border-top: 1px solid #fff;
			border-bottom: 1px solid #e8e8e8;
			padding: 10px 15px;
			position: relative;
			transition: all 300ms;
		}

		table.t3 td:first-child {
			box-shadow: inset 1px 0 0 #fff;
		}	

		table.t3 td:last-child {
			border-right: 1px solid #e8e8e8;
			box-shadow: inset -1px 0 0 #fff;
		}	

		table.t3 tr {
			background: url(http://jackrugile.com/images/misc/noise-diagonal.png);	
		}

		table.t3 tr:nth-child(odd) td {
			background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);	
		}

		table.t3 tr:last-of-type td {
			box-shadow: inset 0 -1px 0 #fff; 
		}

		table.t3 tr:last-of-type td:first-child {
			box-shadow: inset 1px -1px 0 #fff;
		}	

		table.t3 tr:last-of-type td:last-child {
			box-shadow: inset -1px -1px 0 #fff;
		}	

		table.t3 tbody:hover td {
			color: transparent;
			text-shadow: 0 0 3px #aaa;
		}

		table.t3 tbody:hover tr:hover td {
			color: #444;
			text-shadow: 0 1px 0 #fff;
		}

		input[type="text"] {
			width: 89%;
			font-size:18px;
		}

		input[type="submit"] {
			
			width: 10%;
			height: 2em;
		}

		.myButton {
			-moz-box-shadow:inset 0px 1px 0px 0px #caefab;
			-webkit-box-shadow:inset 0px 1px 0px 0px #caefab;
			box-shadow:inset 0px 1px 0px 0px #caefab;
			background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77d42a), color-stop(1, #5cb811));
			background:-moz-linear-gradient(top, #77d42a 5%, #5cb811 100%);
			background:-webkit-linear-gradient(top, #77d42a 5%, #5cb811 100%);
			background:-o-linear-gradient(top, #77d42a 5%, #5cb811 100%);
			background:-ms-linear-gradient(top, #77d42a 5%, #5cb811 100%);
			background:linear-gradient(to bottom, #77d42a 5%, #5cb811 100%);
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77d42a', endColorstr='#5cb811',GradientType=0);
			background-color:#77d42a;
			-moz-border-radius:6px;
			-webkit-border-radius:6px;
			border-radius:6px;
			border:1px solid #268a16;
			display:inline-block;
			cursor:pointer;
			color:#306108;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:6px 24px;
			text-decoration:none;
			text-shadow:0px 1px 0px #aade7c;
		}
		.myButton {
			-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
			-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
			box-shadow:inset 0px 1px 0px 0px #bbdaf7;
			background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
			background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
			background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
			background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
			background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
			background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
			background-color:#79bbff;
			-moz-border-radius:6px;
			-webkit-border-radius:6px;
			border-radius:6px;
			border:1px solid #84bbf3;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:15px;
			font-weight:bold;
			padding:6px 24px;
			text-decoration:none;
			text-shadow:0px 1px 0px #528ecc;
		}
		.myButton:hover {
			background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
			background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
			background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
			background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
			background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
			background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
			background-color:#378de5;
		}
		.myButton:active {
			position:relative;
			top:1px;
		}




		a.tooltip {outline:none; }
		a.tooltip strong {line-height:30px;}
		a.tooltip:hover {text-decoration:none;} 
		a.tooltip span {
			z-index:10;display:none; padding:14px 20px;
			margin-top:60px; margin-left:-10px;
			width:841px; line-height:16px;
		}
		a.tooltip:hover span{
			display:inline; position:absolute; 
			border:2px solid #FFF;  color:#EEE;
			/*background:#333 url(img/url.png) repeat-x 0 0;*/
		}
		.callout {z-index:20;position:absolute;border:0;top:-14px;left:120px;}

		/*CSS3 extras*/
		a.tooltip span
		{
			border-radius:2px;        
			box-shadow: 0px 0px 8px 4px #666;
			/*opacity: 0.8;*/
		}

		img,legend{border:0}body{margin:0;background:url(img/blue.gif) repeat-x #FFF}


	</style>

</head>
<body>
	<header>
		
		<center><font color="#ff6600" size="5">ระบบตรวจสอบตารางสอบนักศึกษา v.beta</font></center>


		

	</header>
	<div id='main'>

		<article>
			<font size="4"><b>โปรดระบุ URL รายวิชาของคุณ :</b></font>
			<form action="" method="POST">
				<input  id="style-3" type="text" name="url" required="true" autofocus>
				<input  class="myButton" type="submit" name="submit" value="Get">
			</form>

			<a href="#" class="tooltip">
				รูปแบบ URL <br>
				<span>
					
					<img src="img/url.png" " />
				</span>
			</a>

			<!--Second tooltip-->

			<font color="red">*เฉพาะ มหาวิทยาลัยเทคโนโลยีสุรนารี <u>เท่านั้น</u></font><br>
			<font color="red">**ตรวจสอบได้เฉพาะรายวิชาที่มีนักศึกษาสำนักวิชาเดียวกัน <u>เท่านั้น</u></font>

<!--			<table  Border = '1' Cellpadding = '5' Cellspacing = '5' >
				<tr>
					<center>
						<th align='center'>วิชา </th>
						<th colspan='2' align='center'>สอบกลางภาค วัน/เวลา</th>

						<th colspan='2' align='center'>สอบประจำภาค วัน/เวลา</th>
					</center>

				</tr>
			-->

			<?php
			if(!empty($_POST)){

				echo "

				<table class='t3' Border = '1' Cellpadding = '5' Cellspacing = '5' >
					<tr>
						<center>
							<th align='center'>วิชา </th>
							<th colspan='2' align='center'>สอบกลางภาค วัน/เวลา</th>

							<th colspan='2' align='center'>สอบประจำภาค วัน/เวลา</th>
						</center>

					</tr>
					";
				}else {
					echo "<br><br><br><br><center><font size='10'>Data Empty</font></center>";
				}

				function curl_get_file_contents($URL)
				{
					$c = curl_init();
					curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($c, CURLOPT_URL, $URL);
					$contents = curl_exec($c);
					curl_close($c);

					if ($contents) return $contents;
					else return FALSE;
				}

				function curl_get_file_contents_2($URL)
				{
					$c = curl_init();
					curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($c, CURLOPT_URL, $URL);
					$contents = curl_exec($c);
					curl_close($c);

					if ($contents) return $contents;
					else return FALSE;
				}


				function search_studen_list()
				{

					if(!empty($_POST)){

						$url = $_POST['url'];
						$s = curl_get_file_contents($url);
						$t =  iconv("tis-620", "utf-8", $s) ;
						$p = strip_tags($t,"<br>" );
						$p2 = strip_tags($t );
						$cs = strip_tags($s, '<BR>');
						$re_nbsp = str_replace("&nbsp;", ' ', $p2);
						$re_spb = str_replace(' ', '', $re_nbsp);
						$get_head_1 = strstr($p, 'รายวิชา');
						$get_head = substr($get_head_1, 0, strpos($get_head_1, 'กลุ่ม'));

//echo "$p2";
//
						echo "<br><br><center><font color='#ff0066' size='4'><b>$get_head</b></font></center><br>";
	//file_put_contents("cousr_html.txt", "$get_head", FILE_APPEND);  //// Log
	//file_put_contents("list.txt", "$re_spb", FILE_APPEND);  //// Log


						$add_data_to_array = explode("&nbsp;", $p2);
						$ori_data = explode("&nbsp;", $p2);

	//print_r($add_data_to_array);
	//
						$regex = "/^[B,M,D]{1}[0-9]{7}$/";
						$searchword = 'สถานภาพ';
						$matches = array();
						$_index = 0;

						for ($i=0; $i <= count($add_data_to_array) ; $i++) { 
							if (preg_match($regex, $add_data_to_array[0])) {
    // Indeed, the expression "[a-zA-Z]+ \d+" matches the date string
			//echo "Found a match!";
							} else {
    // If preg_match() returns false, then the regex does not
    // match the string
								array_shift($add_data_to_array);
			//echo "The regex pattern does not match. :(";
							}

							if(count($add_data_to_array) != 0){
								if(preg_match("/$searchword/i", $add_data_to_array[$i])) {
									$_index = $i;
			//echo "i = $_index <br>";
									break;
								}
							}

						}
						$total = count($add_data_to_array)-$_index;
						for ($j=0; $j < $total-1; $j++) { 
							array_pop($add_data_to_array);
						}



	//echo "====================================================================================== <br>";
	//echo "array <br>";
	//echo "size of add_data_to_array = ".count($add_data_to_array)."<br>";
						$data_arry = array();
						$get_index_blank = array();

						for ($i=0; $i < count($add_data_to_array); $i++) { 
							if(count($add_data_to_array) == 0){
								break;
							}else {
								if($add_data_to_array[$i] == ""){
				//echo "blank space at i = $i <br>";
									$get_index_blank[$i] = $i;


								}

							}

						}

						foreach ($get_index_blank as $key => $value) {
							unset($add_data_to_array[$key]);
						}

//echo "<br>###########################################################################<br>";
						for ($i=0; $i <= count($add_data_to_array)+3; $i++) { 
							if(count($add_data_to_array) == 0){
								break;
							}else {
			//echo "รหัส $add_data_to_array[0] ชื่อ $add_data_to_array[1] <br>";
								get_data($add_data_to_array[0],$add_data_to_array[1]);
								for($i = 0 ; $i < 3 ; $i ++){
									array_shift($add_data_to_array);

								}
							}
						}
//echo "<br>###########################################################################<br>";



					}

///
///
/////end function search student list
				}










				function get_data($id,$name){
					require_once "Process.php";
					$process = new Process();
	//echo "$id <br>";
					global $date_arr_1;
					global $date_arr_2;
					$id_re = str_replace("B", '1', $id);

	//http://reg.sut.ac.th/registrar/learn_time.asp?studentid=15601233&f_cmd=2&studentname=วุฒินันท์ ชาวยศ
					$url = "http://reg.sut.ac.th/registrar/learn_time.asp?studentid=$id_re&f_cmd=2";
	//echo "$url <br>";

					$s = curl_get_file_contents_2($url);
					$t =  iconv("tis-620", "utf-8", $s) ;
					$p = strip_tags($t,"<br>" );
					$p2 = strip_tags($t );
					$cs = strip_tags($s, '<BR>');
					$p = substr($p, 0, strpos($p, 'หมายเหตุ'));
					$s1 = strstr($p, 'ตารางสอบรหัสวิชาชื่อรายวิชากลุ่มสอบกลางภาคสอบประจำภาค');
					$s3 = str_replace('ตารางสอบรหัสวิชาชื่อรายวิชากลุ่มสอบกลางภาคสอบประจำภาค', '', $s1);
					$s4 = str_replace("&nbsp;&nbsp;", '*', $s3);
	//$s4 = str_replace("--", '*', $s4);
					$journalName = str_replace(' ', '', $s4);

					$s4 = $journalName;
					$s5 = str_replace("<BR>", '*', $s4);





//file_put_contents("log.txt", "$s5", FILE_APPEND);  //// Log
//file_put_contents("log-html.txt", "$p", FILE_APPEND);  //// Log
/*echo "<font color='red'>URL is {$url}</font>";
echo "<br><br><font color='blue'>Original ข้อมูลทั้งหมด ที่ถูกตัด tag html แล้ว</font><br>";
echo "$p2<BR>";
echo "<br>========================================================<br>";
echo "<font color='blue'>done !!! ข้อมูลที่ได้เฉพาะตารางสอบของแต่ละรายวิชา</font><br>";
echo "$s5";

echo "<br>========================================================<br>";
echo "array !!!<br>";
*/
////////////// explode *  ////////////////
///


///
///

$ex_s5 = explode('*', $s5);
$ex_s5_2 = array();




$or_data_1 = explode('*', $s5);
$or_data_2 = explode('*', $s5);
$size_ex = count($ex_s5);
$d_sub = array();
$ok_del = array();

$date_ex_1 = array();

$date_ex_2 = array();


$regex = "/^\d{6}[a-zA-Z]*/";
$count = 0;



//echo "check ex_s5 == null <br>";
if($ex_s5[0] == ""){
		//unset($ex_s5[0]);
	array_splice($ex_s5, 0, 1);
}


//print_r($ex_s5);
//echo "<br>";






foreach ($ex_s5 as $key => $val) {
	

	if (preg_match($regex, $val)) {

		//echo "<font color='red'>Found a match! </font><br>";
		//echo "{$key} => {$val} <br>";
		$count++;



	} else {

		//echo "<font color='blue'>The regex pattern does not match. :( </font><br>";
		//echo "{$key} => {$val} <br>";

	}
}


$searchword = '--';
$matches = array();
foreach($or_data_1 as $k=>$v) {
	if(preg_match("/$searchword/i", $v)) {
        //$matches = $v;
		array_push($matches,$v);
		//echo "++++++++++++++ $v ++++++++++++++++<br>";
		unset($or_data_1[$k]);
	}
}

echo "<td colspan='4'><font color='#0066ff'><b>$name</b></font></td>";
//echo "size of ex_s5 = ".count($ex_s5)."<br>";
//echo "size of matches = ".count($matches)."<br>";
//echo "count sub = ".$count."<br>";
	//echo "***************************<br>";
$count_date_1 = 0;
$count_date_2 = 0;
$get_date_1 = array();
$get_date_2 = array();
for($i = 0 ; $i <= 100 ;$i ++){
	//echo "size of ex_s5 in Loop = ".count($ex_s5)."<br>";
	//echo "i = $i <br>";
	if(count($ex_s5) == 0){
		break;
	}else {


		$get_sub_and_tb =  explode('-', $ex_s5[2] );
		//echo "size of get_sub_and_tb = ".count($get_sub_and_tb)."<br>";
		$find__ =  explode('--', $ex_s5[2] );

		//echo "size get_sub_and_tb = ".count($get_sub_and_tb)."<br>";
		//echo "......................................................<br>";
		//echo "size of find = ".count($find__)."<br>";
		//echo "<br>......................................................<br>";
		//echo "<br>%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%<br>";
		//secho "sixe of find__ = ".count($find__)."<br>";

		if(count($get_sub_and_tb ) == 1){ /// มีสอบทั้ง 2
			$explode_C =  explode('(C)', $ex_s5[2] );  //แยกชื่อวิชา กับ เวลาสอบออกจากัน
			
			//echo "<br>explode_C <br>";
			//print_r($explode_C);
			//echo "<br>";

			$repace_C = str_replace('(C)', '', $ex_s5[5]);
			//$process -> exam_A($explode_C,$repace_C,$ex_s5);
			$str_date_1 = "$explode_C[1] $ex_s5[3]";
			$str_date_2 = "$repace_C $ex_s5[6]";
			//$show_date = array();
			//array_push($show_date, $str_date_1);


			$process -> check_date_exam_A($str_date_1);
			$process -> check_date_exam_B($str_date_2);

			echo "
			<tr><td>$ex_s5[0] $ex_s5[1] $explode_C[0] </td>
				<td colspan='2'>$explode_C[1] $ex_s5[3]</td>
				<td colspan='2'>$repace_C $ex_s5[6]</td>
			</tr>
			";
			

			//$process -> table($sub_no,$sub_name,$ex_1,$time_1,$ex_2,$time_2);

			for($j = 8 ; $j >= 0 ; $j --){
				array_shift($ex_s5);
				//echo "size of ex_s5 = ".count($ex_s5)."<br>";

			}


		}else if(count($get_sub_and_tb) == 2){  /// ไม่มีสอบกลางภาค มีสอบปลายภาค
			//echo "found  .................. <br>";
			$exlode_F = explode('(C)', $ex_s5[2]);

			$str_date_2_2 = "$exlode_F[1] $ex_s5[3]";
			$process -> check_date_exam_B($str_date_2_2);

			echo "
			<tr><td> $ex_s5[0] $ex_s5[1] $exlode_F[0]</td>
				<td  colspan='2'> <font color='red'>ไม่มีสอบกลางภาค</font></td>
				<td  colspan='2'> $exlode_F[1] $ex_s5[3]</td>
			</tr>
			";
			

			for($k = 5 ; $k >= 0 ; $k --){
				array_shift($ex_s5);
				//echo "size of ex_s5 = ".count($ex_s5)."<br>";

			}

		}else if(count($find__) == 2){  /// ไม่มีสอบกลางภาคและปลายภาค
			$exlode_G = explode('--', $ex_s5[2]);
			echo "
			<tr><td> $ex_s5[0] $ex_s5[1] $exlode_G[0]</td>
				<td  colspan='2'> <font color='red'>ไม่มีสอบกลางภาค</font> </td>
				<td  colspan='2'> <font color='red'>ไม่มีสอบกลางภาค</font></td>
			</tr>
			";

			for($p = 2 ; $p >= 0 ; $p --){
				array_shift($ex_s5);
				//echo "size of ex_s5 = ".count($ex_s5)."<br>";

			}
		}

	}


}


/*

echo "size of matches = ".count($matches)."<br>";
if(count($matches) > 1) {
	$explode_2 =  explode('--', $matches[0]);
	echo "<br>size of explode_2 = ".count($explode_2);
	echo "<br>**********************************************************<br>";
	print_r($explode_2);
	echo "<br>**********************************************************<br>";


	echo "<br>===========================================================<br>";
	print_r($matches);
	echo "<br>===========================================================<br>";
	$explode_3 =  explode('--', $matches[1]);
	echo "<br>size of explode_2 = ".count($explode_3);
	echo "<br>###########################################################<br>";
	print_r($explode_3);
	echo "<br>###########################################################<br>";

//////////////////////////////////////
///

	for($j = 0 ; $j < count($matches) ; $j++){
		if(count($explode_2) > 1){
		//echo "size of explode_2 = ".count($explode_2)."<br>";
		//echo "วิชา ".$ex_s5[0]." ".$explode_2[0]."<br>" ;
		//echo "ไม่มีสอบกลางภาค <br>";
		//echo "ไม่มีสอบประจำภาค <br>";


			//$process -> exam_N0($ex_s5[0],$explode_2[0]);

			echo "
			<tr><td>*******$ex_s5[0] $explode_2[0]</td>
				<td colspan='2'>ไม่มีสอบกลางภาค</td>
				<td colspan='2'>ไม่มีสอบประจำภาค</td>
			</tr>
			";
		//print_r($explode_2);
			unset($explode_2[0]);
			array_shift($ex_s5);
			array_shift($ex_s5);



			print_r($explode_2);
		}	else if(count($explode_2) == 1){
		//echo "size of explode_2 = ".count($explode_2)."<br>";
			$replace_str = str_replace('--', '', $ex_s5[0]);
		//echo "วิชา ".$explode_2[1]." ".$replace_str."<br>" ;
		//echo "ไม่มีสอบกลางภาค <br>";
		//echo "ไม่มีสอบประจำภาค <br>";

			$process -> exam_N1($explode_2[1],$replace_str);

			echo "

			<tr><td>+++++++++ $explode_2[1] $replace_str</td>
				<td colspan='2'>ไม่มีสอบกลางภาค</td>
				<td colspan='2'>ไม่มีสอบประจำภาค</td>
			</tr>
			";

			array_shift($ex_s5);

		}
	}




///
//////////////////////////////////////




}else if(count($matches) == 2){
	$explode_3 =  explode('--', $matches[1]);
}
*/



}

require_once "Process.php";
$ps = new Process();

if (!empty($_POST)){

	//get_data("B5613007","วุฒินันท์ ชาวยศ");
	search_studen_list();
	echo "</table>";
	echo "<br><br>
	<center>
		<table class='t2' Border = '1'>
			<tr>
				<th><font color='red'><b>กลางภาค</b></font></th>
			</tr>
			";
			$ps -> write_date_A();
			echo"</table>";

			echo "</table>";
			echo "<br><br>
			<table class='t2' Border = '1' >
				<tr>
					<th><font color='red'><b>ประจำภาค</b></font></th>
				</tr>
				";
				$ps -> write_date_B();
				echo"</table><center>";




			}








/*

echo "<br>Original ex_s5 <br>";
foreach ($ex_s5 as $key => $value) {

	echo "{$key}  => {$value} <br>";
}




echo "<br>========================================================<br>";


echo "<br>Original <br>";
foreach ($or_data_2 as $key => $value) {

	echo "{$key}  => {$value} <br>";
}




echo "<br>========================================================<br>";


echo "<br>Delete -- <br>";
foreach ($or_data_1 as $key => $value) {

	echo "{$key}  => {$value} <br>";
}




echo "<br>========================================================<br>";


echo "<br>tmp delete from array <br>";
foreach ($matches as $key => $value) {

	echo "{$key}  => {$value} <br>";
}




echo "<br>========================================================<br>";
/*




echo "<br>------------------------------------------------------------<br>";

foreach ($ex_s5 as $key => $value) {

	echo "{$key}  => {$value} <br>";
}
echo "<br>------------------------------------------------------------<br>";
*/







?>




<!-- Histats.com  (div with counter) -->
<center>
	<br><br>
	<div id="histats_counter"></div>
	<!-- Histats.com  START  (aync)-->
	<script type="text/javascript">var _Hasync= _Hasync|| [];
		_Hasync.push(['Histats.start', '1,3539031,4,10,200,40,00011111']);
		_Hasync.push(['Histats.fasi', '1']);
		_Hasync.push(['Histats.track_hits', '']);
		(function() {
			var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
			hs.src = ('//s10.histats.com/js15_as.js');
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
		})();</script>
		<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3539031&101" alt="" border="0"></a></noscript>
		<!-- Histats.com  END  -->
	</center>

</article>
<nav></nav> <!-- Left side -->
<aside></aside><!-- Right side -->
</div>
<br> <br> <br>
<footer>

	<?php include 'footer.php'; ?>

</footer>
</body>
</html>
