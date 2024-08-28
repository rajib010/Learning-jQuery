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
        <span class="mySpan"></span>
    </div>
    <script src="../jQuery.js"></script>
    <script>
        $(document).ready(function(){
            //.parent() gives the direct parent 
            //.parents() gives all the parents
            //.parents('ul') gives all the parents that are ul
            //parents.unitl('div') gives all the elements between those

            //.children() gives all the children 
            //.children('p.first') returns all <p> elements with class name first & are direct children
            //.find("span") gives all span elements that are descendents of div
            //.find(*) gives all descendents of div

            //.siblings() gives all the siblings elements of div
            //siblings("p") gives all the siblings that are <P>
            //next() gives all the siblings 
            //nextAll() gives all the next sibling elements
            //nextUntil() gives all the next elements until

            //similarly, we have prev(), prevAll(), prevUntil()


            //for filtering while traversing we have methods like
            //first() gives the first element
            //last() gives the last element
            //eq() returns an element with an specific index number of the selected elements. starts at 0
            //filter() will give those elements which matches the specified criteria
            //not() returns all the elements except the specified one
        })
    </script>

</body>

</html>