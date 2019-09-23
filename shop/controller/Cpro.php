<?php
require_once 'admin/model/Mpro.php';
$pro=new pro();
switch ($action){
    case 'list':
        require_once 'admin/model/Mprocat.php';
        $list=new procat();
        if(isset($_GET['procat'])){
            $cat_id=$_GET['procat'];
            $allpro=$pro->pro_list_catid($cat_id);
        }else {
            $allpro = $pro->pro_list();
        }
        $res=$list->procat_list();
        break;
    case 'detail':
        $id=$_GET['id'];
        $resultdet= $pro->show_edit_pro($id);
        break;

}

require_once 'view/'.$controller.'/'.$action.'.php';