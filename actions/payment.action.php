<?php
include("../settings/core.php");
require("../controllers/cart_controller.php");

$url = "https://api.paystack.co/transaction/initialize";
$email = $_POST['email'];
// $amt = $_POST['amt'];
$amt = $_POST['amt'];
$amt = select_one_price_ctr($amt);


$fields = [

  'email' => $email,
  'amt' => "$amount"
];

$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer sk_test_d05e5a72a8d18503d798a15197dd09d7b05befef",
  "Cache-Control: no-cache",
));
//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute post
$result = curl_exec($ch);
echo $result;


if ($result) {
  //save transaction in order table
  $invoice_no = mt_rand();
  $customer_id = $_SESSION['cid'];
  $status = 'Success';
  $payment_date = date('Y-m-d');
  $order = order_ctr($customer_id, $invoice_no, $payment_date, $status);

  if ($order) {
    echo "success transaction";
  } else {
    echo "fail transaction";
  }
  //save payment details
  $order_id = order_id_ctr($invoice_no);
  $order_id = $order_id['order_id'];
  // $amt= $_GET['amt'];
  $currency = 'GHS';
  $payment = payment_ctr($amt, $customer_id, $order_id, $currency, $payment_date);
  if ($payment) {
    header("location:../view/all_prodcut.php");
  } else {
    echo "failed payment";
  }
}
