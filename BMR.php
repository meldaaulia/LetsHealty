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
    <section class="home" id="home" style="background-image: url(images/793759.jpg);">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">BMR</div>
                <div class="text-2">Basal Metabolic Rate</div>

            </div>
        </div>
    </section>
    <section class="services">
        <div class="max-width">
            <h2 class="title">Menghitung BMR</h2>
            </div>
    <!--BMI Calculator-->
        <div class="container">

            <form action="" method="post" id="bmr-form">
            <label for="gender">Jenis Kelamin:</label>
		    <input type="radio" id="male" name="gender" value="male">
    		<label for="male">Laki-laki</label>
	    	<input type="radio" id="female" name="gender" value="female">
    		<label for="female">Perempuan</label><br><br>
	    	<label for="weight">Berat Badan :</label>
		    <input type="number" id="weight" name="weight" placeholder="Kilogram"><br>
		    <label for="height">Tinggi Badan :</label>
		    <input type="number" id="height" name="height" placeholder="Centimeter"><br>
		    <label for="age">Usia :</label>
		    <input type="number" id="age" name="age" placeholder="Umur"><br>
		    <input type="submit" class="btn-blue" value="Submit">
          </form>

          <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$gender = $_POST["gender"];
			$weight = $_POST["weight"];
			$height = $_POST["height"];
			$age = $_POST["age"];

			if ($gender == "male") {
				$bmr = 88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age);
			} else {
				$bmr = 447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age);
			}

            echo '<div class="result-box">';
			echo "<p>BMR Anda adalah: " . round($bmr) . " kkal/hari</p>";
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