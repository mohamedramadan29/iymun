

<!-- ==================== CALL TO ACTION ==================== -->
<section class="section section-light call_to_action">
    <div class="container">
        <div class="text-center" data-aos="zoom-in">
            <div class="rounded-5 content" style="background: var(--gradient-dark); box-shadow: var(--shadow-xl);">
                <h2 class="display-3 fw-bold text-white mb-4">
                    Ready to Shape the Future 🚀
                </h2>
                <p class="lead text-white mb-5 mx-auto" style="max-width: 700px; opacity: 0.95;">
                    Join hundreds of young diplomats from around the world in this prestigious conference. Limited spots
                    available.


                </p>

                <div class="d-flex gap-3 justify-content-center flex-wrap mb-4">
                    <a href="registration.html" class="btn-primary-custom">
                        Register Now
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="contact.html" class="btn-secondary-custom">
                        Contact Us
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>

                <div class="d-flex justify-content-center gap-4 flex-wrap text-white" style="font-size: 0.95rem;">
                    <div><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>Early Bird Discounts</div>
                    <div><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>Flexible Payments</div>
                    <div><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>Scholarships Available</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FOOTER ==================== -->
<footer class="footer">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <h3 class="footer-title">
                    <i class="fas fa-globe-americas me-2"></i>
                    IYMUN 2026
                </h3>
                <p style="opacity: 0.9; line-height: 1.8;">
                    International Youth Diplomacy Conference bringing together future leaders from around the world.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="committees.html">Committees</a></li>
                    <li><a href="why-us.html">Why Join</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-4">
                <h5 class="footer-title">Resources</h5>
                <ul class="footer-links">
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="venue.html">Venue</a></li>
                    <li><a href="partners.html">Partners</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4">
                <h5 class="footer-title">Contact Us</h5>
                <ul class="footer-links">
                    <li><i class="fas fa-envelope me-2"></i><a href="mailto:info@iyadmun.org">info@iyadmun.org</a></li>
                    <li><i class="fab fa-whatsapp me-2"></i><a href="https://wa.me/19175130904">+1 (917) 513-0904</a>
                    </li>
                    <li><i class="fab fa-whatsapp me-2"></i><a href="https://wa.me/333444666862">+33 (344) 466-6862</a>
                    </li>
                    <li><i class="fas fa-map-marker-alt me-2"></i>New York City, USA</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="mb-0">&copy; 2026 IYMUN & American Diplomats MUN. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- ==================== SCRIPTS ==================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Hero Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, 5000);

        // Counter Animation
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target + '+';
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 16);
        }

        // Intersection Observer for Counters
        const counters = document.querySelectorAll('.counter');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
</script>

@yield('js')

@toastifyJs
</body>

</html>
