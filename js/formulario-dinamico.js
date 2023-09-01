
function calcularmedia() {
    var nota1 = parseFloat(document.getElementById('primeira').value);
    var nota2 = parseFloat(document.getElementById('segunda').value);
    var resultado = document.getElementById('media');
    var situacao = document.getElementById('situacao');

    var media = (nota1 + nota2) / 2;
    resultado.value = media.toFixed(2);

    if (media >= 7) {
        situacao.value = "Aprovado";
    }  else if(media >=5) {
        situacao.value = "Recuperação";
    }   else {
        situacao.value = "Reprovado";
    }
 
}

// Adicionar event listeners para detectar mudanças nos campos de entrada
var inputNota1 = document.getElementById('primeira');
var inputNota2 = document.getElementById('segunda');

inputNota1.addEventListener('input', calcularmedia);
inputNota2.addEventListener('input', calcularmedia);

// Inicialmente, calcular a média com os valores padrão
calcularmedia();
