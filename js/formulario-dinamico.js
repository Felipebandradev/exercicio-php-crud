
function calcularMedia(nota1, nota2) {
    return (nota1 + nota2) / 2;
}

function determinarSituacao(media) {
    if (media >= 7) {
        return "Aprovado";
    } else if (media >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

function atualizarResultados() {
    var nota1 = parseFloat(document.getElementById('primeira').value);
    var nota2 = parseFloat(document.getElementById('segunda').value);
    var resultadoMedia = document.getElementById('media');
    var resultadoSituacao = document.getElementById('situacao');

        var media = calcularMedia(nota1, nota2);
        resultadoMedia.value = media.toFixed(2);

        var situacao = determinarSituacao(media);
        resultadoSituacao.value = situacao;
   
};

// Adicionar event listeners para detectar mudanças nos campos de entrada
var inputNota1 = document.getElementById('primeira');
var inputNota2 = document.getElementById('segunda');

inputNota1.addEventListener('input', atualizarResultados);
inputNota2.addEventListener('input', atualizarResultados);

// Inicialmente, calcular a média com os valores padrão
atualizarResultados();



