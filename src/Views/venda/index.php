<?php require_once "../src/Views/shared/header.php"; ?>

<section class="main-car">
    <div class="container flex wd-100">

        <div class="left-painel">

            <div class="top-inputs">
                <input id="inputProduto" class="bg-branco sem-borda shadow-down" type="text" name="codigo" placeholder="digite o código do produto">
                <input id="inputQtde" class="bg-branco sem-borda shadow-down" type="number" name="qtde"  value="1" placeholder="quantidade desejada...">
            </div>
            <?php
            if (!isset($_SESSION)):
                session_start();
            endif;
            ?>

            <div class="item-list bg-branco shadow-down">

                <div class="itens">
                    <span class="fw-bold fonte10 meu-span">Produto</span>
                    <span class="fw-bold fonte10 d">Qtde</span>
                    <span class="fw-bold fonte10 d">Desconto</span>
                    <span class="fw-bold fonte10 t">Val. Uni</span>
                    <span class="fw-bold fonte10 t">Sub-total</span>
                </div>

                <?php 
                $total = 0.00;
                  if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0):
                    foreach($_SESSION['carrinho'] as $item):
                    $preco = (float) $item['preco'];
                    $qtde = (int) $item['qtde'];
                    $desc = (float) $item['desc'] ?? 0;

                    $subTotal = $qtde * $preco;
                    $valorDesconto = round( ($subTotal * $desc) / 100, 2);
                    $subTotalDesconto = round( $subTotal -  $valorDesconto, 2);

                    $total = round($total + $subTotalDesconto, 2);

                ?>
                <div class="itens">
                    <?php 
                    //if (isset($_SESSION['carrinho'])):
                    //     var_dump($_SESSION['carrinho']);
                    // else:
                    //     echo "Sessão Carrinho não existe";
                    // endif;
                    ?>
                    <span class="fonte12 fw-400 meu-span"><?= $item['nome'] ?></span>
                    <span class="fonte12 fw-400 d"><?= $item['qtde'] ?></span>
                    <span class="fonte12 fw-400 d"><?= $item['desc'] ?></span>
                    <span class="fonte12 fw-400 t"><?= number_format($item['preco'], 2, ",", ".") ?></span>
                    <span class="fonte12 fw-400 t"><?= number_format($subTotalDesconto, 2, ",", ".") ?></span>
                </div>
               <?php
               endforeach;
                    else:
                    echo "<h2 class='fonte48 txt-c fnc-marrom-choc mg-t-10' >Caixa Livre! </h2>";
                 endif;                 
               ?>
            </div>

        </div>

        <div class="right-painel">
            <div class="box">
                <div class="total mg-b-4 bg-branco poppins-black"> R$ <?= number_format($total,2,',','.') ?> </div>
                <h3 class="fonte16 fnc-branco txt-c">Atalhos úteis</h3>
                <div class="atalhos flex justify-center mg-b-4">
                    <button class="pd-10 mg-r-1 fw-600">Consultar Produto<span class=" fnc-laranja poppins-black"><br>(F1)</span></button>
                    <button class="pd-10 mg-l-1 fw-600">Consultar Cliente <span class=" fnc-laranja poppins-black"><br>(F2)</span></button>
                </div>
                <h3 class="fonte16 fnc-branco txt-c">Ações</h3>
                <div class="acoes flex justify-center">
                    <button class="pd-10 mg-r-1 fw-600">Cancelar Venda <span class=" fnc-primario poppins-black"><br>(F3)</span></button>
                    <button class="pd-10 mg-r-1 mg-l-1 fw-600">Remover Item <span class=" fnc-primario poppins-black"><br>(F4)</span></button>
                    <button class="pd-10 mg-l-1 fw-600">Finalizar venda <span class=" fnc-primario poppins-black"><br>(F5)</span></button>

                </div>
            </div>
        </div>

    </div>
</section>
<script type="text/javascript" src="/lib/js/pdv.js"></script>