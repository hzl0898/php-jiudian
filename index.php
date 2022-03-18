<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="宾馆管理" name="keywords"/>
<meta content="宾馆展示" name="description"/>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="css/styles.css" rel="stylesheet" type="text/css"/>
<link href="css/index.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
$("#main-menu #nav_0").addClass("active");
});
</script>
<style>
    .room-container .room-box .img-container img{
        height: 196px;
    }
    .room-container .room-box .details{
        min-height: 192px;
    }
</style>
<title>宾馆管理</title>
</head>
<body class="homepage trans-header sticky white-datepicker">
<div id="page-body-wrap">
<?php
require("head.html");
?>
<div id="home-top-section">
<div id="main-slider">
<div class="items">
     <img alt="banner1" src="images/b1.jpg"/>
</div>
<div class="items">
    <img alt="banner2" src="images/b2.jpg"/>
</div>
<div class="items">
    <img alt="banner3" src="images/b3.jpg"/>
</div>
<div class="items">
    <img alt="banner4" src="images/b4.jpg"/>
</div>
</div>


</div>
<div id="luxury-rooms">
<div class="heading-box">
<h2>
    <a href="javascript:;">
        房间
        <span>
            推荐
        </span>
    </a>
</h2>
<div class="subtitle">
    找到属于自己的位置，走自己的道路，人生，越努力越幸运！ 
</div>
</div>

<div class="room-container container">
<div class="row">
    <?php
      require("dbconnect.php");
      $sql="select a.pic,a.remarks,b.typename,b.price from room a,roomtype b where a.typeid=b.typeid order by roomid asc limit 8";
      $arr=mysqli_query($db_link,$sql);
      while($rows=mysqli_fetch_assoc($arr)){
    ?>
    <div class="room-box col-md-3 col-sm-6 col-xs-6">
        <div class="img-container">
            <img class='imgs' alt="" src='images/<?php echo $rows["pic"] ?>'/>
        </div>
        <div class="details">
            <div class="title">
                <a href="javascript:;">
                    <?php echo $rows["typename"] ?>
                </a>
            </div>
            <div class="desc">
                房间标配：<?php echo $rows["remarks"] ?>...
            </div>
            <div class="price">
                <span>
                    ￥<?php echo $rows["price"] ?>
                </span>
                - 每晚
            </div>
        </div>
    </div>
    <?php } ?>
    
</div>
</div>
</div>
<div id="gallery">
<div class="heading-box">
<h2>
    <a href="javascript:;">
        宾馆相册
        <span>
            欣赏
        </span>
    </a>
</h2>
</div>
<div class="gallery-container container gallery-grid">
<div class="gallery-container">
    <ul class="image-main-box clearfix">
    <?php
      require("dbconnect.php");
      $sql="select * from news limit 8";
      $arr=mysqli_query($db_link,$sql);
      while($rows=mysqli_fetch_assoc($arr)){
    ?>
        <li class="item col-sm-3 col-xs-6 col-md-3 igal-item">
            <figure>
                <img width='269px' height='192px' alt='<?php echo $rows["title"] ?>' src='images/<?php echo $rows["spic"] ?>'/>
                <a class="more-details" data-title='<?php echo $rows["title"] ?>' href='images/<?php echo $rows["bpic"] ?>'>
                    
                </a>
                <figcaption>
                    <h4>
                        <span>
                            <?php echo $rows["describes"] ?>
                        </span>
                    </h4>
                </figcaption>
            </figure>
            <h3 class="gallery-h3-title">
                <a href="javascript:;" title='<?php echo $rows["title"] ?>'>
                    <?php echo $rows["title"] ?>
                </a>
            </h3>
        </li>
        <?php } ?> 
    </ul>
</div>
</div>
</div>
<div id="buy-theme">
<div class="inner-container container">
<div class="title">
    人生
    <span>
        越努力 越幸运
    </span>
    找到属于自己的位置，走自己的道路。
</div>
</div>
</div>
<?php
require("footer.html");
?>

</div>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>


<script src="js/helper.js"></script>
<script src="js/template.js" type="text/javascript">
</script>
</body>
</html>
