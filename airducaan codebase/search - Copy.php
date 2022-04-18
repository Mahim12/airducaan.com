<!DOCTYPE HTML>
<html manifest="app_cache.appcache">

<head>
    <title>Incomm | <?php echo $_POST["name"]; ?></title>
    <link rel="icon" type="image/svg" href="assets/photos/icons/favicon.svg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>

<body style="background-color:#f9f9f9;">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="assets/photos/icons/Logo1.svg" alt="image" style="height:55px; object-fit:cover;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mr-lg-4">
                <li class="nav-item">
                    <a class="nav-link navs-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navs-link" href="contact.php">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link navs-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Fashion & Lifestyle">Fashion & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Gadgets & Electronics">Gadgets and Electronics</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Babies & Toys">Babies & Toys</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Sports">Sports</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Books">Books</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Home & Lifestyle">Home & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Accessories">Accessories</button></form>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" name="name" action="search.php" target="_self">
                <input class="form-control mr-sm-2" name="name" type="search" placeholder="I want to compare. . ." required>
                <button class="btn btn-danger my-2 my-sm-0" type="submit" onsubmit="return OnButton1();">Search</button>
            </form>
        </div>
    </nav>
    <div class="page-footer hide-on-desktop-only">
        <div class="search-container">
            <form method="post" name="name" action="combine.php" target="_self">
                <input type="search" placeholder="I want to compare. . ." name="name" required>
                <button onsubmit="return OnButton1();" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="container mt-5 mt-lg-3">
        <div class="row">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-4 mb-md-4 mb-2'>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Search</li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $_POST["name"]; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row loader another">
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">
                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5 mb-md-5 mb-5">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dace";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $search = $_POST["name"];
            $a = explode(" ", $search);
            $stringofsearch = implode("+", $a);
            $exists = "select weblink from `" . $stringofsearch . "` LIMIT 1";
            if ($conn->query($exists) !== FALSE) {
                //This table exists
                $sql = "select * from `" . $stringofsearch . "` ORDER BY rand()";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $row['weblink'] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $row['imagelink'] . "' alt='" . $row['imagelink'] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>" . $row['price'] . "</h5> <p class='card-text'>" . $row['description'] . "</p> <p class='card-text'>" . $row['vendor'] . "</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                    }
                } else {
                    echo '<div class="col-lg-12 col-md-12 col-12"><div class="default-value"><span>We could not find what you were looking for anywhere <img src = "assets/photos/icons/broken-heart-png.png" class = "default-image"/> <br> We really hope to serve you better in the future. </span></div></div>';
                }
            } else {
                //This table doesn't exist
                include_once 'searchtrialmuncha.php';
                include_once 'searchtrialgajabko.php';
                include_once 'searchtrialsastodeal.php';
                include_once 'searchtrialthulo.php';
                $mainlink = array_merge($links1, $outputthulolinks, $links4, $gajabkolinks);
                $maindescription = array_merge($description1, $descriptionthulo, $description3, $gajabkodescription);
                $mainimages = array_merge($images1, $images2, $images3, $gajabkoimagearray);
                $mainprices = array_merge($sastodealprices, $thuloprices, $pricesmuncha,  $last);
                $mainnames = array_merge($sastodealname, $thuloname1, $munchaname,  $gajabkoname);
                $last2 = array();
                foreach ($mainprices as $p) {
                    array_push($last2, str_replace("8360", " ", $p));
                }
                $last3 = array();
                foreach ($last2 as $p) {
                    if (preg_match_all("/[$\d,.]+/", $p, $numbers)) {
                        $lastnum = end($numbers[0]);
                        array_push($last3, $lastnum);
                    }
                }
                $it = array_map(null, $mainimages, $last3, $maindescription, $mainlink, $mainnames);
                /* This is the filter code */
                $it = array_filter($it, function ($value) {
                    return (bool) $value[0] && (bool) $value[1] && (bool) $value[2] && (bool) $value[3] && (bool) $value[4];
                });
                shuffle($it);
                if (empty($it)) {
                    echo '<div class="col-lg-12 col-md-12 col-12"><div class="default-value"><span>We could not find what you were looking for anywhere <img src = "assets/photos/icons/broken-heart-png.png" class = "default-image"/> <br> We really hope to serve you better in the future. </span></div></div>';
                } else {
                    $sql = "CREATE TABLE IF NOT EXISTS `" . $stringofsearch . "` (description VARCHAR(250) NOT NULL,price VARCHAR(250) NOT NULL,weblink VARCHAR(1000),imagelink VARCHAR(1000),vendor VARCHAR(50))";
                    $conn->query($sql);
                    foreach ($it as $a) {
                        echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $a[3] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $a[0] . "' alt='" . $a[2] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>$a[1]</h5> <p class='card-text'>$a[4]</p> <p class='card-text'>$a[2]</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                        $insertvalues = "INSERT INTO `" . $stringofsearch . "` (description,price,weblink,imagelink,vendor) VALUES ('$a[2]','$a[1]','$a[3]','$a[0]','$a[4]')";
                        $conn->query($insertvalues);
                    }
                }
            }
            $conn->close();
            ?>
        </div>
    </div>
    <!-- Footer 
    <div class="page-footer hide-on-mobile-and-tablet">
        <div class="search-container">
            <form method="post" name="name" action="combine.php" target="_self">
                <input type="search" placeholder="I want to compare. . ." name="name" required>
                <button onsubmit="return OnButton1();" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
     Footer -->
    <!-- Footer hiding right now for mobile and tablets
    <div class="footer hide-on-desktop-only">
        <div class="row hide-on-desktop-only">
            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0">
                <a href="home.php" class="active"><img src="assets/photos/icons/home.png" style='width:100%; height:50px; object-fit:contain;' /></a>
            </div>
            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0 pt-1">
                <a href="about.php"><img src="assets/photos/icons/about.png" style='width:100%; height:45px; object-fit:contain;' /></a>
            </div>
            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0 pt-1">
                <a href="contact.php"><img src="assets/photos/icons/contact.png" alt="photo" style='width:100%; height:48px; object-fit:contain;' /></a>
            </div>
        </div>
    </div>
     Footer -->
    <script>
        function OnButton1() {
            document.name.action = "searchtrialgajabko.php" // First target    
            document.name.submit(); // Submit the page
            document.name.action = "searchtrialthulo.php" // Second target   
            document.name.submit();
            document.name.action = "searchtrialmuncha.php" // third target   
            document.name.submit(); // Submit the page
            document.name.action = "searchtrialsastodeal.php" // third target   
            document.name.submit(); // Submit the page
            return true;
        }
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                    ".loader").style.visibility = "visible";
            } else {
                document.querySelector(
                    ".loader").style.display = "none";
            }
        };
        $(document).ready(function() {
            $(".card-img-top").on("error", function() {
                $(this).attr('src', 'assets/photos/products/Logo.png');
            });
        });
    </script>
</body>

</html>


































<!DOCTYPE HTML>
<html manifest="app_cache.appcache">

<head>
    <title>Incomm | <?php echo $_POST["name"]; ?></title>
    <link rel="icon" type="image/svg" href="assets/photos/icons/favicon.svg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
</head>

<body style="background-color:#f9f9f9;">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="assets/photos/icons/Logo1.svg" alt="image" style="height:55px; object-fit:cover;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mr-lg-4">
                <li class="nav-item">
                    <a class="nav-link navs-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navs-link" href="#">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link navs-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Fashion & Lifestyle">Fashion & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Gadgets & Electronics">Gadgets and Electronics</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Babies & Toys">Babies & Toys</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Sports">Sports</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Books">Books</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Home & Lifestyle">Home & Lifestyle</button></form>
                        <div class="dropdown-divider"></div>
                        <form id="search-form" method="post" name="name" action="search.php" target="_self"><button class="dropdown-item" name="name" value="Accessories">Accessories</button></form>

                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" name="name" action="search.php" target="_self">
                <input class="form-control mr-sm-2" name="name" type="search" placeholder="I want to compare. . ." required>
                <button class="btn btn-danger my-2 my-sm-0" type="submit" onsubmit="return OnButton1();">Search</button>
            </form>
        </div>
    </nav>
    <div class="page-footer hide-on-desktop-only">
        <div class="search-container">
            <form method="post" name="name" action="combine.php" target="_self">
                <input type="search" placeholder="I want to compare. . ." name="name" required>
                <button onsubmit="return OnButton1();" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="container mt-5 mt-lg-3">
        <div class="row">
            <div class='col-lg-12 col-md-12 col-12 mb-lg-4 mb-md-4 mb-2'>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Search</li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $_POST["name"]; ?></li>
                    </ol>
                </nav>
            </div>
        </div>


        <div class="row loader another">
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
            <div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'>
                <div class="loading">

                    <div class='img-container'>
                        <img class='card-img-top' src='assets/photos/icons/load.gif' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                    <div class='p-2'>
                        <img class='card-img-top' src='assets/photos/icons/loadingdiv.png' alt='loading. . .' style='width:100%; height:100%; object-fit:contain;' />
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-lg-5 mb-md-5 mb-5">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dace";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $search = $_POST["name"];
            $a = explode(" ", $search);
            $stringofsearch = implode("+", $a);


            $exists = "select weblink from `" . $stringofsearch . "` LIMIT 1";

            if ($conn->query($exists) !== FALSE) {
                //This table exists
                $sql = "select * from `" . $stringofsearch . "` ORDER BY rand()";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $row['weblink'] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $row['imagelink'] . "' alt='" . $row['imagelink'] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>" . $row['price'] . "</h5> <p class='card-text'>" . $row['description'] . "</p> <p class='card-text'>" . $row['vendor'] . "</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                    }
                } else {
                    echo '<div class="col-lg-12 col-md-12 col-12"><div class="default-value"><span>We could not find what you were looking for anywhere <img src = "assets/photos/icons/broken-heart-png.png" class = "default-image"/> <br> We really hope to serve you better in the future. </span></div></div>';
                }
            } else {
                //This table doesn't exist



                $search = $_POST["name"];
                // turn this into an array
                $a = explode(" ", $search);

                $sastodealsentence = 'https://www.sastodeal.com/catalogsearch/result/?q=+';
                $sastodealstring = implode("+", $a);
                $sastodealposition = '51';
                $sastodeallink = substr_replace($sastodealsentence, $sastodealstring, $sastodealposition, 0);

                $thulosentence = 'https://thulo.com/search/?subcats=Y&pcode_from_q=Y&pshort=Y&pfull=Y&pname=Y&pkeywords=Y&search_performed=Y&q=&cid=0&security_hash=edbccce8d8005c400f73077be7db6306';
                $thulostring = implode("+", $a);
                $thuloposition = '109';
                $thulolink = substr_replace($thulosentence, $thulostring, $thuloposition, 0);

                $munchasentence = 'https://muncha.com/Shop/Search?merchantID=1&CategoryID=0&q=';
                $munchastring = implode("+", $a);
                $munchaposition = '59';
                $munchalink = substr_replace($munchasentence, $munchastring, $munchaposition, 0);

                $gajabkosentence = 'https://gajabko.com/?s=';
                $gajabkostring = implode("+", $a);
                $gajabkoposition = '23';
                $gajabkolink = substr_replace($gajabkosentence, $gajabkostring, $gajabkoposition, 0);

                $urls = array($sastodeallink, $thulolink, $gajabkolink, $munchalink);
                foreach ($urls as $url) {
                    include_once('simple_html_dom.php');
                    $html = @file_get_html($url);

                    //sastodeal website extraction begins
                    $links1 = array();
                    $description1 = array();
                    $sastodealname = array();

                    foreach ($html->find('a.product-item-link') as $a) {
                        $links1[] = $a->href;
                        $description1[] = $a->plaintext;
                        array_push($sastodealname, "Sastodeal");
                    }
                    $images1 = array();
                    foreach ($html->find('img.product-image-photo') as $img) {
                        $images1[] = $img->src;
                    }
                    $prices1 = array();
                    foreach ($html->find('span[data-price-type=finalPrice]') as $p) {
                        $prices1[] = $p->plaintext;
                        $prices1 = preg_replace('/[^\d,.]+/', '', $prices1);
                    }
                    $sastodealprices = array();
                    foreach ($prices1 as $p) {
                        if (preg_match_all("/[$\d,]+/", $p, $numbers)) {
                            $lastnum = end($numbers[0]);
                            array_push($sastodealprices, $lastnum);
                        }
                    }
                    //sastodeal website extraction ends

                    //thulo website extraction ends
                    $links2 = array();
                    $description2 = array();
                    $thuloname = array();
                    $descriptionthulo = array();
                    $outputthulolinks = array();
                    $thuloname1 = array();

                    foreach ($html->find('a.product-title') as $a) {
                        $links2[] = $a->href;
                        $outputthulolinks = array_slice($links2, 2);
                        $description2[] = $a->plaintext;
                        $descriptionthulo = array_slice($description2, 2);
                        array_push($thuloname, "Thulo");
                        $thuloname1 = array_slice($thuloname, 3);
                    }
                    $images2 = array();
                    $imagesthulo = array();
                    foreach ($html->find('div[class=ty-grid-list__image] img[class=ty-pict    ]') as $img) {
                        $images2[] = $img->src;
                        //$imagesthulo = array_slice($images2, 2);
                    }
                    $prices2 = array();
                    foreach ($html->find('span.ty-price-num') as $p) {
                        $prices2[] = $p->plaintext;
                        $prices2 = preg_replace('~\D~', '', $prices2);
                    }
                    $thuloprices = array();
                    foreach ($prices2 as $p) {
                        if (preg_match_all("/[$\d,]+/", $p, $numbers)) {
                            $lastnum = end($numbers[0]);
                            array_push($thuloprices, $lastnum);
                        }
                    }

                    //thulo website extraction ends

                    //gajabko website extraction beginss
                    $gajabkolinks = array();
                    $gajabkodescription = array();
                    $gajabkoname = array();

                    foreach ($html->find('a.woocommerce-LoopProduct-link') as $a) {
                        $gajabkolinks[] = $a->href;
                        $gajabkodescription[] = $a->plaintext;
                        array_push($gajabkoname, "Gajabko");
                    }
                    $last = array();
                    foreach ($gajabkodescription as $p) {
                        if (preg_match_all("/[$\d,]+/", $p, $numbers)) {
                            $lastnum = end($numbers[0]);
                            array_push($last, $lastnum);
                        }
                    }
                    $images5 = array();
                    $output[] = array();
                    foreach ($html->find('img') as $img) {
                        $images5[] = $img->src;
                        $output = array_slice($images5, 144);
                    }
                    $gajabkoimagearray = array();
                    $i = 0;
                    foreach ($output as $key => $value) {
                        if ($i % 2 == 0) {
                            $gajabkoimagearray[$key] = $value;
                        }
                        $i++;
                    }
                    //gajabko website extraction ends

                    //muncha website extraction begins
                    $links3 = array();
                    $munchaname = array();

                    foreach ($html->find('a.product-link') as $a) {
                        $links3[] = $a->href;
                        array_push($munchaname, "Muncha");
                    }
                    $symbol = 'muncha.com';
                    $links4 = array();
                    foreach ($links3 as $a) {
                        $links4[] = $symbol . str_replace(' ', " $symbol", $a);
                    }
                    $description3 = array();
                    foreach ($html->find('h5.product-caption-title-sm') as $a) {
                        $description3[] = $a->innertext;
                    }
                    $images3 = array();
                    foreach ($html->find('img.product-img-primary') as $img) {
                        $images3[] = $img->src;
                    }
                    $prices3 = array();
                    $pricesmuncha = array();
                    foreach ($html->find('span.product-caption-price-new') as $p) {
                        $prices3[] = $p->plaintext;
                    }
                    foreach ($prices3 as $p) {
                        array_push($pricesmuncha, substr($p, 4));
                    }
                }
                //muncha website extraction ends
                $mainlink = array_merge($links1, $outputthulolinks, $links4, $gajabkolinks);
                $maindescription = array_merge($description1, $descriptionthulo, $description3, $gajabkodescription);
                $mainimages = array_merge($images1, $images2, $images3, $gajabkoimagearray);
                $mainprices = array_merge($sastodealprices, $thuloprices, $pricesmuncha,  $last);
                $mainnames = array_merge($sastodealname, $thuloname1, $munchaname,  $gajabkoname);
                $last2 = array();
                foreach ($mainprices as $p) {
                    array_push($last2, str_replace("8360", " ", $p));
                }
                $last3 = array();
                foreach ($last2 as $p) {
                    if (preg_match_all("/[$\d,.]+/", $p, $numbers)) {
                        $lastnum = end($numbers[0]);
                        array_push($last3, $lastnum);
                    }
                }
                $it = array_map(null, $mainimages, $last3, $maindescription, $mainlink, $mainnames);

                /* This is the filter code */
                $it = array_filter($it, function ($value) {
                    return (bool) $value[0] && (bool) $value[1] && (bool) $value[2] && (bool) $value[3] && (bool) $value[4];
                });


                shuffle($it);
                if (empty($it)) {
                    echo '<div class="col-lg-12 col-md-12 col-12"><div class="default-value"><span>We could not find what you were looking for anywhere <img src = "assets/photos/icons/broken-heart-png.png" class = "default-image"/> <br> We really hope to serve you better in the future. </span></div></div>';
                } else {
                    $sql = "CREATE TABLE IF NOT EXISTS `" . $stringofsearch . "` (description VARCHAR(250) NOT NULL,price VARCHAR(250) NOT NULL,weblink VARCHAR(1000),imagelink VARCHAR(1000),vendor VARCHAR(50))";
                    $conn->query($sql);
                    foreach ($it as $a) {
                        echo "<div class='col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-4 mb-2'><a href = '" . $a[3] . "' class='card-link' target='_blank'><div class='card'><div class='img-container'><img class='card-img-top' src='" . $a[0] . "' alt='" . $a[2] . "' style = 'width:100%; height:100%; object-fit:contain;'/></div><div class='card-body'><h5 class='card-title'>$a[1]</h5> <p class='card-text'>$a[4]</p> <p class='card-text'>$a[2]</p><button class='btn btn-shop mt-lg-3 mt-md-3 mt-3'>SHOP</button></div></div></a></div>";
                        $insertvalues = "INSERT INTO `" . $stringofsearch . "` (description,price,weblink,imagelink,vendor) VALUES ('$a[2]','$a[1]','$a[3]','$a[0]','$a[4]')";
                        $conn->query($insertvalues);
                    }
                }
            }
            $conn->close();
            ?>
        </div>
    </div>
    <!-- Footer -->

    <div class="page-footer hide-on-mobile-and-tablet">
        <div class="search-container">
            <form method="post" name="name" action="combine.php" target="_self">
                <input type="search" placeholder="I want to compare. . ." name="name" required>
                <button onsubmit="return OnButton1();" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- Footer -->


    <div class="footer hide-on-desktop-only">
        <div class="row hide-on-desktop-only">

            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0">
                <a href="home.php" class="active"><img src="assets/photos/icons/home.png" style='width:100%; height:50px; object-fit:contain;' /></a>
            </div>

            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0 pt-1">
                <a href="about.php"><img src="assets/photos/icons/about.png" style='width:100%; height:45px; object-fit:contain;' /></a>
            </div>

            <div class="col-lg-4 col-md-4 col-4 hide-on-desktop-only p-0 pt-1">
                <a href="contact.php"><img src="assets/photos/icons/contact.png" alt="photo" style='width:100%; height:48px; object-fit:contain;' /></a>
            </div>

        </div>
    </div>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                    ".loader").style.visibility = "visible";
            } else {
                document.querySelector(
                    ".loader").style.display = "none";

            }
        };


        $(document).ready(function() {
            $(".card-img-top").on("error", function() {
                $(this).attr('src', 'assets/photos/products/Logo.png');
            });
        });
    </script>

</body>

</html>