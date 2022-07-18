<?php

    include "partials/header.php";


?>
        <!-- Main Content-->
        <h1 class = 'text-center'> Les posts de mon blog</h1>
        <?php 
        foreach ($articles as $article) {
        echo "
        <div class='container px-4 px-lg-5'>
            <div class='row gx-4 gx-lg-5 justify-content-center'>
                <div class='col-md-10 col-lg-8 col-xl-7'>
                    <!-- Post preview-->
                    <div class='post-preview'>
                        <a href='post.html'>
                            <h2 class='post-title'>".$article['titre']. "</h2>
                        </a>
                        <p class='post-meta'>
                            Posted by
                            <a href='#!'>" .$article['login']. "</a></br>"
                             .$article['date']. "
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class='my-4' />
                </div>
            </div>
        </div>"
                    ;}

include 'partials/footer.php';
?>
       