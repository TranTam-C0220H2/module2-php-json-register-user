<?php
function loadRegistrations($filename)
{
        $jsonData = file_get_contents($filename);
        return json_decode($jsonData);
}

function saveDataJSON($filename, $name, $email, $phone)
{
    try {
        $contact = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ];
        $arrayData = loadRegistrations($filename);
        array_push($arrayData, $contact);
        $jsonData = json_encode($arrayData);
        file_put_contents($filename, $jsonData);
        throw new Exception('Loi!!!');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}



