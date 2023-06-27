<?php
    //Establesco un mensaje de respuesta
    $welcome = array(
        "responce" => "Welcome to my API",
        "status" => 200
    );

    //Establesco el estado del servidor y la respuesta al cliente
    http_response_code(200);
    echo json_encode($welcome);

