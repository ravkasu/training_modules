<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link href="feecollect-styles.css" rel="stylesheet" media="screen">
</head>

<body>
    <img src="icon/logo.png" class="logo_styles">
    <div class="formbold-main-wrapper">
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

            <form id="form" action="https://paymoney.vrsolutionss.com/payment/form" method="POST" onsubmit="validateForm()">
                <div id="section1">
                    <div id="container" onclick="nextStep(2)"></div>
                    <!-- <div class="category">
                        <div class="services-icon">
                            <img class="dance_hover" src="icon/it-services.png" alt="Services" />
                        </div>
                        <h2>Healthcare institute</h2>
                    </div>
                    <div class="category">
                        <div class="services-icon">
                            <img class="dance_hover" src="icon/banking-blue.png" alt="Services" />
                        </div>
                        <h2>PSU-Public Sector Undertaking</h2>
                    </div>
                    <div class="category">
                        <div class="services-icon">
                            <img class="dance_hover" src="icon/custom-blue.png" alt="Services" />
                        </div>
                        <h2>Private Merchant</h2>
                    </div> -->
                </div>
                <div class="input-container">
                    <label for="rollno">Student ID:</label>
                    <input type="text" class="inputField" id="rollno" name="rollno" required placeholder="Enter your Student ID">
                    <button type="button" class="circle_button highlight" id="circle_button" onclick="fetchStudentData()">&#10003;</button>
                </div>
                <div class="form-group">
                    <label for="categories">Categories:</label>
                    <input type="text" class="inputField" id="categories" name="categories" placeholder="Enter your Categories" disabled>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="inputField" id="email" name="email" placeholder="Enter your Email" disabled>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="inputField" id="mobile" name="mobile" placeholder="Enter your Mobile" disabled>
                </div>
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="inputField" id="name" name="name" placeholder="Enter your Full Name" disabled>
                </div>
                <button type="submit" class="normal_button highlight" id="normal_button" disabled>Update Student Data</button>
            </form>
        </div>
    </div>
    <div class="wrapper">
    </div>
    <script src="validation.js"></script>
</body>

</html>