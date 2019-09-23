<?php
class procats{
    public  function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function procat_list(){
       $sql=$this->db->query("select * from procat_tbl");
       $result=$sql->fetchAll(PDO::FETCH_ASSOC);
       return $result;
    }
}
