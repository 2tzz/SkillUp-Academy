<?php
// including the database connection file
include_once("./paymentConfig.php");

if (isset($_POST['update'])) {

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	//Billing Info
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$city = mysqli_real_escape_string($mysqli, $_POST['city']);
	$state = mysqli_real_escape_string($mysqli, $_POST['state']);
	$poBox = mysqli_real_escape_string($mysqli, $_POST['poBox']);

	//Card Info
	$name = mysqli_real_escape_string($mysqli, $_POST['NameOnCard']);
	$cardNo = mysqli_real_escape_string($mysqli, $_POST['CardNumber']);
	$expMn = mysqli_real_escape_string($mysqli, $_POST['ExpMn']);
	$expYr = mysqli_real_escape_string($mysqli, $_POST['ExpYr']);
	$cvv = mysqli_real_escape_string($mysqli, $_POST['cvv']);

	// checking empty fields in Card
	if (empty($name) || empty($cardNo) || empty($expMn) || empty($expYr) || empty($cvv)) {

		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if (empty($cardNo)) {
			echo "<font color='red'>Card Number field is empty.</font><br/>";
		}

		if (empty($expMn)) {
			echo "<font color='red'>Expire Month is empty.</font><br/>";
		}

		if (empty($expYr)) {
			echo "<font color='red'>Expire Year is empty.</font><br/>";
		}

		if (empty($cvv)) {
			echo "<font color='red'>CVV is empty.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE payment SET fname='$fname', email='$email', address='$address', city='$city', state='$state', poBox='$poBox', NameOnCard='$name',CardNumber='$cardNo',ExpMn='$expMn', ExpYr='$expYr', cvv='$cvv' WHERE id=$id");

		echo '<script type="text/javascript">';
		echo ' alert("Card Updated Successfully !")';
		echo '</script>';
		echo "<script>
    window.location.assign('./cardInfo.php');
    </script>";
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM payment WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	//Billing info
    $fname = $res['fname'];
    $email = $res['email'];
    $address = $res['address'];
    $city = $res['city'];
    $state = $res['state'];
    $poBox = $res['poBox'];

	//Card Info
	$name = $res['NameOnCard'];
	$cardNo = $res['CardNumber'];
	$expMn = $res['ExpMn'];
	$expYr = $res['ExpYr'];
	$cvv = $res['cvv'];
}
?>
<html>

<head>
	<title>Edit Payment Info</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./CSS/header.css">
	<link rel="stylesheet" href="./CSS/footer.css">
	<link rel="stylesheet" href="./CSS/paymentgate.css">
	<!-- Header starts here -->
	<header>
		<a href="#" class="logo">
			<img src="Img/SkillUP dark.png" width="100px" height="100px" alt="Academy logo" />
		</a>
		<navbar>
			<a href="#" class="active">Home</a>
			<a href="CourseHome.html">Courses</a>
			<a href="Lessons.html">lessons</a>
			<a href="Contact.html">Contact</a>
			<a href="FAQ.html">FAQ</a>
			<a href="login.html">Login</a>
		</navbar>
		<search_bar>
			<form class="search">
				<input type="text" placeholder="Search....." class="input">
				<button type="submit" class="button">
					<i class="ri-search-2-line"></i>
				</button>
			</form>
		</search_bar>
	</header>
	<!-- Header ends here -->
</head>

<body>

	<div class="container">
		<form name="myForm" method="POST" action="editPayment.php" onsubmit="return validateForm()">
			<div class="row">
				<div class="col">
					<h3 class="title">Billing Address</h3>
					<div class="inputbox">
						<span>Full Name:</span>
						<input type="text" name="fname" placeholder="David Andrew" value="<?php echo $fname; ?>"required>
					</div>
					<div class="inputbox">
						<span>Email:</span>
						<input type="email" name="email" placeholder="david12345@gmail.com" value="<?php echo $email; ?>"required>
					</div>
					<div class="inputbox">
						<span>Address:</span>
						<input type="text" name="address" placeholder="544/3" value="<?php echo $address; ?>"required>
					</div>
					<div class="inputbox">
						<span>City:</span>
						<input type="text" name="=city" placeholder="California" value="<?php echo $city; ?>"required>
					</div>
					<div class="flex">
						<div class="inputbox">
							<span>State:</span>
							<input type="text" name="state" placeholder="United State" value="<?php echo $state; ?>"required>
						</div>
					</div>
					<div class="inputbox">
						<span>PO Box:</span>
						<input type="number" name="poBox" placeholder="123456" value="<?php echo $poBox; ?>"required>
					</div>
				</div>

				<div class="col">
					<h3 class="title">Payment Details</h3>

					<div class="inputbox">
						<span>Name on card:</span>
						<input type="text" name="NameOnCard" placeholder="David Andrew" value="<?php echo $name; ?>">
					</div>
					<div class="inputbox">
						<span>Card Number:</span>
						<input type="number" name="CardNumber" placeholder="1111-2222-3333-4444" value="<?php echo $cardNo; ?>">
					</div>
					<div class="inputbox">
						<span>Exp Month:</span>
						<input type="text" name="ExpMn" placeholder="January" value="<?php echo $expMn; ?>">
					</div>
					<div class="flex">
						<div class="inputbox">
							<span>Exp Year:</span>
							<input type="number" name="ExpYr" placeholder="2022" value="<?php echo $expYr; ?>">
						</div>
					</div>
					<div class="inputbox">
						<input type="number" name="cvv" placeholder="123" value="<?php echo $cvv; ?>">
					</div>
					<span>CVV:</span>
					<div class="inputbox">
						<span>Accepted Payment Methods:</span>
						<img src="./Img/paymentgate/paymethods.png" alt="">
					</div>
				</div>
			</div>
			<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
			<input type="submit" name="update" value="Update" class="submitBtn">
		</form>
	</div>
</body>
<script src="JS/header.js"></script>

<div class="footer">
	<div class="foo_container">
		<div class="foo_row">
			<div>
				<img src="Img/SkillUP dark.png" width="200px" height="200px">
			</div>
			<div class="footer-col">
				<h4>SkillUP</h4>
				<ul>
					<li><a href="#">About us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Privacy policy</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Help</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Payments</a></li>
					<li><a href="#">Privacy policy</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Follow us on</h4>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-Instagram"></i></a>
					<a href="#"><i class="fab fa-Linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

</html>