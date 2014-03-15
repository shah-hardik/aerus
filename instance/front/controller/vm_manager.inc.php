<?php

/**
 * NTP Server List File
 * 
 * 
 * @author Hardik Shah <hardiks059@gmail.com>
 * @version 1.0
 * @package Aerus
 * 
 */
$subTpl = "vm_manager_list.php";
switch ($urlArgs[0]) {
    case "add":
        break;
    default:
        $subTpl = "vm_manager_list.php";
        $activeMenuList = "active";
}


$url = "https://204.232.182.180/api/admin/configuration/v1/host_system/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "admin:video123");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
if (curl_exec($ch) === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    //echo 'Operation completed without any errors';
}
curl_close($ch);
$res = json_decode($output);
$vm = $res->objects;
$jsInclude = "vm_manager.js.php";
_cg("page_title", "VM Manager");
?>
