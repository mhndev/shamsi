<?php namespace Majid\Shamsi;
include ('Jdate/Jdate.php');

class Shamsi {
 
  public static function toJalali($mydate)
  {
    $timezone = 0;
    list($date , $time) = explode(' ' , $mydate);
    list($year, $month, $day) = explode('-', $date);
    list($hour, $minute, $second) = explode(':', $time);
    $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
    $jalali_date = jdate("H:i:s - Y/m/d",$timestamp);
    return $jalali_date;
  }

  public static function jgetdate($timestamp='',$none='',$time_zone='Asia/Tehran',$tr_num='en')
  {
  	return jgetdate( $timestamp , $none , $time_zone , $tr_num );
  }

  public static function jstrftime($format,$timestamp='',$none='',$time_zone='Asia/Tehran',$tr_num='fa')
  {
  	return jstrftime( $format , $timestamp , $none , $time_zone , $tr_num );
  }

  public static function jmktime($h='',$m='',$s='',$jm='',$jd='',$jy='',$is_dst=-1)
  {
  	return jmktime($h,$m,$s,$jm,$jd,$jy,$is_dst);
  }

  public function jcheckdate($jm,$jd,$jy)
  {
  	return checkdate( $month , $day , $year );
  }

  public static function tr_num($str,$mod='en',$mf='٫')
  {
  return tr_num( $str , $mod , $mf );	
  }

  public static function jdate_words($array,$mod='')
  {
  	return jdate_words( $array , $mod );
  }

  public static function gregorian_to_jalali($g_y,$g_m,$g_d,$mod='')
  {
  	return gregorian_to_jalali( $g_y , $g_m , $g_d , $mod );
  }

  public static function jalali_to_gregorian($j_y,$j_m,$j_d,$mod='')
  {
  return jalali_to_gregorian($j_y,$j_m,$j_d,$mod=''); 	
  }
 
}