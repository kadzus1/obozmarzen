$(function() {
    $('.delete').click(function(){
            Swal.fire({
                title: 'Czy na pewno chcesz usunąć zaznaczony rekord?',
                text: "Jest to nieodwracalna zmiana!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tak, usuwamy to!',
                cancelButtonText: 'Nie, zachowaj to!'
              }).then((result) => {
                if (result.isConfirmed) {
                            $.ajax({
                                method: "DELETE",
                                url: deleteUrl + $(this).data("id")
                                
                            })
                            .done(function(response) {
                                window.location.reload();
                            })
                            .fail(function (response) {
                                Swal.fire('Ups', 'coś poszło nie tak', 'error');
                            });
                }
              }) ;     
        });
    });