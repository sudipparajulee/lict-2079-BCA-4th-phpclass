<html>
    <head>
        <title>Ajax Example</title>
    </head>
    <body>
        <h1>Ajax Example</h1>
        <button onclick="myfunction()">Click Me</button>
        <script>
            function myfunction()
            {
                var objXMLHttpRequest = new XMLHttpRequest();
            objXMLHttpRequest.onreadystatechange = function() {
                // Check if the request is complete
                if(objXMLHttpRequest.readyState === 4) {
                    // Check if the request was successful
                    if(objXMLHttpRequest.status === 200) {
                        alert(objXMLHttpRequest.responseText);
                    } else {
                        alert('Error Code: ' +  objXMLHttpRequest.status);
                        alert('Error Message: ' + objXMLHttpRequest.statusText);
                    }
                }
            }
            objXMLHttpRequest.open('GET', 'ajaxdata.php');
            objXMLHttpRequest.send();
            }
        </script>
    </body>
</html>
