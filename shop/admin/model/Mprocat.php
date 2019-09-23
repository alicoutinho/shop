<?php
class procat{
    public  function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function procat_list(){
        $sql=$this->db->query("select * from procat_tbl");
        return $sql;
    }
    public function list_menu_defualt(){
        $sql=$this->db->query("select * from procat_tbl WHERE chid='0'");
        return $sql;
    }
    public function list_under_menu_defualt($id){
        $sql=$this->db->query("select * from procat_tbl WHERE chid='$id'");
        return $sql;
    }
    public function add_procat($data){
        $this->db->query("insert into procat_tbl (title,chid) VALUES ('$data[title]','$data[chid]')");
    }
    public function delete_procat($id){
        $this->db->query("delete from procat_tbl WHERE id='$id'");
    }
    public function promaincat_list(){
        $sql=$this->db->query("select * from procat_tbl WHERE chid='0'");
        return $sql;
    }
    public function show_edit_procat($id){
        $sql=$this->db->query("select * from procat_tbl WHERE id='$id'");
        $result=$sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function edit_procat($data,$id){
        $this->db->query("update procat_tbl set title='$data[title]',chid='$data[chid]' WHERE  id='$id'");

    }
}
?>