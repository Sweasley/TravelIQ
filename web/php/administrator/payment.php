
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Confirmation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/booking-styles.css">
</head>
<body>
  
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">Payment Form</h1>
        <form id="paymentForm" action="function-payment.php" method="POST" class="bg-light p-4">
        <div class="fw-medium display-6 pb-5">
   
</div>
<div class="form-group">
            <label for="amount">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="form-group">
            <label for="paymentMode">Mode of Payment</label>
            <select class="form-control" id="paymentMode" name="mode" required>
              <option value="E-Wallet">E-Wallet</option>
              <option value="Debit Card">Debit Card</option>
              <option value="Credit Card">Credit Card</option>
              <option value="Counter">Walk in</option>
            </select>
          </div>
          <!-- walk in  -->
          <div id="addressContainer" style="display: none;">
            <p><strong>Travel IQ's Gcash: </strong> 123 Main Street, City, Count </p>
          </div>
           <!-- E wallet  -->
          <div id="ewalletContainer" style="display: none;">
            <p><strong>Travel IQ Address: </strong> 091234566778y</p>
          </div>
           <!-- Credit card  -->
          <div id="creditContainer" style="display: none;">
            <p><strong>Travel IQ Bank Details: </strong> Bank Name: 
          Account name: 
        Account number:  </p>
          </div>
           <!-- Debit card  -->
          <div id="debitContainer" style="display: none;">
            <p><strong>Travel IQ Bank Details: </strong>Bank Name: 
          Account name: 
        Account number: </p>
          </div>
          
          <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
          </div>
          <div class="form-group">
            <label for="transactionId">Reference Number:</label>
            <input type="text" name="transactionId" class="form-control" id="transactionId" required>
          </div>
          <button type="submit" name="submit" class="btn">
            Confirm
          </button>
        </form>

        <!-- Modal -->
        <!-- <div class="modal fade" id="paymentConfirmationModal" tabindex="-1" aria-labelledby="paymentConfirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="paymentConfirmationModalLabel">Payment Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <p><strong>Mode of Payment:</strong> <span id="modalPaymentMode"></span></p>
                <div id="modalAddressContainer"></div>
                <p><strong>Amount:</strong> <span id="modalAmount"></span></p>
                <p><strong>Reference Number:</strong> <span id="modalTransactionId"></span></p>
                <p>Email us for your confirmation of your payment : <strong>Traveliq.2024@gmail.com </strong> <span id="modalTransactionId"></span></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn " data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <script src="../../js/bg-change.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#paymentMode").change(function() {
        var selectedOption = $(this).val();
        if (selectedOption === "Counter") {
          $("#addressContainer").show();
          $("#ewalletContainer, #debitContainer, #creditContainer").hide();
          $("#modalAddressContainer").html($("#addressContainer").html());
        } else if (selectedOption === "E-Wallet") {
          $("#ewalletContainer").show();
          $("#addressContainer, #debitContainer, #creditContainer").hide();
          $("#modalAddressContainer").html($("#ewalletContainer").html());
        } else if (selectedOption === "Debit Card") {
          $("#debitContainer").show();
          $("#addressContainer, #ewalletContainer, #creditContainer").hide();
          $("#modalAddressContainer").html($("#debitContainer").html());
        } else if (selectedOption === "Credit Card") {
          $("#creditContainer").show();
          $("#addressContainer, #ewalletContainer, #debitContainer").hide();
          $("#modalAddressContainer").html($("#creditContainer").html());
        } else {
          $("#addressContainer, #ewalletContainer, #debitContainer, #creditContainer").hide();
          $("#modalAddressContainer").empty();
        }
      });

      $("#confirmButton").click(function(event) {
        event.preventDefault(); // prevent default form submission
        var isValid = $("#paymentForm")[0].checkValidity();
        if (isValid) {
          var name = $("#name").val();
          var paymentMode = $("#paymentMode").val();
          var amount = $("#amount").val();
          var transactionId = $("#transactionId").val();

          $("#modalName").text(name);
          $("#modalPaymentMode").text(paymentMode);
          $("#modalAmount").text("$" + amount);
          $("#modalTransactionId").text(transactionId);

          $("#paymentConfirmationModal").modal('show');
        } else {
          $("#paymentForm")[0].reportValidity();
        }
      });
    });
  </script>
</body>
</html>