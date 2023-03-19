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

    <!--================shipping Area =================-->
    <section class="shipping_area">
      <img src="img/checkout.png" alt="" />
      <div class="container">
        <div class="cupon_area">
          <div class="cupon_title">
            <h6>Have a coupon?</h6>
          </div>
          <input type="text" placeholder="Enter coupon code" />
          <a class="tp_btn" href="#">Apply Coupon</a>
        </div>

        <div class="shipping_details">
          <div class="row">
            <div class="col-lg-12">
              <h3>Shipping Details</h3>
              <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-8">
                  <label for="validationCustom01" class="form-label"
                    >First name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="validationCustom01"
                    value="Mohamed Tarek"
                    required
                  />
                  <div class="valid-feedback">Looks good!</div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label"
                    >Email</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="validationCustom02"
                    placeholder="E-mail"
                    name="clientEmail"
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter a valid email.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label"
                    >Phone number</label
                  >
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

                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label"
                    >State</label
                  >
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose State</option>
                    <option>State 1</option>
                    <option>State 2</option>
                    <option>State 3</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label"
                    >City</label
                  >
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose City</option>
                    <option>City 1</option>
                    <option>City 2</option>
                    <option>City 3</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid city.
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="validationCustom02" class="form-label"
                    >Address in details</label
                  >
                  <textarea
                    class="form-control"
                    placeholder="Address in details"
                    id="validationCustom04"
                    name="clientMessage"
                    rows="3"
                    required
                  ></textarea>
                  <div class="invalid-feedback">
                    Please leave a address in details.
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="validationCustom02" class="form-label"
                    >Notes</label
                  >
                  <textarea
                    class="form-control"
                    placeholder="Notes"
                    id="validationCustom04"
                    name="clientMessage"
                    rows="3"
                  ></textarea>
                </div>
                <div class="col">
                  <button class="btn btn-primary" type="submit">
                    <a href="checkout.html">continue to pay</a>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End shipping Area =================-->

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
