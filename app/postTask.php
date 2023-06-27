<?php
//Importaciones
require_once "./class/headers.php";
require_once "./class/MySQL.php";

//Variables Globales
$conn = new MySQL();
$response = array();
$jsonString = "";
$verboHTTP = $_SERVER['REQUEST_METHOD'];
$status = null;

//Revisión de la petición HTTP sea correcta
if ($verboHTTP === "POST") {
    //Se obtiene todo el cuerpo de la petición del cliente 
    $body = json_decode(file_get_contents('php://input'), true);

    //Se validan todos los datos para que no ocurra algun error de inserción
    if (!empty($body) && isset($body['task']) && isset($body['description']) && isset($body['delivery_Date'])) {
        //Se crea la sentencia SQL y se prepara todos los parametos para su ejecución
        $sql = "INSERT INTO task(task, description, delivery_Date) VALUE(:task, :description, :delivery)";
        $state = $conn->getConnection()->prepare($sql);
        $state->bindParam(':task', $body['task']);
        $state->bindParam(':description', $body['description']);
        $state->bindParam(':delivery', $body['delivery_Date']);

        //Se verifica que la Sentencia SQL sea correacta y se ejecute correctamente
        if ($state->execute()) {
            //Establece la respuesta y el estado de la aplicación
            $status = 200;

            $response = array(
                "status" => $status,
                "resp" => true,
                "message" => "Todo salio correcto!!!"
            );
            http_response_code($status);
        } else {
            //Establece la respuesta y el estado de la aplicación
            $status = 400;

            $response = array(
                "status" => $status,
                "resp" => false,
                "message" => "Ocurrio un error el la inserción de los datos"
            );
            http_response_code($status);
        }
    } else {
        //Establece la respuesta y el estado de la aplicación
        $status = 404;

        $response = array(
            "status" => $status,
            "resp" => false,
            "message" => "El cuerpo de la petición esta vacia o no se mandan los parametros correctos"
        );
        http_response_code($status);
    }
} else {
    //Establece la respuesta y el estado de la aplicación
    $status = 404;

    $response = array(
        "status" => $status,
        "resp" => false,
        "message" => "El metodo HTTP es invalido!"
    );
    http_response_code($status);
}

//Se manda la Respuesta en json al Cliente de la aplicación
$jsonString = json_encode($response);
echo $jsonString;

