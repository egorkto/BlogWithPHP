<?php 
include_once 'database/pdo.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php include_once __DIR__.'/includes/head.php' ?>
    <body>
        <?php include_once __DIR__.'/includes/navigation.php' ?>
        <?php include_once __DIR__.'/includes/index-header.php' ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <?php 
                    $posts = $pdo->query('SELECT id,title,subtitle,authorName,created_at FROM posts ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
                    foreach($posts as $post)
                    { ?>
                        <div class="post-preview">
                            <a href="/post.php?id=<?= $post['id']?>">
                                <h2 class="post-title"><?php echo $post['title'] ?></h2>
                                <h3 class="post-subtitle"><?php echo $post['subtitle'] ?></h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!"><?php echo $post['authorName'] ?></a>
                                on <?php echo $post['created_at'] ?>
                            </p>
                        </div>
                        <hr class="my-4" />
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php include_once __DIR__.'/includes/footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
