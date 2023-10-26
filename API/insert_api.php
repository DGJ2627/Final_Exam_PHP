<?php
include("../Config/config.php");
header("Access-Control-Allow-Methods: POST");


$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cat_name = $_POST['cat_name'];
    $f_name = $_POST['f_name'];
    $price = $_POST['price'];

    $res = $config->insert($cat_name,$f_name,$price);

    if($res){
        $arr['data'] = "Record Inserted Successfully....";
    }else{
        $arr['data'] = "Record Insertion Failed....";   
    }

}else{
    $arr['rerror'] = "Only POST HTTP Methods are Allowed....";
}
// echo "skdfnbhj";
echo json_encode($arr);

?>