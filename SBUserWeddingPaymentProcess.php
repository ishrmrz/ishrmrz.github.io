<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $package = $_POST["package"];
    $payment_method = $_POST["payment_method"];

    // Depending on the payment method, you can handle the payment process accordingly.
    if ($payment_method === "gcash") {
        // Redirect to the GCash payment page or provide instructions.
        header("Location: gcash_payment_page.php");
        exit;
    } elseif ($payment_method === "cash") {
        // Provide instructions for cash payment.
        $instructions = "Please visit our office to make a cash payment.";
        echo $instructions;
    }
}
?>
