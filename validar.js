var boton = document.getElementById("boton1");
boton.style.display = "none";
function verificar() {
    let num1 = document.getElementById("papa").value;
    if (num1.length > 0 && num1.length < 6) {
        boton.style.display = "block";
    } else {
        boton.style.display = "none";
    }
}