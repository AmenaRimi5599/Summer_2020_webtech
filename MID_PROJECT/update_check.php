<?php
  session_start();

  if(isset($_POST['submit'])){

    $product = $_POST['product'];
    $amount = $_POST['amount'];
    $count = $_POST['count'];
   
    if(empty($product) || empty($amount) || empty($count))
    {
      echo "submit all";
    }
    
      else
      {

      $update = ['product'=> $product,
               'amount'=> $amount,
               'count'=> $count
              ];

      $_SESSION['product']   = $product;
      $_SESSION['amount']    = $amount;
      $_SESSION['count']   = $count;
      $_SESSION['update']     = $update;

      setcookie('product', $product, time()+3600, '/');
      setcookie('amount', $amount, time()+3600, '/');
      setcookie('count', $count, time()+3600, '/');
      

      echo "set";

      header('location: inventory.php');
      }
    

  }
  else
  {
   echo "not set";
}

?>