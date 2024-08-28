<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List filter</title>
</head>

<body>
    <input type="text" id="myInput">
    <ul>
        <li>Home</li>
        <li>Address</li>
        <li>Contact</li>
        <li>About</li>
        <li>Info</li>
    </ul>

    <script src="jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keydown", function() {
                const value = $(this).val().toLowerCase();
                $("ul li").filter(function() {
                    $(this).toggle($(this).indexOf(value) > -1)
                })
            })
        })
    </script>

</body>

</html>