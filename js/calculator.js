var CheminComplet = document.location.href;
var CheminRepertoire = CheminComplet.substring(0, CheminComplet.lastIndexOf("/"));
var NomDuFichier = CheminComplet.substring(CheminComplet.lastIndexOf("/") + 1);
console.log('NomDuFichier : \n' + NomDuFichier + ' \n\nCheminRepertoire : \n' + CheminRepertoire + ' \n\nCheminComplet : \n' + CheminComplet)

var arome = document.getElementById("arome").value;
var base = document.getElementById("base").value;

$("#arome").change(function () {
    arome = document.getElementById("arome").value;
    base = document.getElementById("base").value;
    var result = Number(arome) * Number(base) / 100;
    document.getElementById("result").value=result;
    console.log(result);
});

$("#base").change(function () {
    arome = document.getElementById("arome").value;
    base = document.getElementById("base").value;
    var result = Number(arome) * Number(base) / 100;
    document.getElementById("result").value=result;
    console.log(result);
});

