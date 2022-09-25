<?php

namespace App\lib;
use App\config\database;
class DB
{
    private $conn,$result;

    function __construct(){
        $this->conn = new \mysqli(database::$CREDENTIALS['servername'], database::$CREDENTIALS['username'], database::$CREDENTIALS['password']);
        $this->conn->query('use '.database::$CREDENTIALS['database'].';');
    }

    public function execute(string $sql){
        $this->result = $this->conn->query($sql);
        if(!$this->result){
            return false;
        }
        return true;
    }

    public function get(){
        $data = [];
        if($this->rows() > 0){
            while ($row = $this->result->fetch_array(MYSQLI_ASSOC)){
                array_push($data,$row);
            }
        }
        return $data;
    }

    public function first(){
        if($this->rows() > 0){
            return $this->result->fetch_array(MYSQLI_ASSOC);
        }
        return null;
    }

    public function rows(){
        return $this->result->num_rows;
    }

    public function last_id(){
        return $this->conn->insert_id;
    }

    public function paginate($sql,$limit,$page){
        $count_sql = "SELECT COUNT(*) AS c FROM ($sql) AS x;";
        $this->execute($count_sql);
        $count = (int)$this->first()['c'];
        $offset = (int)$limit * ((int)$page-1);
        $data['meta'] = [
            'from' => $offset + 1,
            'to' => $count > ($offset + $limit) ? ($offset + $limit) : $count,
            'total' => $count,
            'last_page' => ceil($count/$limit),
            'current_page' => $page,
        ];
        if($count>0){
            $sql = $sql." LIMIT $limit OFFSET $offset;";
            $this->execute($sql);
            $data['data'] = $this->get();
        }
        else{
            $data['data'] = [];
        }
        return $data;
    }

    public function findOrNew($table,$data){
        $sql = "
            INSERT INTO $table (".implode(', ',array_keys($data)).")
            VALUES ('".implode("' , '",array_values($data))."')
            ON DUPLICATE KEY UPDATE 
        ";
        $chk = false;
        foreach($data as $k => $v){
            $sql = $sql.($chk ? ', ' : '');
            $sql = $sql."$k = '$v'";
            $chk = true;
        }
        $sql = "$sql;";
        $this->execute($sql);
        return $this->last_id();
    }
}