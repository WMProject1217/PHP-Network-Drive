<?php //By WMProject1217
//WMSYS Automatic Execute

//WMSYS Basic Values
$wmsys_langmode="zh-cn";
$wmsys_address="./";
$wmsys_name="网盘";
$wmsys_sysroot=$wmsys_address;
$wmsys_imagedb=$wmsys_address . "/picture/";
//WMSYS User Values
if (isset($_COOKIE["username"])){
    $wmsys_userlogon="1";
    $wmsys_username=$_COOKIE['username'];
    $wmsys_useruid=$_COOKIE['useruid'];
    $wmsys_userfolder=$wmsys_sysroot . "/user/$wmsys_useruid";
} else {
    $wmsys_userlogon="0";
    $wmsys_username="?";
    $wmsys_useruid="-1";
    $wmsys_userfolder=$wmsys_imagedb . "/common/user.png";
}
//Language String
if ($wmsys_langmode=='zh-cn'){
    $c = "";

} else if ($wmsys_langmode=='en-us'){
    $c = "";
}
?>