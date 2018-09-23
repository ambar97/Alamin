<footer id="footer" >
    <div class="container">
        <div class="row">
            <div class="footer-ribbon" >
                <span>Get in Touch</span>
            </div>
            <div class="col-lg-3">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger d-none" id="newsletterError"></div>

                    <form id="newsletterForm" action="https://preview.oklerthemes.com/porto/6.2.1/php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-append">
                                <button class="btn btn-light" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Tentang Kami</h4>
                <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                    <p>Kami adalah salah satu sekolah dasar islam Al-Baitul Amien 2 yang berada dalam satu naungan yayasan swasta Baitul Amien, Jember. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-details">
                    <h4>Kontak Kami</h4>
                    <ul class="contact">
                        <li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Jalan Imam Bonjol No.45A,Kaliwates, Kabupaten Jember, Jawa Timur 68133</p></li>
                        <li><p><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                        <li><p><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <h4>Follow Us</h4>
                <ul class="social-icons" >
                    <li class="social-icons-facebook" ><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i style="padding-top: 8px" class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i style="padding-top: 8px" class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i style="padding-top: 8px" class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="border-top: 4px solid #10ac84;">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-1">
                    <a href="index.html" class="logo">
                        <img alt="Porto Website Template" class="img-fluid" src="<?php echo base_url() ?>master/client/img/logo-footer.png">
                    </a>
                </div> -->
                <div class="col-lg-8">
                    <p>© Copyright 2018. All Rights Reserved    <a href="">,</a>   Developed by <a href="http://jemberkita.online"><em>Jemberkita</em></a></p>
                    <p></p>
                </div>
                <div class="col-lg-4">
                    <nav id="sub-menu">
                        <ul>
                            <li><a href="page-faq.html">FAQ's</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            <li><a href="<?php echo base_url('ContactUs') ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>