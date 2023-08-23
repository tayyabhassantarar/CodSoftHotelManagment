<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Tarar Travels</title>
</head>

<body>

    <!--Header-->
    <div class="monogrid grid col-12">
        <div class="row">
            <div class="mono col-3">
                <img src="mono1.png">
            </div>

            <div class="menu col-8">
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
                <div class="grid col-12">
                    <div class="row">
                        <div class="col-7">
                            <h1>Tayyab Hassan Tarar</h1>

                            <p class="highlight">As a proficient web developer, I possess extensive experience in both
                                front-end and back-end development. I have successfully completed semester projects that
                                demonstrate my competence in crafting dynamic and responsive web applications. My
                                mastery of HTML, CSS, Bootstrap, JavaScript, and PHP (Laravel) empowers me to design
                                visually captivating and functional websites that surpass expectations.</p>

                            <p>I am also pursuing a law degree from one of the prestigious institutes, Punjab
                                University, Lahore, with the aim of gaining knowledge about justice.</p>

                            <div class="education">
                                <h2>Education</h2>
                                <p><strong>University of Central Punjab, Lahore</strong> - BSCS</p>
                                <p><strong>Punjab University, Lahore</strong> - Pursuing a law degree</p>
                            </div>

                        </div>
                        <div class="image_tyb col-5">
                            <div class="image-container">
                                <img src="tyb.png" alt="Image">
                            </div>
                            <script>
                                var imageContainer = document.querySelector('.image-container');
                                var image = document.querySelector('.image-container img');

                                imageContainer.addEventListener('mousemove', function (e) {
                                    var xAxis = (window.innerWidth / 2 - e.pageX) / 10;
                                    var yAxis = (window.innerHeight / 2 - e.pageY) / 10;

                                    image.style.transform = 'rotateY(' + xAxis + 'deg) rotateX(' + yAxis + 'deg)';
                                });

                                imageContainer.addEventListener('mouseenter', function () {
                                    image.style.transition = 'transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1)';
                                });

                                imageContainer.addEventListener('mouseleave', function () {
                                    image.style.transform = 'rotateY(0deg) rotateX(0deg)';
                                });
                            </script>

                        </div>

                    </div>
                </div>


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
                    <a href="car_hire.php" class="button">
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