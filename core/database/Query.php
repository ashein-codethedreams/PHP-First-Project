<?php

class Query{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table){

    $statement = $this->pdo->prepare("select * from $table");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function insert($dataArr,$table){
        $getKeys =array_keys($dataArr);
        $cols=implode(",",$getKeys);
        $questMark="";
        foreach($getKeys as $key){
            $questMark.="?,";
        }
        $questMark=rtrim($questMark,",");
        $sql="insert into $table ($cols) values ($questMark)";
        $statement=$this->pdo->prepare($sql);
        $getValues =array_values($dataArr);
        $statement->execute($getValues);
    
    }

}
?>