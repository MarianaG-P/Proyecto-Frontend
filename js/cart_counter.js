$(document).ready(function () {
    $('.button-link').click(function (e) {
        e.preventDefault();
        var productID = $(this).data('product-id');

        $.ajax({
            url: 'agregar_al_carrito.php',
            type: 'POST',
            data: { product_id: productID },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    $('#cart-count').text(response.conteo_carrito);
                    alert('El producto se ha agregado al carrito');
                }
            },
            error: function () {
                alert('Ocurrió un error al agregar el producto al carrito');
            }
        });
    });
});