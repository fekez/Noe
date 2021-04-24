<header>

		<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
    <nav class="navbar navbar-light " style="background-color: #12c3ff;">
        <form class="container-fluid justify-content-start">
            <a class="navbar-brand" >
                <img class="imgnav" src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>" style="width:60%;height:60%;border-radius:5px;>

                <?php foreach ($oldalak as $url => $oldal) { ?>
                <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                        <button class="btn btn-outline-success me-2 btn-lg" type="button" style="border-color: black; background-color: azure;"<?= (($oldal == $keres) ? ' class="active"' : '') ?>
                     <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                         <?= $oldal['szoveg'] ?></a>
                     </button>
            </a>
                 <?php } ?>
                 <?php } ?>
        </form>
    </nav>
</header>