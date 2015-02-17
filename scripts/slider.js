
$(document).ready(function() {
     
    $('#slider img').liCover({
        veticalAlign : "middle",
        align : "center"
    });
    
    $("#slider").owlCarousel({

        itemHeight : "500px",
        slideSpeed : 500,   //0.5 sec
        paginationSpeed : 2000, //2 sec
        rewindSpeed : 3000,  //3 sec
        autoPlay: 8000,      //8 sec
        stopOnHover : true,
        singleItem: true
        // lazyFollow: false
    }); 

});


