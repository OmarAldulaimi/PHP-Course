 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "hej");  
 if(isset($_POST["add_to_cart"]))  // lägger till en produkt till kundvagn
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  // ta bort en produkt
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <html>  
      <head>  
           <title>KUNDVAGN</title>  
           <link rel="stylesheet" type="text/css" href="style.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:WHITE">START SIDA</a>
    </div>
    <div class="collapse navbar-collapse" style="background-color: black" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="index.php" class="button" style="color:WHITE">IPHONES</a></li>
      <li><a href="page2.php" class="button" style="color:WHITE">SAMSUNG</a></li>
        <li><a href="cartpage.php" style="color:WHITE">KUNDVAGN</a></li>
    </ul>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.html" style="color:WHITE"><span class="glyphicon glyphicon-log-in" style="color:WHITE"></span> Admin Inloggning</a></li>
      </ul>
    </div>
  </div>

  <body>     
                <div style="clear:both"></div>  
          
                <h3>Order detaljer</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Produkt namn</th>  
                               <th width="10%">Kvantitet</th>  
                               <th width="20%">Pris</th>  
                               <th width="15%">Antal</th>  
                               <th width="5%">Ta bort</th>  
                          </tr>  
                          <?php   
                         
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>KR <?php echo $values["item_price"]; ?></td>  
                               <td>KR <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Ta bort</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td> 
                               <td align="right">KR <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div> 
           
      </body>  


           
