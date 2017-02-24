<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class AppTable extends Table{
    public function initialize(array $config){
        parent::initialize($config);
    }
    
    /**
     * @desc get multi record
     * @param array $fields
     * @param array $conditions
     * @param array $order
     * @param array $join
     * @param array $group
     * @return object
     */
    public function fetchAll($fields=null,$conditions=null,$order=null,$join=null,$group=null,$limit=null) {
        return $this->find('all',array(
            'fields' => $fields,
            'conditions' => $conditions,
            'order' => $order,
            'join' => $join,
            'group' => $group,
            'limit' => $limit
        ));
    }
    
    /**
     * @desc get one record
     * @param array $fields
     * @param array $conditions
     * @param array $order
     * @param array $join
     * @param array $group
     * @return object
     */
    public function fetchRow($fields=null,$conditions=null,$order=null,$join=null,$group=null,$limit=null) {
        return $this->find('all',array(
            'fields' => $fields,
            'conditions' => $conditions,
            'order' => $order,
            'join' => $join,
            'group' => $group,
            'limit' => $limit
        ))->first();
    }
    
    /**
     * @desc get record for list item
     * @param array $fields
     * @param string $key
     * @param string $value
     * @param array $conditions
     * @param array $order
     * @param array $join
     * @param array $group
     * @return object
     */
    public function fetchList($fields=null, $key='id',$value='id',$conditions=null,$order=null,$join=null,$group=null) {
        return $this->find('list',array(
            'fields' => $fields,
            'keyField' => $key,
            'valueField' => $value,
            'conditions' => $conditions,
            'order' => $order,
            'join' => $join,
            'group' => $group
        ));
    }
    
    /**
     * @desc insert record
     * @param array $data
     * @return boolean
     */
    public function insert($data){
        if(empty($data) || !is_array($data)) {
            return false;
        }
        $data = $this->trimData($data);
        return $this->save($this->newEntity($data));
    }
    
    /**
     * @desc insert multi record
     * @param array $data
     * @return boolean
     */
    public function insertMulti($data){
        if(empty($data) || !is_array($data)){
            return false;
        }
        
        $this->connection()->begin();
        $entities = $this->newEntities($data);
        foreach ($entities as $entity) { 
            $this->save($entity);
            if(!$this->save($entity)){
                $this->connection()->rollback();        
            }
        }
        $this->connection()->commit();
        return true;
    }
    
    /**
     * @desc update data
     * @param array $data
     * @param array $conditions
     * @return boolean
     */
    public function update($data, $conditions){
        if(empty($data) || !is_array($data) || empty($conditions)) {
            return false;
        }
        $data = $this->trimData($data);
        $this->updateAll($data, $conditions);
        return true;
    }
    
    public function trimData($data){
        if(is_object($data)){
            return $data;
        }
        if(is_array($data)){
            $result = array();
            foreach ($data as $key => $value) {
                $result[$key] = $this->trimData($value);
            }
        } else {
            $result = trim($data);
        }
        return $result;
    }
}
