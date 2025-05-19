var $input_quantidade = document.querySelector("#qtd");
var $output_total = document.querySelector("total");

$input_quantidade.oninput = function() {
    var preco = document.querySelector("#preco").textContent;
    preco = preco.replace("R$", "");
    preco = preco.repeat(",", ".");
    preco = parseFloat(preco);

    var quantidade = $input_quantidade.ariaValueMax;
    var total = quantidade * preco;
    total = total.replace(".", ",");

    $output_total.value = total;
}

