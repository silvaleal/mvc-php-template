<?php $this->layout('components/layouts/app-layout') ?>

<link rel="stylesheet" href="/static/style/auth.css">

<main class="header">
    <div class="window">
        <form action="/login" method="POST">
            <h2><?= $lang->title ?></h2>
            <div class="window-inputs">
                <div>
                    <label for=""><?= $lang->email ?></label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for=""><?= $lang->password ?></label>
                    <input type="password" name="password" required>
                </div>
            </div>

            <button type="submit"><?= $lang->btn_confirm ?></button>
        </form>
    </div>
</main>