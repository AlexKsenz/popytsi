// Get the modal
var modal1 = document.getElementById('modalWindowLogin');
var modal2 = document.getElementById('modalWindowRegisret');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2) {
        modal1.style.display = "none";
        modal2.style.display = "none";
    }
}
