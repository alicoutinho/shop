<?php
class pro{
    public  function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function pro_list(){
        $sql=$this->db->query("select * from pro_tbl");
        return $sql;
    }
    public function pro_list_catid($id){
        $sql=$this->db->query("select * from pro_tbl WHERE cat_id='$id'");
        return $sql;
    }
    public function list_menu_defualt(){
        $sql=$this->db->query("select * from pro_tbl WHERE chid='0'");
        return $sql;
    }
    public function list_under_menu_defualt($id){
        $sql=$this->db->query("select * from pro_tbl WHERE chid='$id'");
        return $sql;
    }
    public function add_pro($data,$to1,$to2,$to3){
        $this->db->query("insert into pro_tbl (title,text,cat_id,count,price,image1,image2,image3) VALUES ('$data[title]','$data[text]','$data[cat_id]','$data[count]','$data[price]','$to1','$to2','$to3')");
    }
    public function delete_pro($id){
        $this->db->query("delete from pro_tbl WHERE id='$id'");
    }
    public function procat_list(){
        $sql=$this->db->query("select * from procat_tbl WHERE chid!='0'");
        return $sql;
    }
    public function show_edit_pro($id){
        $sql=$this->db->query("select * from pro_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function edit_pro($data,$id){
        $this->db->query("update pro_tbl set title='$data[title]',chid='$data[chid]' WHERE  id='$id'");

    }
    public  function uploader($file){
        $img=$file['name'];
        $array=explode(".",$img);
        $newname=rand().".".end($array);
        $from=$file['tmp_name'];
        $to="../public/uploader/".$newname;
        move_uploaded_file($from,$to);
        return $to;

    }
}
?>