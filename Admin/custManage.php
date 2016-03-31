<?php include '../database/db_connect.php'; 

$sql = "SELECT * FROM Customer";
$result = $conn->query($sql);

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>N4 Rentals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/n4Rentals.css" media="screen">
  </head>
 
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../index.php" class="navbar-brand"><img src="../images/N4_Title.png" width="130" height="20"></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="../index.php">Home</a>
            </li>
            <li>
              <a href="../n4_DVD.php">DVDs</a>
            </li>
			<li>
              <a href="../n4_BluRay.php">Blu-Ray</a>
            </li>
			<li>
              <a href="../n4_Games.php">Games</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" onclick="window.history.back();return false;">Admin Home</a></li>
                <li><a href="addProd.php">Add Product</a></li>
                <li><a href="custManage.html">Manage Customers</a></li>
                <li class="divider"></li>
                <li><a href="logoutCust.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
	<br><br><br>
	
	<div class="container">
		<div class="bs-docs-section">
		
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header">
					  <h1 id="forms">Customer Management</h1>
					  <p align="justify">You can view all registered users below and remove them if you wish by clicking Remove User.</p>
					</div>
				 </div>
			</div>
			
			<div class="bs-component">
				<table class="table table-striped table-hover ">
					<thead>
					<tr>
						<th>ID:</th>
						<th>First name:</th>
						<th>Last name:</th>
						<th>DOB:</th>
						<th>Email:</th>
						<th>Password:</th>
						<th>Address:</th>
						<th>Town:</th>
						<th>County:</th>
						<th>Postcode:</th>
						<th>Country:</th>
					</tr>
					
					<?php
			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					?>  
					
					</thead>
					<tbody>
					<tr>
						<td><?php echo $row["id"]; ?></td>
						<td><?php echo $row["custFirstName"]; ?></td>
						<td><?php echo $row["custLastName"]; ?></td>
						<td><?php echo $row["DOB"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["pword"]; ?></td>
						<td><?php echo $row["address"]; ?></td>
						<td><?php echo $row["town"]; ?></td>
						<td><?php echo $row["county"]; ?></td>
						<td><?php echo $row["pcode"]; ?></td>
						<td><?php echo $row["country"]; ?></td>
						<td><a href="removeCustomer.php?UserID=<?php echo$row['id']; ?>">Remove User</a></td>
					</tr>
					<?php
			}
			} else{
				echo "0 results";
}
$conn->close();
?> 
					
                </tbody>
              </table> 
            </div>
		</div>
		<footer>
			<div class="row">
			  <div class="col-lg-md">
				<p align="center">&copy; 2016 COM409 Group 3</p>
			  </div>
			</div>
		</footer> 	  
	</div>
	
    <script src="../jquery/n4.min.js"></script>
    <script src="../jquery/n4_1.min.js"></script>

	
	<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>