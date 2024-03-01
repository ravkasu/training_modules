
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