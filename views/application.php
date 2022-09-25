<?php
include __DIR__.'/layout/header.php';

function renderOptions($value,$option){
	foreach($option as $o){
		$s = $o == $value ? 'selected' : '';
		echo "<option value='{$o}' {$s}>{$o}</option>";
	}
}

function renderRedio($value,$option){
	foreach($option as $v => $o){
		$s = $v == $value ? 'checked' : '';
		if($value=='' && $v=='7') $s = 'checked';
		echo "<label><input id='radio_{$v}' type='radio' name='reference_id' value='{$v}' {$s}> {$o}</label><br/>";
	}
}

echo '
<link rel="stylesheet" href="/assets/css/application.css">
<div id="application">
    <form id="applicationForm">
		<h2>Employment Application Form</h2>
		<p>Fill the form below accurately indicating your potentials and suitability to job
		applying for.</p>
		<hr>
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<label>Name: <imp>*</imp></label>
				</div>
				<div class="col-md-4 label-below">
					<input type="text" class="form-control" name="first_name" placeholder="" required="required" value="'.$first_name.'"/>
					<label for="first_name">First Name</label>
				</div>
				<div class="col-md-4 label-below">
					<input type="text" class="form-control" name="last_name" placeholder="" required="required" value="'.$last_name.'"/>
					<label for="last_name">Last Name</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Birth Date</label>
				</div>
				<div class="col-md-2 label-below">
					<select class="form-control" name="dob_month">
						<option value="" selected>select</option>';
						renderOptions($dob_month,range(1,12));
echo					'</select>
					<label for="dob_month">month</label>
				</div>
				<div class="col-md-2 label-below">
					<select class="form-control" name="dob_day">
						<option value="" selected>select</option>';
						renderOptions($dob_day,range(1,31));
echo					'</select>
					<label for="dob_day">day</label>
				</div>
				<div class="col-md-2 label-below">
					<select class="form-control" name="dob_year">
						<option value="" selected>select</option>';
						renderOptions($dob_year,range(1945,2002));
echo					'</select>
					<label for="dob_year">year</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Phone Number: <imp>*</imp></label>
				</div>
				<div class="col-md-2 label-below">
					<input type="text" class="form-control" name="area_code" placeholder="" required="required" value="'.$area_code.'"/>
					<label for="area_code">Area Code</label>
				</div>
				<div class="col-md-1 text-center">
					-
				</div>
				<div class="col-md-5 label-below">
					<input type="text" class="form-control" name="phone_number" placeholder="" required="required" value="'.$phone_number.'"/>
					<label for="phone_number">Phone Number</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Email Address:</label>
				</div>
				<div class="col-md-8 label-below">
					<input disabled type="email" class="form-control" value="'.$email.'"/>
					<label>example@example.com</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Address: <imp>*</imp></label>
				</div>
				<div class="col-md-8">
					<div class="as-row label-below">
						<input type="text" class="form-control" name="address_line_1" placeholder="" required="required" value="'.$address_line_1.'"/>
						<label for="address_line_1">Street Address</label>
					</div>
					<div class="as-row label-below">
						<input type="text" class="form-control" name="address_line_2" placeholder="" required="required" value="'.$address_line_2.'"/>
						<label for="address_line_2">Street Address Line 2</label>
					</div>
					<div class="as-row label-below">
						<input type="text" class="form-control" name="city" placeholder="" required="required" value="'.$city.'"/>
						<label for="city">City</label>
					</div>
					<div class="as-row label-below">
						<input type="text" class="form-control" name="state" placeholder="" required="required" value="'.$state.'"/>
						<label for="state">State /Province</label>
					</div>
					<div class="as-row label-below">
						<input type="text" class="form-control" name="pincode" placeholder="" required="required" value="'.$pincode.'"/>
						<label for="pincode">Pincode</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>Job Skills & Training</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Describe your skills: <imp>*</imp></label>
				</div>
				<div class="col-md-8">
					<textarea rows="4" type="text" name="skills" class="form-control" >'.$skills.'</textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Training or Certification:</label>
				</div>
				<div class="col-md-8">
					<textarea rows="4" type="text" name="certification" class="form-control">'.$certification.'</textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>How were you referred to us <imp>*</imp></label>
				</div>
				<div class="col-md-8 label-below">
					<div class="row">
						<div class="col-sm-6">';
							renderRedio($reference_id,['1'=>'Walk-In','3'=>'Newspaper Ad','5'=>'Twitter', '7' => 'Other (please specify)']);
echo					'</div>
						<div class="col-sm-6">';
							renderRedio($reference_id,['2'=>'Employee','4'=>'Facebook Ad','6'=>'Craigslist']);
echo					'</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Others:</label>
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="comment" placeholder="" value="'.$comment.'"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Experience: <imp>*</imp></label>
				</div>
				<div class="col-md-4 label-below">
					<input type="text" class="form-control" name="experience" placeholder="" required="required" value="'.$experience.'"/>
					<label for="experience">Experience in years</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Upload Resume:</label>
				</div>
				<div class="col-md-8 label-below">
					<input type="file" id="file" name="file"/>';
if($resume != '') echo '<label><a id="resume_link" href="/assets/storage/'.$resume.'" target="_blank">Click Here</a> to see last uploaded resume.</label>';
echo			'</div>
			</div>
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" id="applicationFormSubmit">Submit Application</button>
        </div>
    </form>
</div>
<script src="/assets/js/application.js"></script>
';

include __DIR__.'/layout/footer.php';