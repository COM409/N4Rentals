@extends ('layouts.admin')

@section('content')

<div class="container">
		<div class="bs-docs-section">
			
			<div class="row">
			  <div class="col-lg-12">
				<div class="page-header">
				  <h1 id="forms">Administrator Login:</h1>
				</div>
			  </div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-md-12">
				
					<div class="col-lg-3 col-md-3">
					</div>
					
					<div class="col-lg-5 col-md-5">
						<div class="well bs-component">
							<form class="form-horizontal">
								<h4>Enter your Admin email and password to login:</h4>
								<fieldset>
									<div class="form-group">
										<label for="inputAdminEmail" class="col-lg-2 control-label">Email:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="inputAdminEmail" placeholder="Admin Email">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword" class="col-lg-2 control-label">Password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" id="inputPassword" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-10 col-lg-offset-2" align="right">
											<a href="addProd.html">Add product   </a>
											<button type="submit" class="btn btn-primary">Login</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-3">
					</div>
					
				</div>
			</div>
		</div>

@stop
