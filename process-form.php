<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<style>
		.form-container {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f2f2f2;
		}

		input[type=text], input[type=email], input[type=tel], select, textarea {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>

	<div class="form-container">
		<h2>Contact Form</h2>
		<form method="post" enctype="multipart/form-data">
			<label for="firstname">First Name</label>
			<input type="text" id="firstname" name="firstname" placeholder="Your first name.." required>

			<label for="lastname">Last Name</label>
			<input type="text" id="lastname" name="lastname" placeholder="Your last name.." required>

			<label for="phone">Phone Number</label>
			<input type="tel" id="phone" name="phone" placeholder="Your phone number.." required>

			<label for="dob">Date of Birth</label>
			<input type="date" id="dob" name="dob" required>

			<label for="picture">Picture</label>
			<input type="file" id="picture" name="picture" required>

			<label for="state">State of Origin</label>
			<select id="state" name="state" required>
				<option value="">-- Select state --</option>
				<option value="Lagos">Lagos</option>
				<option value="Abuja">Abuja</option>
				<option value="Oyo">Oyo</option>
				<option value="Kano">Kano</option>
				<option value="Rivers">Rivers</option>
			</select>

			<label for="education">Level of Education</label>
			<select id="education" name="education" required>
				<option value="">-- Select education level --</option>
				<option value="Primary School">Primary School</option>
				<option value="Secondary School">Secondary School</option>
				<option value="Bachelor's Degree">Bachelor's Degree</option>
				<option value="Master's Degree">Master's Degree</option>
				<option value="PhD">PhD</option>
			</select>

			<label for="gender">Gender</label>
			<select id="gender" name="gender" required>
				<option value="">-- Select gender --</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
			</select>

			<label for="marital-status">Marital Status</label>
			<select id="marital-status" name="marital-status">
    </form>
      <?php
if(isset($_POST['submit'])) {
    //Retrieve form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $state = $_POST['state'];
    $education = $_POST['education'];
    $gender = $_POST['gender'];
    $marital = $_POST['marital'];
    
    //Create email body
    $to = 'fikayopeter@gmail.com';
    $subject = 'New Form Submission';
    $message = "Name: $firstname $lastname \r\nPhone: $phone \r\nDate of Birth: $dob \r\nState of Origin: $state \r\nEducation Level: $education \r\nGender: $gender \r\nMarital Status: $marital";
    
    //Create headers
    $headers = "From: sender@example.com\r\n";
    $headers .= "Reply-To: sender@example.com\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    //Send email
    if(mail($to, $subject, $message, $headers)) {
        echo "Thank you for your form submission.";
    } else {
        echo "Error: Form submission failed.";
    }
}
?>
