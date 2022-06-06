$(function(){
    $('a#filter_button').click(function(){
        const form = $('form.sidebar-filter').serialize();
         $.ajax({
                                method: "GET",
                                url: "/",
                                data: form
                                
                            })
                            .done(function(response) {
                                $('div#products-wrapper').empty();
                        $.each(response.data, function(index, oboz){
                            const html = '<section id="one" class="tiles">'+
                                                            '@foreach($obozy as $oboz)'+
					'<article>'+
					'<span class="image"><img src="{{ asset('storage/' .$oboz->image_path) }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu"></span>'+
					'<header class="major">'+
					'<h3><a href="kids.html" class="link"><br>'+
                                            oboz.name+
                                        ' </a><br> '+
                                        '</h3><h3>' + oboz.price + ' PLN</h3>'+
					'</header></article>@endforeach'+
					'</section>';
                                $('div#products-wrapper').append(html);
                        });
                                
                            })
                            .fail(function (response) {
                                alert('error');
                            });
    });
});
