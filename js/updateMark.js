
function updateMark(marcador){
    let campo = marcador.querySelector(".round");
    let valor = parseInt(campo.innerHTML);
    campo.innerHTML = ++valor;
}