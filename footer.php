            <hr>
            <footer>
                <div class="row text-center">
                    <div class="col-lg-12">
                        <p>Copyright &copy; <b>Berk Cetinsaya</b> <?php echo date("Y"); ?></p>
                    </div>
                </div>
            </footer>
            </div>
            <script src="assets/js/jquery.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <?php
            if ($page_title == "TMS") { ?>
                <script>
                    $('.carousel').carousel({
                        interval: 5000
                    });
                </script>
            <?php } ?>
            </body>

            </html>