<!DOCTYPE html>
<html lang="">
<head>
    <?php include_once("include_head.php");?>
</head>
<body>
    <?php include_once("include_header.php");?>
    <div class="banner">
        <div class="content">
            <h1>NEWS</h1>
            <div class="breadcrumb">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="item" itemprop="item" href="index.php" title="Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="item" itemprop="item" href="news.php" title="News">
                            <span itemprop="name">News</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="news_nav">
        <a href="" class="active">All News</a>
        <a href="">Company</a>
        <a href="">Exhibition</a>
        <a href="">Successful</a>
    </div>
    <div class="main">
        <div class="content">
            <div class="news_info">
                <h1>All News</h1>
                <p>Welcome to watch the latest developments of ITA</p>
                <div class="news_group">
                    <div class="box">
                        <a href="">
                            <img src="https://via.placeholder.com/465x350" alt="">
                        </a>
                        <p>2020.12.05<a href="">Successful</a></p>
                        <h3><a href="">Elegant Art-Craft</a></h3>
                    </div>
                    <div class="box">
                        <a href="">
                            <img src="https://via.placeholder.com/465x350" alt="">
                        </a>
                        <p>2020.12.05<a href="">Successful</a></p>
                        <h3><a href="">Elegant Art-Craft</a></h3>
                    </div>
                    <div class="box">
                        <a href="">
                            <img src="https://via.placeholder.com/465x350" alt="">
                        </a>
                        <p>2020.12.05<a href="">Successful</a></p>
                        <h3><a href="">Elegant Art-Craft</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("oem_url.php");?>
    <?php include_once("include_footer.php");?>
</body>
</html>