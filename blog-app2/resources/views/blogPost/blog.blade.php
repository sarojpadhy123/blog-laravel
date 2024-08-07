<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog - Educational Blog</title>
  <!-- Css -->
  <link rel="stylesheet" href="{{asset('style.css')}}" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- AOS library -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
      <h2 class="header-title">All Blog Posts</h2>
      <div class="searchbar">
        <form action="">
          <input type="text" placeholder="Search..." name="search" />
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
      <div class="categories">
        <ul>
          <li><a href="">Health Education</a></li>
          <li><a href="">Entertainment Education</a></li>
          <li><a href="">Sports Education</a></li>
          <li><a href="">Nature Education</a></li>
        </ul>
      </div>

      <section class="cards-blog latest-blog">
        <div class="card-blog-content">
          <img src="{{asset('images/pic1.jpg')}}" alt="" />
          <p>
            2 hours ago
            <span>Written By Sameer </span>
          </p>
          <h4>
            <!-- <a href="single-blog.html">Benefits of Getting A Book</a> -->
            <a href="{{ url('/blog/singleblog') }}">Benefits of Getting A Book</a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-left">
          <img src="{{asset('images/pic2.jpg')}}" alt="" />
          <p>
            23 hours ago
            <span>Written By Hritik Roshan</span>
          </p>
          <h4>
            <a href="{{ url('/blog/singleblog') }}">Top 10 Music Stories Never Told</a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-up">
          <img src="{{asset('images/pic3.jpg')}}" alt="" />
          <p>
            2 days ago
            <span>Written By Albert Einstein</span>
          </p>
          <h4>
            <a href="{{ url('/blog/singleblog') }}">A Chapter Needs to Know </a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-left">
          <img src="{{asset('images/pic4.jpg')}}" alt="" />
          <p>
            3 days ago
            <span>Written By Sharukh Khan</span>
          </p>
          <h4>
            <a href="{{ url('/blog/singleblog') }}">Indian Premier League 2022/2023 Fixtures</a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-up">
          <img src="{{asset('images/pic1.jpg')}}" alt="" />
          <p>
            1 week ago
            <span>Written By Virat Kohli</span>
          </p>
          <h4>
            <a href="{{ url('/blog/singleblog') }}">12 Health Benefits Of Pomegranate Fruit</a>
          </h4>
        </div>

        <div class="card-blog-content" data-aos="fade-left">
          <img src="{{asset('images/pic6.jpg')}}" alt="" />
          <p>
            1 month ago
            <span>Written By MS Dhoni</span>
          </p>
          <h4>
            <a href="{{ url('/blog/singleblog') }}"> The Only City In The World</a>
          </h4>
        </div>

        <!-- pagination -->
        <div class="pagination" id="pagination">
          <a href="">&laquo;</a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">5</a>
          <a href="">&raquo;</a>
        </div>
      </section>

      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        <small>&copy 2023 Educational Blog</small>
      </footer>
    </main>
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

  <!-- Cards animations  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 400,
      duration: 3000,
    });
    document
      .querySelectorAll("img")
      .forEach((img) => img.addEventListener("load", () => AOS.refresh()));
  </script>
</body>

</html>