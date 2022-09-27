//*CALCULAR EDAD - FORMULARIOS
/**
 * @param fechaNacimiento en campos tipo //*FECHA
 * Y  @param edad en campos tipo //*NUMERO 
 */

const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");

const calcularEdad = (fechaNacimiento) => {
    const fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const diaActual = parseInt(fechaActual.getDate());

    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
    return edad;
};

window.addEventListener('load', function () {

    fechaNacimiento.addEventListener('change', function () {
        if (this.value) {
            edad.value = calcularEdad(this.value);
        }
    });

});

//*OCULTAR SELECT / TIPO DE MUERTE
/**
 * 
 * @param num //*onchange del select 
 * @param cmuerte1 //*id del select que se va a  mostrar 
 */

function tipoMuerte(num) {
    if (num == "Natural") {
        document.getElementById('cmuerte1').style.display = "block";
        document.getElementById('cmuerte2').style.display = "none";
        document.getElementById('cmuerte3').style.display = "none";
        num = "Natural";
        return num.value;
    } else if (num == "Enfermedad") {
        document.getElementById('cmuerte1').style.display = "none";
        document.getElementById('cmuerte2').style.display = "block";
        document.getElementById('cmuerte3').style.display = "none";

        num = "Enfermedad";
        return num.value;
    } else if (num == "Provocada") {
        document.getElementById('cmuerte1').style.display = "none";
        document.getElementById('cmuerte2').style.display = "none";
        document.getElementById('cmuerte3').style.display = "block";
        num = "Provocada";
        return num.value;
    } else {
        alert("qlq")
    }
}

//*OBSERVACIONES VISIBLE

function protesiss(pro) {
    if (pro == "no") {
        document.getElementById('obs').style.display = "none";
        pro = "no";
        return pro.value;
    } else if (pro == "si") {
        document.getElementById('obs').style.display = "block";
        pro = "si";

        return pro.value;
    } else {
        alert("3");
    }
}

//* NUMERO DE HIJOS

function numHijos (hi) {
    if (hi == "no") {
        document.getElementById('hj').style.display = "none";
        hi = "no";
        return hi.value;
    } else if (hi == "si") {
        document.getElementById('hj').style.display = "block";
        hi = "si";

        return hi.value;
    } else {
        alert("3");
    }
}