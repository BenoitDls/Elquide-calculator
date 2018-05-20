let arome = document.getElementById("arome").value;
let base = document.getElementById("base").value;

$("#arome").change(function () {
    arome = document.getElementById("arome").value;
    base = document.getElementById("base").value;
    let result = Number(arome) * Number(base) / 100;
    document.getElementById("result").value=result;
    console.log(result);
});

$("#base").change(function () {
    if (document.getElementById("arome").value && document.getElementById("base").value) {
        arome = document.getElementById("arome").value;
        base = document.getElementById("base").value;
    }
    let result = Number(arome) * Number(base) / 100;
    document.getElementById("result").value=result;
    console.log(result);
});

