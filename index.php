<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Search the web for sites and images.">
    <meta name="keywords" content="Search engine,doodle,websites">
    <meta name="author" content="Reece kenney">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Doodle</title>
    <link rel ="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class ="wrapper indexPage">

        <div class="mainSection">

            <div class="logoContainer">
                <img src="assets/images/doodle_logo.png" title = "Logo of my site" alt="Site logo">
            </div>

            <div class = "searchContainer">

                <form action="search.php" method="GET"> 
                    <input class = "searchBox" type="text" name = "term" >
                    <input class = "searchButton" type="submit" value = "Search">
                </form>

            </div>

        </div>

    </div>
</body>
</html>