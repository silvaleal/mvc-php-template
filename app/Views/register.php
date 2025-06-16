<?php $this->layout('components/layouts/app-layout') ?>

<link rel="stylesheet" href="/static/style/auth.css">

<main class="header">
    <div class="window">
        <form action="/register" method="POST">
            <h2><?= $lang->title ?></h2>
            <div>
                <div>
                    <label for=""><?= $lang->name ?></label>
                    <input type="text" name="name" required size="5">
                </div>
                <div>
                    <label for=""><?= $lang->email ?></label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for=""><?= $lang->password ?></label>
                    <input type="password" name="password" required size="5">
                </div>
                <div>
                    <label for=""><?= $lang->password_confirm ?></label>
                    <input type="password" name="password_confirm" required size="5">
                </div>
            </div>
            <button type="submit"><?= $lang->btn_confirm ?></button>
        </form>
    </div>
</main>