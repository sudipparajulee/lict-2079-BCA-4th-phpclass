<html>
    <head>
        <title>Ajax with jquery</title>
    </head>
    <body>
        <h1>Ajax with jquery</h1>
        <button>Click Me</button>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $('button').click(function() {
                    $.ajax({
                        url: 'ajaxdata.php',
                        type: 'GET',
                        success: function(data) {
                            alert('Ajax request was successful');
                            alert(data);
                        },
                        error: function() {
                            alert('Ajax request was not successful');
                        }
                    });
                });
            });
        </script>
    </body>
</html>