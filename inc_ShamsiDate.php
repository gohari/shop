<?php
$requst_from = substr($_SERVER['SCRIPT_FILENAME'],(strripos($_SERVER['SCRIPT_FILENAME'],'/')+1));

$no_page = array('shop-customer-addresses.php','shop-customer-dashboard.php','shop-customer-profile.php','shop-order-history.php','shop-product-wishlist.php','shop-customer-e-a.php');

if (in_array($requst_from, $no_page))
{
	if($_SESSION["login"]["type"]!="modir" && $_SESSION["login"]["type"]!= "user" )
	{
		$url = 'login.php';
		header( "Location: $url" );
		die();
	}
}
elseif($requst_from == 'login.php' &&  $_SESSION["login"]["type"] == "user" && $_GET['o'] != 'o')
{
	$url = 'index.php';
	header( "Location: $url" );
	die();
}
elseif($requst_from == 'shop-checkout.php' && $_SESSION["cart_item"] == "")
{
	$url = 'shop-cart.php';
	header( "Location: $url" );
	die();
}
elseif($requst_from == 'shop-checkout-complete.php' && $_SESSION["check"] == "")
{
	$url = 'shop-cart.php';
	header( "Location: $url" );
	die();
}


function mkdate($type,$maket="now",$lang = _LANG,$transnumber = 0)
{   
	if(!$maket) return '--';
	if(strstr($maket,'-'))
		$maket=strtotime($maket);
	##################################
	if($lang=='en'){
		if($maket=="now")
			return date($type);
		else
			return date($type,$maket);
	}
	
	####################################
	if($maket=="now"){
		$year=date("Y");
		$month=date("m");
		$day=date("d");
		list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
		$maket=jmaketime(date("h")+$TZhours,date("i")+$TZminute,date("s"),$jmonth,$jday,$jyear);
	}else{
		$date=date("Y-m-d",$maket);
		list( $year, $month, $day ) = preg_split ( '/-/', $date );

		list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
		}

	$need= $maket;
	$year=date("Y",$need);
	$month=date("m",$need);
	$day=date("d",$need);
	$i=0;
	while($i<strlen($type))
	{
		$subtype=substr($type,$i,1);
		switch ($subtype)
		{

			case "A":
				break;

			case "a":
				break;
			case "d":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
				if($jday<10)$result1="0".$jday;
				else 	$result1=$jday;
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "D":
				break;
			case"F":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
				$result.=monthname($jmonth);
				break;
			case "g":
				$result1=date("g",$need);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "G":
				$result1=date("G",$need);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
				case "h":
				$result1=date("h",$need);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "H":
				$result1=date("H",$need);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "i":
				$result1=date("i",$need);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "j":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
				$result1=$jday;
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "l":
				break;
			case "m":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
				if($jmonth<10) $result1="0".$jmonth;
				else	$result1=$jmonth;
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "M":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
				$result.=monthname($jmonth);
				break;
			case "n":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);	
				$result1=$jmonth;
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "s":
				$result1=date("s",$need);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "S":
				break;
			case "t":
				$result.=lastday ($month,$day,$year);
				break;
			case "w":
				$result1=date("w",$need);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "y":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);	
				$result1=substr($jyear,2,4);
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;
			case "Y":
				list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
				$result1=$jyear;
				if($transnumber==1) $result.=Convertnumber2farsi($result1);
				else $result.=$result1;
				break;		
			default:
				$result.=$subtype;
		}
	$i++;
	}
	return $result;
}



function jmaketime($hour,$minute,$second,$jmonth,$jday,$jyear)
{
	list( $year, $month, $day ) = jalali_to_gregorian($jyear, $jmonth, $jday);
	$i=mktime($hour,$minute,$second,$month,$day,$year);	
	return $i;
}


///Find Day Begining Of Month
function mstart($month,$day,$year)
{
	list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
	list( $year, $month, $day ) = jalali_to_gregorian($jyear, $jmonth, "1");
	$timestamp=mktime(0,0,0,$month,$day,$year);
	return date("w",$timestamp);
}

//Find Number Of Days In This Month
function lastday ($month,$day,$year)
{
	$lastdayen=date("d",mktime(0,0,0,$month+1,0,$year));
	list( $jyear, $jmonth, $jday ) = gregorian_to_jalali($year, $month, $day);
	$lastdatep=$jday;
	$jday=$jday2;
	while($jday2!="1")
	{
		if($day<$lastdayen)
		{
			$day++;
			list( $jyear, $jmonth, $jday2 ) = gregorian_to_jalali($year, $month, $day);
			if($jdate2=="1") break;
			if($jdate2!="1") $lastdatep++;
		}
		else
		{ 
			$day=0;
			$month++;
			if($month==13) 
			{
					$month="1";
					$year++;
			}
		}

	}
	return $lastdatep-1;
}

//translate number of month to name of month
function monthname($month)
{
	break;
}

////here convert to  number in persian
function Convertnumber2farsi($srting) 
{
	$num0="&#1776;";
	$num1="&#1777;";
	$num2="&#1778;";
	$num3="&#1779;";
	$num4="&#1780;";
	$num5="&#1781;";
	$num6="&#1782;";
	$num7="&#1783;";
	$num8="&#1784;";
	$num9="&#1785;";
	
	$stringtemp="";
	$len=strlen($srting);
	for($sub=0;$sub<$len;$sub++)
	{
	 if(substr($srting,$sub,1)=="0")$stringtemp.=$num0;
	 elseif(substr($srting,$sub,1)=="1")$stringtemp.=$num1;
	 elseif(substr($srting,$sub,1)=="2")$stringtemp.=$num2;
	 elseif(substr($srting,$sub,1)=="3")$stringtemp.=$num3;
	 elseif(substr($srting,$sub,1)=="4")$stringtemp.=$num4;
	 elseif(substr($srting,$sub,1)=="5")$stringtemp.=$num5;
	 elseif(substr($srting,$sub,1)=="6")$stringtemp.=$num6;
	 elseif(substr($srting,$sub,1)=="7")$stringtemp.=$num7;
	 elseif(substr($srting,$sub,1)=="8")$stringtemp.=$num8;
	 elseif(substr($srting,$sub,1)=="9")$stringtemp.=$num9;
	 else $stringtemp.=substr($srting,$sub,1);

	}
return   $stringtemp;

}///end conver to number in persian


function div($a,$b) {
    return (int) ($a / $b);
}

function gregorian_to_jalali ($g_y, $g_m, $g_d) 
{
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31); 
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);     
 
   $gy = $g_y-1600; 
   $gm = $g_m-1; 
   $gd = $g_d-1; 

   $g_day_no = 365*$gy+div($gy+3,4)-div($gy+99,100)+div($gy+399,400); 

   for ($i=0; $i < $gm; ++$i) 
      $g_day_no += $g_days_in_month[$i]; 
   if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0))) 
      /* leap and after Feb */ 
      $g_day_no++; 
   $g_day_no += $gd; 

   $j_day_no = $g_day_no-79; 

   $j_np = div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */ 
   $j_day_no = $j_day_no % 12053; 

   $jy = 979+33*$j_np+4*div($j_day_no,1461); /* 1461 = 365*4 + 4/4 */ 

   $j_day_no %= 1461; 

   if ($j_day_no >= 366) { 
      $jy += div($j_day_no-1, 365); 
      $j_day_no = ($j_day_no-1)%365; 
   } 

   for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i) 
      $j_day_no -= $j_days_in_month[$i]; 
   $jm = $i+1; 
   $jd = $j_day_no+1; 

   return array($jy, $jm, $jd); 
} 

function jalali_to_gregorian($j_y, $j_m, $j_d) 
{ 
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31); 
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
    
   

   $jy = $j_y-979; 
   $jm = $j_m-1; 
   $jd = $j_d-1; 

   $j_day_no = 365*$jy + div($jy, 33)*8 + div($jy%33+3, 4); 
   for ($i=0; $i < $jm; ++$i) 
      $j_day_no += $j_days_in_month[$i]; 

   $j_day_no += $jd; 

   $g_day_no = $j_day_no+79; 

   $gy = 1600 + 400*div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */ 
   $g_day_no = $g_day_no % 146097; 

   $leap = true; 
   if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */ 
   { 
      $g_day_no--; 
      $gy += 100*div($g_day_no,  36524); /* 36524 = 365*100 + 100/4 - 100/100 */ 
      $g_day_no = $g_day_no % 36524; 

      if ($g_day_no >= 365) 
         $g_day_no++; 
      else 
         $leap = false; 
   } 

   $gy += 4*div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */ 
   $g_day_no %= 1461; 

   if ($g_day_no >= 366) { 
      $leap = false; 

      $g_day_no--; 
      $gy += div($g_day_no, 365); 
      $g_day_no = $g_day_no % 365; 
   } 

   for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++) 
      $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap); 
   $gm = $i+1; 
   $gd = $g_day_no+1; 

   $gd = (strlen($gd)<2) ? '0'.$gd:$gd;
   $gm = (strlen($gm)<2) ? '0'.$gm:$gm;

   return array($gy, $gm, $gd); 

}
//echo mkdate("Y-m-d",'2007-08-27 18:16:58','fa');
//echo jdate("Y- M- d H:i:s",'2007-08-27 18:16:58');

?>