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

    <div class="mydiv">
        <img src="https://th-i.thgim.com/public/incoming/dk2syj/article68373990.ece/alternates/LANDSCAPE_1200/India_Ambani_Wedding_09707.jpg" width="500px" alt="">
    </div>
    <button class="myBtn">Click me</button>
    <script src="../jQuery.js"></script>
    <script>
        //.animate({params},speed, callback)
        $(document).ready(function() {
            $(".myBtn").click(function() {
                $(".mydiv").animate({
                    width: "250px",
                    height:"250px",
                }, 2000)
            })
        })
    </script>

</body>

</html>