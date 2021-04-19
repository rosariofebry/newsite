<?php 
	$title = 'Index';
	require_once 'header.php'; 
	?>

	<h1 class ="text-center"> Regristration for IT Conference</h1>
	
	<form>
		<form>
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control" id="firstname">
			</div>
			
			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" class="form-control" id="lastname">
			</div>
			
			<div class="form-group">
				<label for="dob">Date of Birth</label>
				<input type="date" class="form-control" id="dob">
			</div>
			
			<div class="form-group">
				<label for="specialty">Area of Expertise</label>
				<select class="form-control" id="specialty">
					<option>Database Admin</option>
					<option>Software Developer</option>
					<option>Web Administrator</option>
					<option>Other</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="email" class="form-control" id="email"
				aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			
			<div class="form-group">
				<label for="phone">Contact Number</label>
				<input type="text" class="form-control" id="phone"
				aria-describedby="phoneHelp">
				<small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
			</div>
			
			<div class="form-group">
				<label for="exampleinputpassword1">Password</label>
				<input type="password" class="form-control" id="exampleinputpassword1"	
				placeholder="Password">
			</div>
			
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</form>
	</form>
	
<?php require_once 'footer.php'; ?>