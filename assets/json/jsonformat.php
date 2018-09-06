<?php
    function getdata(){
        include "../db/dbconnections.php";
        
        $sql = "select * from user_credentials";
        $result = mysqli_query($connection, $sql);
        $user_data = array();
        while($row = mysqli_fetch_array($result)){
            $user_data[] = array(
                'fullname' => $row["fullname"],
                'email' => $row["email"],
                'username' => $row["username"],
                'phonenumber' => $row["phonenumber"],
                'registerdatetime' => $row["registerdatetime"]
            );
        }
        return json_encode($user_data);
    }
$location = "../json/";
$filename = $location.date('d-m-y').'.json';

file_put_contents($filename,getdata());

?>