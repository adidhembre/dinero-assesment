<?php
include __DIR__.'/layout/header.php';

echo '
<link rel="stylesheet" href="/assets/css/dashboard.css">
<div class="container-fluid">
	<div class="sidebar">
		<div class="box">
			<div class="container-fluid">
				<div class="row">
					<div class="d-flex justify-content-between">
						<h3><button id="search" class="btn btn-primary">Filters Search</button></h3>
					</div>
					<hr/>
				</div>
				<div class="row form-group">
					<label >Search by</label>
					<select id="search-by" class="form-control">
						<option value="skills">Skills (keyword)</option>
						<option value="certification">Certification (keyword)</option>
						<option value="full_name">Name</option>
						<!--<option value="email">Email</option>-->
						<option value="city">City</option>
						<option value="state">State</option>
					</select>
					<br/>
					<input class="form-control" type="text" id="search-value" value=""/>
				</div>
				<div class="row form-group">
					<label >Experience</label>
					<select id="experience-operator" class="form-control">
						<option value="<">Less than</option>
						<option value=">">More than</option>
						<option value="between">Between (ex1 and ex2)</option>
					</select>
					<br/>
					<input class="form-control" type="text" id="experience-search" value=""/>
				</div>
				<div class="row form-group">
					<label>Sort By</label>
					<select id="sort-by" class="form-control">
						<option value="full_name">Name</option>
						<option value="experience">Experience</option>
						<option value="dob">Date of Birth</option>
					</select>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="sort-order" value="desc">
						<label style="font-weight:normal;" class="form-check-label" for="inlineCheckbox1">Descending</label>
					</div>
				</div>
				<div class="row form-group">
					<label >Optional Column</label>
					<select id="optional-column" class="form-control">
						<option value="city">City</option>
						<option value="state">State</option>
						<option value="email">Email</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="mainbar" class="col-sm-9">
		<div class="box">
			<p id="#page" style="display:none;">1</p>
			<div id="app">
				<!--table goes here-->	
			</div>
		</div>
	</div>
</div>
<script src="/assets/js/dashboard.js"></script>
';

include __DIR__.'/layout/footer.php';