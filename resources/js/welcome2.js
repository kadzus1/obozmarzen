/* global storagePath */

$(function(){
    $('#filter-button').click(function(){
    const form = $('#sidebar-filter').serialize();
        $.ajax({
            method: "GET",
            url: "/",
            data: form

        })
        .done(function(response) {
            $('#products-wrapper').empty();
    $.each(response.data, function(index, oboz){
        const html = '<div id="products-wrapper"><section id="one" class="tiles"><article>'+
                '<span class="image">'+
                        '<img src="'+ getImage(oboz) +'" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">'+
                ' </span>'+
                '<header class="major">'+
                       ' <h3><a href="#" class="link">'+oboz.name+'</a></h3><h3>'+oboz.price+  'PLN</h3>'+
                '</header>'+'</article></section></div>';
$('#products-wrapper').append(html);
    });
        })
        .fail(function (response) {
            alert('error');
        });
    });
    
    function getImage(oboz){
        if(!!oboz.image_path){
            return storagePath + oboz.image_path;
        }
    }
    
});
