<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class AttachmentComponent extends Component {
    
    public function uploadFile(&$fileDataInsert, $filesData, $uploadDir, $acceptType=null){
        //remove empty file
        $files = array();
        foreach ($filesData as $file){
            if(trim($file['name']) != "" && $file['size'] > 0){
                $files[] = $file;
            }
        }
        
        // empty file, do nothing
        if(empty($files)){
            return array('message' => '','result' => true);
        }
        
        // check error
        if(!$this->_errorUpload($files)){
            return array(
                'message' => 'An error occurred while uploading.',
                'result' => false
            );
        }
        
        // check accept file type
        if(!empty($acceptType)){
            $listFile = !is_array($acceptType) ? $acceptType : implode(',', $acceptType);
            if(!$this->_acceptType($files, $acceptType)){
                return array(
                    'message' => 'Only upload file type '.$listFile,
                    'result' => false
                );
            }
        }
        
        // check upload patch
        if (substr($uploadDir, -1, 1) != DIRECTORY_SEPARATOR){
            $uploadDir .= DIRECTORY_SEPARATOR;
            if(!file_exists($uploadDir) ) {
                @mkdir($uploadDir, 0777, true);    
            } else {
                chmod($uploadDir, 0777);
            }
        }
        
        $fileDataInsert = $this->_upload($files, $uploadDir);
        
        return array('message' => '','result' => true);
    }
    
    private function _acceptType($files, $acceptType){
        if(!empty($files)){
            foreach ($files as $file){
                $type = substr($file['name'], strripos($file['name'], '.') + 1);
                if(!$this->_checkType($type, $acceptType)){
                    return false;
                }
            }
        }
        return true;
    }
    
    private function _checkType($type, $acceptType){
        if(is_array($acceptType)){
            return in_array(strtolower($type), array_map("strtolower", $acceptType));
        } else {
            return ($type==$acceptType);
        }
    }
    
    private function _errorUpload($files){
        foreach ($files as $file) {
            if($file['error'] > 0){
                return false;
            }
        }
        return true;
    }
    
    private function _upload($files, $uploadDir){
        $filesUpload = array();
        foreach ($files as $key => $file) {
            if (is_uploaded_file($file['tmp_name']) && is_file($file['tmp_name'])) {
                $ext = substr($file['name'], strripos($file['name'], '.') + 1);
                $endCode = number_format(microtime(true), 4, '','').'.'.$ext;
                if(move_uploaded_file($file['tmp_name'], $uploadDir.$endCode)) {
                    $filesUpload[] = array(
                        'name' => $file['name'],
                        'hash' => $endCode,
                        'type' => $file['type'],
                        'size' => $file['size'],
                        'ext' => $ext
                    );
                }
            }
        }
        return $filesUpload;
    }
}
