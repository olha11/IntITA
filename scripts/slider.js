
$(document).ready(function() {
     
    $("#slider").owlCarousel({
        itemHeight : "600px",
        slideSpeed : 2400,   //2.4 sec
        paginationSpeed : 2400, //2.4 sec
        rewindSpeed : 6400,  //2.4 sec
        autoPlay: 5000,      //5 sec
        stopOnHover : true,
        singleItem: true

});
    
    $(window).load(function(){
        $('#slider img').liCover()
    })
     
});


