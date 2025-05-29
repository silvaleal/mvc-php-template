<?php $this->layout('components/layouts/app-layout') ?>

<main>
    <form action="/register" method="POST" >
        <h2>Register</h2>
        <div>
            <div>
                <label for="">Nome</label>
                <input type="text" name="name" id="">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" id="">
            </div>
            <div>
                <label for="">Senha</label>
                <input type="password" name="password" id="">
            </div>
            <div>
                <label for="">Repita sua senha</label>
                <input type="password" name="password_confirm" id="">
            </div>
        </div>
        <button type="submit">Confirmar</button>
    </form>
</main>