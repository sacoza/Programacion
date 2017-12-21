<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:blue;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<?php $were="news" ?>
<ul>
  <li><a class= "<?php if ($were=="home") {
    echo "active";
  } ?>" href="home.php">Home</a></li>
  <li><a class= "<?php if ($were=="News") {
    echo "active";
  } ?>" href="news.php">News</a></li>
  <li><a class= "<?php if ($were=="Contact") {
    echo "active";
  } ?>" href="#contact">Contact</a></li>
</ul>

</body>
</html>
