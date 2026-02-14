<!-- blogs.php -->
<section class="blog-section">

    <div class="container">

        <!-- BLOG HEADING -->
        <div class="blog-heading center">
            <h1>Solar Energy Blogs</h1>
            <p>Insights, innovations, and stories to power a sustainable & greener future.</p>
        </div>

        <!-- BLOG GRID -->
        <div class="blog-grid">

            <?php foreach($blogs as $blog): ?>

            <div class="blog-card">
                <div class="blog-card-image">
                    <img src="<?= base_url('uploads/blogs/'.$blog->image); ?>" alt="<?= $blog->title; ?>">
                </div>
                <div class="blog-card-content">
                    <div class="blog-meta">
                        <span class="date">
                            <i class="far fa-calendar-alt"></i> <?= date('d F, Y', strtotime($blog->created_at)); ?>
                        </span>
                    </div>
                    <h3><?= $blog->title; ?></h3>
                    <p class="desc">
                        <?= substr(strip_tags($blog->description), 0, 150); ?>...
                    </p>
                    <a href="<?= base_url('user/blog_details/'.$blog->id); ?>" class="read-btn">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>