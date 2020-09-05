<!DOCTYPE html>
<html>
<title>PaperPlant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="css/mycss.css">
	<link rel="stylesheet" href="css/cart.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php
session_start();
require("head.php");
?>

<?php
	$order = array();
	$values = $_GET['sendid'];
	require("connection.php");
	$ids = array_map('intval', explode(',', $values));
	foreach($ids as $id)
	{
		
		$sql="INSERT INTO cart(email, Plant_ID, Qty) VALUES ('".$_SESSION['email']."', ".$id.", 1)";
		$stmt= $pdo->prepare($sql);
		$stmt->execute();
		$order[$id] = 1;
	}
	/*foreach($order as $k => $id)
	{
		echo $k."=>".$id;
	}*/
	
	
?>

<h1>Shopping Cart</h1>
<body onload="recalculateCart()">
<div class="shopping-cart">
<br><br>
<hr>
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

<?php
 $i=1;  

function printResultSet(&$rowset, $i)
{  
  $key=0; 
    foreach ($rowset as $row) 
    {   
         $count=1;
		 
       foreach ($row as $col) 
       {    
            if($count==1)
            {
                echo"<div class=\"product\"><div class=\"product-image\"><img src='admin/plantimage/".$col."' height=\"100\" width=\"200\"></div>";
                $count++;
				continue;
            }
			
			if($count==2)
            {
                echo "<div class=\"product-details\"><div class=\"product-title\">".$col."</div>";
				$count++;
                continue;
            }
            if($count==3)
            {
                echo "<p class=\"product-description\">".$col." plant</p></div>"; 
            // echo "<a class=\"btn btn-outline-primary\" href=\"#\">Start Free Trial</a>";
                $count++;
				continue;
            }
			if($count==4)
            {
                echo "<div class=\"product-price\" id=".$i.">".$col." per plant</div>";
				echo "<div class=\"product-quantity\">
						<input type=\"number\" value=\"1\" min=\"1\">
					  </div>";
				echo "<div class=\"product-removal\">
						<button class=\"remove-product\">
							Remove
						</button>
					  </div>";
				echo "<div class=\"product-line-price\">".$col."</div>
					  </div>";
				continue;
            }
       }
       //echo "</a>";
    
    }
}


try
{
  //  $i=0;
    require("connection.php");
	$sql="SELECT Plant_ID from cart where email LIKE '".$_SESSION['email']."'";
	$stmt = $pdo->query($sql);
	$row = $stmt->fetchAll(PDO::FETCH_COLUMN);
	foreach($row as $i)
	{
    $sql1="SELECT image, Name, Location, Sell_Price from plant where Plant_ID=".$i;
    $stmt1 = $pdo->query($sql1); 
	

    do
    {
        $rowset = $stmt1->fetchAll(PDO::FETCH_NUM);
        
        if ($rowset) 
        {
        printResultSet($rowset, $i);
        //echo $i;
        }
        $i++;

    }
    while ($stmt->nextRowset());
	
	}
}
catch(Exception $e)
{
    echo $e;
}
?>
  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"></div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax"></div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping"></div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"></div>
    </div>
  </div>
</div>
<form id="myForm" action="payment.php" method="post"> 
		<input type="hidden" id="str" name="str" value="" />
		<input type="hidden" id="tot" name="tot" value="" />
		
		<script
    src="https://checkout.razorpay.com/v1/checkout.js"
	data-key="rzp_test_nM5VWM1iiyUfvS" 
    data-amount= "12000"; 
    data-currency="INR"
    data-buttontext="Pay"
    data-name="<?php echo "Rahul"; ?>"
    data-description="<?php echo "Plant"; ?>"
    data-prefill.name="rounak"
    data-prefill.email="<?php echo $_SESSION['email']; ?>"
    data-theme.color="#F37254"
	></script>
</form>
<br><br><br><hr>
<script>
/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;
var orderids = <?php echo json_encode($order); ?>;
var total = 0;

/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{ 
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var id = parseInt(productRow.children('.product-price').attr("id"));;
  //alert(id);
  var quantity = $(quantityInput).val();
  orderids[id] = quantity;
  //alert(orderids[id]);
  /*for(var i in orderids)
  {
	  alert(i+"="+orderids[i]);
  }*/
  var linePrice = price * quantity;
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
	var id = parseInt(productRow.children('.product-price').attr("id"));;
	orderids[id] = 0;
    recalculateCart();
  });
}

 $(document).ready(function(){
			$("#btn").click( function() {
				$.post(
					 $('#str').val(JSON.stringify(orderids)),
					 $('#tot').val(JSON.stringify(total))
			         //$("#myForm :input").serializeArray(), 
			         );
			});
			 		
		});
</script>
</body>
<!-- Footer -->
    <footer id="footer">
        <div class="pp-row pp-black">
            <div class="pp-third" style="font-size:1.5vw">
                Download The App Now
				<br>
                <a href="#"><img src="Images/gplay.png" width="25%"></a>
                <a href="#"><img src="Images/astore.png" width="22%"></a>
            </div>
            <div class="pp-third pp-center" style="font-size:1.5vw">
                <a href="#" style="color:#FFFFFF">About Us</a>
                <br>
                <a href="#" style="color:#FFFFFF">Privacy Policies</a>
                <br>
                <a href="#" style="color:#FFFFFF">Careers</a>
                <br>
                <a href="#" style="color:#FFFFFF">Advertise With Us</a>
            </div>
            <div class="pp-third" style="font-size:1.5vw">
                &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJoin Us <br>
                <a href="#" ><img src="Images/google.png" width="15%" style="float:right"></a>
				<a href="#"><img src="Images/twitter.png" width="15%" style="float:right"></a>
                <a href="#"><img src="Images/facebook.png" width="15%" style="float:right"></a>

            </div>
        </div>
    </footer>
    <div style=" background-color:#dd4b39; color:white ;font-size:14px;">
        <div style="text-align:center;">© - Paper Plant Technologies</div>
        </div>
 <!-- Footer -->
    <footer class="footer text-center">
        <div class="container"> </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/style.min.js"></script>

</html>
