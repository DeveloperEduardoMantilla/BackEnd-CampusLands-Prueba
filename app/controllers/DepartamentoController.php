<?php 
    namespace proyectoApi\controllers;
    use proyectoApi\models\DepartamentoModel;

    class DepartamentoController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="departamento";
            $response=DepartamentoModel::getData($table);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="departamento";
            $response=DepartamentoModel::getDataId($table,$id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="departamento";
            $response = DepartamentoModel::postData($table, $data);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="departamento";
            $response = DepartamentoModel::putData($table, $data, $id);
            header('Access-Control-Allow-Origin: *');
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="departamento";
            $find = DepartamentoModel::getDataId($table,$id);
            if(!empty($find)){
                $response = DepartamentoModel::deleteData($table, $id);
                header('Access-Control-Allow-Origin: *');
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>