BX24.callMethod("user.get", { ACTIVE: true }, function (result) {
    if (result.error()) {
        console.error(result.error());
    } else {
        let select = "<option>Seleccionar</option>"
        let result = result.data()
        for (var key in result){
            select += "<option value=" + result[key]["ID"] + ">" + result[key]["NAME"] + " " + result[key]["LAST_NAME"] + "</option>"
        }
        document.getElementById("inputGroup-sizing-responsable").innerHTML = select
        console.dir(result.data());
    }
});
