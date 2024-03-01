// Disable browser back button
history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
};

function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var parent = document.getElementById('parent').value;
    var country = document.getElementById('country').value;
    var state = document.getElementById('state').value;
    var city = document.getElementById('city').value;
    var institute = document.getElementById('institute').value;
    var course = document.getElementById('course').value;
    var fees = document.getElementById('fees').value;
    var rollno = document.getElementById('rollno').value;
    var amount = document.getElementById('amount').value;

    // Validate Name
    if (name.trim() == '') {
        alert('Please enter your name');
        return false;
    }
    
    // Validate Email
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address');
        return false;
    }

    // Validate Mobile Number
    if (mobile.trim() == '' || isNaN(mobile) || mobile.length != 10) {
        alert('Please enter a valid mobile number');
        return false;
    }

    // Validate Parent
    if (parent.trim() == '') {
        alert('Please enter your parent name');
        return false;
    }

    // Validate Roll No / Student ID
    if (rollno.trim() == '') {
        alert('Please enter your roll number or student ID');
        return false;
    }

    // Validate Amount
    if (amount.trim() == '' || isNaN(amount) || amount <= 0) {
        alert('Please enter a valid amount');
        return false;
    }

    // If all validations pass, return true to submit the form
    return true;
}

//step process code
var currentStep = 1;

function onLoadFunction() {
    document.getElementById('step' + currentStep).classList.add('active'); // Add "active" class
}

function validateStep(step) {
    var inputs = document.querySelectorAll('#section' + step + ' input[required], #section' + step + ' select[required]');
    var isValid = true;

    inputs.forEach(function (input) {
        if (!input.value.trim()) {
            input.classList.add('invalid');
            isValid = false;
        } else {
            input.classList.remove('invalid');
            if (input.tagName.toLowerCase() === 'select') {
                input.classList.remove('select-invalid'); // Remove the class for select element
            }
        }
    });

    return isValid;
}

function nextStep(next) {
    if (validateStep(currentStep)) {
        document.getElementById('section' + currentStep).style.display = 'none';
        document.getElementById('section' + next).style.display = 'block';
        if (currentStep === 1) {
            var element = document.getElementById('step1');
            element.classList.remove('active');
        }
        if (currentStep === 2) {
            var element = document.getElementById('step2');
            element.classList.remove('active');
        }
        if (currentStep === 3) {
            var element = document.getElementById('step3');
            element.classList.remove('active');
        }
        if (currentStep === 4) {
            var element = document.getElementById('step4');
            element.classList.add('active');
        }
        // document.getElementById('step' + currentStep).classList.remove('active'); // Remove "active" class from current step
        document.getElementById('step' + next).classList.add('active'); // Add "active" class to next step
        currentStep = next;
    } else {
        focusFirstInvalidInput(currentStep);
    }
}

function prevStep(prev) {
    document.getElementById('section' + currentStep).style.display = 'none';
    document.getElementById('section' + prev).style.display = 'block';
    if (currentStep === 1) {
        var element = document.getElementById('step1');
        element.classList.remove('active');
    }
    if (currentStep === 2) {
        var element = document.getElementById('step2');
        element.classList.remove('active');
    }
    if (currentStep === 3) {
        var element = document.getElementById('step3');
        element.classList.remove('active');
    }
    if (currentStep === 4) {
        var element = document.getElementById('step4');
        element.classList.add('active');
    }
    // document.getElementById('step' + currentStep).classList.remove('active'); // Remove "active" class from current step
    document.getElementById('step' + prev).classList.add('active'); // Add "active" class to previous step
    currentStep = prev;
}


function focusFirstInvalidInput(step) {
    var inputs = document.querySelectorAll('#section' + step + ' input.invalid, #section' + step + ' select.invalid');
    if (inputs.length > 0) {
        inputs[0].focus();
        if (inputs[0].tagName.toLowerCase() === 'select') {
            inputs[0].classList.add('select.invalid'); // Adding a class to style the select element
        }
    }
}

// function fetchCategories() {
//     fetch('fetchcategories.php')
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Failed to fetch categories');
//             }
//             return response.json();
//         })
//         .then(data => {
//             processData(data);
//         })
//         .catch(error => {
//             console.error('Error occurred while fetching data:', error);
//             // Display an error message on the UI or perform additional error handling
//         });
// };


function processData(data) {
    console.log(data);
    var strings = data;
    var container = document.getElementById("container");

    // Clear previous content
    container.innerHTML = "";

    // Iterate over the data array and create div blocks
    data.forEach(function (item) {
        var mainDiv = document.createElement("div");
        mainDiv.className = "category";

        // Create inner div for image and name
        var innerDiv = document.createElement("div");
        innerDiv.className = "services-icon";

        // Create an image element
        var img = document.createElement("img");
        img.className = "dance_hover";
        img.src = item.categoryimage;
        img.alt = item.categories;

        // Create a heading element
        var heading = document.createElement("h2");
        heading.textContent = item.categories;

        // Append image and heading to the div
        innerDiv.appendChild(img);
        innerDiv.appendChild(heading);

        // Append inner div to the main div
        mainDiv.appendChild(innerDiv);

        // Append the main div to the container
        container.appendChild(mainDiv);
    });
};

function fetchStudentData() {
    var rollno = document.getElementById("rollno").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            document.getElementById("parent").value = data.parent;
            document.getElementById("email").value = data.email;
            document.getElementById("mobile").value = data.mobile;
            document.getElementById("name").value = data.name;
            document.getElementById("feecomments").value = data.feecomments;
            document.getElementById("amount").value = data.amount;
            document.getElementById("country").value = data.country;
            document.getElementById("state").value = data.state;
            document.getElementById("city").value = data.city;
            document.getElementById("institute").value = data.institute;
            document.getElementById("course").value = data.course;
            document.getElementById("fees").value = data.fees;
        }
    };
    xhttp.open("GET", "fetchdatawithstid.php?rollno=" + rollno, true);
    xhttp.send();

    // document.getElementById('normal_button').classList.remove('highlight');
}
window.onload = onLoadFunction;
// window.onload = fetchCategories;