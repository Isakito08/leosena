const nota1input = document.getElementById("nota1");
const nota2input = document.getElementById("nota2");
const nota3input = document.getElementById("nota2");
const definitivainput = document.getElementById("definitiva");
const calcularboton = document.getElementById("calcular")




nota1input.addEventListener("input", calcularDefinitiva);
nota2input.addEventListener("input", calcularDefinitiva);
nota3input.addEventListener("input", calcularDefinitiva);

calcularboton.addEventListener("click", calcularDefinitiva);

function calcularDefinitiva() {
    const nota1 = parseFloat(nota1input.value) || 0;
    const nota2 = parseFloat(nota2input.value) || 0;
    const nota3 = parseFloat(nota3input.value) || 0;

    const definitiva= (nota1+nota2+nota3)/3;

    definitivainput.value = definitiva.toFixed(2);
}
