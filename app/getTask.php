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
if ($verboHTTP === "GET") {

    if (isset($_GET['idTask']) && !empty($_GET['idTask'])) {
        //Se prepara la sentencia SQL junto con sus parametros
        $idTask = $_GET['idTask'];

        $sql = "SELECT * FROM task WHERE Id = :idTask";
        $state = $conn->getConnection()->prepare($sql);

        $state->bindParam(':idTask', $idTask);

        //Se ejecuta la sentencia y valida si no ocurrio algun error.
        if ($state->execute()) {
            $json = array();

            while ($row = $state->fetch(PDO::FETCH_ASSOC)) {
                $json = array(
                    "id" => $row['Id'],
                    "task" => $row['task'],
                    "description" => $row['description'],
                    "delivery_Date" => $row['delivery_Date'],
                    "done" => !$row['done'] ? false : true
                );
            }

            //Establece la respuesta y el estado de la aplicación
            $status = 200;

            $response = array(
                "status" => $status,
                "resp" => true,
                "message" => "Datos consultados satisfactoriamente!!",
                "body" => $json
            );
            http_response_code($status);
        } else {
            //Establece la respuesta y el estado de la aplicación
            $status = 400;

            $response = array(
                "status" => $status,
                "resp" => false,
                "message" => "Error en la consulta de datos"
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
