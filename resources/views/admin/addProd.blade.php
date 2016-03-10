@extends ('layouts.admin')

@section('content')

<div class="container">
		<div class="bs-docs-section">
			
			<div class="row">
			  <div class="col-lg-12">
				<div class="page-header">
				  <h1 id="forms">Admin: Add a Product:</h1>
				</div>
			  </div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-md-12">
				
					<div class="col-lg-2 col-md-2">
					</div>
					
					<div class="col-lg-8 col-md-8">
					<p align="center">Enter the details of your a product ensuring to include its category and description as well as rental price. <br>Uploading an image of the product helps too! 
					Once you submit this form, users will be able to view the product on the site and book!</p>
						<div class="well bs-component">
							<form class="form-horizontal">
								
								<fieldset>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="inputPTitle" class="col-lg-2 control-label">Product Title:</label>
											<div class="col-lg-10">
												<input type="text" class="form-control" id="inputPTitle" placeholder="Product Title">
											</div>
										</div>
									  
										<div class="form-group">
											<label for="inputDescription" class="col-lg-2 control-label">Description:</label>
											<div class="col-lg-10">
												<textarea rows="4" cols="50" class="form-control" id="description" placeholder="Description"></textarea>
											</div>
										</div>
										
										<div class="form-group">
											<label for="img" class="col-lg-2 control-label">Image:</label>
											<div class="col-lg-10">
												<input type="file" class="form-control" name="image" id="image">
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="inputCategory" class="col-lg-2 control-label">Category:</label>
											<div class="col-lg-10">
												<select name="Category" class="form-control">
													<option value="">Category</option>
													<option value="DVD" id="dvd">DVD</option>
													<option value="Blu_Ray" id="Blu_Ray">Blu-Ray</option>
													<option value="Games" id="games">Games</option>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<label for="inputPrice" class="col-lg-2 control-label">Rental Price:</label>
											<div class="col-lg-10">
												<input type="number" class="form-control" id="Price" placeholder="Rental Price">
											</div>
										</div>
										
										<div class="form-group">
											<label for="inputRating" class="col-lg-2 control-label">Rating:</label>
											<div class="col-lg-10">
												<select name="Rating" class="form-control">
													<option value="">Viewing Rating</option>
													<option value="u" id="u">Universal</option>
													<option value="PG" id="PG">Parental Guidance</option>
													<option value="12" id="12">12</option>
													<option value="15" id="15">15</option>
													<option value="18" id="18">18</option>
													<option value="R18" id="R18">Restricted 18</option>
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

@stop