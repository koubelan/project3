// Activé le menu au click du logo Hambuger
$(document).ready(function() {
    $("#hamburger").click(function(){
        $(".menu").toggleClass("active");
    })
})