//=========================================
// MOTOR PETD
//=========================================

const CLAVE = "PETD_DATA";

const estructuraInicial = {

    diagnostico: null,

    sensibilizacion: null,

    capacitacion: null,

    acompanamiento: null,

    estrategia: null

};

//=============================
// OBTENER DATOS
//=============================

export function obtenerPETD(){

    const datos = localStorage.getItem(CLAVE);

    if(datos){

        return JSON.parse(datos);

    }

    localStorage.setItem(

        CLAVE,

        JSON.stringify(estructuraInicial)

    );

    return estructuraInicial;

}

//=============================
// GUARDAR
//=============================

export function guardarComponente(nombre,data){

    const petd = obtenerPETD();

    petd[nombre]=data;

    localStorage.setItem(

        CLAVE,

        JSON.stringify(petd)

    );

}

//=============================
// LIMPIAR
//=============================

export function limpiarPETD(){

    localStorage.removeItem(CLAVE);

}