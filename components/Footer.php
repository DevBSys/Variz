</div>
<?php if ("$REQUEST_URI" !== '/login' && "$REQUEST_URI" !== '/register' && http_response_code() !== $response_code) { ?>
    <footer>
        <div class="card border-0 rounded-0 p-3 mt-5" style="background-color: #09797820;">
            <div class="container d-flex">
                <div class="me-auto">
                    <h6>Copyright &copy; <?php echo date("Y"); ?> Variz.net Services</h6>
                    <h6>Made with <i class="fa fa-heart text-danger"></i> By !VARIZ#7721</h6>
                </div>

                <span class="ms-auto">
                    <a class="text-dark text-uppercase text-decoration-none fw-semibold" href="#" target="_blank">Privacy Policy</a> | <a class="text-dark text-uppercase text-decoration-none fw-semibold" href="#" target="_blank">Terms of Service</a>
                    <h6 class="text-center"><i class="fad fa-icons"></i> Icon By flaticon.com & fontawesome.com</h6>
                </span>
            </div>
        </div>
    </footer>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://pro.fontawesome.com/releases/v5.15.0/js/all.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>