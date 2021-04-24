<?php
include "phpdatabaseconnection.php";

?>
<html lang="en">
<head>
  <title>Delivery Boy Form</title>
</head>
<style>
h1{
	color:red;
	font-size:20px;
	float:center;
	padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
}
</style
<body>

	<div class="container">
		<div class="col-lg-4">
  <h2>Delivery Boy form</h2>
  <form action="" name="DeliveryBoyForm" onsubmit="return validate()" method="post">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text"  id="Name" placeholder="Enter Name" name="Name">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="text"  id="Email" placeholder="Enter Email" name="Email">
    </div>
    <div class="form-group">
      <label for="UserName">UserName:</label>
      <input type="text" id="UserName" placeholder="Enter UserName" name="UserName">
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text"  id="Address" placeholder="Enter Address" name="Address">
    </div>
    <div class="form-group">
      <label for="Delivered Item">Delivered Item:</label>
      <input type="text"  id="DeliveredItem" placeholder="Enter Delivered Item" name="DeliveredItem">
    </div>
    <div class="form-group">
      <label for="password">password:</label>
      <input type="text" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="insert" name="insert" class="btn btn-default">Insert</button>
   
  </form>
  
</div>
</div>

<p id="errorMsg"></p>

	<script>
			function validate() {
				var isValid = false;
				var name = document.forms["DeliveryBoyForm"]["Name"].value;
				var email = document.forms["DeliveryBoyForm"]["Email"].value;
				var username = document.forms["DeliveryBoyForm"]["UserName"].value;
				var address = document.forms["DeliveryBoyForm"]["Address"].value;
				var delivereditem = document.forms["DeliveryBoyForm"]["DeliveredItem"].value;
				var password = document.forms["DeliveryBoyForm"]["password"].value;

				if(name == ""  || email == "" || username == "" || address == "" || delivereditem == "" || password == "") {
					document.getElementById("errorMsg").innerHTML = "<b><h1>Please all the field fill up properly.</h1></b>";
					document.getElementById("errorMsg").style.color = "red";
				}
				else {
					isValid = true;
				}

				return isValid;
			}
		</script>




</body>

<?php
if(isset($_POST["insert"])){
	mysqli_query($link,"insert into user values(NULL,'$_POST[Name]','$_POST[Email]','$_POST[UserName]','$_POST[Address]','$_POST[DeliveredItem]','$_POST[password]')");

}
?>

</html>