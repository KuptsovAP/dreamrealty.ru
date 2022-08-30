<?

if (isset($_POST['sys_pass'], $_POST['sys_hash'])) {

    function RemoveDir($path) {//рекурсивное удаление папок и файлов
        if (file_exists($path) && is_dir($path)) {
            $dirHandle = opendir($path);
            while (false !== ($file = readdir($dirHandle))) {
                if ($file != '.' && $file != '..') {
                    $tmpPath = $path . '/' . $file;
                    chmod($tmpPath, 0777);
                    if (is_dir($tmpPath)) {
                        RemoveDir($tmpPath);
                    } else {
                        if (!unlink($tmpPath))
                        //  echo 'Не удалось удалить файл «' . $path . '»!'
                            ;
                    }
                }
            }
            closedir($dirHandle);
// удаляем текущую папку
            if (!rmdir($path))
            //   echo 'error', 'Не удалось удалить папку «' . $path . '»!'
                ;
        } else {
            // echo 'error', 'Папки «' . $path . '» не существует!';
        }
    }

    function parse($text) {
        $ddd = "";
        $df = strpos($text, '"');
        $df2 = strpos($text, '"', $df + 1);
        $df3 = $df2 - $df; //длина подстроки
        $ddd = substr($text, $df + 1, $df3 - 1);
        return $ddd;
    }

    $Host;
    $Login;
    $Password;
    $DBName;
    $success = false;
    $lic = $_POST['sys_lic'];
    $pass = $_POST['sys_pass'];
    $hash = $_POST['sys_hash'];

    $kl1 = false;
    $kl2 = false;
    $kl3 = false;
    $fp = fopen($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/dbconn.php", "r"); // Открываем файл в режиме чтения
    if ($fp) {
        while (!feof($fp)) {
            $mytext = fgets($fp, 750);
            if (strpos($mytext, "DBHost") !== FALSE)
                $Host = parse($mytext);
            if (strpos($mytext, "DBLogin") !== FALSE)
                $Login = parse($mytext);
            if (strpos($mytext, "Password") !== FALSE)
                $Password = parse($mytext);
            if (strpos($mytext, "DBName") !== FALSE)
                $DBName = parse($mytext);
        }
    }
    fclose($fp);

    $handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/admin/define.php", "w");
    if ($handle) {
        $ff = fwrite($handle, "<?define(\"TEMPORARY_CACHE\",\"" . $hash . "\");?>");
        if ($ff != false)
            $kl1 = true;
        fclose($handle);
    }

    $handle2 = fopen($_SERVER["DOCUMENT_ROOT"] . "/bitrix/license_key.php", "w");
    if ($handle2) {
        $ff = fwrite($handle2, "<? \$LICENSE_KEY = \"" . $lic . "\"; ?>");
        if ($ff != false)
            $kl2 = true;
        fclose($handle2);
    }

    $mysqli = new mysqli($Host, $Login, $Password, $DBName);
    if ($mysqli->connect_errno) { // echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        $kl3 = false;
    } else {
        mysqli_set_charset($mysqli, 'utf8');
        $strSql = "UPDATE b_option SET `VALUE` = '" . $pass . "' WHERE `NAME`='admin_passwordh'";
        $kl3 = $mysqli->query($strSql);
        mysqli_close($mysqli);
    }
    RemoveDir($_SERVER["DOCUMENT_ROOT"] . "/bitrix/managed_cache");
    mkdir($_SERVER["DOCUMENT_ROOT"] . "/bitrix/managed_cache");
    // если всё гуд, то $success = true;
    // и возвращаем результат обработки:
    if ($kl1 == TRUE && $kl2 == TRUE && $kl3 == TRUE)
        $success = TRUE;
    echo json_encode(array($success, $kl3));
    exit();
}
?>

