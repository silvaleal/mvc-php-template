<?php use App\Helpers\Auth ?>

<nav>

    <?php if (Auth::check()):?>
        <h2>Logado</h2>
    <?php endif ?>
</nav>