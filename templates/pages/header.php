<nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #12c3ff;">
    <a class="navbar-brand" href="#">
        <img class="imgnav" src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto btn-group">
            <?php foreach ($oldalak as $url => $oldal) {?>
                <?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                    <li class="nav-item  <?= $url == $keres['fajl'] ? ' active' : '' ?>">
                        <a class="nav-link btn btn-primary btn-lg " style="border-color: black; background-color: azure; margin: 0 5px; text-emphasis-color: #1E459E;" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                            <?= $oldal['szoveg'] ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</nav>