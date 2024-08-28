<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImageZooming</title>
    <style>

    </style>
</head>

<body>
    <blockquote>
        <img src="" id="image" alt="image">
        <button id="btn3">Btn</button>
        <div id="test3"></div>
    </blockquote>
    <script src="jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $("#btn3").click(function() {
                $.get("api.php", function(data, status) {
                    alert("Data " + data + "......... status " + status)
                })
            })
        })
    </script>
</body>

</html>