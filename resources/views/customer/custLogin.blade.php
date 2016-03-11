@extends ('layouts.Customer')

@section('content')

<div class="container">
    <div class="bs-docs-section">
        
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="forms">Customer Login:</h1>
            </div>
        </div>
    </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-4 col-md-4">
                    <div class="well bs-component">
			<form class="form-horizontal">
                            <h4>Enter username and password below to login:</h4>
				<fieldset>
                                    
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
					<div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
					</div>
                                    </div>
							  
                                    <div class="form-group">
					<label for="inputPassword" class="col-lg-2 control-label">Password:</label>
					<div class="col-lg-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
					</div>
                                    </div>
                                    
                                    <a href='RentalHistory'>Rental Histroy</a>
                                    <div class="form-group">
					<div class="col-lg-10 col-lg-offset-2" align="right">
                                            <a href="forgottenpassword.php">Forgot your password?  </a>
                                            <button type="submit" class="btn btn-primary">Login</button>
					</div>
                                    </div>
				
                                </fieldset>
			</form>
                    </div>
		</div>
				
                <div class="col-lg-8 col-md-8">
                    <div class="well bs-component">
			<form class="form-horizontal">
                            <h4><b>Customer Registration:</b></h4>
                            <p>If you are a new user to N4 Rentals, please register below by entering in a few details… <br>You are one click away to booking your favourite DVD’s <br>Blu-Rays and Games!</p>
				<fieldset>
                                    <div class="col-lg-6 col-md-6">
					<div class="form-group">
                                            <label for="inputFName" class="col-lg-2 control-label">Firstname:</label>
                                            <div class="col-lg-10">
						<input type="text" class="form-control" id="inputEmail" placeholder="Firstname">
                                            </div>
					</div>
								  
					<div class="form-group">
                                            <label for="inputLName" class="col-lg-2 control-label">Lastname:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="lastname" placeholder="Lastname">
                                            </div>
					</div>
									
                                        <div class="form-group">
                                            <label for="inputDOB" class="col-lg-2 control-label">DOB:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="DOB" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="email" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputTel" class="col-lg-2 control-label">Telephone:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="tel" placeholder="Telephone">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword1" class="col-lg-2 control-label">Password:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="password1" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword2" class="col-lg-2 control-label">Confirm password:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="password2" placeholder="Re-enter Password">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-lg-2 control-label">Address:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="address" placeholder="Address Line 1">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputCity" class="col-lg-2 control-label">Town/City:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="city" placeholder="Town/City">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputCounty" class="col-lg-2 control-label">County:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="county" placeholder="County">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPCode" class="col-lg-2 control-label">Postcode:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="pcode" placeholder="Postcode">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputCountry" class="col-lg-2 control-label">Country:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="country" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-4 col-lg-offset-2" align="right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
                            </fieldset>
                        </form>
                    </div>
		</div>
            </div>
        </div>
    </div>
    
    @stop