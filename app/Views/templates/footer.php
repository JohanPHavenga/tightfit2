<!-- Footer
============================================= -->

<footer id="footer" class="dark">

    <!-- Copyrights
============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_one_fifth nobottommargin">
                <img src="<?= base_url("images/footer-logo.png"); ?>" alt="" class="footer-logo">
            </div>

            <div class="col_four_fifth col_last tright nobottommargin">
                <div class="copyrights-menu copyright-links fright clearfix">
                    <a href="<?= base_url(); ?>">Home</a>/
                    <a href="<?= base_url("gallery/garagedoors"); ?>">Garage Doors</a>/
                    <a href="<?= base_url("gallery/doorautomation"); ?>">Door Automation</a>/
                    <a href="<?= base_url("gallery/gateautomation"); ?>">Gate Automation</a>/
                    <a href="<?= base_url("manuals"); ?>">Manuals</a>/
                    <a href="<?= base_url("about"); ?>">About</a>/
                    <a href="<?= base_url("contact"); ?>">Contact</a>
                    <br>
                    <span style="font-weight: normal;">Copyrights &copy; <?= date("Y"); ?> All Rights Reserved by TightFit Garage Doors & Automation.</span>
                </div>
                <div class="fright clearfix" style="clear: both;">
                    <a href="https://www.facebook.com/tightfitgaragedoors" class="social-icon si-small si-borderless nobottommargin si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/tight-fit-garage-doors-home-automation-hermanus-42b4537b/" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

    </div><!-- #copyrights end -->

</footer>



</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="<?= base_url(); ?>/js/jquery.js"></script>
<script src="<?= base_url(); ?>/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="<?= base_url(); ?>/js/functions.js"></script>
<?php
if (isset($scripts_to_load)) :
    foreach ($scripts_to_load as $row) :
        if (substr($row, 0, 4) == "http") {
            $js_link = $row;
        } else {
            $js_link = base_url($row);
        }
        echo "<script src='$js_link' type='text/javascript'></script>";
    endforeach;
endif;
?>

</body>

</html>