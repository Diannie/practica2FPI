function Logging() {
    var form = document.getElementById("signup");
    var newForm = new FormData(form);
    var logRequest = new XMLHttpRequest();
    logRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    logRequest.open("POST", "practica2.php", false);
    logRequest.send(newForm);
}
