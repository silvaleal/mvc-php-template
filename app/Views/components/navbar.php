<?php use App\Helpers\Auth ?>

<nav>

    <?php if (Auth::check()):?>
        <h2>Logado como <?= Auth::get()["name"]?></h2>
    <?php endif ?>
</nav>