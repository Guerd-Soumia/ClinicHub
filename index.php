<?php
 // Check if the add form was submitted
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (isset($_POST['patient_code']) && isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['age']) && isset($_POST['address']) && isset($_POST['phone_number']) && isset($_POST['status']) && isset($_POST['military_service'])) {
        // Get form data
        $patient_code = $_POST['patient_code'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $status = $_POST['status'];
        $military_service = $_POST['military_service'];

        // Process data here (e.g., insert into database)

        // Redirect after processing
        header("Location: add.php");
        exit;
    } else {
        // Error message if fields are missing
        echo "<p class='error'>Please fill in all form fields.</p>";
    } 
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClinicHub</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <a href="?action=home">Home</a>
        <a href="?action=authentication">Login</a>
        <a href="?action=add">Add Patient</a>
        <a href="?action=search">Search</a>
        <a href="?action=treatment">Treatment</a>
        <a href="?action=consultation">Consultation</a>
    </nav>
    
    <?php if (!isset($_GET['action']) || $_GET['action'] == 'home') { ?>
        <div class="welcome-section">
            <h1>Welcome to ClinicHub</h1>
            <p>Your complete medical management solution for optimal patient care</p>
        </div>
        
        <div class="features">
            <div class="feature-box">
                <h3>Patient Management</h3>
                <p>Easily register and manage medical records for all your patients with our secure and intuitive system.</p>
            </div>
            
            <div class="feature-box">
                <h3>Treatment Tracking</h3>
                <p>Plan and monitor medical treatments for better care continuity.</p>
            </div>
            
            <div class="feature-box">
                <h3>Consultations</h3>
                <p>Organize and archive all medical consultations with quick access to patient histories.</p>
            </div>
        </div>
        
        <div class="why-choose-us">
            <h2>Why Choose ClinicHub?</h2>
            <p><strong>Easy to use:</strong> Intuitive interface designed for healthcare professionals.</p>
            <p><strong>Data security:</strong> Your medical information is encrypted and protected.</p>
            <p><strong>Accessibility:</strong> Access medical records anytime, from any device.</p>
            <p><strong>24/7 Support:</strong> Our team is available to assist you at any time.</p>
        </div>
    <?php } else { ?>
        <div class="wrapper">
            <?php
            // Show authentication form
            if (isset($_GET['action']) && $_GET['action'] == 'authentication') {
                echo '<h2>Login</h2>
                <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="' . (isset($username) ? htmlspecialchars($username) : '') . '">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div>
                        <input type="submit" value="Submit">
                    </div>
                </form>';
            } elseif (isset($_GET['action']) && $_GET['action'] == 'add') {
                // Show add form
                echo '<h2>Add Patient</h2>
                <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
                    <div>
                        <label for="patient_code">Patient Code</label>
                        <input type="text" id="patient_code" name="patient_code">
                    </div>
                    <div>
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name">
                    </div>
                    <div>
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div>
                        <label for="age">Age</label>
                        <input type="text" id="age" name="age">
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address">
                    </div>
                    <div>
                        <label for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number">
                    </div>
                    <div>
                        <label for="status">Status</label>
                        <input type="text" id="status" name="status">
                    </div>
                    <div>
                        <label for="military_service">Military Service</label>
                        <input type="text" id="military_service" name="military_service">
                    </div>
                    <div>
                        <input type="submit" value="Submit">
                    </div>
                </form>';
            } elseif (isset($_GET['action']) && $_GET['action'] == 'search') {
                // Show search form
                echo '<h2>Search</h2>
                <form action="#" method="post">
                    <div>
                        <label for="patient_code">Patient Code</label>
                        <input type="text" id="patient_code" name="patient_code">
                    </div>
                    <div>
                        <input type="submit" value="Search">
                    </div>
                </form>';
            } elseif (isset($_GET['action']) && $_GET['action'] == 'treatment') {
                // Show treatment form
                echo '<h2>Treatment</h2>
                <form action="#" method="post">
                    <div>
                        <label for="patient_code">Patient Code</label>
                        <input type="text" id="patient_code" name="patient_code">
                    </div>
                    <div>
                        <label for="treatment_type">Treatment Type</label>
                        <input type="text" id="treatment_type" name="treatment_type">
                    </div>
                    <div>
                        <label for="treatment_date">Treatment Date</label>
                        <input type="date" id="treatment_date" name="treatment_date">
                    </div>
                    <div>
                        <input type="submit" value="Submit">
                    </div>
                </form>';
            } elseif (isset($_GET['action']) && $_GET['action'] == 'consultation') {
                // Show consultation form
                echo '<h2>Consultation</h2>
                <form action="#" method="post">
                    <div>
                        <label for="patient_code">Patient Code</label>
                        <input type="text" id="patient_code" name="patient_code">
                    </div>
                    <div>
                        <label for="consultation_type">Consultation Type</label>
                        <input type="text" id="consultation_type" name="consultation_type">
                    </div>
                    <div>
                        <label for="consultation_date">Consultation Date</label>
                        <input type="date" id="consultation_date" name="consultation_date">
                    </div>
                    <div>
                        <input type="submit" value="Submit">
                    </div>
                </form>';
            }
            ?>
        </div>
    <?php } ?>

    <footer>
        <nav>
            <a href="#">Contact</a>
            <a href="#">Help</a>
        </nav>
    </footer>
</body>

</html>