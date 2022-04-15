<?php include "pages/includes/header.php";?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($news_a as $news) {?>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="<?php echo $news['image'] ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $news['name'] ?></h3>
                            <p class=""><?php echo $news['description'] ?></p>
                            <p class=""><?php echo $news['time_at'] ?></p>
                            <a href="" class="btn btn-info mr-0 float-lg-right">আরো পড়ুন</a>
                        </div>
                    </div>
                </div>
                <?php  } ?>
            </div>
        </div>
    </section>
<?php include "pages/includes/footer.php";?>
