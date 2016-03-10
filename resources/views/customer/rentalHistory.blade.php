@extends ('layouts.Customer')

@section('content')

<div class="container">
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-12">
		<div class="page-header">
                    <h1 id="forms">My Account: Rental History</h1>
		</div>
            </div>
        </div>
			
	<div class="row">
            <div class="col-lg-12">
		<div class="page-header">
		<p align="justify">View your rental history below listing the products you’ve rented in the past. To rent any of these products again, simply click ‘Book’!</p>
		</div>
            </div>
	</div>
			
	<div class="bs-component">
            <table class="table table-striped table-hover ">
		<thead>
                    <tr>
                        <th>ID:</th>
			<th>Title</th>
			<th>Product Category</th>
			<th>Date Rented</th>
			<th>Duration</th>
			<th>Rental Price (per day)</th>
		</tr>
		</thead>
                
		<tbody>
                    <tr>
                        <td>1</td>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
			<td><a href="#">Book</a></td>
		</tr>
		<tr>
        		<td>2</td>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
                        <td>Column content</td>	
                        <td>Column content</td>
                        <td><a href="#">Book</a></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
			<td><a href="#">Book</a></td>
		</tr>
		<tr>
                        <td>4</td>
                        <td>Column content</td>
        		<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
                        <td>Column content</td>
			<td><a href="#">Book</a></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
			<td>Column content</td>
        		<td><a href="#">Book</a></td>
		</tr>
                </tbody>
              </table> 
            </div>
    </div>
    
    @stop

