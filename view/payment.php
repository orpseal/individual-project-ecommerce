<?php
require('../controllers/cart.controller.php');
include("../settings/core.php");
$customer_id = $_SESSION['cid'];
$cartitems = viewcart_ctr($customer_id);
$email = email_ctr($customer_id);
$email = $email['customer_email'];

$total = select_total_qty_from_cart_ctr($customer_id);
$total = $total[0];
$total1 = $total['SUM(qty)'];
$grandtotal = select_total_price_ctr($customer_id);
$grandtotal = $grandtotal[0];
$grandtotal1 = $grandtotal['SUM(products.product_price*cart.qty)'];


?>


<!doctype html>
<html lang="en">

<head>
    <title>Payment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>




    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Summary</h5>
                    </div>


                    <?php
                    foreach ($cartitems as $oneitem) {
                        $product_id = $oneitem['product_id'];
                        $product_title = $oneitem['product_title'];
                        $product_price = $oneitem['product_price'];
                        $product_image = $oneitem['product_image'];
                        $product_qty =  $oneitem['qty'];
                        $itemtotal_price = $product_price * $product_qty;




                        echo "
                                <div class='card-body'>
                                <ul class='list-group list-group-flush'>
                                    <li
                                        class='list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0'>
                                        Product Name
                                        <span>$product_title</span>
                                        

                                    </li>

                                    <li class='list-group-item d-flex justify-content-between align-items-center px-0'>
                                    Price
                                    <span>$product_price</span>
                                    </li>

                                    <li class='list-group-item d-flex justify-content-between align-items-center px-0'>
                                        Quantity
                                        <span>$product_qty</span>
                                    </li>
                                    <li
                                        class='list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3'>
                                        <div>
                                            <strong>Total amount</strong>
                                            <strong>
                                                <p class='mb-0'>(including VAT)</p>
                                            </strong>
                                        </div>
                                        <span><strong>$itemtotal_price</strong></span>
                                    </li>
                                </ul>
                               
                               </div>
                               ";
                    }
                    ?>

                    <div class="card-footer">
                        <form action="../actions/payment.action.php" method="POST">
                            <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" id="amt" name="amount" value="<?php echo $grandtotal1; ?>">
                            <input type="hidden" name="customerid" value="<?php echo $customer_id; ?>">
                            <button class='btn btn-primary btn-lg btn-block' type="submit" name="pay_now" id="pay-now" onclick=payWithPaystack()>Pay now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function payWithPaystack() {
            event.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd',
                email: document.getElementById("email").value,
                amount: document.getElementById("amt").value * 100,
                ref: '' + Math.floor((Math.random() * 1000000000) + 1),
                currency: 'GHS',
                callback: function(response) {
                    // the transaction status is in response.data.status
                    console.log(response);
                    let reference = response.reference;
                    let confirmed = confirm(`Payment complete! Reference: ${reference}`);
                    confirmed ? window.location.replace('index.php') : ''; //redirect on success else do nothing
                },
                onClose: function() {
                    alert('Transaction was not completed, window closed')
                }
            });
            handler.openIframe();

        }
    </script>







</body>

</html>