BX24.callMethod("user.get", { ACTIVE: true }, function (result) {
    if (result.error()) {
        console.error(result.error());
    } else {
        let select = "<option>Seleccionar...</option>"
        let res = result.data()
        for (var key in res){
            select += "<option value=" + res[key]["ID"] + ">" + res[key]["NAME"] + " " + res[key]["LAST_NAME"] + "</option>"
        }
        document.getElementById("inputGroup-sizing-responsable").innerHTML = select
    }
});
