(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// Activer/Désactiver le champ "prix" en fonction de la case à cocher
var checkbox = document.getElementById('prix_personnalise');
var prixField = document.getElementById('prix');
checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
        prixField.disabled = false;
    } else {
        prixField.disabled = true;
    }
});
