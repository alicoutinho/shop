<?php
        require_once 'model/Mprocat.php';
        $class=new procat();
        switch ($action){
            case 'list':
                $procatlist=$class->procat_list();
             break;
            case 'add':
                $pro=$class->promaincat_list();
                if(isset($_POST['btn'])){
                    $data=$_POST['frm'];
                    $class->add_procat($data);
                }
             break;
            case 'delete':
                $id=$_GET['id'];
                $class->delete_procat($id);
            break;
            case 'edit':
                $id=$_GET['id'];
                $pro=$class->promaincat_list();
                $showedit=$class->show_edit_procat($id);
                if(isset($_POST['btn'])){
                    $data=$_POST['frm'];
                    $class->edit_procat($data,$id);
                }
            break;

        }

        require_once 'view/'.$controller.'/'.$action.'.php';