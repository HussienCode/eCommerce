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

    <div class="filter">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12">
            <select class="form-select">
              <option selected>Select Color</option>
              <option value="1">black</option>
              <option value="2">white</option>
              <option value="3">blue</option>
            </select>
          </div>

          <div class="col-lg-3 col-sm-12">
            <select class="form-select">
              <option selected>Sort By</option>
              <option value="1">Lowest Price</option>
              <option value="2">Highest Price</option>
            </select>
          </div>

          <div class="col-lg-5 col-sm-12">
            <label for="priceRange" class="form-label"
              >Price less than 500</label
            >
            <input
              type="range"
              class="form-range"
              min="100"
              max="10000"
              step="50"
              id="priceRange"
            />
          </div>
          <div class="col-lg-1">
            <button type="button" class="btn btn-secondary p-3 me-auto">
              Clear
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- start sale -->
    <div class="sale">
      <div class="container">
        <div class="row">
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
                  <i class="bi bi-star-fill text-warning"></i>
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
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
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
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
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
                  <i class="bi bi-star-fill text-warning"></i>
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
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
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
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
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
    <!-- end sale -->

    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mb-5">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"
                  >Previous</a
                >
              </li>
              <li class="page-item active">
                <a class="page-link bg-dark border-dark" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">6</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">7</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">8</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">9</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">Next</a>
              </li>
            </ul>
          </nav>
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
