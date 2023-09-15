<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.jpg" type="">
  <title> bThinqMedi </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .footer_section {
    background: #15558d !important;
    }
@media (min-width: 992px) {
    .col-lg-3 {
    flex: 0 0 26%;
    max-width: 30% !important;
}
}
.client_section .carousel-control-prev, .client_section .carousel-control-next {
    background-color: #3c5368 !important;
}
.footer_section form button {
    background-color: #3c5368 !important;
}
.hover-button:hover {
  background-color: #1bbd96 !important;
  color: #fefefe !important;
}
.about_section .detail-box a {
    background-color: #3c5368;
}
.doctor_section {
    background: #40607d !important;
}
.department_section .box .img-box {
    background-color: #3c5368 !important;
}
.department_section .box .img-box:hover {
    background-color: #62d2a2 !important;
}
.contact_section .map_container {
    height: 100% !important;
}
.slider_section .detail-box .btn-box .btn1 {
    background-color: #3c5368 !important;
    color: #fefefe !important;
}
.nav-link:hover {
    color: #3c5368 !important;
}
.active{
    color: #3c5368 !important;
}
  </style>
</head>

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
    </div>
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img width="200" height="60" src="https://bthinq.in/wp-content/uploads/2020/10/bthinqlogo-300x79.png" class="attachment-medium size-medium" alt="Logo of bThinq" decoding="async" srcset="https://bthinq.in/wp-content/uploads/2020/10/bthinqlogo-300x79.png 300w, https://bthinq.in/wp-content/uploads/2020/10/bthinqlogo-1024x270.png 1024w, https://bthinq.in/wp-content/uploads/2020/10/bthinqlogo-768x202.png 768w, https://bthinq.in/wp-content/uploads/2020/10/bthinqlogo-1536x404.png 1536w, https://bthinq.in/wp-content/uploads/2020/10/bthinqlogo-2048x539.png 2048w" sizes="(max-width: 300px) 100vw, 300px">
            <span>
              Medi
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#speciality">Speciality</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#doctors">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#map">Contact Us</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      We Are Your Perfect Health Partner
                    </h1>
                    <p>
                      Consult top doctors online for any health concern
                    </p>
                    <div class="btn-box">
                      <a href="#bookingform" class="btn1">
                        Consult Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Online Doctor Consultation
                    </h1>
                    <p>
                      Private online consultations with verified doctors in all specialists
                    </p>
                    <div class="btn-box">
                      <a href="#bookingform" class="btn1">
                        Book Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Book an appointment for an in-clinic consultation
                    </h1>
                    <p>
                      Find experienced doctors across all specialties
                    </p>
                    <div class="btn-box">
                      <a href="#bookingform" class="btn1">
                        Find Doctor
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
  </div>

  <section id="speciality" class="department_section layout_padding">
    <div class="department_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Our Specialities
          </h2>
          <p>
          The Best Online Doctors For Your Telehealth Needs!
          </p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Cardiology
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/urology.svg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Urology
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/dentist.svg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Dentist
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/orthopedic.svg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Orthopedic
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/endocrinologist.webp" alt="">
              </div>
              <div class="detail-box">
                <h5>
                Endocrinologist
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/neurologist.svg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                Neurologist
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/dermatologist.webp" alt="">
              </div>
              <div class="detail-box">
                <h5>
                Dermatologist
                </h5>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/familymedicine.webp" alt="">
              </div>
              <div class="detail-box">
                <h5>
                Family Medicine
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-box">
          <a href="#bookingform" class="hover-button" style="background-color: #3c5368;">
            View All Specialities
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="doctors" class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Doctors
        </h2>
        <p class="col-md-10 mx-auto px-0">
        Top-notch Online Doctors Catering to Your Telehealth Requirements Seamlessly, Swiftly, and Backed by a 100% Money-Back Guarantee.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/doctor1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Charles R. Drew
              </h5>
              <h6 class="">
              MD: Father of the blood bank.
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/doctor2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
              Helen B. Taussig
              </h5>
              <h6 class="">
              MD: A pioneer in pediatric cardiology
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/doctor3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
              Michael DeBakey
              </h5>
              <h6 class="">
              Vascular surgeon and cardiac surgeon.
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="#bookingform" class="hover-button" style="background-color: #3c5368;">
          View All Doctors
        </a>
      </div>
    </div>
  </section>

  <section id="bookingform" class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Make Appointment
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form_container contact-form">
            <form action="">
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="text" id="nameInput" placeholder="Your Name" required/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="number" id="numberInput" placeholder="Phone Number" required/>
                  </div>
                </div>
              </div>
              <div>
                <input type="email" id="emailInputs" placeholder="Email" required/>
              </div>
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="date" id=appointmentDate" placeholder="Appointment Date" required/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="time" id="appointmentTime" placeholder="Appointment Time" required/>
                  </div>
                </div>
              </div>
              <div>
                <input type="text" class="message-box" id="purposeInput" placeholder="Purpose" required/>
              </div>
              <div class="btn_box">
                <button class="hover-button" id="bookButton" type="submit" style="background-color: #3c5368;">
                  Book Appointment
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
  </section>

    <section id="about" class="about_section layout_margin-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p style="text-align:justify;">
            Complete Health Portal, Since 2018. Ever since its inception in 2018, BthinqMedi has remained unwaveringly committed to a singular overarching objective: streamlining the process of accessing healthcare services. Our driving force is the desire to bridge the gap between patients and the medical assistance they need. Through collaborative efforts with esteemed healthcare professionals and doctors on a global scale, we've cultivated an ecosystem that benefits all parties involved. The depth of our impact is evident, as showcased by the contentment of countless patients who have discovered comfort within our platform. Operating across the USA, the UK, India, and Singapore, we've woven a tapestry of care that knows no geographical boundaries.
            </p>
            <a class="hover-button" href="#bookingform">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="map" class="contact_section layout_padding">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
          <div class="map_container">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.322164014399!2d80.22056427463257!3d13.015144713922977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52664554044d41%3A0xed1dd65a4b30376c!2sBthinq%20Information%20Systems%20Private%20Limited!5e0!3m2!1sen!2sin!4v1694677932142!5m2!1sen!2sin" width="600" height="450" style="border:0;width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
    </div>
    </div>
  </section>

  <section id="testimonial" class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2>
            What our users have to say
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/muthukumar.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Muthukumar
                      </h6>
                    </div>
                    <p>
                    Very helpful. Far easier than doing same things on computer. Allows quick and easy search with speedy booking. Even maintains history of doctors visited.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/muthukumar.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Saravanan
                      </h6>
                    </div>
                    <p>
                    Very easy to book,maintain history. Hassle free from older versions of booking appointment via telephone.. Thanks Practo for making it simple.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/muthukumar.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Jothiraj
                      </h6>
                    </div>
                    <p>
                    Very good platform. Well thought out about booking/rescheduling/canceling an appointment. Also, Doctor's feedback mechanism is good and describes all the basics in a good way
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Chennai
                </span>
              </a>
              <a href="">
                <a href="tel:+916374893198"><i class="fa fa-phone" aria-hidden="true"></i> +91 6374893198</a>
              </a>
              <a href="">
                <a href="mailto:muthukumar.jothiraj@outlook.com"><i class="fa fa-envelope" aria-hidden="true"></i> muthukumar.jothiraj@outlook.com</a>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p style="text-align:justify;">
            bThinq is the brainchild of a team of creators, who have revolutionized the IT field since 1986. Rechristened from Kredo Systems, we believe in bridging the gap between businesses and consumers by utilizing the perfect combination of strategy, innovation and technological development. 
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a href="index.php">
                Home
              </a>
              <a class="" href="#about">
                About
              </a>
              <a class="" href="#speciality">
              Speciality
              </a>
              <a class="" href="#doctors">
                Doctors
              </a>
              <a class="" href="#map">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Health Related Query
          </h4>
          <form action="#">
            <input type="email" id="emailInput" placeholder="Enter email" required/>
            <button class="hover-button" id="submitButton" type="submit">
              Submit
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <?php echo date("Y"); ?> All Rights Reserved By
          <a href="https://bthinq.in/">bThinq<br><br></a>
        </p>
      </div>  
    </div>
  </footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const emailInput = document.getElementById('emailInput');
  const submitButton = document.getElementById('submitButton');

  submitButton.addEventListener('click', function() {
    const email = emailInput.value;
    if (email.trim() !== '') {
      alert('Thanks for your time. We will get back to you through this email id: ' + email);
    } else {
      alert('Email is empty.');
    }
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const nameInput = document.getElementById('nameInput');
  const numberInput = document.getElementById('numberInput');
  const emailInputs = document.getElementById('emailInputs');
  const appointmentDate = document.getElementById('appointmentDate');
  const appointmentTime = document.getElementById('appointmentTime');
  const bookButton = document.getElementById('bookButton');

  bookButton.addEventListener('click', function() {
    const name = nameInput.value;
    const number = numberInput.value;
    const emails = emailInputs.value;
    const appdate = appointmentDate.value;
    const apptime = appointmentTime.value;
    if (name.trim() !== '' && number.trim() !== '' && emails.trim() !== '' && appdate.trim() !== '' && apptime.trim() !== '') {
      alert('Appointment booking successfully completed, please check your email id: ' + emails);
    } 
  });
});
</script>
 
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>

</body>

</html>