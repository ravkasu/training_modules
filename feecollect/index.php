<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="feecollect-styles.css" rel="stylesheet" media="screen">

    <title>Document</title>

</head>

<body>

    <img src="icon/logo.png" class="logo_styles">
    <!-- <div class="container-wrapper"> -->
    <!-- <div class="box-wrapper"> -->
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">

            <div class="steps">
                <div id="step1" class="step active">
                    <span class="step-number">Step 1</span>
                    <span class="step-text">Category Information</span>
                </div>
                <div id="step2" class="step">
                    <span class="step-number">Step 2</span>
                    <span class="step-text">Personal Information</span>
                </div>
                <div id="step3" class="step">
                    <span class="step-number">Step 3</span>
                    <span class="step-text">Institutional Details</span>
                </div>
                <div id="step4" class="step">
                    <span class="step-number">Step 4</span>
                    <span class="step-text">Fee Information</span>
                </div>
            </div>

            <form id="form" action="" method="POST" onsubmit="validateForm()">
                <div id="section1">
                    <div id="container" onclick="nextStep(2)"></div>
                </div>
                <div id="section2" style="display: none;">

                    <div class="formbold-input-group">
                        <label for="rollno" class="formbold-form-label">Roll no / Student Id</label>
                        <div class="input-container">
                            <input type="text" name="rollno" id="rollno" placeholder="Enter your Roll no/Student id" class="inputField formbold-form-input" required />
                            <button type="button" class="circle_button highlight" id="circle_button" onclick="fetchStudentData()">&#10003;</button>
                        </div>
                    </div>
                    <div class="formbold-input-group">
                        <label class="formbold-form-label" for="country">
                            Select Country
                        </label>
                        <select class="formbold-form-select" name="country" id="country" required>
                            <option value="country">Select Country</option>
                        </select>
                    </div>
                    <div class="formbold-input-group">
                        <label class="formbold-form-label" for="state">
                            Select State
                        </label>

                        <select class="formbold-form-select" name="state" id="state" required>
                            <option value="state">Select State</option>
                        </select>
                    </div>
                    <div class="formbold-input-group">
                        <label class="formbold-form-label" for="city">
                            Select City
                        </label>

                        <select class="formbold-form-select" name="city" id="city" required>
                            <option value="city">Select City</option>
                        </select>
                    </div>
                    <div class="formbold-input-group">
                        <label class="formbold-form-label" for="institute">
                            Select Institute
                        </label>

                        <select class="formbold-form-select" id="institute" name="institute" required>
                            <option value="institute">Select Institution</option>
                        </select>
                    </div>

                    <div class="formbold-input-group">
                        <label class="formbold-form-label" for="course">
                            Select Course
                        </label>

                        <select class="formbold-form-select" name="course" id="course" required>
                            <option value="Select Course">Select Course</option>
                            <option value="MPC">MPC</option>
                            <option value="BiPC">BiPC</option>
                            <option value="CEC">CEC</option>
                            <option value="MEC">MEC</option>
                            <option value="MCA">MCA</option>
                            <option value="MBA">MBA</option>
                            <option value="iMBA">iMBA</option>
                            <option value="PGDM">PGDM</option>
                            <option value="BBA">BBA</option>
                            <option value="B.TECH">B.TECH</option>
                        </select>
                    </div>
                    <div class="formbold-input-group">
                        <label class="formbold-form-label" for="fees">
                            Select Fees Type
                        </label>

                        <select class="formbold-form-select" name="fees" id="fees" required>
                            <option value="Select Fees">Select Fees</option>
                            <option value="Exam Fees">Exam Fees</option>
                            <option value="Tuition Fees">Tuition Fees</option>
                            <option value="University Fees">University Fees</option>
                            <option value="Hostel Fees">Hostel Fees</option>
                            <option value="JEE">JEE</option>
                            <option value="Online Training Fee">Online Training Fee</option>
                        </select>
                    </div>
                    <button class="formbold-btn" type="button" onclick="prevStep(1)">Previous</button>
                    <button class="formbold-btn" type="button" onclick="nextStep(3)">Next</button>
                </div>

                <div id="section3" style="display: none;">
                    <div class="formbold-input-group">
                        <label for="name" class="formbold-form-label">Full Name:</label>
                        <input type="text" id="name" name="custom" placeholder="Enter your Full Name" class="formbold-form-input">
                    </div>
                    <div class="formbold-input-group">
                        <label for="email" class="formbold-form-label">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your Email" class="formbold-form-input">
                    </div>
                    <div class="formbold-input-group">
                        <label for="age" class="formbold-form-label">Mobile:</label>
                        <input type="text" id="mobile" name="mobile" placeholder="Enter your Mobile" class="formbold-form-input">
                    </div>
                    <!-- <button type="submit" class="normal_button highlight" id="normal_button" disabled>Update Student Data</button> -->
                    <div class="formbold-input-group">
                        <label for="name" class="formbold-form-label"> Parents/Guardians </label>
                        <input type="text" name="parent" id="parent" placeholder="Enter your Parent Name" class="formbold-form-input" />
                    </div>
                    <button class="formbold-btn" type="button" onclick="prevStep(2)">Previous</button>
                    <button class="formbold-btn" type="button" onclick="nextStep(4)">Next</button>
                </div>

                <div id="section4" style="display: none;">
                    <input type="hidden" name="merchant" value="F43707E006C04" />
                    <input type="hidden" name="merchant_id" value="3" />
                    <input type="hidden" name="currency_id" value="6" />
                    <div class="formbold-input-group">
                        <label for="amount" class="formbold-form-label">Fees</label>
                        <input type="number" name="amount" id="amount" placeholder="Enter your amount" class="formbold-form-input" required />
                    </div>
                    <div>
                        <label for="feecomments" class="formbold-form-label">
                            Any comments or suggestions
                        </label>
                        <textarea rows="6" name="feecomments" id="feecomments" placeholder="Type here..." class="formbold-form-input"></textarea>
                    </div>
                    <button class="formbold-btn" type="button" onclick="prevStep(3)">Previous</button>
                    <button class="formbold-btn" type="submit" name="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <div class="wrapper">
    </div>
    <script>
        fetch('fetchcategories.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to fetch categories');
                }
                return response.json();
            })
            .then(data => {
                processData(data);
            })
            .catch(error => {
                console.error('Error occurred while fetching data:', error);
                // Display an error message on the UI or perform additional error handling
            });
    </script>
    <script src="validation.js"></script>
    <script>
        $(document).ready(function() {
            // Populate country dropdown
            var countries = ["India", "United States", "United Kingdom"];
            $.each(countries, function(index, value) {
                $('#country').append('<option value="' + value + '">' + value + '</option>');
            });

            // Populate state dropdown based on selected country
            $('#country').change(function() {
                var selectedCountry = $(this).val();
                var states;

                if (selectedCountry === "India") {
                    states = ["Select State", "Maharashtra", "Karnataka", "Tamil Nadu", "Telangana", "Odisha"];
                } else if (selectedCountry === "United States") {
                    states = ["Select State", "California", "New York", "Texas"];
                } else if (selectedCountry === "United Kingdom") {
                    states = ["Select State", "London", "Manchester", "Birmingham"];
                }

                $('#state').empty();
                $.each(states, function(index, value) {
                    $('#state').append('<option value="' + value + '">' + value + '</option>');
                });
            });

            // Populate city dropdown based on selected state
            $('#state').change(function() {
                var selectedState = $(this).val();
                var cities;

                if (selectedState === "Maharashtra") {
                    cities = ["Select City", "Mumbai", "Pune", "Nagpur"];
                } else if (selectedState === "Karnataka") {
                    cities = ["Select City", "Bangalore", "Mysore", "Hubli"];
                } else if (selectedState === "Telangana") {
                    cities = ["Select City", "Hyderabad", "Secundrabad", "Warangal"];
                } else if (selectedState === "Odisha") {
                    cities = ["Select City", "Berhampur", "Bhubaneswar", "Rourkela"];
                } else if (selectedState === "Tamil Nadu") {
                    cities = ["Select City", "Chennai", "Coimbatore", "Madurai"];
                } else if (selectedState === "California") {
                    cities = ["Select City", "Los Angeles", "San Francisco", "San Diego"];
                } else if (selectedState === "New York") {
                    cities = ["Select City", "New York City", "Buffalo", "Albany"];
                } else if (selectedState === "Texas") {
                    cities = ["Select City", "Houston", "Dallas", "Austin"];
                } else if (selectedState === "London") {
                    cities = ["Select City", "London City", "Buckingham", "Camden"];
                } else if (selectedState === "Manchester") {
                    cities = ["Select City", "Manchester City", "Salford", "Bolton"];
                } else if (selectedState === "Birmingham") {
                    cities = ["Select City", "Birmingham City", "Coventry", "Wolverhampton"];
                }

                $('#city').empty();
                $.each(cities, function(index, value) {
                    $('#city').append('<option value="' + value + '">' + value + '</option>');
                });
            });

            // Populate institute dropdown based on selected state
            $('#city').change(function() {
                var selectedCity = $(this).val();
                var inst;

                if (selectedCity === "Hyderabad") {
                    inst = ["Select Institute", "Sri Chaitanya", "The Mothers Touch", "N.I.S.T"];
                } else if (selectedCity === "Secundrabad") {
                    inst = ["Select Institute", "Vishwa Vishwani", "VVIT", "Roland"];
                } else if (selectedCity === "Berhampur") {
                    inst = ["Select Institute", "Gayatri", "Samrat college", "BJB College"];
                } else if (selectedCity === "Tamil Nadu") {
                    inst = ["Select Institute", "Chennai", "Coimbatore", "Madurai"];
                } else if (selectedCity === "California") {
                    inst = ["Select Institute", "Los Angeles", "San Francisco", "San Diego"];
                } else if (selectedCity === "New York") {
                    inst = ["Select Institute", "New York City", "Buffalo", "Albany"];
                }


                $('#institute').empty();
                $.each(inst, function(index, value) {
                    $('#institute').append('<option value="' + value + '">' + value + '</option>');
                });
            });

        });
    </script>


</body>

</html>