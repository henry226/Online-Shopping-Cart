<?php   
session_start();  
$servername = "localhost";
$username = "root";
$password = "";
$database = "cs602";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Database Connected successfully";
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Shopping Cart Lab</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link href="../css/main.css" rel="stylesheet"> 
           <style>  
           .product_drag_area{  
                width:100%;  
                height:400px;  
                border:2px dashed #ccc;  
                color:#ccc;
                line-height:200px;  
                text-align:center;  
                font-size:24px;  
           }  
           .product_drag_over{  
                color:red;  
                border-color:red;  
           }  
           </style>  
      </head>  

      <!-- Shopping cart homepage -->
      <body style="background-color: #e6e6e6;">
          <?php 
            if(isset($_SESSION["email"])){
                echo '<a href="../index.php"><span style="float:right; color:black">';
                echo $_SESSION["email"];
                echo '</span></a>';
            }
            else
                echo '<a href=../index.php><span style="float:right; color:black">HomePage</span></a>';
          ?>
           <br />  
           <div class="container-fluid">  
                <!--<h3 align="center">PHP Shopping Cart by jQuery Drag and Drop</h3><br />  -->
                <div class="row animate" style="margin-top: 23px; text-align: center; margin-bottom: 17px">
                    <div class="col-md-12">
                    <p style="font-size:35px;"><img src="../images/cswofoil_logo.png" alt="Company Logo"/> Chin-Shen / Wofoil Enterprise Co., Ltd</p>
                    </div>
                </div>

                <?php  
                $query = "SELECT * FROM shopping_carts ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  

                <div class="col-md-3">  
                     <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; cursor:move" align="center">  
                          <img style="width:300px; height:280px;" src="<?php echo $row["image"]; ?>" data-id="<?php echo $row['id']; ?>" data-name="<?php echo $row['name']; ?>" data-price="<?php echo $row['price']; ?>" class="img-responsive product_drag" />  
                          <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                          <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                     </div>  
                </div>  

                <?php  
                     }  
                }  
                ?>  

                <div style="clear:both"></div>  
                <br />  
                <div style="text-align: center; margin-bottom: 20px">
                    <form action="./logOff.php">
                        <button type="submit" class="btn btn-primary btn-lg" onclick="alertFunction2()">Clear Cart</button>
                    </form>
                </div>

                <div align="center">  
                     <div class="product_drag_area">Drop Product Here</div>  
                </div>  

                <div id="dragable_product_order">  
                </div>  
           </div>  
           <br />  
            
            <div style="text-align: center">
                <form action="./logOff.php">
                    <button type="submit" class="btn btn-primary btn-lg" onclick="alertFunction()">Checkout</button>
                </form>
            </div>
      </body>  
 </html>  
 <script>  
 
 function alertFunction(){
     alert("Thank you for shopping with us!");
 }

 function alertFunction2(){
     alert("You have cleared your cart!");
 }
 $(document).ready(function(data){ 

      $('.product_drag_area').on('dragover', function(){  
           $(this).addClass('product_drag_over');  
           return false;  
      });  

      $('.product_drag_area').on('dragleave', function(){  
           $(this).removeClass('product_drag_over');  
           return false;  
      });  

      $('.product_drag').on('dragstart', function(e){  
           e.originalEvent.dataTransfer.setData("id", $(this).data("id"));  
           e.originalEvent.dataTransfer.setData("name", $(this).data("name"));  
           e.originalEvent.dataTransfer.setData("price", $(this).data("price"));  
      });  

      $('.product_drag_area').on('drop', function(e){  
           e.preventDefault();  
           $(this).removeClass('product_drag_over');  
           var id = e.originalEvent.dataTransfer.getData('id');  
           var name = e.originalEvent.dataTransfer.getData('name');  
           var price = e.originalEvent.dataTransfer.getData('price');  
           var action = "add";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{id:id, name:name, price:price, action:action},  
                success:function(data){  
                     $('#dragable_product_order').html(data);  
                }  
           })  
      });  

      $(document).on('click', '.remove_product', function(){  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                var id = $(this).attr("id");  
                var action="delete";  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data:{id:id, action:action},  
                     success:function(data){  
                          $('#dragable_product_order').html(data);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  

 });  
 </script>  