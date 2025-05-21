<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/checkout.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html">Mirror Fashion</a>

        <div class="collapse navbar-collapse" id="navebarToggleExternalContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="sobre.html">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ajuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perguntas frequentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item" href="#">Entre em contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron-fluid jumbotron">
        <div class="container">
            <h1 class="display-4">Ótima escolha!</h1>
            <p class="lead">Obrigada por comprar na Mirror Fashion.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2>Sua compra</h2>
                    </div>

                    <div class="card-body">
                        <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail mb-3">
                        <dl>
                            <dt>Produto</dt>
                            <dd>Fuzzy Cardigan</dd>

                            <dt>Cor</dt>
                            <dt>verde</dt>

                            <dt>Tamanho</dt>
                            <dd>40</dd>

                            <dt>Preços</dt>
                            <dd>R$ 129,90</dd>
                        </dl>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">

                        <div class="form-goup">
                            <label for="qtd">Quantidade:</label>
                            <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                        </div>

                        <div class="form-goup">
                            <label for="total">Total:</label>
                            <output id="total" class="form-control">R$ 129,90</output>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-xs-6 col-md-8">
                <form action="/efetivar.html" method="POST">
                    <fieldset>
                        <legend>Dados pessoais</legend>

                        <div class="form-goup">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>

                        <div class="form-goup">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="email@exemplo.com">
                        </div>

                        <div class="form-goup">
                            <label for="CPF">CPF</label>
                            <input type="text" class="form-control" id="email" id="cpf" name="cpf"
                                data-mask="999.999.999-99" placeholder="000.000.000-00" required>
                        </div>

                        <div class="form-goup custom-control custom-checkbox"></div>
                        <input type="checkbox" class="custom-control-input" id="newletter" value="sim" checked>
                        <labrel class="custom-control-input" for="newletter">
                            Quero receber newletter da Mirror Fashion
                        </labrel>

                        <legend>Cartão de Crédito</legend>

                        <div class="form-goup">
                            <label for="numero-cartao"> Número - CW</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao"
                                data-mask="9999 9999 9999 9999 - 999">
                        </div>

                        <div class="form-goup">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="bandeira-cartao">Bandeira</label>
                                </div>
                                <select class="custom-seelct" id="bandeira-cartao">
                                    <option disabled selected>Selecione uma opção...</option>
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">America Express</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-goup">
                            <label for="validade-cartao">validade</label>
                            <input type="month" class="form-control" id="=validade-cartao" nome="validade-cartao">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <span class="oi-thumb-up"></span>
                            Confirmar Pedido
                        </button>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/total.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/inputmask-plugin.js"></script>

</body>