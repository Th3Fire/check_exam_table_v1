<?php
/**
* 
*/
class Process
{
	private static $arr_A = array();
	private static $arr_B = array();

	public static function exam_N($ex_s5,$get_sub_and_tb,$get_tb){
		//$get_tb = str_replace("(C)", "", $get_sub_and_tb[1]);
		
		
		//echo "วิชา $ex_s5[0] $get_sub_and_tb[0] <br>";
		//echo "ไม่มีสอบกลางภาค <br>";
		//echo "สอบประจำภาค $get_tb $ex_s5[2]<br>";
		//echo "***************************<br>";
		
		
		return 0;
	}

	public static function exam_A($explode_C,$repace_C,$ex_s5){
		//$get_tb = str_replace("(C)", "", $get_sub_and_tb[1]);
		
		//echo "วิชา ".$ex_s5[0]." ".$explode_C[0]."<br>" ;
		//echo "สอบกลางภาค  $explode_C[1] $ex_s5[2]<br>" ;
		//echo "สอบประจำภาค $repace_C $ex_s5[5]<br> ";
		//echo "***************************<br>";


		return 0;
		
	}

	public static function exam_N0($ex_s5,$explode_2){
		//$get_tb = str_replace("(C)", "", $get_sub_and_tb[1]);
		
		//echo "วิชา ".$ex_s5." ".$explode_2."<br>" ;
		//echo "ไม่มีสอบกลางภาค <br>";
		//echo "ไม่มีสอบประจำภาค <br>";
		//echo "***************************<br>";
		return 0;
		
	}

	public static function exam_N1($explode_2,$replace_str){
		//$get_tb = str_replace("(C)", "", $get_sub_and_tb[1]);
		
		//echo "วิชา ".$explode_2." ".$replace_str."<br>" ;
		//echo "ไม่มีสอบกลางภาค <br>";
		//echo "ไม่มีสอบประจำภาค <br>";
		//echo "***************************<br>";
		return 0;
		
	}

	

	public static function table($sub_no,$sub_name,$ex_1,$time_1,$ex_2,$time_2){

		$html = "
		
		<td>$sub_no $sub_name</td>
		<td colspan='2'>$ex_1 &nbsp&nbsp $time_1</td>

		<td colspan='2'>$ex_2 &nbsp&nbsp $time_2</td>


		
		";
		echo $html;
		return 0;
	}



	public static function curl_get_file_contents($URL)
	{
		$c = curl_init();
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_URL, $URL);
		$contents = curl_exec($c);
		curl_close($c);

		if ($contents) return $contents;
		else return FALSE;
	}

	public static function check_date_exam_A ($date){

		//echo "<br>in function A <br>";
		//print_r(self::$arr_A);

		if(in_array($date, self::$arr_A)){
			//echo "found $date <br>";
		}else {


			array_push(self::$arr_A,$date);

		}
		//	foreach (self::$arr_A as $key => $value) {
				//file_put_contents("log_date_1.txt",  "$date\n", FILE_APPEND);
		//	}


		//}

		return 0;

	}
	public static function check_date_exam_B ($date){

		//echo "<br>in function B <br>";
		//print_r(self::$arr_B);

		if(in_array($date, self::$arr_B)){
			//echo "found $date <br>";

		}else {

			array_push(self::$arr_B,$date);
		}

		//}

		return 0;

	}
	public static function check_duplicate (){
		echo "<br> กลางภาค <br>";
		print_r(array_count_values(self::$arr_A));
		echo "<br> ประจำภาค <br>";
		print_r(array_count_values(self::$arr_B));
		
		
	}

	public static function write_date_A(){
	 	//echo "<br>กลางภาค <br>";

		foreach (self::$arr_A as $key => $value) {
				//file_put_contents("log_date_1.txt",  "$value\n", FILE_APPEND);

			echo "<tr><td>$value</td></tr>";
		}


	}

	public static function write_date_B(){

		//echo "<br>ประจำภาค <br>";
		
		foreach (self::$arr_B as $key => $value) {

				//file_put_contents("log_date_2.txt",  "$value\n", FILE_APPEND);

			echo "<tr><td>$value </td></tr>";
		}
		//echo "</table>";
	}
}


?>