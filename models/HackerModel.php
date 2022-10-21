<?php

require_once 'BaseModel.php';

class HackerModel extends BaseModel {

  
    /**
     * Insert session-user
     * @param $input
     * @return mixed
     */
    public function insertUser($input) {
        
        $sql = "INSERT INTO `hacker`.`hacker` (`session`) VALUES ('$input');";

                

        $user = $this->insert($sql);

        return $user;
    }

   
}