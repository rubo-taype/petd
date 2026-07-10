import {
    guardarComponente,
    obtenerPETD
} from './petd';

import './bootstrap';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

//========================================
// SESIÓN DEL DIAGNÓSTICO
//========================================


const diagnostico = {

    conocimiento:0,

    procesos:0,

    planificacion:0,

    infraestructura:0,

    total:0,

    entidad:"",

    responsable:"",

    fecha:"",

    estado:"En proceso"

};







document.addEventListener("DOMContentLoaded", () => {

    const pasos = document.querySelectorAll(".wizard-step");

    if (pasos.length === 0) return;

    let paso = 1;
    const totalPasos = 5;

    const barra = document.getElementById("barra");
    const pasoActual = document.getElementById("pasoActual");
    const btnAnterior = document.getElementById("btnAnterior");
    const btnSiguiente = document.getElementById("btnSiguiente");

    const estados = [
        "bg-primary",
        "bg-secondary",
        "bg-secondary",
        "bg-secondary",
        "bg-secondary"
    ];

    function actualizarBadges() {

        const badges = document.querySelectorAll(".badge");

        badges.forEach((badge, index) => {

            badge.classList.remove(
                "bg-primary",
                "bg-success",
                "bg-secondary"
            );

            if(index + 1 < paso){

                badge.classList.add("bg-success");

            }else if(index + 1 == paso){

                badge.classList.add("bg-primary");

            }else{

                badge.classList.add("bg-secondary");

            }

        });

    }

    function mostrarPaso(){

        pasos.forEach(p => p.classList.add("d-none"));

        document.getElementById("step"+paso)
                .classList.remove("d-none");

        barra.style.width = (paso * 20)+"%";

        pasoActual.innerText = paso;

        actualizarBadges();

        btnAnterior.disabled = paso===1;

        if(paso===totalPasos){

            btnSiguiente.innerText="Finalizar";

        }else{

            btnSiguiente.innerText="Siguiente →";

        }

    }

    btnAnterior.addEventListener("click",()=>{

        if(paso>1){

            paso--;

            mostrarPaso();

        }

    });

    btnSiguiente.addEventListener("click",()=>{

       // if(paso<totalPasos){

      //      paso++;

        //    mostrarPaso();

       // }else{

      //      alert("Diagnóstico Finalizado.");

        //}

// agreagmos datos para emepzar a guardar

if(paso<totalPasos){

    paso++;

    mostrarPaso();

}else{

    guardarComponente("diagnostico",{

        entidad: diagnostico.entidad || "Municipalidad Demo",

        responsable: diagnostico.responsable || "Administrador",

        fecha: new Date().toLocaleDateString(),

        porcentaje: document.getElementById("porcentajeTotal")?.innerText || "0%",

        nivel: document.getElementById("nivelTotal")?.innerText || "BÁSICO",

        estado:"COMPLETADO"

    });

    console.log(obtenerPETD());

    alert("Diagnóstico registrado correctamente.");

    window.location="/dashboard";

}


//aqui termina el cambio






    });

    mostrarPaso();

});


//=====================================================
// BOTONES DE RESPUESTA
//=====================================================
//=====================================================
// BOTONES DE RESPUESTA Y CÁLCULO DE PUNTAJE
//=====================================================

document.addEventListener("click", function (e) {

    if (!e.target.classList.contains("opcion")) return;

    const card = e.target.closest(".card");

    const botones = card.querySelectorAll(".opcion");

    botones.forEach(btn => {

        btn.classList.remove(
            "btn-success",
            "btn-warning",
            "btn-danger"
        );

        btn.classList.add(
            "btn-outline-success",
            "btn-outline-warning",
            "btn-outline-danger"
        );

    });

    switch(e.target.dataset.valor){

        case "3":
            e.target.classList.remove("btn-outline-success");
            e.target.classList.add("btn-success");
        break;

        case "2":
            e.target.classList.remove("btn-outline-warning");
            e.target.classList.add("btn-warning");
        break;

        case "1":
            e.target.classList.remove("btn-outline-danger");
            e.target.classList.add("btn-danger");
        break;

    }

    const hidden = card.querySelector(".puntaje");

    if(hidden){

        hidden.value = e.target.dataset.valor;

    }

    calcularPuntaje();

});

function calcularPuntaje(){

    let total = 0;

    let preguntas = document.querySelectorAll(".puntaje");

    preguntas.forEach(p=>{

        total += Number(p.value);

    });

    const puntos = document.getElementById("puntajeTotal");

    const porcentaje = document.getElementById("porcentajeTotal");

    const nivel = document.getElementById("nivelTotal");

    if(!puntos) return;

    puntos.innerHTML = total + " / 15";

    let porc = Math.round((total/15)*100);

    porcentaje.innerHTML = porc + "%";

    if(porc>=80){

        nivel.innerHTML="ALTO";

    }else if(porc>=60){

        nivel.innerHTML="INTERMEDIO";

    }else{

        nivel.innerHTML="BÁSICO";

    }

}


//=====================================================
// GUARDAR RUBRO 1
//=====================================================

document.addEventListener("click", function (e) {

    if (e.target.id !== "guardarRubro1") return;

    let preguntas = document.querySelectorAll(".puntaje");

    let incompletas = 0;

    preguntas.forEach(p => {

        if (p.value == 0) {

            incompletas++;

        }

    });

    const mensaje = document.getElementById("mensajeSistema");

    if (incompletas > 0) {

        mensaje.innerHTML = `
            <div class="alert alert-warning alert-dismissible fade show">

                <strong>Atención</strong><br>

                Debe responder todas las preguntas antes de continuar.

                <button class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>
        `;

        return;

    }

    mensaje.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show">

            <strong>Excelente.</strong><br>

            El Rubro 1 fue registrado correctamente.

            <button class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>
    `;

    setTimeout(() => {

        // Actualiza el resultado
        actualizarResultado();

        // Actualiza el Dashboard
        actualizarDashboard();

        // Espera 1 segundo para mostrar el mensaje
        setTimeout(() => {

        document.getElementById("btnSiguiente").click();

        }, 1000);

        },1000);

});

//=====================================================
// ACTUALIZAR RESULTADO
//=====================================================
function actualizarResultado(){

    let total = 0;

    document.querySelectorAll(".puntaje").forEach(p=>{

        total += Number(p.value);

    });

    diagnostico.conocimiento = total;

    diagnostico.total = total;

    let porcentaje = Math.round((total/15)*100);

    const p = document.getElementById("resultadoPuntaje");
    const n = document.getElementById("resultadoNivel");
    const b = document.getElementById("barraResultado");
    const recomendacion = document.getElementById("recomendacionSistema");
    const accion = document.getElementById("accionSistema");






    if(!p) return;

    p.innerHTML = total + " / 15";

    b.style.width = porcentaje + "%";
    b.innerHTML = porcentaje + "%";

   if(porcentaje>=80){

    n.innerHTML="ALTO";

    if(recomendacion){

        recomendacion.innerHTML="La entidad presenta un nivel ALTO de madurez en interoperabilidad.";

    }

    if(accion){

        accion.innerHTML="Puede iniciar la implementación de servicios interoperables.";

    }

}

else if(porcentaje>=60){

    n.innerHTML="INTERMEDIO";

    if(recomendacion){

        recomendacion.innerHTML="La entidad presenta un nivel INTERMEDIO y requiere fortalecer algunos procesos.";

    }

    if(accion){

        accion.innerHTML="Se recomienda ejecutar un plan de fortalecimiento institucional.";

    }

}

else{

    n.innerHTML="BÁSICO";

    if(recomendacion){

        recomendacion.innerHTML="La entidad presenta un nivel BÁSICO de madurez.";

    }

    if(accion){

        accion.innerHTML="Se recomienda iniciar un programa de sensibilización y capacitación.";

    }

}


const tabla = document.getElementById("tablaConocimiento");

if(tabla){

    tabla.innerHTML = total + " / 15";

}

}


//=====================================
// GUARDAR DATOS DEL DIAGNÓSTICO
//=====================================

diagnostico.entidad =
    document.getElementById("entidad")?.value || "";

diagnostico.responsable =
    document.getElementById("responsable")?.value || "";

diagnostico.fecha =
    document.getElementById("fecha")?.value || "";

guardarComponente("diagnostico",{

    entidad: diagnostico.entidad,

    responsable: diagnostico.responsable,

    fecha: diagnostico.fecha,

    estado:"COMPLETADO"

});


//=========================================
// ACTUALIZAR DASHBOARD
//=========================================

function actualizarDashboard(){

    const total = document.getElementById("totalDiagnosticos");

    if(!total) return;

    let actual = Number(total.innerHTML);

    total.innerHTML = actual + 1;

}