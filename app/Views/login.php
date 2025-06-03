<?php $this->layout('components/layouts/app-layout') ?>

<link rel="stylesheet" href="/static/style/auth.css">

<main class="header">
    <div class="window">
        <form action="/login" method="POST">
            <h2>Login</h2>
            <div class="window-inputs">
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" id="">
                </div>
                <div>
                    <label for="">Senha</label>
                    <input type="password" name="password" id="">
                </div>
            </div>
            <button type="submit">Confirmar</button>
        </form>
    </div>
</main>