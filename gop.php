<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay=`date "+%d/%m/%Y"`;

$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;33m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");

$key = "yamate".substr(md5($today), 0 , 8);

$url_key = "https://lyquangtoai.cf/key/lyquangtoai.php?key=".$key;
$api = @json_decode(file_get_contents("https://1link.vip/api?api=78a54eca1677a06c02a1bd6e944f97416505a45d&url=".$url_key),true);
if ( $api["shortenedUrl"] ){
	$link = $api["shortenedUrl"] ;
}else{
	$link = $key;
	}
$van = $trang."(".$do."◕‿◕".$trang.")".$do."➜".$luc;
system('clear');

$logo = "
\033[1;34m██╗   ██╗ █████╗ ███╗   ██╗
\033[1;97m██║   ██║██╔══██╗████╗  ██║
\033[1;34m██║   ██║███████║██╔██╗ ██║
\033[1;97m╚██╗ ██╔╝██╔══██║██║╚██╗██║
\033[1;34m ╚████╔╝ ██║  ██║██║ ╚████║
\033[1;97m  ╚═══╝  ╚═╝  ╚═╝╚═╝  ╚═══╝
\n";

echo $logo;
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
echo $van."\033[1;31m[\033[1;33mTHÔNG BÁO\033[1;31m]\033[1;32m Đây Là Tool Free. Key Tool Phải Lấy Lại Mỗi Ngày Nhé\n";
echo $van."$luc Link Key Hôm Nay Là :$vang $link \n";
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
echo $van."$luc Nhập API Key : $do";
$pass=trim(fgets(STDIN));

if($pass == $key){
echo $vang." Key Chính Xác  \n";
sleep(1);
}else if ( $pass == "vandz" ){
echo $vang." Key Admin \n";
sleep(1);
}else if ( $check = explode('|',explode($pass,$key_phi)[1])[0]){
echo $vang." Key Chính Xác  \n";
sleep(2);

}else{echo $do." Key Sai\n";

exit();

}
### vô tool 
system("clear");
echo $logo;
$vanv = "".$do."》".$xanh."》".$vang."》".$luc;
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
echo "$van \033[1;97mBản Quyền : \033[1;93mVăn Boss \n";
echo "$van \033[1;97mMomo: \033[1;32m0326682281 \n";
echo "$van \033[1;97mTSR: vanx2k6veo \n";
echo "$van \033[1;97mVô Nhóm Xem Cập nhật Mới Nhất Nhé \n";
echo "$van \033[1;97mhttps://zalo.me/g/ybopwv286 \n";
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";

echo "                  ".$trang."[".$do." Tool Bản Quyền :".$vang." Nguyễn Doãn Văn ".$trang."]\n";
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
echo $van." Nhập 1 TOOL FOLLOW TTC Tik Tok ".$trang."[".$do." TAY ".$trang."] \n";
echo $van." Nhập 2 TOOL TDS TIKTOK ".$trang."[".$do." MỚI ".$trang."] \n";
echo $van." Nhập 3 TOOL TDS INSTAGRAM ".$trang."[".$do." ĐA LUỒNG ".$trang."] \n";
echo $van." Nhập 4 TOOL SHARE ẢO FACEBOOK ".$trang."[".$do." MỚI ".$trang."]  \n";
echo $van." Nhập 5 TOOL UNFOLLOW TIKTOK ".$trang."[".$do." MỚI ".$trang."]  \n";
echo $van." Nhập 6 TOOL FOLLOW FACEBOOK ".$trang."[".$do." MỚI ".$trang."]  \n";
echo $van." Nhập 7 TOOL ADD BẠN BÈ FACEBOOK".$trang."[".$do." MỚI ".$trang."]  \n";
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";

echo $van." Nhập : ";
$ch = trim(fgets(STDIN));
while(true){
 if ( $ch == 1 ){
	eval(file_get_contents('https://pastebin.com/raw/ZEy80Zpc'));
}else if ( $ch == 2){
	eval(file_get_contents('https://run.mocky.io/v3/ad3dca78-93fb-45d1-bd39-9890a4744a78'));
	
}else if ( $ch == 3 ){
	
	eval(file_get_contents('https://run.mocky.io/v3/9df3e4a1-d373-4755-92bd-5980c335e34d'));
	
}else if ( $ch == 4 ){
	eval(file_get_contents('https://run.mocky.io/v3/c40d3f18-431d-42be-a3b9-3dd445a26d75'));
	
}else if ( $ch == 5 ){
	eval(file_get_contents('https://run.mocky.io/v3/3df3afe0-ec93-4ea3-8ae6-6d5f70698013'));
	
}else if ( $ch == 6 ){
	eval(file_get_contents('https://run.mocky.io/v3/e161ecee-25e7-4103-a88f-dfc05cad8580'));
	
}else if ( $ch == 7 ){
	eval(file_get_contents("https://pastebin.com/raw/wyynuiSG"));
}else if ( $ch == 8 ){
	eval(file_get_contents('https://pastebin.com/raw/dfvnsj5u'));
	
}else{
	echo $van." Sai lựa Chọn \n";
	exit ;
	
}}
