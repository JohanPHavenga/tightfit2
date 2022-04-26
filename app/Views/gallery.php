<!-- MANUALS PAGE -->
<section id="content">
    <div class="content-wrap-sml">
        <div class="container clearfix">
            <h1><?=$heading;?></h1>                        
            <?php
            foreach ($dir_map as $key=>$item) {
                if (is_array($item)) {
                    echo "<h2>".ucfirst(substr($key,0,-1))."</h2>";
                    foreach ($item as $img) {
                        echo "<img src='".base_url("/uploads/".$type."/".substr($key,0,-1)."/".$img)."'>";
                    }
                } else {
                    echo "<img src='".base_url("/uploads/".$type."/".$product."/".$item)."'>";
                }
            }
            ?>
        </div>
    </div>
</section>