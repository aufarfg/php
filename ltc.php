<?php

function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}


while("true"){
$x = rand(000000000,999999999);
$rr = rand(00,99);
$ua = array(
"Host: earnlitecoinapp.com",
"User-Agent: okhttp/4.3.1",
"Content-Type: application/json",
"Connection: Keep-Alive");



$login = "http://earnlitecoinapp.com/earnlitecoin/litecoin/api/scratch_count.php";
$data = '{"user_id":"bLEHugeZNKbYW2J5cAB9EZFUUeD3","email_id":"vacxz3@gmail.com","points":"90"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$resik = curl_exec($ch);
$jons = json_decode($resik);
$gi = $jons->message;
echo "\n \033[1;91m[=]\033[1;92mSCARTH \033[1;97mStatus : \033[1;93m".$gi." \n";



for($x=1;$x<=4;$x++){
$login2 = "http://earnlitecoinapp.com/earnlitecoin/litecoin/api/tictac_points.php";
$data2= '{"user_id":"bLEHugeZNKbYW2J5cAB9EZFUUeD3","email_id":"vacxz3@gmail.com","points":"90"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$resiko = curl_exec($ch);
$jonis = json_decode($resiko);
$gix = $jonis->message;
echo "\n \033[1;91m[=]\033[1;92mTIC TAC \033[1;97mStatus : \033[1;93m".$gix." \n";
sleep(3);
}
sleep(1);

for($x=1;$x<=13;$x++){
$login15 = "http://earnlitecoinapp.com/earnlitecoin/litecoin/api/spin_count.php";
$data15 = '{"user_id":"bLEHugeZNKbYW2J5cAB9EZFUUeD3","email_id":"vacxz3@gmail.com","points":"90"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login15);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data15);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$resk = curl_exec($ch);
$jon = json_decode($resk);
$g = $jon->message;
echo "\n \033[1;91m[=]\033[1;92mSPIN \033[1;97mStatus : \033[1;93m".$g." \n";
sleep(2);
}


for($x=1;$x<=4;$x++){
$login6 = "http://earnlitecoinapp.com/earnlitecoin/litecoin/api/memory_count.php";
$data6 = '{"user_id":"bLEHugeZNKbYW2J5cAB9EZFUUeD3","email_id":"vacxz3@gmail.com","points":"90"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login6);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data6);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$resikok = curl_exec($ch);
$jonisi = json_decode($resikok);
$gixi = $jonisi->message;
echo "\n \033[1;91m[=]\033[1;92mMEMORY GAME \033[1;97mStatus : \033[1;93m".$gixi." \n";
sleep(3);
}

for($x=1;$x<=4;$x++){
$login60 = "http://earnlitecoinapp.com/earnlitecoin/litecoin/api/dice_count.php";
$data60 = '{"user_id":"bLEHugeZNKbYW2J5cAB9EZFUUeD3","email_id":"vacxz3@gmail.com","points":600}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data60);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$resikok = curl_exec($ch);
$jonisi = json_decode($resikok);
$gixi = $jonisi->message;
echo "\n \033[1;91m[=]\033[1;92mDICE \033[1;97mStatus : \033[1;93m".$gixi." \n";
sleep(3);
}

$login86 = "http://earnlitecoinapp.com/earnlitecoin/litecoin/api/get_user.php";
$data86 = '{"user_id":"bLEHugeZNKbYW2J5cAB9EZFUUeD3","email_id":"vacxz3@gmail.com"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login86);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data86);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$resikokk = curl_exec($ch);
$jonisii = json_decode($resikokk);
$gixii = $jonisii->data->points;
echo " \n\033[1;93m==TOTAL BALANCE \033[2;95m".$gixii."==\n";

sleep(602);

}


