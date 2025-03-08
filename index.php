<!-- 
    include():  it copies the content of a file (like PHP or HTMl or text)
                and paste(or include) into the current PHP file.
                it makes the section/s of a website reusable, sections like header, footer etc.
                if we make changes in one piece, all the other sections where the code is used also change.
    
                in this ecample(code), i have created a website where header and footer is everywhere, means in each webpage
                like in home, about, contact etc.
                so we just need to create a single webpages/files of header and footer,
                and then include in each section of home, about and contact file.webpage.
-->

<?php
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h2>
        This is Home Page
    </h2>
    <p>
        This is all about my <b>Home Page</b>.
    </p>
    <hr>
</body>

</html>

<?php
include("footer.html");
?>