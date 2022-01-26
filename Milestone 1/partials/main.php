<main>
    <div class="container">
        <div class="discs-list">

            <?php foreach($database as $album) { ?>
                <!-- SINGLE DISC -->
                <div class="single-disc">

                    <!-- Poster -->
                    <img src="<?php echo $album['poster'] ?>" alt="">

                    <!-- Title -->
                    <div class="title"><?php echo $album['title'] ?></div>

                    <!-- Author -->
                    <div class="author"><?php echo $album['author'] ?></div>

                    <!-- Year -->
                    <div class="year"><?php echo $album['year'] ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>