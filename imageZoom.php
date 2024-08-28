<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImageZooming</title>
    <style>
        #image {
            overflow: contain;
            transition: tansform 3s;
        }

        .zoomed {
            transform: scale(1.5);
        }

        .main-div {
            width: 90vw;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <blockquote>
        <div class="main-div">
            <img src="https://th-i.thgim.com/public/incoming/dk2syj/article68373990.ece/alternates/LANDSCAPE_1200/India_Ambani_Wedding_09707.jpg" id="image" width="200px" alt="image">
            <button id="slideBtn">Slide </button>
        </div>

    </blockquote>
    <script src="jQuery.js"></script>
    <script>
        $(document).ready(function() {
            //zooming an image
            // $("#image").hover(function() {
            //     $(this).toggleClass("zoomed")
            // })


            //slide image up and down
            // $("#slideBtn").click(function() {
            //     if($("#image").is(":visible")){
            //         $("#image").slideUp("slow")
            //     }else{
            //         $("#image").slideDown("slow")
            //     }
            // })
        })
    </script>
</body>

</html>