<!-- MANUALS PAGE -->
<section id="content">
    <div class="content-wrap-sml">
        <div class="container clearfix">
            <h1><?= $heading; ?></h1>
            <p>Below find a sample of the product we install.<br>Click on the images to enlarge.</p>
            <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="4" data-lightbox="gallery" style="position: relative;">
                <?php
                foreach ($dir_map as $key => $item) {
                    if (is_array($item)) {
                        $multi = true;
                        if ($key === array_key_first($dir_map)) {
                            echo "</div>";
                        }
                ?>
                        <h2><?= ucfirst(substr($key, 0, -1)); ?></h2>
                        <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="4" data-lightbox="gallery" style="position: relative; margin-bottom: 20px;">
                            <?php
                            foreach ($item as $img) {
                                $img_src = base_url("/uploads/" . $type . "/" . substr($key, 0, -1) . "/" . $img);
                                echo "<a class='grid-item' href='$img_src' data-lightbox='gallery-item' style='position: absolute; left: 0%; top: 0px;'>";
                                echo "<img src='$img_src' alt=''></a>";
                            }
                            ?>
                        </div>
                <?php
                        if ($key === array_key_last($dir_map)) {
                            echo "<div>";
                        }
                    } else {
                        $multi = false;
                        $img_src = base_url("/uploads/" . $type . "/" . $product . "/" . $item);
                        echo "<a class='grid-item' href='$img_src' data-lightbox='gallery-item' style='position: absolute; left: 0%; top: 0px;'>";
                        echo "<img src='$img_src' alt=''></a>";
                    }
                }
                ?>
            </div>

            <?php
            if ((!$multi) && (isset($supplier_url))) {
            ?>
                <div class="row">
                    <div class="col-md-12" style="margin-top: 30px;">
                        <a href="<?= $supplier_url; ?>" class="btn btn-secondary">Supplier Website</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <!-- <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="4" data-lightbox="gallery" style="position: relative;">
                <a class="grid-item" href="images/portfolio/full/1.jpg" data-lightbox="gallery-item" style="position: absolute; left: 0%; top: 0px;"><img src="images/portfolio/4/1.jpg" alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="images/portfolio/full/2.jpg" data-lightbox="gallery-item" style="position: absolute; left: 25%; top: 0px;"><img src="images/portfolio/4/2.jpg" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="images/portfolio/full/3.jpg" data-lightbox="gallery-item" style="position: absolute; left: 50%; top: 0px;"><img src="images/portfolio/4/3.jpg" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="images/portfolio/full/5.jpg" data-lightbox="gallery-item" style="position: absolute; left: 75%; top: 0px;"><img src="images/portfolio/4/5.jpg" alt="Gallery Thumb 5"></a>
            </div> -->
        </div>
    </div>
</section>