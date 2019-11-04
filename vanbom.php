<?php
$username = "van";
$password = "bom";

system('clear');
echo "SILAHKAN LOGIN BOS\n";
echo "username : ";
$user = trim(fgets(STDIN));
echo "password : ";
$pass = trim(fgets(STDIN));
if ($user == $username && $pass == $password)
{
echo "\e[0;32mLogin Succes\n";
sleep(1);
system('clear'); echo "\e[0;35mWELCOME TO VANBOOM TOOLS\n";
echo "\e[0;36m[1]BOOM SPAM ALL SOCIAL MEDIA: 
[2]exit:  "; 

echo "\e[0;31mMasukkan Pilihan: ";
$menu = trim(fgets(STDIN));
if ($menu == 1)
{
system( 'git clone https://github.com/ClayHackerTeam/Prankers');
}
if ($menu == 2)
{
system( 'exit');
}


}
else
{
echo "\e[0;31mLogin Gagal Boss\n";
}
?>
