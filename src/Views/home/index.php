<?php require_once "../src/Views/shared/header.php"; ?>

<section class="home hg-full bg-bege">
    <div class="container-100 flex justify-end">
        <div class="box-6">
            <img src="/lib/img/bg/login.png" alt="">
        </div>
        <div class="box-6 flex justify-center item-centro hg-full">
            <form action="/" class="box-10" method="POST">
                <h1 class="poppins-black txt-c fnc-marrom-choc">PDV</h1>
                <p class="txt-c fonte14 mb-3 poppins-medium fw-300 fnc-marrom-choc">Acesso o sistema com suas credenciais</p>
                <label for="user" class="fnc-marron-choc">Usuário</label>
                <input type="text" name="usuario">

                <label for="password" class="fnc-marrom-choc">Senha</label>
                <input type="password" name="senha">

                <input type="submit" class="bg-marrom-choc btn-100 fnc-branco" value="Acessar">
            </form>
        </div>
    </div>
</section>

