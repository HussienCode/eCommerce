<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit" />

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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Furniture
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Storage
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Office
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Decor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kitchen
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Appliances
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sports
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
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

    <!--================checkout Area =================-->
    <section class="checkout_area">
        <img src="img/checkout.png" alt="" />
        <div class="container">
            <h3>order details</h3>

            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <table class="table table-sm align-middle table-bordered" id="cartTable">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="text-end">Item</th>
                                <th scope="col" class="text-center">Qty</th>
                                <th scope="col">VAT %</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="text-end">Toni door semi-automatic - 70cm</td>
                                <td>2</td>
                                <td class="text-center">0 %</td>
                                <td>2,940 EGP</td>
                                <td>5880 EGP</td>
                            </tr>

                            <tr>
                                <td class="text-end">Toni door semi-automatic - 70cm</td>
                                <td>1</td>
                                <td class="text-center">1 %</td>
                                <td>2,940 EGP</td>
                                <td>2,940 EGP</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>the bill</h3>
                <div class="col-lg-6 col-sm-12 text-center">
                    <table class="table table-sm align-middle table-bordered" id="cartTable">
                        <thead>
                            <tr>
                                <td>Items Qty</td>
                                <td class="text-center">2</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>8820 EGP</td>
                            </tr>

                            <tr>
                                <td>VAT Total</td>
                                <td>80 EGP</td>
                            </tr>

                            <tr>
                                <td>Shipping</td>
                                <td>60 EGP</td>
                            </tr>

                            <tr>
                                <td>Coupon</td>
                                <td>- 900 EGP</td>
                            </tr>

                            <tr class="table-warning fs-5">
                                <td class="fw-bold">Total</td>
                                <td class="fw-bold">8060 EGP</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- <div class="row">
          <div class="col-6 mb-3">
            <h5>Item Name</h5>
          </div>
          <div class="col-2 text-center">
            <h5>Qty</h5>
          </div>
          <div class="col-2 text-center">
            <h5>VAT %</h5>
          </div>
          <div class="col-2 text-center">
            <h5>Price</h5>
          </div>

          <hr />

          <div class="col-6 mb-3">
            <a href="product_details.html">
              Sola Chair 85x85x86 cm
            </a>
          </div>
          <div class="col-2 text-center">
            <span> x 01 </span>
          </div>
          <div class="col-2 text-center">
            <span> 0 % </span>
          </div>
          <div class="col-2 text-center">
            <span> 3,999 EGP </span>
          </div>

          <hr />
          <div class="col-6 mb-2">
            <a href="product_details.html">
              Sola Chair 85x85x86 cm
            </a>
          </div>
          <div class="col-2 text-center">
            <span> x 01 </span>
          </div>
          <div class="col-2 text-center">
            <span> 1 % </span>
          </div>
          <div class="col-2 text-center">
            <span> 4,199 EGP </span>
          </div>

          <hr />
          <div class="col-6 mb-2">
            <span class="fw-bold">Subtotal</span>
          </div>
          <div class="col-2 text-center">
            <span>-</span>
          </div>
          <div class="col-2 text-center">
            <span class="fw-bold"> 200 EGP </span>
          </div>
          <div class="col-2 text-center">
            <span class="fw-bold">11,997 EGP</span>
          </div>

          <hr />
          <div class="col-6 mb-2">
            <span>Shipping</span>
          </div>
          <div class="col-2 text-center">
            <span>-</span>
          </div>
          <div class="col-2 text-center">
            <span>-</span>
          </div>
          <div class="col-2 text-center">
            <span>150 EGP</span>
          </div>

          <hr />
          <div class="col-6 mb-2">
            <h5>Total</h5>
          </div>
          <div class="col-2 text-center">
            <span>-</span>
          </div>
          <div class="col-2 text-center">
            <span>-</span>
          </div>
          <div class="col-2 text-center">
            <h5 style="font-weight: bold; color: #ff3368">12,007 EGP</h5>
          </div>
        </div> -->

            <!-- payment method -->
            <h3>Payment details</h3>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-lg-4 col-sm-12">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked"
                        required />
                    <label class="form-check-label" for="validationFormCheck2">Cash on delivery</label>
                    <div class="invalid-feedback">Choose a payment method to pay!</div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked"
                        required />
                    <label class="form-check-label" for="validationFormCheck2">payPal</label>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked"
                        required />
                    <label class="form-check-label" for="validationFormCheck2">Credit/Debit Card</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Name on Card"
                        required />
                    <div class="invalid-feedback">Please enter name on card .</div>
                </div>

                <div class="col-md-4">
                    <input type="tel" class="form-control" id="validationCustom03" placeholder="Card Number"
                        name="cardNumber" maxlength="12" required onkeypress="validate(event)" />
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                </div>

                <div class="col-md-4">
                    <input type="date" class="form-control" id="validationCustom03" placeholder="Expire Date"
                        name="Expire" required />
                    <div class="invalid-feedback">Please Choose Expire Date.</div>
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="CVV" required />
                    <div class="invalid-feedback">Please enter CVV.</div>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" onclick="openPopup()">
                        Confirm to Pay ( 12,007 EGP )
                    </button>
                </div>
            </form>
            <div class="popup" id="popup">
                <img src="img/done-tick.png" alt="img-done" />
                <h2>Thank you!</h2>
                <p class="text-muted">
                    The order confirmation has been <br />
                    sent to your email address.
                </p>
                <a href="#">
                    <button type="button" onclick="closePopup()">
                        Countinue shopping
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!--================End checkout Area =================-->

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
                                <a href="https://www.behance.net/tarek97" target="_blank">Tarek</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="single_social_icon"><i class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="single_social_icon"><i class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="single_social_icon"><i class="bi bi-globe"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="single_social_icon"><i class="bi bi-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script>
        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add("open-popup");
        }

        function closePopup() {
            popup.classList.remove("open-popup");
        }
    </script>

    <!-- JAVASCIRPT LIBRARY  -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/mainJs.js"></script>
</body>

</html>
