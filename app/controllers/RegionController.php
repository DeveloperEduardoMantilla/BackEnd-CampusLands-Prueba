<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\RegionModel;

    class RegionController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="region";
            $response=RegionModel::getData($table);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="region";
            $response=RegionModel::getDataId($table,$id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="region";
            $response = RegionModel::postData($table, $data);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="region";
            $response = RegionModel::putData($table, $data, $id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="region";
            $find = RegionModel::getDataId($table,$id);
            if(!empty($find)){
                $response = RegionModel::deleteData($table, $id);
                header('Access-Control-Allow-Origin: *');
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>