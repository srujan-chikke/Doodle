<?php
include("config.php");
include("classes/siteResultsProvider.php");
    if(isset($_GET["term"])){
        $term = $_GET["term"];
    }else{
        exit("You must enter a search term");
    }


    // if(isset($_GET["type"])){
    //     $type = $_GET["type"];
    // }else{
    //     $type = "sites";
    // }

    $type = isset($_GET["type"]) ?$_GET["type"] : "sites" ;
    $page = isset($_GET["page"]) ?$_GET["page"] : 1 ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Doodle</title>
    <link rel ="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class ="wrapper ">
        <div class="header">

            <div class="headerContent">
                <div class="logoContainer">
                    <a href = "index.php">
                    <img src="assets/images/doodle_logo.png" alt="">
                    </a>
                </div>

                <div class="searchContainer">

                        <form action="search.php" method = "GET">
                                <div class="searchBarContainer">
                                    <input type="text" class="searchBox" name ="term"  value="<?php echo $term ; ?>">
                                    <button class = searchButton>
                                        <img src="assets/images/icons/search.png" alt="">
                                    </button>
                                </div>
                        </form>

                </div>
                
            </div>

            <div class="tabsContainer">

                <ul class="tabList" >
                    <li class ="<?php echo $type == 'sites' ? 'active' : ''?>">
                        <a href='<?php echo "search.php?term=$term"; ?>'>
                            Sites
                        </a>
                    </li>
                    <li class ="<?php echo $type == 'images' ? 'active' : ''?> ">
                        <a href='<?php echo "search.php?term=$term"; ?>'>
                            Images
                        </a>
                    </li>
                </ul>

            </div>

        
        </div>
        <div class="mainResultSection">
            <?php
                $resultProvider = new siteResultsProvider($con);
                $pageLimit = 20;
                $numResults =  $resultProvider->getNumResults($term);

                echo "<p class = 'resultsCount'>$numResults results found</p>";

                echo $resultProvider->getResultsHtml($page,$pageLimit,$term) ;
            ?>
        </div>


        <div class="paginationContainer">


            <div class ="pageButtons">

                <div class="pageNumberContainer">
                    <img src="assets/images/pageStart.png" alt="">
                </div>
                <?php

                    $currentPage = 1;
                    $pagesLeft = 10;

                    while($pagesLeft != 0) {

                        if($currentPage == $page ){
                            echo "<div class = 'pageNumberContainer'>
                                <img src = 'assets/images/page.png'>
                                <span class = 'pageNumber'>$currentPage</span>
                            </div>";
                        }else{
                            echo "<div class = 'pageNumberContainer'>
                                <a href = ''>
                                    <img src = 'assets/images/page.png'>
                                    <span class = 'pageNumber'>$currentPage</span>
                                </a>
                            </div>";
                        }

                        
                        
                        $currentPage++;
                        $pagesLeft--;
                    }



                ?>

                <div class="pageNumberContainer">
                    <img src="assets/images/pageEnd.png" alt="">
                </div>

            </div>

        </div>


    </div>
</body>
</html>