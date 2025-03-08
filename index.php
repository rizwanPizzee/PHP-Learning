<!-- 
   A web cookie (often just called a cookie or HTTP cookie) is a small piece of data 
   that a website's server sends to your web browser, which then stores it locally on your device. 
   On subsequent visits, your browser sends the cookie back to the server, 
   allowing the website to "remember" information about you. This capability enables 
   a range of functions, including:

    Session Management: Cookies help keep you logged in and track what you do as you navigate a site 
                        for example, remembering the items in your shopping cart.

    Personalization: They store your preferences (such as language settings or layout choices) 
                    so that your experience is tailored to you.

    Tracking and Analytics: Cookies can record your browsing behavior, which is useful for 
                            website analytics or targeted advertising.

    Cookies come in various types:
    Session cookies: expire once you close your browser.
    Persistent cookies: remain on your device for a set duration or until you delete them.

    Syntax:(Cookies are stored as key value pairs in $_COOKIE associative array)

    setcookie("$key", "$value", time() + time_in_seconds, "file_path"); //time() + time_in_seconds: this is expiry time of cookie.
    Access:
    $_COOKIE["$key"]; or by foreach loop.
-->

<?php

setcookie("fav_food", "Biryani", time() + (86400 * 2), "/"); // 85400 seconds = 1 day , and forward slash(/) in file path indcate to the current file path, which means our data will store in current file.

$fav_food = $_COOKIE['fav_food'];
echo "Cookie 1: " . $fav_food . "<br><br>"; //Cookie 1: Biryani

setcookie("fav_drink", "Chai", time() + (86400 * 3), "/");
setcookie("fav_dessert", "Ice Cream", time() + (86400 * 4), "/");

$i = 1;
foreach ($_COOKIE as $key => $value) {
    echo "Cookie {$i}: {$value} <br>";
    $i++;
}
//display of loop
// Cookie 1: Biryani
// Cookie 2: Chai
// Cookie 3: Ice Cream

//Advertisement example.

if (isset($fav_food)) {
    echo "<br>Buy this Biryani! only for PKR 899.";
} else {
    echo "<br>I don't know about your favourite food.";
}


//we can check that which type of cookies current website is gathering from us.
//browser(chrome)->developer tools->Application->Cookies (if have file Name/URL select it).
?>