<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Educational - Educational Blog</title>
  <!-- Css -->
  <link rel="stylesheet" href="{{asset('style.css')}}" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- <style>
    
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

  </style> -->
</head>

<body>
  <div id="wrapper">
    <!-- sidebar -->
    <div class="sidebar">
      <span class="closeButton">&times;</span>
      <p class="brand-title"><a href="{{ url('/') }}">Educational Blog</a></p>

      <div class="side-links">
        <ul>
        <li><a class="active" href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/blog') }}">Blog</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
      </div>
      <!-- sidebar footer -->
      <footer class="sidebar-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>

        <small>&copy 2023 Educational Blog</small>
      </footer>
    </div>

    <!-- Menu Button -->
    <div class="menuButton">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <!-- main -->
    <main class="container">
      <section id="contact-us">
        <h1 style="color:navy;font-family: 'Lucida Handwriting', cursive;letter-spacing: 3px; background-color: antiquewhite;padding: 10px font-weight-bold; 
        ">Get in Touch!</h1>

        <!-- contact info -->
        <div class="container">
          <div class="contact-info">
            <div class="specific-info">
              <i class="fas fa-home"></i>
              <div>
                <p class="title" style="color: aquamarine;">2nd floor,Metaveous Technology </p>
                <p class="subtitle"><span><i style='font-size:24px' class='fas'>&#xf0a9;</i></span>Laxmisagar</p>
              </div>
            </div>
            <div class="specific-info">
              <i class="fas fa-phone-alt"></i>
              <div>
                <a href="" style="color: aquamarine;">+254 720 XXX XXX </a>
                <br />
                <a href=""style="color: aquamarine;">+254 721 XXX XXX</a>

                <p class="subtitle"><span><i style='font-size:24px' class='fas'>&#xf0a9;</i></span>Mon to Sat 9am-6pm</p>
              </div>
            </div>
            <div class="specific-info">
              <i class="fas fa-envelope-open-text"></i>
              <div>
                <a href="mailto:info@education.co.ke">
                  <p class="title" style="color: aquamarine;">info@edu.co.ke</p>
                </a>
                <p class="subtitle"><span><i style='font-size:24px' class='fas'>&#xf0a9;</i></span>Send us your query anytime!</p>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="contact-form">
            <form action="" method="">
              <!-- Name -->
              <label for="name" style="color:aquamarine; font-size: larger; font-family: 'Times New Roman', Times, serif;"><span>Full Name</span></label>
              <input type="text" id="name" name="name" value="" placeholder="Enter your Name Here..." required="true"/>
<!--               
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"> -->


<!-- 
<div class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Please enter a valid title after your name.</p>
  </div>
</div> -->


              <!-- Email -->
              <label for="email" style="color: aquamarine;font-size: larger; font-family: 'Times New Roman', Times, serif;"><span>Email</span></label>
              <!-- <input type="email" id="email" name="email" placeholder="Enter your e-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" /> -->
              <input type="email" id="email" name="email" placeholder="Enter your e-mail" required  />
              
              <!-- Subject -->
              <label for="subject" style="color: aquamarine;font-size: larger; font-family: 'Times New Roman', Times, serif;"><span>Subject</span></label>
              <input type="text" id="Subject" name="subject" value="" placeholder="Enter Your Topics..." required="true"/>

              <!-- Message -->
              <label for="message" style="color: aquamarine;font-size: larger; font-family: 'Times New Roman', Times, serif;"><span>Message</span></label>
              <textarea id="message" name="message" placeholder="Feel free to Leave a Message..." required="true"></textarea>

               <!-- Button -->
              <input type="submit" value="Submit" />
            </form>
          </div>
        </div>
      </section>
    </main>

    <!-- Main footer -->
    <footer class="main-footer">
      <div>
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
      </div>
      <small>&copy 2023 Educational Blog</small>
      <small>&copy Metaveous.com</small>
    </footer>
  </div>

  <!-- Click events to menu and close buttons using javaascript-->
  <script>
    document
      .querySelector(".menuButton")
      .addEventListener("click", function () {
        document.querySelector(".sidebar").style.width = "100%";
        document.querySelector(".sidebar").style.zIndex = "5";
      });

    document
      .querySelector(".closeButton")
      .addEventListener("click", function () {
        document.querySelector(".sidebar").style.width = "0";
      });
  </script>

<script>
    // Define a list of valid titles
const validTitles = ['Mr.', 'Ms.', 'Mrs.', 'Dr.'];

// Get the entered name from the input field
const enteredName = document.getElementById('name').value;

// Split the name into two parts - first name and last name
const nameParts = enteredName.split(' ');
const firstName = nameParts[0];
const lastName = nameParts[nameParts.length - 1];

// Check if the last part of the name is a valid title
if (validTitles.includes(lastName)) {
  // Name is valid, proceed with form submission
} else {
  // Show an error message to the user
  alert('Please enter a valid title after your name.');
}

</script>
</body>

</html>