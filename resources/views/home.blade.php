<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Kindergarten Website</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- lightgallery css cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
  <!-- custom css file link  -->
  <link rel="stylesheet" href="{{ asset('landing-page/css/style.css') }}">
</head>

<body>

  <!-- header section starts -->

  <header class="header">

    <a href="#" class="logo"> <i class="fas fa-school"></i> Elkiddy</a>

    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#education">education</a>
      <a href="#teacher">teacher</a>
      <a href="#gallery">gallery</a>
      <a href="#contact">contact</a>
    </nav>

    <div class="icons">
      <div class="fas fa-user" id="login-btn"></div>
      <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <form action="" class="login-form">
      <h3>login now</h3>
      <input type="email" placeholder="your email" class="box">
      <input type="password" placeholder="your password" class="box">
      <p>forget your password <a href="#">click here</a> </p>
      <input type="submit" value="login now" class="btn">
    </form>

  </header>

  <!-- header section ends -->

  <!-- home section starts -->

  <section class="home" id="home">

    <div class="content">
      <h3>welcome to our <span>Kindergarten</span></h3>
      <p>Explore the Excitement of Learning at Our Kindergarten! Providing a joyful and secure learning environment for the development of your children.</p>
      <a href="#" class="btn">learn more</a>
    </div>

    <div class="image">
      <img src="{{ asset('landing-page/images/home.png') }}" alt="">
    </div>

    <div class="custom-shape-divider-bottom-1684324473">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
    </div>

  </section>

  <!-- home section ends -->

  <!-- about us section starts -->

  <section class="about" id="about">

    <h1 class="heading"> <span>about</span> us</h1>

    <div class="row">

      <div class="image">
        <img src="{{ asset('landing-page/images/about us.png') }}" alt="">
      </div>

      <div class="content">
        <h3>Exploring, Growing, And Thriving Together</h3>
        <p>Uncover the Path to Personal Development and Insightful Discoveries
          At Elkiddy, we believe in the invigorating force of education and self-discovery.
        <p>Our commitment is to cultivate an interactive space where individuals can explore, learn, and thrive together.
          Set apart by our unwavering dedication to excellence, we offer more than just conventional education. Our focus extends beyond academics to foster curiosity, resilience, and a passion for continuous learning in each individual.</p>
        <p>Join us in establishing a community where the heart of the educational experience is defined by exploration, growth, and flourishing. Together, we celebrate the joy of uncovering new possibilities and the pursuit of personal excellence.</p>
        </p>
        <a href="#" class="btn">read more</a>
      </div>

    </div>

  </section>

  <!-- about us section ends -->

  <!-- education section start -->

  <section class="education" id="education">

    <h1 class="heading">our <span> education</span></h1>

    <div class="box-container">

      <div class="box">
        <h3>music lessons</h3>
        <p>Harmonize Your Child's Learning Journey with Melodies at Elkiddy Where Education and Music Unite in Joyful Harmony!</p>
        <img src="{{ asset('landing-page/images/education1.png') }}" alt="">
      </div>

      <div class="box">
        <h3>sports lessons</h3>
        <p>Ignite the Spirit of Play and Fitness in Your Child's Journey at Elkiddy Where Every Sports Lesson is a Gateway to Fun, Growth, and Healthy Living!</p>
        <img src="{{ asset('landing-page/images/education2.png') }}" alt="">
      </div>

      <div class="box">
        <h3>drawing lessons</h3>
        <p>Unleash Your Child's Creative Flourish with Drawing Lessons at Elkiddy Where Every Stroke Unveils a World of Imagination and Artistic Discovery!</p>
        <img src="{{ asset('landing-page/images/education3.png') }}" alt="">
      </div>

    </div>

  </section>

  <!-- education section ends -->

  <!-- teacher section starts -->

  <section class="teacher" id="teacher">

    <h1 class="heading">our <span> teacher</span></h1>

    <div class="box-container">

      <div class="box">
        <img src="{{ asset('landing-page/images/teacher1.png') }}" alt="">
        <h3>Madeleine</h3>
        <p>instructor</p>
        <div class="share">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/teacher2.png') }}" alt="">
        <h3>Michelle</h3>
        <p>instructor</p>
        <div class="share">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/teacher3.png') }}" alt="">
        <h3>Rose</h3>
        <p>instructor</p>
        <div class="share">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>

    </div>

  </section>

  <!-- teacher section ends -->

  <!-- activities section starts -->

  <section class="activities">

    <h1 class="heading">our <span>activities</span></h1>

    <div class="box-container">

      <div class="box">
        <img src="{{ asset('landing-page/images/activities1.png') }}" alt="">
        <h3>Academic Exploration</h3>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/activities2.png') }}" alt="">
        <h3>Social and Emotional Learning</h3>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/activities3.png') }}" alt="">
        <h3>Language and Literacy</h3>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/activities4.png') }}" alt="">
        <h3>Sports and Health</h3>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/activities5.png') }}" alt="">
        <h3>Nature and Science Exploration</h3>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/activities6.png') }}" alt="">
        <h3>Technology Integration</h3>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/activities7.png') }}" alt="">
        <h3>Creative Arts</h3>
      </div>

      <div class="box">
        <img src="{{ asset('landing-page/images/activities8.png') }}" alt="">
        <h3>Music and Movement</h3>
      </div>

    </div>

  </section>

  <!-- activities section ends -->

  <!-- gallery section starts -->

  <section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="gallery-container">

      <a href="{{ asset('landing-page/images/gallery-1.jpg') }}" class="box">
        <img src="{{ asset('landing-page/images/gallery-1.jpg') }}" alt="">
        <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

      <a href="{{ asset('landing-page/images/gallery-2.jpg') }}" class="box">
        <img src="{{ asset('landing-page/images/gallery-2.jpg') }}" alt="">
        <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

      <a href="{{ asset('landing-page/images/gallery-3.jpg') }}" class="box">
        <img src="{{ asset('landing-page/images/gallery-3.jpg') }}" alt="">
        <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

      <a href="{{ asset('landing-page/images/gallery-4.jpg') }}" class="box">
        <img src="{{ asset('landing-page/images/gallery-4.jpg') }}" alt="">
        <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

      <a href="{{ asset('landing-page/images/gallery-5.jpg') }}" class="box">
        <img src="{{ asset('landing-page/images/gallery-5.jpg') }}" alt="">
        <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

      <a href="{{ asset('landing-page/images/gallery-6.jpg') }}" class="box">
        <img src="{{ asset('landing-page/images/gallery-6.jpg') }}" alt="">
        <div class="icon"> <i class="fas fa-plus"></i></div>
      </a>

    </div>

  </section>

  <!-- gallery section ends -->

  <!-- contact section starts -->

  <section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us</h1>

    <div class="icons-container">

      <div class="icons">
        <i class="fas fa-clock"></i>
        <h3>opening hours :</h3>
        <p>mon - thurs: 08:00 am to 12:30 pm</p>
        <p>friday: 09:00 am to 12:00 pm</p>
      </div>

      <div class="icons">
        <i class="fas fa-envelope"></i>
        <h3>email</h3>
        <p>elkiddy@gmail.com</p>
      </div>

      <div class="icons">
        <i class="fas fa-phone"></i>
        <h3>phone number</h3>
        <p>+62-896-3244-2345</p>
      </div>

    </div>

    <div class="row">

      <div class="image">
        <img src="{{ asset('landing-page/images/contact.gif') }}" alt="">
      </div>

      <form action="">
        <h3>get in touch</h3>
        <div class="inputBox">
          <input type="text" placeholder="your name">
          <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
          <input type="number" placeholder="your number">
          <input type="text" placeholder="your subject">
        </div>
        <textarea placeholder="your message" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
      </form>

    </div>

  </section>

  <!-- contact section ends -->

  <!-- footer section starts -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3> <i class="fas fa-school"></i> Kindergarten </h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, unde</p>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-caret-right"></i> enroll now</a>
        <a href="#"> <i class="fas fa-caret-right"></i> parent portal</a>
        <a href="#"> <i class="fas fa-caret-right"></i> school calendar</a>
        <a href="#"> <i class="fas fa-caret-right"></i> lunch menu</a>
        <a href="#"> <i class="fas fa-caret-right"></i> school supply list</a>
      </div>

      <div class="box">
        <h3>category</h3>
        <a href="#"> <i class="fas fa-caret-right"></i> about us</a>
        <a href="#"> <i class="fas fa-caret-right"></i> academics</a>
        <a href="#"> <i class="fas fa-caret-right"></i> admissions</a>
        <a href="#"> <i class="fas fa-caret-right"></i> news & events</a>
        <a href="#"> <i class="fas fa-caret-right"></i> contact us</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-caret-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-caret-right"></i> terms of use</a>
        <a href="#"> <i class="fas fa-caret-right"></i> site map</a>
        <a href="#"> <i class="fas fa-caret-right"></i> FAQs</a>
        <a href="#"> <i class="fas fa-caret-right"></i> accessibility statement</a>
      </div>

    </div>

    <div class="credit"> &copy; copyright @ 2024 by <span>Elkiddy</span></div>

  </section>















  <!-- footer section ends -->

























  <!-- lightgallery cdn js link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
  <!-- custom js file link -->
  <script src="{{ asset('landing-page/js/script.js') }}"></script>

  <script>
    lightGallery(document.querySelector('.gallery .gallery-container'));
  </script>

</body>

</html>