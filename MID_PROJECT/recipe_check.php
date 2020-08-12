<?php
  session_start();

  if(isset($_POST['submit'])){

    $picture = $_POST['picture'];
    $ingredient = $_POST['ingredient'];
    $process = $_POST['process'];
   
    if(empty($picture) || empty($ingredient) || empty($process))
    {
      echo "submit all";
    }
    
      else
      {

      $myrecipe = ['picture'=> $picture,
               'ingredient'=> $ingredient,
               'process'=> $process
              ];

      $_SESSION['picture']   = $picture;
      $_SESSION['ingredient']    = $ingredient;
      $_SESSION['process']   = $process;
      $_SESSION['myrecipe']     = $myrecipe;

      setcookie('picture', $picture, time()+3600, '/');
      setcookie('ingredient', $ingredient, time()+3600, '/');
      setcookie('process', $process, time()+3600, '/');
      

      echo "set";

      header('location: cook_book.php');
      }
    

  }
  else
  {
   echo "not set";
}

?>