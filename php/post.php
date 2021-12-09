<?php
    require_once 'connection.php';
    include('function.php');

    $result_query = $_POST["name"];
    if(brackets($result_query)) {
        $bool_query = 'True';
    }
    else {
        $bool_query = 'False';
    }

    $link = mysqli_connect('localhost', 'root', '', 'brackets') or die("Ошибка" . mysqli_error($link));
    $query = mysqli_query($link, "INSERT INTO history (result, text) VALUES ('$bool_query', '$result_query')");
    mysql_free_result($link);

    if (isset($_POST["name"])) { 
        $arr = array (
            'Success:' => $bool_query
        );
        echo json_encode($arr);
    }
?>