<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Bloggers</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../public/assets/css/mediumish.css" rel="stylesheet" />
</head>

<body>
    <?php
    include '../private/views/components/navbar.php';
    ?>
    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">The bloggers</h1>
            <p class="lead">
                A place to share <strong>|</strong> show <strong>|</strong> view and Grow together.
            </p>
        </div>


        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Featured</span></h2>
            </div>

            <?php
            include '../private/views/pages/blog.php';
            ?>

        </section>
        <?php
        include '../private/views/components/footer.php';
        ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/javascript/index.js"></script>

</html>