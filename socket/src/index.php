<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="svar"></div>
    <div id="user"></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var conn = new WebSocket('ws://192.168.30.136:8080');
        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        conn.onmessage = function(e) {
            if (e.data=="Username") {
                $("#user").html('<form><input type="text" id="username" name="username"></form><button id="sendubutton">send username</button>'); 
            }
            $("#svar").text(e.data);
        };

        $(document).on("click","#sendubutton", function(){

            conn.send("UUU"+$("#username").val());
            console.log("sent username");
            
        });
    </script>

</body>
</html>