BX24.callMethod("user.get", { ACTIVE: true }, function (result) {
    if (result.error()) {
        console.error(result.error());
    } else {
        console.dir(result.data());
    }
});
