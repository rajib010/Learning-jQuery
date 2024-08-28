<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div Search</title>
</head>

<body>
    <input type="text" id="myInput" placeholder="Search...">
    <div class="myDiv">
        <p>I am a paragraph</p>
        <div>
            I am a div element inside a div.
        </div>
        <button>I am a button</button>
        <button>Another Button</button>
        <p>Another paragraph</p>
    </div>
    <script src="../jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var input = $(this).val().toLowerCase();

                $(".myDiv *").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(input) > -1)
                });
            });
        });
    </script>
</body>

</html>