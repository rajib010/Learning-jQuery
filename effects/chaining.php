<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effects</title>
    <style>

    </style>
</head>

<body>
    <p class="p-item">I am a paragraph.</p>

    <script src="../jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $(".p-item").css("color", "red").slideUp(2000).slideDown(2000);
        })
    </script>

</body>

</html>