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
    <section class="home" id="home" style="background-image: url(images/1280.png);">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Cek</div>
                <div class="text-2">Kesehatan Mental</div>

            </div>
        </div>
    </section>
    <section class="services">
        <div class="max-width">
            <h2 class="title">Test Kesehatan Mental</h2>
            </div>
    <!--BMI Calculator-->
        <div class="container">

            <form action="" method="post" id="jantung-form">

            <label for="q1">Saya merasa gelisah atau cemas tanpa alasan yang jelas.</label><br>
		    <input type="radio" id="male" name="q1" value="1">
    		<label for="q1">Ya</label>
	    	<input type="radio" id="female" name="q1" value="0">
    		<label for="q1">Tidak</label><br><br>
            
            <label for="q2">Saya sulit tidur atau tidur tidak nyenyak.</label><br>
		    <input type="radio" id="male" name="q2" value="1">
    		<label for="q2">Ya</label>
	    	<input type="radio" id="female" name="q2" value="0">
    		<label for="q2">Tidak</label><br><br>

            <label for="q3">Saya merasa lelah atau lesu sepanjang hari.</label><br>
		    <input type="radio" id="male" name="q3" value="1">
    		<label for="q3">Ya</label>
	    	<input type="radio" id="female" name="q3" value="0">
    		<label for="q3">Tidak</label><br><br>

            <label for="q4">Saya merasa sedih atau depresi.</label><br>
		    <input type="radio" id="male" name="q4" value="1">
    		<label for="q4">Ya</label>
	    	<input type="radio" id="female" name="q4" value="0">
    		<label for="q4">Tidak</label><br><br>

            <label for="q5">Saya merasa kehilangan minat pada kegiatan yang biasa saya lakukan.</label><br>
		    <input type="radio" id="male" name="q5" value="1">
    		<label for="q5">Ya</label>
	    	<input type="radio" id="female" name="q5" value="0">
    		<label for="q5">Tidak</label><br><br>

            <label for="q6">Saya merasa sulit berkonsentrasi atau mudah lupa.</label><br>
		    <input type="radio" id="male" name="q6" value="1">
    		<label for="q6">Ya</label>
	    	<input type="radio" id="female" name="q6" value="0">
    		<label for="q6">Tidak</label><br><br>

            <label for="q7">Saya merasa mudah tersinggung atau marah-marah.</label><br>
		    <input type="radio" id="male" name="q7" value="1">
    		<label for="q7">Ya</label>
	    	<input type="radio" id="female" name="q7" value="0">
    		<label for="q7">Tidak</label><br><br>

  		    <input type="submit" value="Submit">
          </form>

          <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$q1 = $_POST["q1"];
			$q2 = $_POST["q2"];
			$q3 = $_POST["q3"];
			$q4 = $_POST["q4"];
			$q5 = $_POST["q5"];
			$q6 = $_POST["q6"];
			$q7 = $_POST["q7"];

			$total_score = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7;

			if ($total_score >= 5) {
                echo '<div class="result-box">';
				echo "<p>Anda perlu berkonsultasi dengan dokter atau ahli kesehatan mental.</p>";
			} else {
                echo '<div class="result-box">';
				echo "<p>Kesehatan mental Anda baik.</p>";
			}
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