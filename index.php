<!DOCTYPE html>

<?php include 'database/db_connect.php'; 

session_start();
$UserID = $_SESSION['userID'];

$sql = "SELECT * FROM customer WHERE id = ". $UserID;
$custResult = $conn->query($sql);

$sql = "SELECT * FROM Products ORDER BY Product_ID DESC";
$result = $conn->query($sql);

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>N4 Rentals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/n4Rentals.css" media="screen">
  </head>
 
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><img src="images/N4_Title.png" width="130" height="20"></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="n4_DVD.php">DVDs</a>
            </li>
			<li>
              <a href="n4_BluRay.php">Blu-Ray</a>
            </li>
			<li>
              <a href="n4_Games.php">Games</a>
            </li>
          </ul>
		  
		  <?php 

if ($UserID){ 
			if ($custResult->num_rows > 0) {
				while($row = $custResult->fetch_assoc()) {
?>
    <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><?php echo $row['custFirstName'] ." " . $row['custLastName']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Customer/custHome.php?id=<?php echo$row['id']; ?>">Customer Home</a></li>
                <li><a href="Customer/updateCustDetails.php?CustID=<?php echo$row['id']; ?>">Update Contact Information</a></li>
                <li><a href="Customer/updatePassword.php?CustID=<?php echo$row['id']; ?>">Change Passowrd</a></li>
                <li class="divider"></li>
                <li><a href="Customer/logoutCust.php">Logout</a></li>
              </ul>
            </li>
          </ul>

<?php
			}
			} else{
				echo "0 results";
}

 } else { ?>
    <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Customer/customerLogin.php">Customer Login</a></li>
                <li class="divider"></li>
                <li><a href="Admin/AdminLogin.php">Admin Login</a></li>
              </ul>
            </li>
          </ul>
<?php }
?>	  
          
        </div>
      </div>
    </div>
	<br><br><br>


    <div class="container">

		<div class="page-header" id="banner">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8">
					<img src="images/N4_Title.png" width="210" height="35">
					<p class="lead">Bringing entertainment to U!</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="sponsor">
						<img src="images/N4_Logo.png" width="290" height="150">
					</div>
				</div>
			</div>
		</div>
		
		<!-- Containers
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="jumbotron">
                <h1>WELCOME TO N4 Rentals!</h1>
                <p>Welcome to our new website! Feel free to view our awesome content and don't forget if you haven’t already, to <a href="Customer/customerLogin.php">register!</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  <div class="bs-component">
		<table class="table table-home ">
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Category</th>
					<th>Rating</th>
					<th>Rental Price (per day)</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			
			<?php
			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					?>  
			<tr width="100%">
				<td width="10%"> <a href="bookProduct.php?id=<?php echo$row['Product_ID']; ?>"> <?php echo $row["Title"]; ?> </a></td>
                <td width="50%"> <?php echo $row["Description"]; ?> </td>
				<td width="5%"> <?php echo $row["Category"]; ?> </td>
				<td width="10%"> <?php echo $row["Rating"]; ?> </td>
				<td width="20%"> <?php echo "£". $row["Price"]; ?> </td>
				<td width="5%"> <a href="bookProduct.php?id=<?php echo$row['Product_ID']; ?>"><img src="images/<?php echo $row["Image"]; ?>" alt="<?php echo $row["Title"]; ?>" 
				style="width:120px;height:130px;"></a> </td>
			</tr>
			<tr>
				<td></td>
			</tr>
			</tbody>
			
			<?php
			}
			} else{
				echo "0 results";
}
$conn->close();
?> 
		</table> 
	</div>

      <footer>
        <div class="row">
          <div class="col-lg-md">
            <p align="center">&copy; 2016 COM409 Group 3</p>
          </div>
        </div>
      </footer> 	  
	</div>



    <script src="jquery/n4.min.js"></script>
    <script src="jquery/n4_1.min.js"></script>
    
  <script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>
