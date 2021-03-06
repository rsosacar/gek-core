$(function () {

    // Switchery
    var switchery;
    var elems;

    // Initialize multiple switches
    if (Array.prototype.forEach) {
        elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
        elems.forEach(function(html) {
            switchery = new Switchery(html);
        });
    }
    else {
        elems = document.querySelectorAll('.switchery');
        for (var i = 0; i < elems.length; i++) {
            switchery = new Switchery(elems[i]);
        }
    }

    // Colored switches
    // var primary = document.querySelector('.switchery-primary');
    // switchery = new Switchery(primary, { color: '#2196F3' });

    // Bootstrap switch

    $(".switch").bootstrapSwitch();
});

function listenerChangeStatus(){

    $(".switchStatus").change(function(){
        $.ajax({
            url: 'status',
            type: 'post',
            data: {
                id: $(this).attr("id").replace(/status-/g, ''),
                _csrf : $(this).attr("_csrf")
            }
        });
    });
}