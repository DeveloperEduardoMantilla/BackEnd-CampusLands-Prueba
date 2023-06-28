<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\CampersModel;

    class CampersController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="campers";
            $response=CampersModel::getData($table);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="campers";
            $response=CampersModel::getDataId($table,$id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="campers";
            $response = CampersModel::postData($table, $data);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="campers";
            $response = CampersModel::putData($table, $data, $id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="campers";
            $find = CampersModel::getDataId($table,$id);
            if(!empty($find)){
                $response = CampersModel::deleteData($table, $id);
                header('Access-Control-Allow-Origin: *');
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>