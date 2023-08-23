<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Flight Booking Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('hr.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 50%;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 65%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 9px;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-top: 7px;
            margin-bottom: 10px;
        }

        .submit_b {
            border-radius: 30px;
            margin-top: 250px;
        }

        .submit_b:hover {
            transition: all 0.3s ease-in-out;
            transform: scale(1.1);
            background-color: wheat;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            opacity: 70%;
        }
    </style>
</head>

<body>
    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $car_model = $_POST['car_model'];
        $city = $_POST['city'];
        $pick_up_date = $_POST['pick_up_date'];
        $drop_off_date = $_POST['drop_off_date'];
        $price = $_POST['price'];
        $available_cars = $_POST['available_cars'];

        // Database connection configuration
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'travelagency';

        // Create connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into "car_hire" table
        $sql = "INSERT INTO car_hire (car_model, city, pick_up_date, drop_off_date, price, available_cars) VALUES ('$car_model', '$city', '$pick_up_date', '$drop_off_date', $price, $available_cars)";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
    ?>


    <!--Header-->
    <div class="monogrid grid col-12">
        <div class="row">
            <div class="mono col-3">
                <img src="mono1.png">
            </div>

            <div class="menu col-8">
                <nav>
                    <nav>
                        <ul>
                            <li><a class="nav-link active" aria-current="page" href="flights.php">HOME</a></li>
                            <li>
                                <a href="travel.php">ABOUT</a>
                            </li>
                            <li><a href="https://tayyabhassantarar.dorik.io/">CONTACT US</a></li>
                        </ul>
                    </nav>

            </div>
        </div>
    </div>

    <!--Form-->

    <div class="grid col-12">
        <div class="row">
            <div class="buttons col-9">


                <form method="POST" action="" class="form-container">
                    <div class="grid col-12">
                        <div class="row">
                            <div class="col-10">
                                <label for="car_model">Car Model:</label>
                                <input type="text" name="car_model" required>

                                <label for="city">City:</label>
                                <input type="text" name="city" required>

                                <label for="pick_up_date">Pick-up Date:</label>
                                <input type="date" name="pick_up_date" required>

                                <label for="drop_off_date">Drop-off Date:</label>
                                <input type="date" name="drop_off_date" required>

                                <label for="price">Price:</label>
                                <input type="number" name="price" step="0.01" required>

                                <label for="available_cars">Available Cars:</label>
                                <input type="number" name="available_cars" required>
                            </div>
                            <div class="submit_b col-2">
                                <input type="submit" name="submit" value="Submit">

                                <a href="car_dis.php" class="display_button btn btn-primary " role="button">Display
                                    Cars</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-3">
                <div class="buttons">
                    <a href="flights.php" class="button">
                        <i class="fas fa-plane"></i>
                        <span>Flights</span>
                    </a>
                    <a href="hotels.php" class="button">
                        <i class="fas fa-hotel"></i>
                        <span>Hotels</span>
                    </a>
                    <a href="car_hire.php" class="button active">
                        <i class="fas fa-car"></i>
                        <span>Car Hire</span>
                    </a>
                    <a href="travel.php" class="button active_1">
                        <i class="fas fa-car"></i>
                        <span>Developer's Profile</span>
                    </a>
                </div>
                <script src="https://kit.fontawesome.com/your_fontawesome_kit.js" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>

    <!--Carousels-->
    <div class="carousel-container">
        <div class="carousel">
            <img src="airways.png" alt="Image 1">
            <img src="airways.png" alt="Image 2">

            <!-- Add more images as needed -->
        </div>
    </div>

    <!--Footer-->

    <div class="grid col-12">
        <div class="row">
            <div class="footer col-12">
                <p>&copy; Developed by: Tayyab Hassan Tarar (UCP-Lahore)</p>
            </div>
        </div>
    </div>

</body>

</html>