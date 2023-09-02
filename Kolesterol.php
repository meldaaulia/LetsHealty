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
    <section class="home" id="home" style="background-image: url(images/15384912.jpg);">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Cek</div>
                <div class="text-2">Kolesterol</div>

            </div>
        </div>
    </section>
    <section class="services">
        <div class="max-width">
            <h2 class="title">Menghitung Tingkat Kolesterol</h2>
            </div>
    <!--BMI Calculator-->
        <div class="container">

            <form action="" method="post" id="bmr-form">
	    	<label for="total_kolesterol">Total Kolesterol (mg/dL) :</label>
		    <input type="number" id="total_kolesterol" name="total_kolesterol" placeholder="Total"><br>
		    <label for="hdl_kolesterol">HDL Kolesterol (mg/dL) :</label>
		    <input type="number" id="hdl_kolesterol" name="hdl_kolesterol" placeholder="HDL"><br>
		    <label for="ldl_kolesterol">LDL Kolesterol (mg/dL) :</label>
		    <input type="number" id="ldl_kolesterol" name="ldl_kolesterol" placeholder="LDL"><br>
		    <input type="submit" class="btn-blue" value="Submit">
          </form>

          <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$total_kolesterol = $_POST["total_kolesterol"];
			$hdl_kolesterol = $_POST["hdl_kolesterol"];
			$ldl_kolesterol = $_POST["ldl_kolesterol"];

			// Hitung rasio kolesterol
			$rasio_kolesterol = $total_kolesterol / $hdl_kolesterol;

			// Tentukan kategori kolesterol
			if ($total_kolesterol < 200 && $hdl_kolesterol > 40 && $ldl_kolesterol < 130) {
				$kolesterol = "Normal";
			} elseif ($total_kolesterol >= 200 && $total_kolesterol <= 239 || $hdl_kolesterol < 40 || $ldl_kolesterol >= 130 && $ldl_kolesterol <= 159) {
				$kolesterol = "Borderline High";
			} elseif ($total_kolesterol >= 240 || $hdl_kolesterol < 35 || $ldl_kolesterol >= 160) {
				$kolesterol = "High";
			} else {
				$kolesterol = "Tidak Diketahui";
			}

			// Tampilkan hasil tes kolesterol
			echo '<div class="result-box">';
			echo "<h2>Hasil Tes Kolesterol:</h2>";
			echo "<p>Total Kolesterol: " . $total_kolesterol . " mg/dL</p>";
			echo "<p>HDL Kolesterol: " . $hdl_kolesterol . " mg/dL</p>";
			echo "<p>LDL Kolesterol: " . $ldl_kolesterol . " mg/dL</p>";
			echo "<p>Rasio Kolesterol: " . $rasio_kolesterol . "</p>";
			echo "<p>Kategori Kolesterol: " . $kolesterol . "</p>";
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