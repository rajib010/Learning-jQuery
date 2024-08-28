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
    <div class="myDiv">
        <p>Data will be loaded here</p>
    </div>

    <button class="myBtn">Load Content</button>
    <script src="../jQuery.js"></script>
    <script>
        $(document).ready(function() {
            // $(".myBtn").click(function(){
            //     //load the content of file demo.txt into specific div 
            //     // $(".myDiv").load("demo.txt ")
            //     //will load the content of the file demo.txt where we have paragraph with id p1
            //     $(".myDiv").load("demo.txt #p1")

            // })


            $(".myBtn").click(function() {
                $(".myDiv").load("demo.txt", function(response, status, xhr) {
                    if (status == "success") {
                        alert("Data extracted successfully")
                    } else {
                        alert("Error" + xhr.status + ": " + xhr.statusText)
                    }
                })
            })
        })
    </script>

</body>

</html>