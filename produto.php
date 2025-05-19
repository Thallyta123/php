<?php
include("cabecalho.php");
?>

<div class="produto-back"></div>

    <div class="container">

        <div class="produto">
            <h1>Fuzzy Cardigan</h1>
            <p>por apenas R$ 129,90</p>

            <form>
                <fieldset class="cores">
                    <legend>Escolha a cor</legend>

                    <input type="radio" name="cor" id="verde" checked value="verde">
                    <label for="verde">
                        <img src="img/produtos/foto1-verde.png" alt="produto na cor verde">
                    </label>

                    <input type="radio" name="cor" id="rosa" value="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto1-rosa.png" alt="produto na cor rosa">
                    </label>

                    <input type="radio" name="cor" id="azul" value="azul">
                    <label for="azul">
                        <img src="img/produtos/foto1-azul.png" alt="produto na cor azul">

                    </label>
                </fieldset>

                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valordotamanho">42</output>
                </fieldset>
                <button class="comprar">comprar</button>
            </form>

        </div>
        <div class="detalhes">      
        <table>
            <caption>Quantidade e preço de camisetas.</caption>
            <colgroup>
                <col widht="10%">
                <col widht="40%">
                <col widht="30%">
                <col widht="20%">
            </colgroup>

            <thead>
                <tr>
                    <th rowspan="2">
                    <th colspan="2">Quantidade de camisetas</th>
                    <th rowspan="2">Preço</th>
                </tr>
                <tr>
                    <th>Amarela</th>
                    <th>Vermelha</th>
                </tr>

            <tfoot>
                <tr>
                    <td>Total de camisetas amarelas: 35</td>
                    <td>Total de camizetas Vermelhas: 34</td>
                    <td>Valor Total: $45.00</td>
                </tr>
            </tfoot>

            <tbody>
                <tr>
                    <td>Polo</td>
                    <td>12</td>
                    <td>5</td>
                    <td>$30.00</td>
                </tr>
                <tr>
                    <td>Regata</td>
                    <td>23</td>
                    <td>29</td>
                    <td>$15.00</td>
                </tr>
            </tbody>
        </table>

            <h2>Detalhes do produto</h2>

            <p>Esse é o melhor casaco de Cardigã que você ja viu. Excelente
                material italiano com estampa desenhada pelos artesãos da
                comunidade de Krotor nas linhas gregas. compre já e receba hoje
                mesmo pela nossa entrega a jato.</p>

            <table>
                <thead>
                    <tr>
                        <th>Características</th>
                        <th>Detalhes</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodão e poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>

                </tbody>
                </thead>
            </table>

        </div>
    </div>
        <footer>
            <div class="container">
                <img src="img/logo-rodape.png" alt="Logo da Mirror Fashion">


                <ul class="social">
                    <li><a href="http://facebook.com/mirrorfashion">facebook</a></li>
                    <li><a href="http://twitter.com/mirrorfashion">twitter</a></li>
                    <li><a href="http://plus.google.com/mirrorfashion">google+</a></li>
                </ul>

            </div>
        </footer>

<script type="text/javascript" src="js/hello.js"></script>

</body>

</html>