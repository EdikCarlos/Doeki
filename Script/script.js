function trocar() {
    let doador = document.getElementById('radioDoador');
    let beneficiario = document.getElementById('radioBenenficiario');
    /*let mudariframe = document.getElementById('iframeDoador');*/

    let perguntaDoBe = document.getElementById('perguntaDoBe');
    
    if (beneficiario.checked ) {
        /*mudariframe.src = './formularioBeneficiario.php';*/
        perguntaDoBe.innerHTML = "Porque você precisa da doação?";

    }else if (doador.checked){
        /*
        mudariframe.src = './formularioDoador.php';*/
        perguntaDoBe.innerHTML = "Faça a descrição do equipamento :";
    }   
}