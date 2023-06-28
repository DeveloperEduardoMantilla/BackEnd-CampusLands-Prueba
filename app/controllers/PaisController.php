<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\PaisModel;

    class PaisController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="pais";
            $response=PaisModel::getData($table);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="pais";
            $response=PaisModel::getDataId($table,$id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="pais";
            $response = PaisModel::postData($table, $data);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="pais";
            $response = PaisModel::putData($table, $data, $id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="pais";
            $find = PaisModel::getDataId($table,$id);
            if(!empty($find)){
                $response = PaisModel::deleteData($table, $id);
                header('Access-Control-Allow-Origin: *');
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>