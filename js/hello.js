var inputTamanho = document.querySelector('[name=tamanho]')
var outputTamanho = document.querySelector('[name=valordotamanho]')

console.log(outputTamanho)
function mostraTamanho(){
    outputTamanho.value = inputTamanho.value
}

inputTamanho.oninput = mostraTamanho 

twttr.widgets.createMentionButton(
  "TwitterDev",
  document.getElementById("container"),
  {
    size:"large"
  }
);