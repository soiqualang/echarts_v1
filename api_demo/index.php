<?php
if(isset($_REQUEST['idtram']) && isset($_REQUEST['loaidata'])){
    $idtram = $_REQUEST['idtram'];
    $loaidata = $_REQUEST['loaidata'];
    
    try {
        $data = file_get_contents($loaidata."_".$idtram.".json");
        header('Content-Type: application/json; charset=utf-8');
        // echo json_encode($data);
        echo $data;
    } catch(Exception $e) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode('{"data":[]}');
    }
}
?>