 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "hej");  // kopplar med databasen
 if(isset($_POST["add_to_cart"]))  
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
 if(isset($_GET["action"]))  
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
 <link rel="stylesheet" type="text/css" href="style.css">
      <head>  
           <title>IPHONE</title>  
           
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
      
      
           <br />  
           <div class="container" style="width:1200px;">  
                <h3 align="center">IPHONES</h3><br />  
                <?php  
                 $connect = mysqli_connect("localhost", "root", "", "hej"); // öppnar databasen
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  // hämtar alla produkter som finns i databasen
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
                                
                            
                             <h4  >    <?php echo "<img src='images/".$row['image']."' >"; ?> </h4>
                               
                               <h4 class="text-danger">KR <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Lägg till" />  
                          </div>  
                     </form>  
                      <p>
      
      </p>
                </div>  
                <?php  
                     }  
                }  
                ?>  
 
           <br />  
           
      </body>  

 </html>