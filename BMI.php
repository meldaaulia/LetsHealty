<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/LOGO1.png">
    <title>Let's Healthy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <!-- ,,,,,,,,,,,,,,,,,,,,,  -->

    
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="index.html">Let<span>'s</span> Healthy</a></div>
            <ul class="menu">
                <li><a href="index.html" class="menu-btn">Home</a></li>
                <li><a href="index.html#about" class="menu-btn">About</a></li>
                <li><a href="index.html#Tips" class="menu-btn">Tips</a></li>
                
                <li><a href="index.html#cek" class="menu-btn">Cek</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home" style="background-image: url(images/diet.jpg);">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">BMI</div>
                <div class="text-2">Body Mass Index</div>

            </div>
        </div>
    </section>
    <section class="services">
        <div class="max-width">
            <h2 class="title">Menghitung BMI</h2>
            </div>
    <!--BMI Calculator-->
        <div class="container">

            <form action="" method="post" id="bmi-form">
            <label for="height">Tinggi Badan :</label><br />
            <input type="number" id="height" name="height" placeholder="Centimeter" /><br />
            <label for="weight">Berat Badan :</label><br />
            <input type="number" id="weight" name="weight" placeholder="Kilogram" /><br /><br />
            <input type="submit" class="btn-blue" value="Submit" >
        </form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$weight = $_POST["weight"];
			$height = $_POST["height"]/100; //mengubah tinggi dalam satuan cm menjadi m

			$bmi = $weight / ($height * $height); //rumus bmi

            echo '<div class="result-box">';
			echo "<p>BMI Anda adalah: " . round($bmi, 1) . "</p>";
			if ($bmi < 18.5) {
				echo "<p>Berat badan kurang</p>";
			} elseif ($bmi >= 18.5 && $bmi < 25) {
				echo "<p>Berat badan normal</p>";
			} elseif ($bmi >= 25 && $bmi < 30) {
				echo "<p>Berat badan berlebih</p>";
			} elseif ($bmi >= 30 && $bmi < 35) {
				echo "<p>Obesitas tingkat 1</p>";
			} elseif ($bmi >= 35 && $bmi < 40) {
				echo "<p>Obesitas tingkat 2</p>";
			} else {
				echo "<p>Obesitas tingkat 3</p>";
			}
            echo '</div>';
		}
	?>
        </div>
    </section>
        <!-- footer section start -->
        <footer>
            <span>Created By Kelompok UMI <span class="far fa-copyright"></span> 2021</span>
        </footer>
    
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>