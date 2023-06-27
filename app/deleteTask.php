<?php
//Importacion de clases y headers
require_once "./class/headers.php";
require_once "./class/MySQL.php";

//Variables Globales
$conn = new MySQL();
$response = array();
$jsonString = "";
$verboHTTP = $_SERVER['REQUEST_METHOD'];
$status = null;

//Revición de la petición HTTP sea correcta
if ($verboHTTP === "DELETE") {

    if (isset($_GET['idTask']) && !empty($_GET['idTask'])) {
        //Se prepara la sentencia SQL junto con sus parametros
        $idTask = $_GET['idTask'];

        $sql = "DELETE FROM task WHERE Id = :idTask";
        $state = $conn->getConnection()->prepare($sql);

        $state->bindParam(':idTask', $idTask);

        //Se ejecuta la sentencia y valida si no ocurrio algun error.
        if ($state->execute()) {
            //Establece la respuesta y el estado de la aplicación
            $status = 200;

            $response = array(
                "status" => $status,
                "resp" => true,
                "message" => "Datos eliminados!!!",
            );
            http_response_code($status);

        } else {
            //Establece la respuesta y el estado de la aplicación
            $status = 400;

            $response = array(
                "status" => $status,
                "resp" => false,
                "message" => "Error al eliminar los datos!!!!"
            );
            http_response_code($status);
        }
    } else {
        //Establece la respuesta y el estado de la aplicación
        $status = 404;

        $response = array(
            "status" => $status,
            "resp" => false,
            "message" => "Parametro indefinido!!!"
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
