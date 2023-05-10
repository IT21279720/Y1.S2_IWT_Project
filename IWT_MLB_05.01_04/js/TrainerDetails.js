function enableButton() {

    var checkBox = document.getElementById("checkbox");

    if (checkBox.checked == true) {
        document.getElementById("submitbn").disabled = false;
    } else {
        document.getElementById("submitbn").disabled = true;
    }


}