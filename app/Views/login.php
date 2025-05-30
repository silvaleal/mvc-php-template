<?php $this->layout('components/layouts/app-layout') ?>

<main>
    <form action="/login" method="POST" >
        <h2>Login</h2>
        <div>
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
</main>