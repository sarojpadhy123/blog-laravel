@extends ('layout')

@section('header')

      <!-- header -->
      <header class="header" style=" background-image: url({{asset('images/photography.jpg')}});">
        <div class="header-text">
          <h1>Educational Blog</h1>
          <h4>Home of verified Educational news...</h4>
        </div>
        <div class="overlay"></div>
      </header>

@endsection


@section('main')
<body>
  <!-- main -->
  <main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">
          <!-- Card content -->
          <div class="card-blog-content">
           
            <img src="{{asset('images/pic1.jpg')}}" alt="" />
            <p>
              2 hours ago
              <span style="float: right">Written By Khursid Khan</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Benefits of Reading...</a
              >
            </h4>
          </div>
          <!-- Card Content End-->
          <!-- Card Content2 -->

          <div class="card-blog-content" data-aos="fade-left">
            <!-- <img src="images/pic2.jpg" alt="" /> -->
            <img src="{{asset('images/pic2.jpg')}}" alt="" />
            <p>
              23 hours ago
              <span style="float: right">Written By Mahaveer Mohanty</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Benefits of Writting...</a
              >
            </h4>
          </div>
          <!-- Card Content2  Ends-->
          <!-- Card content3 -->
          <div class="card-blog-content">
            <!-- <img src="images/pic4.jpg" alt="" /> -->
            <img src="{{asset('images/pic4.jpg')}}" alt="" />
            <p>
              2:25 hours ago
              <span style="float: right">Written By Saroj Padhy</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Why do we use it?</a
              >
            </h4>
          </div>
          <!-- Card Content3 End-->
          <!-- Card Content4 -->

          <div class="card-blog-content" data-aos="fade-left">
            <!-- <img src="images/pic5.jpg" alt="" /> -->
            <img src="{{asset('images/pic5.jpg')}}" alt="" />
            <p>
              23 hours ago
              <span style="float: right">Written By Manish Mohanty</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Where can I get some?</a
              >
            </h4>
          </div>
          <!-- Card Content4  Ends-->
          <!-- Card content5 -->
          <div class="card-blog-content">
            <!-- <img src="images/pic6.jpg" alt="" /> -->
            <img src="{{asset('images/pic6.jpg')}}" alt="" />
            <p>
              3 hours ago
              <span style="float: right">Written By Kamal Khan</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Where does it come from?</a
              >
            </h4>
          </div>
          <!-- Card Content5 End-->
          <!-- Card Content6 -->

          <div class="card-blog-content" data-aos="fade-left">
            <!-- <img src="images/pic2.jpg" alt="" /> -->
            <img src="{{asset('images/pic2.jpg')}}" alt="" />
            <p>
              23 hours ago
              <span style="float: right">Written By Mukesh Ambani</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Where can I get some?</a
              >
            </h4>
          </div>
          <!-- Card Content6  Ends-->
          <!-- Card content7 -->
          <div class="card-blog-content">
            <!-- <img src="images/pic8.jpg" alt="" /> -->
            <img src="{{asset('images/pic8.jpg')}}" alt="" />
            <p>
              2 hours ago
              <span style="float: right">Written By Hritik Roshan</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Build Your interest Fast</a
              >
            </h4>
          </div>
          <!-- Card Content7 End-->
          <!-- Card Content8 -->

          <div class="card-blog-content" data-aos="fade-left">
            <!-- <img src="images/pic9.jpg" alt="" /> -->
            <img src="{{asset('images/pic9.jpg')}}" alt="" />
            <p>
              23 hours ago
              <span style="float: right">Written By Shreyash</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}"
                >Where to Get good Notes ?</a
              >
            </h4>
          </div>
          <!-- Card Content2  Ends-->


          <div class="card-blog-content" data-aos="fade-up">
            <!-- <img src="images/pic3.jpg" alt="" /> -->
            <img src="{{asset('images/pic3.jpg')}}" alt="" />
            <p>
              2 days ago
              <span style="float: right">Written By Saroj Padhy</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="{{ url('/blog/singleblog') }}""
                >Best Way To Empower Your Sub-Consicus Mind...</a
              >
            </h4>
          </div>

          <div class="card-blog-content" data-aos="fade-left">
            <!-- <img src="images/pic4.jpg" alt="" /> -->
            <img src="{{asset('images/pic4.jpg')}}" alt="" />
            <p>
              3days ago
              <span style="float: right">Written By Arijit Singh</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">8 Most Popular Programming Languages</a>
            </h4>
          </div>
        </section>
      </main>

@endsection

  