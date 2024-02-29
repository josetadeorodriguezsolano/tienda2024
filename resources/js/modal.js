let errorModal;
errorModal = document.getElementById("errorModal");
// Get the modal
//errorModal = document.getElementById("errorModal");
// Get the <span> element that closes the modal
var modal_close = document.getElementsByClassName("modal-close")[0];
// When the user clicks on the button, open the modal
errorModal.style.display = "none";
// When the user clicks on <span> (x), close the modal
modal_close.onclick = function() {
    $('body').css('overflow','auto');
    errorModal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {

    if (event.target == errorModal) {
        errorModal.style.display = "none";
        $('body').css('overflow','auto');
    }
}

function showErrors(errores)
{
    $('body').css('overflow','hidden');
    let lista = $("#listaErroresModal");
    lista.empty();
    for (const key in errores) {
        if (Object.hasOwnProperty.call(errores, key)) {
            const element = errores[key];
            lista.append("<li>"+element+"</li>");
        }
    }
    errorModal.style.display = "flex";
}
