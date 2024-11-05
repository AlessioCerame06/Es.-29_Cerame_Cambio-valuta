function stampaBandiera(){
    let valuta = document.getElementById("selectValute").value;
    let statiUniti = document.getElementById("statiUniti");
    let giappone = document.getElementById("giappone");
    let svizzera = document.getElementById("svizzera");
    let regnoUnito = document.getElementById("regnoUnito");
    if (valuta == "dollaro") {
        statiUniti.classList.remove("d-none");
        if (giappone.classList.contains("d-none") == false) {
            giappone.classList.add("d-none");
        } else if (svizzera.classList.contains("d-none") == false) {
            svizzera.classList.add("d-none");
        } else if (regnoUnito.classList.contains("d-none") == false) {
            regnoUnito.classList.add("d-none");
        }
    } else if (valuta == "yen") {
        giappone.classList.remove("d-none");
        if (statiUniti.classList.contains("d-none") == false) {
            statiUniti.classList.add("d-none");
        } else if (svizzera.classList.contains("d-none") == false) {
            svizzera.classList.add("d-none");
        } else if (regnoUnito.classList.contains("d-none") == false) {
            regnoUnito.classList.add("d-none");
        }
    } else if (valuta == "francoSvizzero") {
        svizzera.classList.remove("d-none");
        if (statiUniti.classList.contains("d-none") == false) {
            statiUniti.classList.add("d-none");
        } else if (giappone.classList.contains("d-none") == false) {
            giappone.classList.add("d-none");
        } else if (regnoUnito.classList.contains("d-none") == false) {
            regnoUnito.classList.add("d-none");
        }
    } else {
        regnoUnito.classList.remove("d-none");
        if (statiUniti.classList.contains("d-none") == false) {
            statiUniti.classList.add("d-none");
        } else if (giappone.classList.contains("d-none") == false) {
            giappone.classList.add("d-none");
        } else if (svizzera.classList.contains("d-none") == false) {
            svizzera.classList.add("d-none");
        }
    }
}