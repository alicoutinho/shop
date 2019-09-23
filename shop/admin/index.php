<?php
        include_once 'view/layout/header.php';
        include_once '../public/config.php';
$controller=$_GET['c']?$_GET['c']:'index';
$action=$_GET['a']?$_GET['a']:'index';
if(file_exists('controller/C'.$controller.'.php')){
    require_once ('controller/C'.$controller.'.php');
}
?>
<?php
include_once 'view/layout/footer.php';
?>