<div id="galeria" style="margin: 0 auto;">
    <?php
        arsort($kepek);
        foreach($kepek as $fajl => $datum)  { ?>
            <div class="kep" style="display: inline-block;">
                <a href="<?php echo $MAPPA.$fajl ?>">
                    <img style="width: 400px;" src="<?php echo $MAPPA.$fajl ?>">
                </a>
            </div>
    <?php   }  ?>
</div>