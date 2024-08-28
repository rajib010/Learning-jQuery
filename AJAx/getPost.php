<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post</title>
</head>

<body>
    <button id="btn">Click</button>
    <script src="../jQuery.js"></script>
    <script>
        //get method
        // $(document).ready(function() {
        //     $("#btn").click(function() {
        //         $.get("https://jsonplaceholder.typicode.com/todos/1", function(data, status) {
        //             alert("Data: " + JSON.stringify(data) + "\nStatus: " + status);
        //         });
        //     });
        // });



        //post method
        $(document).ready(function() {
            $("button").click(function() {
                $.post("https://jsonplaceholder.typicode.com/posts  ", {
                        userId: 1,
                        title: "foo",
                        body: "bar",
                        id: 1
                    },
                    function(data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    });
            });
        })
    </script>
</body>

</html>