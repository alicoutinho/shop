<?php
        require_once 'model/Mpro.php';
        $class=new pro();
        switch ($action){
            case 'list':
                $prolist=$class->pro_list();
             break;
            case 'add':
                $pro=$class->procat_list();
                $file1=$_FILES['image1'];
                $file2=$_FILES['image2'];
                $file3=$_FILES['image3'];
                if(isset($_POST['btn'])){
                   $to1= $class->uploader($file1);
                   $to2= $class->uploader($file2);
                   $to3= $class->uploader($file3);
                   $data=$_POST['frm'];
                   $class->add_pro($data,$to1,$to2,$to3);
                }
             break;
            case 'delete':
                $id=$_GET['id'];
                $class->delete_pro($id);
            break;
            case 'edit':
                $id=$_GET['id'];
                $pro=$class->promaincat_list();
                $showedit=$class->show_edit_pro($id);
                if(isset($_POST['btn'])){
                    $data=$_POST['frm'];
                    $class->edit_pro($data,$id);
                }
            break;

        }

        require_once 'view/'.$controller.'/'.$action.'.php';