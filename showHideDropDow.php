<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar using jQuery</title>
    <style>
        nav {
            width: 90vw;
            margin: auto;
            line-height: 3vw;
            height: 3vw;
            background-color: blue;
        }

        .items-list {
            list-style: none;
            display: flex;
            width: 100%;
            justify-items: center;
            justify-content: space-between;
        }

        .sub-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 7px;
            margin: 0;
            padding: 0;
            display: none;
        }

        .sub-items {
            min-width: 6vw;
            background: goldenrod;
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <ul class="items-list">
            <li class="nav-items">Home</li>
            <li class="nav-items">Address</li>
            <li class="nav-items">Contact</li>
            <li class="nav-items">DropDown
                <ul class="sub-list">
                    <li class="sub-items">Sub-item1</li>
                    <li class="sub-items">Sub-item2</li>
                    <li class="sub-items">Sub-item3</li>
                </ul>
            </li>
            <li class="nav-items"></li>
        </ul>
    </nav>
    <script src="jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $(".nav-items:has(.sub-list)").hover(function() {
                $(this).find(".sub-list").toggle();
            })
        })
    </script>
</body>

</html>