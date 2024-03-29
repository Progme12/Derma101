
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Dashboard</title>
</head>

<body>

  <!-- First Background -->
  <div class="background-one">
    <!-- Navbar -->
    <nav class="navbar">
      <img class="logo" src="LOGO.png" alt="Logo">
      <div class="nav-links">
        <a href="Login.php">Login</a>
      </div>
    </nav>
    <!-- Content -->
    <div class="content">
      <p>
        ENHANCING <br> YOUR <br> BEAUTY
      </p>
      <div class="buttons">
        <button class="button">BOOK NOW</button>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Get the "BOOK NOW" button element
      var bookNowButton = document.querySelector('.button');

      // Add a click event listener to the button
      bookNowButton.addEventListener('click', function () {
        // Redirect to the "login.php" page
        window.location.href = 'Login.php';
      });
    });
  </script>
  <!-- Ribbon Section -->
  <div class="ribbon">
    <div class="Tagline">Trust only the experts, Trust DERMA 101</div>
  </div>
  <!-- Second Background -->
  <div class="background-two">
    <div class="container">
      <h2>OUR SERVICES</h2>
      <div class="row">
        <div class="content-wrapper">
          <div class="service">
            <img src="image 28.png" alt="Service 1">
            <div class="description">
              <h3>Laser Toning</h3>
              <p>Treat pigmentation, fine lines, acne scars, and more to get an even skin tone</p>
              <button class="get-now-button">Get Now</button>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="service">
            <img src="image 28.png" alt="Service 1">
            <div class="description">
              <h3>Underarm Laser Whitening</h3>
              <p>Reduce dark patches for a lighter underarm complexion</p>
              <button class="get-now-button">Get Now</button>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="service">
            <img src="image 27.png" alt="Service 3">
            <div class="description">
              <h3>Ultra Facelift</h3>
              <p>Rejuvenate the face by tightening and repositioning facial tissues</p>
              <button class="get-now-button">Get Now</button>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="service">
            <img src="image 30.png" alt="Service 3">
            <div class="description">
              <h3>Hydrafacial</h3>
              <p>Refresh skin texture by exfoliation, hydration, and antioxidant protection</p>
              <button class="get-now-button">Get Now</button>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="service">
            <img src="image 27.png" alt="Service 3">
            <div class="description">
              <h3>Radio Frequency Treatment</h3>
              <p>Stimulate collage production and tighten skin</p>
              <button class="get-now-button">Get Now</button>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="service">
            <img src="image 30.png" alt="Service 3">
            <div class="description">
              <h3>Diamond Peel</h3>
              <p>Remove dead skin cells and improve skin texture, reduce fine lines, and a radiant glow</p>
              <button class="get-now-button">Get Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Third Background (About Us) -->
  <div class="background-third">
    <div class="about-us-container">
      <div class="about-us-text">
        <h2>About Us</h2>
        <div class="about-us-content">
          <div class="doctor-info">
            <div class="doctor-image"></div>
            <div class="doctor-details">
              <p>Dr. Melanie S. Anclote<br>MD, FPDS, IFAAD</p>
              <p>
                Dr. Melanie S. Anclote, MD is a Fellow of the Philippine Dermatological Society and International Fellow
                of the American Academy of Dermatology. Doc Mel is a graduate of the University of Santo Tomas College
                of Medicine and Surgery as Magna Cum Laude. She took her internship training program at UST Hospital
                after
                which she took the Physician Licensure Exam and landed on the top 8th among the passers.
              </p>
              <p>
                She took her Residency training program in Dermatology at the Jose R. Reyes Memorial Medical Center and
                served as Chief Resident. She passed the board certification issued by the Philippine Dermatological
                Society and became a Fellow of the same organization and International Fellow of the American Academy of
                Dermatology.
              </p>
              <p>
                Doc Mel is continuously honing her skills and expanding her knowledge thru various local and
                international
                conventions, continuing medical education, seminars and workshops. She is committed to excel in the
                field
                of Dermatology to serve the Antipolenos and Rizalenos better.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer Section -->
 <div class="footer-container">
  <div class="bg" style="background: url('bg.png') center/cover no-repeat;">
    <div class="Tagline">
      <h2>Trust only the experts, Trust DERMA 101</h2>
    </div>
    <div class="contact-info">
      <p>MONDAY to SUNDAY 10am - 8pm</p>
      <p>US AT 2nd Floor (Unit 201-203) 1 CIRQ Building, Sen. Lorenzo Sumulong Avenue, Brgy. San Roque, Antipolo City</p>
      <p>(In front of Unciano Hospital, Above Converge and Beside McDonalds)</p>
    </div>

    <!-- Icons with links -->
    <div class="social-icons">
      <a href="https://www.facebook.com/Derma101" target="_blank">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="mailto:derma101ph@yahoo.com" target="_blank">
        <i class="fas fa-envelope"></i>
      </a>
      <a href="http://www.derma101ph.com/" target="_blank">
        <i class="fas fa-globe"></i>
      </a>
    </div>
  </div>

</body>

</html>

<style>
  body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    overflow-x: hidden;
    /* Hide horizontal scrollbar */
  }
  /* First Background styles */
  .background-one {
    width: 100vw;
    height: 100vh;
    background: url('image 25.png') center/cover no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
  }

  /* Second Background styles */
  .background-two {
    width: 100vw;
    height: 100vh;
    background: url('image\ 37.png') center/cover no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* Navbar styles */
  .navbar {
    flex-shrink: 0;
    background: none;
    width: 100%;
    box-sizing: border-box;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo {
    width: 80px;
    height: auto;
    /* Allow the height to adjust proportionally */
    flex-shrink: 0;
  }

  .nav-links {
    display: flex;
    align-items: center;
  }

  .nav-links a {
    margin-right: 20px;
    text-decoration: none;
    color: #333333;
    font-weight: bold;
  }

  /* Content styles */
  .content {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    text-shadow: -10px 11px 4px rgba(0, 0, 0, 0.25);
    font-family: Lexend;
    font-size: 80px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-right: 900px;
  }

  .buttons {
    margin-top: 20px;
    margin-right: 318px;
  }

  .button {
    color: #fff;
    background: #FFBC00;
    border: none;
    padding: 15px 30px;
    border-radius: 50px;
    font-size: 20px;
    cursor: pointer;
  }

  /* Ribbon styles */
  .ribbon {
    width: 100vw;
    height: 105px;
    background: url('ribbon.png') center/cover no-repeat;
  }

  .Tagline {
    color: black;
    text-align: center;
    font-size: 24px;
    line-height: 105px;
  }

  /* Container styles */
  .container {
    max-width: 1246px;
    height: 900px;
    flex-shrink: 0;
    background-color: #fff;
    overflow: hidden;
    text-align: center;
    display: flex;
    /* Add display: flex */
    flex-direction: column;
    /* Add flex-direction: column */
    justify-content: center;
    /* Add justify-content: center */
    align-items: center;
    /* Add align-items: center */
  }

  /* Row styles */
  .row {
    display: flex;
    flex-wrap: wrap;
    /* Ensure the items wrap to the next line */
    justify-content: center;
    /* Center the items horizontally */
    margin: 0 -10px;
    /* Add negative margin to counteract default padding */
  }

  /* Content wrapper styles */
  .content-wrapper {
    width: 450px;
    height: 206px;
    flex-shrink: 0;
    border-radius: 25px;
    background: rgba(255, 188, 0, 0.30);
    margin: 10px;
    /* Adjust the margin value as needed */
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    /* Change to column to stack content vertically */
    justify-content: center;
    /* Center content vertically */
    align-items: center;
    /* Center content horizontally */
  }

  .service {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
  }

  .service img {
    border-radius: 50%;
    width: 110px;
    height: 100px;
    margin-left: 15px;
  }

  .description {
    flex-grow: 1;
    text-align: left;
  }

  .description h3,
  .description p {
    margin: 0;
  }

  .get-now-button {
    color: #fff;
    background: #FFBC00;
    border: none;
    padding: 10px 20px;
    margin-left: 30px;
    margin-top: 15px;
    border-radius: 50px;
    font-size: 16px;
    cursor: pointer;

  }

  /* Third Background styles */
  .background-third {
    width: 100vw;
    height: 100vh;
    background: white center/cover no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* About Us Container styles */
  .about-us-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    height: 80%;
    width: 80%;
  }

  /* About Us Text styles */
  .about-us-text {
    text-align: center;
    margin-bottom: 100px;
    margin-top: 100px;
  }

  /* Doctor Info styles */
  .doctor-info {
    display: flex;
    align-items: center;
    justify-content: center;
    /* Add this line to center the content horizontally */
  }

  .doctor-image {
    width: 360px;
    height: 504px;
    margin-top: 50px;
    /* Adjust the margin-top value as needed */
    flex-shrink: 0;
    background: url(Melaine.png), lightgray 0px -34.048px / 208.601% 106.786% no-repeat;
  }

  .doctor-details {
    margin-left: 20px;
    text-align: left;
    /* Align the text to the left */
  }

  /* Address Text styles */
  .logo-container .address-text {
    text-align: center;
    margin-top: 40px;
  }

  .doctor-details p {
    text-align: justify;
    margin-top: 20px;
  }

  /* Adjust margin-top for doctor image */
  .doctor-image {
    width: 360px;
    height: 504px;
    margin-top: 60px;
    /* Adjust the margin-top value as needed */
    flex-shrink: 0;
    background: url(Melaine.png), lightgray 0px -34.048px / 208.601% 106.786% no-repeat;
  }

     /* Footer Styling */
.footer-container {
      background: url('bg.png') center/cover no-repeat;
      padding: 20px;
      color: black;
      text-align: center;
    }

    .Tagline h2 {
      margin-bottom: 10px;
    }

    .contact-info {
      margin-bottom: 20px;
    }

    .contact-info p {
      margin: 5px 0;
    }

    .social-icons {
      font-size: 24px;
    }

    .social-icons a {
      color: black;
      margin: 0 10px;
      text-decoration: none;
    }
</style>