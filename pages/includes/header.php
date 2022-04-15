<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<section>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="mt-5 ml-5">
                    <span>সোমবার, ১৫ ফেব্রুয়ারি ২০২২</span>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/img/pa.jpg" alt="" style="height: 75px; margin-left: 165px">
            </div>
            <div class="col-md-3">
                <div class="mt-5 ml-5">
                    <span>সংস্করণ:<span class="font-weight-bold ml-1">বাংলা</span></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sticky-top">
    <div class="card">
        <nav class="navbar navbar-expand-md bg-light navbar-light">
            <div class="container">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active"><a href="action.php?pages=all-news" class="nav-link">সর্বশেষ</a></li>
                    <?php foreach ($categories as $category) { ?>
                        <li class="nav-item"><a href="action.php?pages=category-news&&category_id=<?php echo $category['id'] ?>" class="nav-link"><?php echo $category['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</section>


