<?php

//===== Data yg dibutuhkan taruh disini saja =================
$useragent = "Mozilla/5.0 (Linux; Android 7.1.2; G011A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";

//===== Username ============
$user="hangat";

//===== ExpressCrypto ID =========
$ecID="EC-UserId-587369";

//===== Boost di: https://auto.multiclaim.net/autofaucet ============
//$bost1="10";
$bost1="5";

//===== Boost di: https://bestautofaucet.com/session/autofaucet =====
$bost2="3";

//===== Boost di: https://proinfinity.fun/session/autofaucet ========
$bost3="11";

//===== Boost di: https://phoenixfaucets.xyz/session/autofaucet =====
$bost4="5";

//====Coin yg diinginkan, Minimal 2 coin, Maximal 15, dipisah dengan Tanda koma,
//contoh:  '"SHIB","BTT"'
//bila ingin coin SHIB dan BTT
//Ingat di apit oleh tanda petik satu ( ' );

//$coins='"SHIB","BTT"';
//===== Boost di: https://auto.multiclaim.net/autofaucet ============
$coins1='"SHIB","BTT"';

//===== Boost di: https://bestautofaucet.com/session/autofaucet =====
// ditulis dengan huruf kecil utk bestautofaucet.com
$coins2='"dgb","btt"';
//$coins2='"dgb","doge"';
//$coins2='"dgb","doge"';

//===== Boost di: https://proinfinity.fun/session/autofaucet ========
$coins3='"SHIB","BTT"';
//$coins3='"dgb","btt"';
//$coins3='"DGB","BTT"';

//===== Boost di: https://phoenixfaucets.xyz/session/autofaucet =====
//$coins4='"dgb","SHIB"';
$coins4='"btt","SHIB"';

//$coinAll ='"SHIB","BCN","RDD","BTT","DGB","TRX","RVN","DOGE","VTC","PIVX","KMD","USDT","PPC","XRP","ADA"';

//Semua Coin:
//"SHIB","BCN","RDD","BTT","DGB","TRX","RVN","DOGE","VTC","PIVX","KMD","USDT","PPC","XRP","ADA"

//===== Boost di: https://dragonfaucets.xyz/ =====
$bost5="5";

//==========================
//$coins5='"ada","doge"';

$coins5='"ada","doge","xmr","ltc","rvn","usdt","vtc","bch","pivx","lsk","dgb","zen","btt","kmd","xrp","neo","waves","etc","xtz","bnb","strax","zec","dash","ppc","trx"';

//cookies: 2 coin
/*
_ga=GA1.2.991234225.1637897743; _pbjs_userid_consent_data=3524755945110770; cto_bundle=Kx_JkF9mUWVkOFNxJTJGY2k3Wmx0QVhFT0hNTHl2JTJGS0JXazdmODBRZ1U1cFRkc0hhZHpHQ05DT0EyJTJCY01aNCUyQlVVdnB6cmo4SWo4eUEyVjVWaEJ2ZXE2d1FwQ2JONHVjTmF2JTJCeCUyQkFmcWh6bkloZzBsbnptNHZSNUI3JTJCTmlqMXBrMTg3ZzM4UUpjQjMlMkZnSjBxUUd4UGM1QTlCeGp3JTNEJTNE; cto_bidid=k-beJF8xOG1iM1VHaTJWRUZQRU5ia2lsQlVvTUtjOWtiMEpCOUMwM3h0REt2b3F1OU1EZUJLciUyQktLbFVnZTJOQ2NNb3VDenZlWmc2OUozSVdwc2FoS0lCNFU1TWdvM3pGcGRnZUVBNzduNG5wVUwyUTNwRURyRUJZTHFqc1lIcGRDTGJt; _gid=GA1.2.209651153.1639592481; session_ok=true; cap=recaptcha; session=EC-UserId-587369; ab=0; __cf_bm=M6p9eeRxXEDUbWN_vsqU3zX61BA_RRjGEouWsRpLdO4-1639637357-0-AUhgtigNyBzQdg00X84aOdvtxP9t8CB8tsKTFJDKIiQqnYWBSW4Oo5hCR3QYXPv5P1jr7PApl+sS7AXgLr21OrJIdtRfwvm7PHQmRRz+QxsULVZwqyY5Ub/FJaRl6oVPJA==; auto={"ecid":"EC-UserId-587369","coins":["dgb","btt"],"mode":"multi","boost":"1","payout_mode":"ec"}; _gat_gtag_UA_179106564_3=1; _gat_gtag_UA_70132428_1=1; _data_cpc=505-1-1639641259; _data_html=26-1_93-1_648-1_655-1; __viCookieActive=true
*/

//cookies: multi coins
/*
_ga=GA1.2.991234225.1637897743; _pbjs_userid_consent_data=3524755945110770; cto_bundle=Kx_JkF9mUWVkOFNxJTJGY2k3Wmx0QVhFT0hNTHl2JTJGS0JXazdmODBRZ1U1cFRkc0hhZHpHQ05DT0EyJTJCY01aNCUyQlVVdnB6cmo4SWo4eUEyVjVWaEJ2ZXE2d1FwQ2JONHVjTmF2JTJCeCUyQkFmcWh6bkloZzBsbnptNHZSNUI3JTJCTmlqMXBrMTg3ZzM4UUpjQjMlMkZnSjBxUUd4UGM1QTlCeGp3JTNEJTNE; cto_bidid=k-beJF8xOG1iM1VHaTJWRUZQRU5ia2lsQlVvTUtjOWtiMEpCOUMwM3h0REt2b3F1OU1EZUJLciUyQktLbFVnZTJOQ2NNb3VDenZlWmc2OUozSVdwc2FoS0lCNFU1TWdvM3pGcGRnZUVBNzduNG5wVUwyUTNwRURyRUJZTHFqc1lIcGRDTGJt; _gid=GA1.2.209651153.1639592481; session_ok=true; cap=recaptcha; session=EC-UserId-587369; ab=0; __cf_bm=M6p9eeRxXEDUbWN_vsqU3zX61BA_RRjGEouWsRpLdO4-1639637357-0-AUhgtigNyBzQdg00X84aOdvtxP9t8CB8tsKTFJDKIiQqnYWBSW4Oo5hCR3QYXPv5P1jr7PApl+sS7AXgLr21OrJIdtRfwvm7PHQmRRz+QxsULVZwqyY5Ub/FJaRl6oVPJA==; __viCookieActive=true; _data_html=26-1_55-1_93-1_109-1_647-1_648-1_655-1; auto={"ecid":"EC-UserId-587369","coins":["ada","doge","xmr","ltc","rvn","usdt","vtc","bch","pivx","lsk","dgb","zen","btt","kmd","xrp","neo","waves","etc","xtz","bnb","strax","zec","dash","ppc","trx"],"mode":"multi","boost":"1","payout_mode":"ec"}; _gat_gtag_UA_179106564_3=1; _gat_gtag_UA_70132428_1=1; _data_cpc=69-1_77-1_505-1_506-1_551-1
*/
//request url:
//https://dragonfaucets.xyz/session/autofaucet

//referer:
/*
https://dragonfaucets.xyz/session/autofaucet
*/
//useragent:
/*
Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36
*?
?>
