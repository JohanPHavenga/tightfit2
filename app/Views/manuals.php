<!-- MANUALS PAGE -->
<section id="content">
    <div class="content-wrap-sml">
        <div class="container clearfix">
            <h1>Manuals Download</h1>
            <p>List of manuals to download</p>
            <?php
            foreach ($dir_map as $folder => $file_list) {
            ?>
                <h2><?= ucfirst(substr($folder, 0, -1)); ?></h2>
                <ul class="iconlist">
                    <?php
                    foreach ($file_list as $file) {
                    ?>
                    <li><i class="icon-download2" style="top: -1px;"></i> <a href="./uploads/manuals/<?=$folder.$file;?>"><?=$file;?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            }
            // wts($dir_map);
            ?>
        </div>
    </div>
</section>