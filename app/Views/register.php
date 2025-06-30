<?php $this->layout('components/layouts/app-layout') ?>

<main class="header">
    <div class="window">
        <form action="/register" method="POST">
            <h2 class="wd-title"><?= $lang->title ?></h2>
            <div>
                <div>
                    <label class="wd-label" for=""><?= $lang->name ?></label>
                    <input class="wd-input" type="text" name="name" required size="5">
                </div>
                <div>
                    <label class="wd-label" for=""><?= $lang->email ?></label>
                    <input class="wd-input" type="email" name="email" required>
                </div>
                <div>
                    <label class="wd-label" for=""><?= $lang->password ?></label>
                    <input class="wd-input" type="password" name="password" required size="5">
                </div>
                <div>
                    <label class="wd-label" for=""><?= $lang->password_confirm ?></label>
                    <input class="wd-input" type="password" name="password_confirm" required size="5">
                </div>
            </div>
            <button class="wd-button" type="submit"><?= $lang->btn_confirm ?></button>
        </form>
    </div>
</main>