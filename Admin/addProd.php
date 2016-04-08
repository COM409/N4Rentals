<!DOCTYPE html>

<?php
session_start();


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
                <li><a href="prodUpdate.php">Manage Products</a></li>
                <li><a href="custManage.php">Manage Customers</a></li>
                <li class="divider"></li>
                <li><a href="logoutfile.php">Logout</a></li>
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
				  <h1 id="forms">Add a Product:</h1>
				</div>
			  </div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-md-12">
				
					<div class="col-lg-2 col-md-2">
					</div>
					
					<div class="col-lg-8 col-md-8">
					<p align="center">Enter the details of your a product ensuring to include its category and description as well as rental price. <br>Uploading an image of the product helps too! 
					Once you submit this form, users will be able to view the product on the site and book!</p><br><font color="red">Fields marked with a * are required</font>
						<div class="well bs-component">
							<form method="GET" action="insertProduct.php" name="addProduct" onsubmit="return validateAddProduct()" class="form-horizontal">
								
								<fieldset>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="inputPTitle" class="col-lg-2 control-label">Product Title:<font color="red">*</font></label>
											<div class="col-lg-10">
												<input type="text" class="form-control" name="title" placeholder="Product Title">
											</div>
										</div>
									  
										<div class="form-group">
											<label for="inputDescription" class="col-lg-2 control-label">Description:<font color="red">*</font></label>
											<div class="col-lg-10">
												<textarea rows="4" cols="50" class="form-control" name="description" placeholder="Description"></textarea>
											</div>
										</div>
										
										<div class="form-group">
											<label for="img" class="col-lg-2 control-label">Image:<font color="red">*</font></label>
											<div class="col-lg-10">
												<input type="file" class="form-control" name="image">
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="inputCategory" class="col-lg-2 control-label">Category:<font color="red">*</font></label>
											<div class="col-lg-10">
												<select name="Category" class="form-control">
													<option value=""> </option>
													<option value="DVD" name="dvd">DVD</option>
													<option value="Blu_Ray" name="Blu_Ray">Blu-Ray</option>
													<option value="Games" name="games">Games</option>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<label for="inputPrice" class="col-lg-2 control-label">Rental Price:<font color="red">*</font></label>
											<div class="col-lg-10">
												<input type="decimal" class="form-control" name="Price" placeholder="Rental Price">
											</div>
										</div>
										
										<div class="form-group">
											<label for="inputRating" class="col-lg-2 control-label">Rating:<font color="red">*</font></label>
											<div class="col-lg-10">
												<select name="Rating" class="form-control">
													<option value=""> </option>
													<option value="u" name="u">Universal</option>
													<option value="PG" name="PG">Parental Guidance</option>
													<option value="12" name="12">12</option>
													<option value="15" name="15">15</option>
													<option value="18" name="18">18</option>
													<option value="R18" name="R18">Restricted 18</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-10 col-lg-offset-2" align="right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					
					<div class="col-lg-2 col-md-2">
					</div>
					
				</div>
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

<script>
function validateAddProduct() {
	var x = document.forms["addProduct"]["title"].value;
	if (x == null || x == "") {
		alert("Please enter a product title!");
		addProduct.title.focus();
		return false;
	}
	
	var x = document.forms["addProduct"]["description"].value;
	if (x == null || x == "") {
		alert("Please enter a product description");
		addProduct.description.focus();
		return false;
	}
	
	var x = document.forms["addProduct"]["Category"].value;
	if (x == null || x == "") {
		alert("Please select a product category");
		addProduct.Category.focus();
		return false;
	}
	
	var x = document.forms["addProduct"]["Price"].value;
	if (x == null || x == "") {
		alert("Please enter a rental price for this product!");
		addProduct.Price.focus();
		return false;
	}
	
	var x = document.forms["addProduct"]["Rating"].value;
	if (x == null || x == "") {
		alert("Please select a product viewing rating!");
		addProduct.Rating.focus();
		return false;
	}
}
</script>

<script src="../jquery/n4.min.js"></script>
<script src="../jquery/n4_1.min.js"></script>

<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>