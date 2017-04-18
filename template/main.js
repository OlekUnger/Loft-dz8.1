(function () {
    $("#button").on('click',function () {
        // alert('hello');
        $.ajax({
            cache: false,
            url: 'rest.php',
            method: 'GET',
            dataType: 'json'
        }).done(function (data) {
            var products_table = "<table class='table-bordered'><tr><th>Наименование</th><th>Категория</th><th>Цена</th><th>Описание</th></tr>";
            for (var i = 0; i < data.length; i++) {
                products_table += '<td>' + data[i].name + '</td>';
                products_table += '<td>' + data[i].category_id + '</td>';
                products_table += '<td>' + data[i].price + '</td>';
                products_table += '<td>' + data[i].description + '</td></tr>';
            }
            products_table += '</table>';
            $('.product_table').html(products_table);
        });
    });
})();
