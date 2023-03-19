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

    <div class="product_details">
      <div class="container details">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <!-- start carousel -->
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="img/Products/product_1.png"
                    class="d-block w-100"
                    alt="product_img"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/Products/product_2.png"
                    class="d-block w-100"
                    alt="product_img"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/Products/product_3.png"
                    class="d-block w-100"
                    alt="product_img"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <!-- end slider -->
          </div>

          <div class="col-lg-4 col-sm-12">
            <h5>Sola Chair 85x85x86 cm - Blue & Beige - SO-LA.24</h5>
            <h5 class="fw-bold">3,999</h5>
            <h6 class="text-muted text-decoration-line-through">5000</h6>
            <button type="button" class="btn btn-primary">add to cart</button>
            <h4>Product Info</h4>
            <ul>
              <li>
                Sold By:
                <a href="#">Seller</a>
              </li>
              <li>
                Delivery Within:
                <span>5-10 working days</span>
              </li>
              <li>
                Product Available:
                <span>On Demand</span>
              </li>
              <li>
                Dimensions:
                <span>85x85x86x65 cm</span>
              </li>
              <li>
                Material:
                <span>Red Beech Wood</span>
              </li>
              <li>
                Made In:
                <span>EG</span>
              </li>
            </ul>
          </div>

          <h3>Related Products</h3>

          <div class="col-md-3">
            <div class="card">
              <a href="product_details.html">
                <img
                  src="img/Products/product_1.png"
                  class="card-img-top"
                  alt="product_img"
                />
              </a>
              <div class="card-body">
                <a href="product_details.html" class="text-dark">
                  <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                </a>
                <p>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </p>
                <p class="card-text">price: 230 egp</p>
                <p class="text-decoration-line-through text-muted">300 egp</p>
                <button type="button" class="btn btn-primary">
                  add to cart
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <a href="product_details.html">
                <img
                  src="img/Products/product_2.png"
                  class="card-img-top"
                  alt="product_img"
                />
              </a>
              <div class="card-body">
                <a href="product_details.html" class="text-dark">
                  <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                </a>
                <p>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </p>
                <p class="card-text">price: 230 egp</p>
                <p class="text-decoration-line-through text-muted">300 egp</p>
                <button type="button" class="btn btn-primary">
                  add to cart
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <a href="product_details.html">
                <img
                  src="img/Products/product_3.png"
                  class="card-img-top"
                  alt="product_img"
                />
              </a>
              <div class="card-body">
                <a href="product_details.html" class="text-dark">
                  <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                </a>
                <p>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </p>
                <p class="card-text">price: 230 egp</p>
                <p class="text-decoration-line-through text-muted">300 egp</p>
                <button type="button" class="btn btn-primary">
                  add to cart
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <a href="product_details.html">
                <img
                  src="img/Products/product_4.png"
                  class="card-img-top"
                  alt="product_img"
                />
              </a>
              <div class="card-body">
                <a href="product_details.html" class="text-dark">
                  <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                </a>
                <p>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </p>
                <p class="card-text">price: 230 egp</p>
                <p class="text-decoration-line-through text-muted">300 egp</p>
                <button type="button" class="btn btn-primary">
                  add to cart
                </button>
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
