<!--::footer_part start::-->
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
                                <a href="#" class="single_social_icon"><i
                                        class="bi bi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="single_social_icon"><i
                                        class="bi bi-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="single_social_icon"><i
                                        class="bi bi-globe"></i></a>
                            </li>
                            <li>
                                <a href="#" class="single_social_icon"><i
                                        class="bi bi-behance"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Nov 30, 2023 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML =
            days + " يوم " + hours + " س " + minutes + " د " + seconds + " ث ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<!-- JAVASCIRPT LIBRARY  -->
<script src="web/js/bootstrap.bundle.min.js"></script>
<script src="web/js/mainJs.js"></script>
