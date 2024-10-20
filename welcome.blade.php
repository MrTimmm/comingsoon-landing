@include('main')

<div class="hero text-center"
    style="background-image: url('{{ asset('images/Mountain-4.jpeg') }}');" >
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: transparent; box-shadow: none; position: absolute; top: 0; width: 100%;">
        <div class="container-fluid">
            <div class="ms-3">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
                </a>
            </div>
            <div class="ms-auto me-3">
                <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
            </div>
            <!-- Contact Modal -->
            <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contactModalLabel">Contact Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body  p-5">
                            <h5 class="modal-title mb-3">Get in Touch</h5>
                            <div class="mb-3 d-flex ">
                                <i class="fas fa-envelope me-2" style="font-size: 20px; color: #Black; " ></i>
                                <span>Email: <a href="mailto:example@example.com" class="text-decoration-none">example@example.com</a></span>
                            </div>
                            <div class="mb-3 d-flex ">
                                <i class="fas fa-phone-alt me-2" style="font-size: 20px; color: #Black;"></i>
                                <span>Phone: <a href="tel:+1234567890" class="text-decoration-none">+123 456 7890</a></span>
                            </div>
                            <div class="mb-3 d-flex ">
                                <i class="fas fa-map-marker-alt me-2" style="font-size: 20px; color: #Black;"></i>
                                <span>Location: Lakeside-11, Pokhara</span>
                            </div>
                            <p>We look forward to hearing from you!</p>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </nav>

    <div class="container hero-content">
        <h1 class="animate__animated animate__pulse animate__infinite ">COMING SOON</h1>
        <p>We are currently working on creating something fantastic. <br> We will be here soon.</p>
        <button class="hero-btn">NOTIFY ME</button>
    </div>
    <div class="rights">
   <p>© All rights reserved. | Crafted by: <a href="https://saitsolution.com.np/" > SAIT Solution</a></p>
</div>

    <div class="social-links">
        <a href="#" target="_blank" class="me-3">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" target="_blank" class="me-3">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#" target="_blank" class="me-3">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="#" target="_blank">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>
</div>
