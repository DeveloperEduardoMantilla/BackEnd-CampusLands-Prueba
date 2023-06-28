<?php     
    $routesArray=explode("/",$_SERVER['REQUEST_URI']);
    $routesArray = array_filter($routesArray);

    //Este segmento de codigo me permite validar si viene un ruta
    if(sizeof($routesArray)<=1){
        $json = array(
            'status'=>404,
            'result'=>'Not Found'
        );
        echo json_encode($json, http_response_code($json["status"]));
        return;
    }

    $METHOD = $_SERVER["REQUEST_METHOD"];
    $RUTA = $routesArray[2];


    if(!empty($METHOD))
    {
        switch ($RUTA) {
            case 'region':
                include_once "services/region.php";
                break;
            case 'departamento':
                include_once "services/departamento.php";
                break;
            case 'pais':
                include_once "services/pais.php";
                break;
            case 'campers':
                include_once "services/campers.php";
                break;

            default:
                $json = array(
                    'status'=>400,
                    'comment'=>"Not Found"
                );
                echo json_encode($json, http_response_code($json["status"]));
            break;
        } 
    }

?>