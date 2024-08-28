<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, tr,td{
            border: 1px solid black;
        }
    </style>
</head>


<body>

    <input type="text" id="myInput">

    <table id="myTable">
        <tr>
            <th>FirstName</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr> 
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@gmail.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>moe</td>
            <td>mary@gmail.com</td>
        </tr>
        <tr>
            <td>Juan</td>
            <td>Loe</td>
            <td>juan@gmail.com</td>
        </tr>
       
    </table>
    <script src="jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup",function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                })
            })
        })
    </script>
</body>

</html> 
