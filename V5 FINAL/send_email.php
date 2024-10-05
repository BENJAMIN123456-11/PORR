<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order = $_POST['order'];
    
    $to = "fernandezbenjie000@gmail.com";
    $subject = "New Order Received";
    $message = "A customer has ordered: " . $order;
    $headers = "From: server23112@gmail.com";

    $mail_result = mail($to, $subject, $message, $headers);

    if ($mail_result) {
        echo "Order has been successfully sent!";
    } else {
        echo "Failed to send order.";
    }
}
?>
