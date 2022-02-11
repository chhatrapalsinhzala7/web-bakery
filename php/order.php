<?php
    session_start();
    require('./dbconfig.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_SESSION["cart"])&&isset($_SESSION['userid'])&&isset($_SESSION["total"]))
        {
            $items = "";
            foreach($_SESSION["cart"] as $item)
            {
                $items = $items.$item['name'].",";
            }
            $items = substr($items,0,strlen($items)-1);
            echo $items;
            $userid = $_SESSION['userid'];
            $total = $_SESSION["total"];
            $sql = "INSERT INTO orders (UserId,OrderItems,Price) VALUES ($userid,'$items',$total)";
            if ($conn->query($sql)===TRUE) {
                $orderid = $conn->insert_id;
                header("Location: ../index.html");
            }


        }
    }

?>