<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit"
    />

    <title>eCommerce</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mainStyle.css" />
    <!-- <link rel="stylesheet" href="css/mainStyle_rtl.css" /> -->
    <link rel="stylesheet" href="css/responsive.css" />
  </head>
  <body>
       <!-- start navbar -->

       <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" href="index.html">eCommerce</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Furniture
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Storage
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Office
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Decor
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Kitchen
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Appliances
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Sports
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
            </ul>
  
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item">
                <a class="nav-link" href="#"> العربية </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signIn.html">
                  <i class="bi bi-person"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.html">
                  <i class="bi bi-bag"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- end navbar -->

    <div class="contactForm">
      <div class="container">
        <h1>contact us</h1>
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <img src="img/slider3.jpg" alt="image" />
          </div>

          <div class="col-lg-6 col-sm-12">
            <form class="row g-3 needs-validation" method="post" novalidate>
              <div class="col-md-12">
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom01"
                  placeholder="What's your name ?"
                  name="clientName"
                  required
                />
                <div class="invalid-feedback">Please enter your name here.</div>
              </div>

              <div class="col-md-12">
                <input
                  type="email"
                  class="form-control"
                  id="validationCustom02"
                  placeholder="E-mail"
                  name="clientEmail"
                  required
                />
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>

              <div class="col-md-12">
                <input
                  type="tel"
                  class="form-control"
                  id="validationCustom03"
                  placeholder="Phone number"
                  name="clientPhoneNumber"
                  maxlength="11"
                  required
                  onkeypress="validate(event)"
                />
                <div class="invalid-feedback">
                  Please enter a valid phone number.
                </div>
              </div>

              <div class="col-md-12">
                <textarea
                  class="form-control"
                  placeholder="Leave a message here"
                  id="validationCustom04"
                  name="clientMessage"
                  rows="10"
                  required
                ></textarea>
                <div class="invalid-feedback">
                  Please leave a message here if you want that.
                </div>
              </div>
              <div class="col-md-12">
                <h6 hidden>your message sent successfully</h6>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Send</button>
              </div>
            </form>
          </div>

          <div class="col-12">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe
                  id="gmap_canvas"
                  src="https://maps.google.com/maps?q=%D8%B4%D8%B1%D9%83%D8%A9%20%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7%20%D8%A7%D9%84%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA%20%D8%A7%D9%84%D9%85%D8%AA%D9%82%D8%AF%D9%85%D9%87%D8%8C%20%D8%A7%D9%84%D8%AF%D9%88%D8%B1%20%D8%A7%D9%84%D8%AB%D8%A7%D9%84%D8%AB%20-%20%D8%B4%D9%82%D9%87%20306%D8%8C%2018%20%D8%AC%D9%85%D8%A7%D9%84%20%D8%A7%D9%84%D8%AF%D9%8A%D9%86%20%D8%A7%D9%84%D8%A3%D9%81%D8%BA%D8%A7%D9%86%D9%8A%D8%8C%20%D8%A7%D9%84%D9%85%D9%86%D8%B5%D9%88%D8%B1%D8%A9%20(%D9%82%D8%B3%D9%85%202)%D8%8C%20%D8%AB%D8%A7%D9%86%20%D8%A7%D9%84%D9%85%D9%86%D8%B5%D9%88%D8%B1%D8%A9%D8%8C%20%D8%A7%D9%84%D8%AF%D9%82%D9%87%D9%84%D9%8A%D8%A9%2035111&t=&z=13&ie=UTF8&iwloc=&output=embed"
                  frameborder="0"
                  scrolling="no"
                  marginheight="0"
                  marginwidth="0"
                >
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer start -->
    <footer class="footer_part">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-sm-6 col-lg-4">
            <h4>Furniture</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
              nam rerum nisi incidunt eveniet laudantium, quisquam est.
              Praesentium iste eius harum excepturi officia corrupti, accusamus
              deleniti hic magnam? Impedit, dignissimos?
            </p>
          </div>
          <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
              <h4>Quick Links</h4>
              <ul class="list-unstyled">
                <li><a href="">Jobs</a></li>
                <li><a href="">Brand Assets</a></li>
                <li><a href="">Investor Relations</a></li>
                <li><a href="">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
              <h4>Features</h4>
              <ul class="list-unstyled">
                <li><a href="">Jobs</a></li>
                <li><a href="">Brand Assets</a></li>
                <li><a href="">Investor Relations</a></li>
                <li><a href="">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
              <h4>Resources</h4>
              <ul class="list-unstyled">
                <li><a href="">Guides</a></li>
                <li><a href="">Research</a></li>
                <li><a href="">Experts</a></li>
                <li><a href="">Agencies</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright_part">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="copyright_text">
                <p>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="bi bi-heart-fill" aria-hidden="true"></i> by
                  <a href="https://www.behance.net/tarek97" target="_blank"
                    >Tarek</a
                  >
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer_icon social_icon">
                <ul class="list-unstyled">
                  <li>
                    <a href="#" class="single_social_icon"
                      ><i class="bi bi-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="single_social_icon"
                      ><i class="bi bi-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="single_social_icon"
                      ><i class="bi bi-globe"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="single_social_icon"
                      ><i class="bi bi-behance"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <!-- JAVASCIRPT LIBRARY  -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/mainJs.js"></script>
  </body>
</html>
