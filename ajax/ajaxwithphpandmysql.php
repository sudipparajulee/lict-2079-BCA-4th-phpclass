<html>
    <head>
        <title>Ajax with php and mysql</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style>
            .searchrow {
                background-color: #f2f2f2;
                padding: 10px;
                margin: 5px;
            }
            .searchrow:hover {
                background-color: #e2e2e2;
            }
        </style>
    </head>
    <body>
        <h1>Ajax with php and mysql</h1>
        <input type="text" id="name" placeholder="Enter your name" onkeyup="myfunction()">
        <p id="result"></p>
        <script>
            function myfunction() {
                var name = document.getElementById('name').value;
                $.ajax({
                    url: 'userdata.php',
                    type: 'POST',
                    data: {name: name},
                    success: function(response) {
                        $('#result').html(response);
                    },
                    error: function() {
                        alert('Ajax request was not successful');
                    }
                });
            }
            // $(document).ready(function() {
            //     $('#name').keyup(function() {
            //         var name = $('#name').val();
            //         $.ajax({
            //             url: 'userdata.php',
            //             type: 'POST',
            //             data: {name: name},
            //             success: function(response) {
            //                 $('#result').html(response);
            //             },
            //             error: function(xhr, status, error) {
            //                 alert('Error Code: ' + xhr.status);
            //                 alert('Error Message: ' + xhr.statusText);
            //             }
            //         });
            //     });
            // });
        </script>
    </body>
</html>