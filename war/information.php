<?php 
$arr = array();
$r['profile']="tum";
$r['album']="tum.jpg";
$r['name'] = "นิภัทร จ้อยศรีเกตุ";
$r['age'] = "21 ปี";
$r['birth'] = "22 ธันวาคม 2535";
$r['hw']= "สูง 162 ซม. น้ำหนัก 75 กิโลกรัม";

$a['profile'] = "nick";
$a['album'] = "nick.jpg";

$a['name']="พงษ์สันต์ เหล่ามงคลนิมิต";
$a['age'] =" 25 ปี";
$a['birth']="1 สิงหาคม 2532";
$a['hw'] = "สูง 177 ซม. น้ำหนัก 63 กิโลกรัม";
$profile = $_GET['profile'];
if($profile == $r['profile']){
	$arr=$r;

}else{
$arr=$a;
}
echo json_encode($arr);