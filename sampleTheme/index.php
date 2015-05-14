<!--
    base of template use \core\cls\browser class for show blocks
    first of all define this namespace
-->
<?php use \core\cls\browser as browser;?>
<!DOCTYPE html>
<head>
    <!--this const load headers of page-->
    </#HEADERS#/>

    <!--PAGE_TITTLE load tittle of page-->
    <title></#PAGE_TITTLE#/></title>
</head>
<body>
<div class="navbar navbar-default">
    <div class="container">
        <!--if you want to access to site name you can use </#SITE_NAME#/> -->
        <a class="navbar-brand" href="/"></#SITE_NAME#/></a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <!--
                with this method you can set name for your position
                in this example we use sidebar1 for this position
             -->
            <?php browser\page::position('sidebar1'); ?>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!--
                name 'content' is a position for show content of page that's user request with url
            -->
            <?php browser\page::position('content'); ?>
        </div>
    </div>
</div> <!-- /container -->
</body>
</html>