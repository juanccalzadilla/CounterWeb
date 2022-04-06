$(document).ready(function () {
    fetchNumbers();
    function fetchNumbers() {
        $.ajax({
            url: '../backoffice/inc/funcionesBack.php',
            type: 'GET',
            data: { "state": "getNumbers" },
            success: function (data) {
                const res = JSON.parse(data);
                $('#number').html(res.numero);
                
            }
        })
            .fail(function (data) {
                console.log(data);
            });
    }


    $("#increment").click(function () {
        function increment() {

            $.ajax({
                url: '../backoffice/inc/funcionesBack.php',
                type: 'GET',
                data: { "state": "increment" },
                success: function (data) {
                    fetchNumbers();
                }
            })
                .fail(function (data) {
                    console.log(data);
                });
        }
        increment();
    });


    $("#decrement").click(function () {
        function decrement() {

            $.ajax({
                url: '../backoffice/inc/funcionesBack.php',
                type: 'GET',
                data: { "state": "decrement" },
                success: function (data) {
                    fetchNumbers();
                }
            })
                .fail(function (data) {
                    console.log(data);
                });
        }
        decrement();
    });






});

