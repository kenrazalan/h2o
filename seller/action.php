<?php
require 'validate.php';
require '../connection.php';

    if(ISSET($_POST['submitApprove'])){
		$product_id= $_POST['product_id'];
		$customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $quantity = $_POST['quantity'];
        $total = $_POST['total'];
        // echo ("<script>
        // alert('$order_id');
        // </script>");


        $conn->query("UPDATE `orderlist` SET `status` = 'accepted',  `receipt_status` = 'complete' WHERE `order_id`= $order_id  && `merchant_id` = '".$_SESSION['merchant_id']."'" ) or die(mysqli_error());

        echo ("<script>
        alert('Approved');
        document.location.href = 'accepted_order.php';
        </script>");

	}


    if(ISSET($_POST['submitDispatch'])){
        $product_id= $_POST['product_id'];
        $customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $quantity = $_POST['quantity'];
        $deliveryman_id = $_POST['deliveryman'];
        $total = $_POST['total'];
        // echo ("<script>
        // alert('$order_id');
        // </script>");


        $conn->query("UPDATE `orderlist` SET `status` = 'dispatched', `deliveryman_id`= $deliveryman_id  WHERE `order_id`= $order_id  && `merchant_id` = '".$_SESSION['merchant_id']."'" ) or die(mysqli_error());

        echo ("<script>
        alert('Ready to deliver');
        document.location.href = 'delivery_list.php';
        </script>");

    }


     if(ISSET($_POST['submitCancel'])){
        $product_id= $_POST['product_id'];
        $customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $quantity = $_POST['quantity'];
        $total = $_POST['total'];
        // echo ("<script>
        // alert('$order_id');
        // </script>");


        $conn->query("UPDATE `orderlist` SET `status` = 'cancelled' WHERE `order_id`= $order_id  && `merchant_id` = '".$_SESSION['merchant_id']."'" ) or die(mysqli_error());

        echo ("<script>
        alert('Cancelled');
        document.location.href = 'order_list.php';
        </script>");

    }


     if(ISSET($_POST['submitComplete'])){
        $product_id= $_POST['product_id'];
        $customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $quantity = $_POST['quantity'];
        $total = $_POST['total'];
        // echo ("<script>
        // alert('$order_id');
        // </script>");


        $conn->query("UPDATE `orderlist` SET `status` = 'accepted',  `receipt_status` = 'Complete' WHERE `order_id`= $order_id  && `merchant_id` = '".$_SESSION['merchant_id']."'" ) or die(mysqli_error());

        echo ("<script>
        alert('Approved');
        document.location.href = 'accepted_order.php';
        </script>");

    }


    if(ISSET($_POST['submitIncomplete'])){
        $product_id= $_POST['product_id'];
        $customer_id = $_POST['customer_id'];
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $quantity = $_POST['quantity'];
        $total = $_POST['total'];
        // echo ("<script>
        // alert('$order_id');
        // </script>");


        $conn->query("UPDATE `orderlist` SET `receipt_status` = 'incomplete' WHERE `order_id`= $order_id  && `merchant_id` = '".$_SESSION['merchant_id']."'" ) or die(mysqli_error());

        echo ("<script>
        alert('incomplete payment');
        document.location.href = 'order_list.php';
        </script>");

    }


?>