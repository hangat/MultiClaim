<?php
//color
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =  "\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$reset="\033[0m";
$Black="\033[0;30m";
$Red= "\033[0;31m";
$Green="\033[0;32m";
$Yellow="\033[0;33m";
$Blue="\033[0;34m";
$Purple="\033[0;35m";
$Cyan="\033[0;36m";
$White="\033[0;37m";
$IYellow="\033[0;93m";
$IRed="\033[0;91m";
$BIRed="\033[1;91m";
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";
$BIBlue="\033[1;94m";
$BICyan="\033[1;96m";
$BIBlack="\033[1;90m";
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";
$On_White="\033[47m";
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";
$On_Blue="\033[44m";
$On_Green="\033[42m";
$IGreen="\033[0;92m";

//red to yellow shade

$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";


//======================= data taruh di sini saja ============
include("inc.php");
//============================================================

//=== Defenisi Host ===/
$host1 = "https://auto.multiclaim.net/session/autofaucet";
$host2 = "https://bestautofaucet.com/session/autofaucet";
$host3 = "https://proinfinity.fun/session/autofaucet";
$host4 = "https://phoenixfaucets.xyz/session/autofaucet";
$host5 = "https://dragonfaucets.xyz/session/autofaucet";

$sl1 = "https://auto.multiclaim.net/sl";
$sl2 = "https://bestautofaucet.com/sl";
$sl3 = "https://proinfinity.fun/sl";
$sl4 = "https://phoenixfaucets.xyz/sl";
$sl5 = "https://dragonfaucets.xyz/sl";

$host="";$bost="";$sl="";
$sTokenA1='<i class="fas fa-coins"></i> Tokens: ';
$sTokenA2='<i class="fas fa-coins"></i> Coins: ';
$sTokenA3='<i class="fas fa-coins"></i> INFINITY Coin: ';
$sTokenA4='<i class="fas fa-coins"></i> Phoenix Token: ';
$sTokenA5='<i class="fas fa-coins"></i> Dragon Token: ';
$sTokenA='';
$coins='';

function cRun($menu){
global $host1, $host2, $host3, $host4, $host5, $sl1, $sl2, $sl3, $sl4, $sl5;
global $bost1, $bost2, $bost3, $bost4, $bost5, $host,$bost, $sl;

global $sTokenA1, $sTokenA2, $sTokenA3, $sTokenA4, $sTokenA5, $sTokenA;
global $coins,$coins1,$coins2,$coins3,$coins4,$coins5 ;
    switch($menu){
        case 2:
            $host = $host1;
            $bost = $bost1;
            $sl = $sl1;
            $sTokenA = $sTokenA1;
            $coins=$coins1;

            break;
        case 3:
            $host = $host2;
            $bost = $bost2;
            $sl = $sl2;
            $sTokenA = $sTokenA2;
            $coins=$coins2;
            break;
        case 4:
            $host = $host3;
            $bost = $bost3;
            $sl = $sl3;
            $sTokenA = $sTokenA3;
            $coins=$coins3;
            break;
        case 5:
            $host = $host4;
            $bost = $bost4;
            $sl = $sl4;
            $sTokenA = $sTokenA4;
            $coins=$coins4;
            break;
        case 6:
            $host = $host5;
            $bost = $bost5;
            $sl = $sl5;
            $sTokenA = $sTokenA5;
            $coins=$coins5;
            break;
        default:
            // echo "default";

    }
}

function menu0(){
    global $kuning2, $green2, $red2, $putih2, $ungu2;

    system('clear');
    sleep(1);
    echo "                       \e[1;35m<<<\033[1;31m[\033[1;32m+\033[1;31m]$kuning2 SCRIPT INFO \033[1;31m[\033[1;32m+\033[1;31m]\e[1;35m>>>\n\n";
    sleep(1);
    echo$green2. "◼$kuning2 Apa Yang Baru di v2.6 ? \n";
    echo$red2. ">$green2 Bug Fixed\n";
    echo$red2. ">$green2 Anti Baned\n";
    echo$red2. ">$green2 Auto Capture Data\n";
    echo$red2. ">$green2 4 Host In One Script\n";
    echo$red2. ">$green2 Remove Feature Wd To Fp\n\n";

    echo$green2. "◼$kuning2 Tentang BrutalClaim\n";
    echo$red2. ">$putih2 Script$ungu2 MultiClaim$green2 v1.8$putih2 Telah Berevolusi Menjadi Script$ungu2 BrutalClaim$green2 v2.6$putih2 Sejak 25-November-2021\n\n";

    echo$green2. "◼$kuning2 4 Host Dalam Satu Script\n";
    echo$red2. ">$putih2 Anda Harus Daftar Terlebih Dahulu & Mengumpulkan Token Di Setiap Website Nya, Dan Untuk Menjalankan Beberapa Host Anda Bisa Menjalankan Nya Di New Session Di Setiap Host Nya, Atau Bisa Menggunakan Fitur Perintah$green2 Tmux$red2 ($kuning2 Untuk Menjalankan Beberapa Tab Di Satu Session$red2 )\n\n\n";
    echo$putih2. $enter = "[!] [Pending Process (Press Enter) - To Back]";
    $enter = trim(fgets(STDIN));

}

function menu1(){
    global $kuning2, $green2, $red2, $putih2;
    system('clear');
    echo $green2. "Input diisi di file :" . $kuning2. "inc.php " . $green2. "saja\n\n"; sleep(1);

    usleep(100000);
    echo "\n\n\033[1;31m[\033[1;37m✓\033[1;31m]$green2 Data Telah Berhasil Disimpan!\n\n";
    usleep(100);
    echo$putih2. " Please wait ";
    sleep(1);
    for ($x = 0; $x <= 10; $x++) {
        usleep(50000);echo $green2. "*";
        usleep(70000);echo $red2. "*";
    }
    echo "\n\n";
    sleep(1);
    echo$putih2."[!] [Pending Process (Press Enter) - To Back]" . "\n\n";
    $enter = trim(fgets(STDIN));
    system('clear');

}


function Wait60(){
    $red2="\033[1;31m"; $green2="\033[1;32m";
    $putih2="\033[1;37m"; $yellow2="\033[1;33m";
    date_default_timezone_set('Asia/Jakarta');

    for ($i=60;$i>-1;$i--){
        $ii = $i * 1; $ii=str_pad($ii, 2, '0', STR_PAD_LEFT);
        $s=$red2 ."[".$green2."START".$red2. "|".$green2. date('H:i:s').$red2."]";
        $s=$s.$yellow2." Please Wait ".$green2. "... ".$red2."(".$putih2."$ii".$putih2."s".$red2.")";
        $sp="                                                                 ";
        echo $s."\r";
        sleep(1);

    }
}

function showMenu(){
    global $kuning2, $green2, $red2, $putih2, $menu;

    system('clear');
    echo "    \e[1;35m<<< \033[1;31m[\033[1;32m+\033[1;31m]$kuning2 MENU \033[1;31m[\033[1;32m+\033[1;31m]\e[1;35m >>>\n";
    echo "\33[37;1m[\033[1;32m1\33[37;1m]$red2 >>>$kuning2 Input Data / Set Data\n\n";
    echo "\33[37;1m[\033[1;32m2\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 auto.multiclaim.net$red2 ]\n";
    echo "\33[37;1m[\033[1;32m3\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 bestautofaucet.com$red2 ]\n";
    echo "\33[37;1m[\033[1;32m4\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 proinfinity.fun$red2 ]\n";
    echo "\33[37;1m[\033[1;32m5\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 phoenixfaucets.xyz$red2 ]\n";
    echo "\33[37;1m[\033[1;32m6\33[37;1m]$red2 >>>$kuning2 Running Host:$red2 [$green2 dragonfaucets.xyz$red2 ]\n\n";
    echo$red2. " ◼$green2 Choose$putih2 :$green2 ";
    $menu = trim(fgets(STDIN));

}

function GetHeader($host,$useragent,$ecID,$bost,$coins,$default="GET"){
    $c = urlencode($coins);
    if($default<>"GET"){
        $header = array(
        "user-agent:".$useragent,
        "referer: " . $host,
        "cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22$ecID%22%2C%22coins%22:[$c]%2C%22mode%22:%22multi%22%2C%22boost%22:%22$bost%22%2C%22payout_mode%22:%22ec%22}");
        return $header;
        exit(0);
    }
    $header = array(
    "user-agent:".$useragent,
    "cookie: session=$ecID;session_ok=true;auto={%22ecid%22:%22$ecID%22%2C%22coins%22:[$c]%2C%22mode%22:%22multi%22%2C%22boost%22:%22$bost%22%2C%22payout_mode%22:%22ec%22}");
    return $header;
}

function curlGetPost($host,$useragent,$ecID,$bost,$coins,$default="GET"){
    $header=GetHeader($host,$useragent,$ecID,$bost,$coins,$default);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $host);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	if($default<>"GET"){
		curl_setopt($ch, CURLOPT_POST, 1);
		$data = "";
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $res = curl_exec($ch);
	return $res;
}

function globalRun(){
    global $kuning2, $green2, $red2, $On_Red, $putih2, $blue2, $lblue2, $yellow2, $ungu2;
    global $useragent, $ecID, $host, $sl, $bost, $user,$reset,$sTokenA;
    global $coins;

    echo "\n\n";
    echo $kuning2 ."Data yg dibutuhkan : \n";
    echo $red2   . "════════════════════ \n" . $kuning2 ;
    echo "User Agent : \n " . $green2 . $useragent . "\n\n";
    echo $kuning2 . "ExpressCrypto ID : " . $green2 . $ecID . "\n";
    echo $kuning2 . "Host  : " . $green2 . $host . "\n";
    echo $kuning2 . "Boost : " . $green2 . $bost . "\n\n";

    //Menerima Data
    sleep(1);
    echo $red2.">>> $green2 Running $kuning2 [";
    for ($x = 0; $x <= 10; $x++) {
        usleep(50000);echo $green2. "*";
        usleep(70000);echo $red2. "*";
    }
    echo"$kuning2]\n\n";

    // Curl Get
    $res = curlGetPost($host,$useragent,$ecID,$bost,$coins);
    $token = explode($sTokenA ,$res);
    if(isset($token[1])){
        $token = explode('</div>',$token[1])[0];
    }
    echo$red2. "◼$kuning2 Welcome ";
    usleep(50000);
    echo $red2."[".$green2.$user.$red2."] | ";
    usleep(50000);
    echo$green2."◼$putih2 $ecID\n";
    echo$red2. "> ".$lblue2. "Token" .$putih2. "  : " .trim($token);
    echo$red2. " |$lblue2 Boosts$putih2 :";echo$kuning2." $bost"."X ";echo $red2."(".$putih2."Claim every 60s$red2)\n";
    echo$red2. ">$lblue2 Coin$putih2   : ";echo$kuning2. $coins . "\n";
    echo$red2."══════════════════════════════════════════════════";
    echo"\n";
    echo$putih2. $enter = "[!] [Pending Process (Press " . $green2 . "Enter" . $putih2 . " ) - To Start] ";
    $enter = trim(fgetc(STDIN));

    $ncoin =count(array($coins))+1;
    //echo "ncoin : " . $ncoin . "\n";
    // START
    while(true){
        $res = curlGetPost($host,$useragent,$ecID,$bost,$coins);
        $token = explode($sTokenA,$res);
        if(isset($token[1])){
            $token = explode('</div>',$token[1])[0];
        }
        if($token == ""){
            echo$On_Red."\033[1;37mCookie Not Found / Expired, Silahkan Isi / Ganti Ulang Cookie!\n".$reset;
            sleep(1);
            exit;
        }else{
            if($token == "0"){
                sleep(1);
                echo$On_Red."\033[1;37m   Butuh Token Untuk Menjalankan, Silahkan Farming Terlebih Dahulu !  \n".$reset;
                sleep(1);
                echo"\n";
                echo "\033[1;91m ◼$green2 Tunggu 3 Detik Anda Akan Diarahkan Otomatis Untuk Farming Token\n";
                sleep(1);
                echo$putih2."Please wait ";
                sleep(1);
                echo$red2."•";
                sleep(1);
                echo$kuning2."•";
                sleep(1);
                echo$green2."•";
                sleep(1);
                system("xdg-open " . $sl);
                sleep(1);
                exit;
            }else{
                echo $reset;
                $res = curlGetPost($host,$useragent,$ecID,$bost,$coins);
                $token = explode($sTokenA,$res);
                if(isset($token[1])){
                    $token = explode('</div>',$token[1])[0];
                }
                echo"\n";
                Wait60();
                sleep(1);
                $cek = curlGetPost($host,$useragent,$ecID,$bost,$coins,"POST");
                $r1 = explode('Successfully sent',$cek);
                if(isset($r1[1])){
                    $r1 = explode('to',$r1[1])[0];
                    $r1=trim($r1);
                }
                $r2 = explode('Successfully sent',$cek);
                if(isset($r2[2])){
                    $r2 = explode('to',$r2[2])[0];
                    $r2=trim($r2);
                }
                $r3 = explode('Successfully sent',$cek);
                if(isset($r3[3])){
                    $r3 = explode('to',$r3[3])[0];
                    $r3=trim($r3);
                }
                $r4 = explode('Successfully sent',$cek);
                if(isset($r4[4])){
                    $r4 = explode('to',$r4[4])[0];
                    $r4=trim($r4);
                }
                $r5 = explode('Successfully sent',$cek);
                if(isset($r5[5])){
                    $r5 = explode('to',$r5[5])[0];
                    $r5=trim($r5);
                }
                $r6 = explode('Successfully sent',$cek);
                if(isset($r6[6])){
                    $r6 = explode('to',$r6[6])[0];
                    $r6=trim($r6);
                }
                $r7 = explode('Successfully sent',$cek);
                if(isset($r7[7])){
                    $r7 = explode('to',$r7[7])[0];
                    $r7=trim($r7);
                }
                $r8 = explode('Successfully sent',$cek);
                if(isset($r8[8])){
                    $r8 = explode('to',$r8[8])[0];
                    $r8=trim($r8);
                }
                $r9 = explode('Successfully sent',$cek);
                if(isset($r9[9])){
                    $r9 = explode('to',$r9[9])[0];
                    $r9=trim($r9);
                }
                $r10 = explode('Successfully sent',$cek);
                if(isset($r10[10])){
                    $r10 = explode('to',$r10[10])[0];
                    $r10=trim($r10);
                }
                $r11 = explode('Successfully sent',$cek);
                if(isset($r11[11])){
                    $r11 = explode('to',$r11[11])[0];
                    $r11=trim($r11);
                }
                $r12 = explode('Successfully sent',$cek);
                if(isset($r12[12])){
                    $r12 = explode('to',$r12[12])[0];
                    $r12=trim($r12);
                }
                $r13 = explode('Successfully sent',$cek);
                if(isset($r13[13])){
                    $r13 = explode('to',$r13[13])[0];
                    $r13=trim($r13);
                }
                $r14 = explode('Successfully sent',$cek);
                if(isset($r14[14])){
                    $r14 = explode('to',$r14[14])[0];
                    $r14=trim($r14);
                }
                $r15 = explode('Successfully sent',$cek);
                if(isset($r15[15])){
                    $r15 = explode('to',$r15[15])[0];
                    $r15=trim($r15);
                }
                sleep(2);
                date_default_timezone_set('Asia/Jakarta');
                $tgljam = date("Y-m-d H:i:s");
                if(strlen($r1)>0){
                    echo$red2."[01]$kuning2$r1 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r2)>0){
                echo$red2."[02]$kuning2$r2 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r3)>0){
                    echo$red2."[03]$kuning2$r3 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r4)>0){
                    echo$red2."[04]$kuning2$r4 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r5)>0){
                    echo$red2."[05]$kuning2$r5 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r6)>0){
                    echo$red2."[06]$kuning2$r6 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r7)>0){
                    echo$red2."[07]$kuning2$r7 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r8)>0){
					echo$red2."[08]$kuning2$r8 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r9)>0){
					echo$red2."[09]$kuning2$r9 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r10)>0){
					echo$red2."[10]$kuning2$r10 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r11)>0){
					echo$red2."[11]$kuning2$r11 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r12)>0){
					echo$red2."[12]$kuning2$r12 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r13)>0){
					echo$red2."[13]$kuning2$r13 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r14)>0){
					echo$red2."[14]$kuning2$r14 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                if(strlen($r15)>0){
					echo$red2."[15]$kuning2$r15 $red2 > $green2 Successfully sent to $putih2 EXpressCrypto\n";
                }
                echo $blue2."════════════════════════════════════════════════\n";
                echo $blue2 . ">" .$putih2. $host .$red2. "\n";
                echo $blue2 . ">" .$putih2. "Coins: " .$kuning2. $coins . "\n" ;
                echo $blue2 . ">" .$putih2. "Token: " .$kuning2. trim($token).$red2." | Boost:".$kuning2. $bost .$red2." | ".$kuning2. trim($tgljam) . "\n";
                sleep(1);
            }
        }
    }
}

//=========== Mulai di sini ===============//
system('clear');
error_reporting(0);
// MENU
while(true){
    showMenu();

    switch($menu){
        case 1: menu1();break;
        case 2: cRun($menu); globalRun();break;
        case 3: cRun($menu); globalRun();break;
        case 4: cRun($menu); globalRun();break;
        case 5: cRun($menu); globalRun();break;
        case 6: cRun($menu); globalRun();break;
    }
}
?>