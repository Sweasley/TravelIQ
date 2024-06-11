<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .confirmation-message {
            font-size: 1.2rem;
        }
        .transaction-id {
            font-weight: bold;
            font-size: 1.5rem;
            color: hsl(26, 93%, 50%);
        }
        .email-message {
            margin-top: 20px;
            font-size: 1rem;
        }
        .email-text{
            color:hsl(26, 93%, 50%);
        }
        .btn{
            background-color:hsl(26, 93%, 50%);
            color: white;
        }
    </style>
</head>
<body> <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h1>Payment Confirmation</h1>
                <div class="confirmation-message">
                    <p>Thank you for your payment. Your transaction ID is:</p>
                    <p class="transaction-id"><?php echo $_SESSION['transactionid']; ?></p>
                </div>
                <div class="email-message">
                    <p>You can email us at <span class="email-text">TravelIQ@email.com</span> for your confirmation of payment.</p>
                </div>
                <div class="home-button">
                    <a href="customer-homepage.php" class="btn ">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
