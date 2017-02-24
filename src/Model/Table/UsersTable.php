<?php
namespace App\Model\Table;

class UsersTable extends AppTable{
    public function initialize(array $config){
        parent::initialize($config);
        $this->table('users');
        $this->primaryKey('id');
    }
    
}
