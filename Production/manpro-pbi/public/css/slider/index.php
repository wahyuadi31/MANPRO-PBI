<?PHP include'./db.php';?>
<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Nivo slider dengan mysqli php</title>
<link rel="stylesheet" href="./css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen" />
<style type="text/css">
body {margin:0px; padding:0px;}
</style>
</head>
<body>


<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">
<?PHP $result = mysqli_query($conn, "SELECT * FROM slider order by slider.id_slider ASC")or die(mysqli_error());
while($row = mysqli_fetch_assoc($result)) {
$images_slider = strip_tags($row['images']);
$description_slider = strip_tags($row['description']);

echo'<img src="images/'.$images_slider.'" data-thumb="images/'.$images_slider.'" alt="" title="'.$description_slider.'"/>';
}?>
</div>
</div>


<script type="text/javascript" src="./js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="./js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(window).load(function() {
$('#slider').nivoSlider();
});
</script>
</body>
</html>