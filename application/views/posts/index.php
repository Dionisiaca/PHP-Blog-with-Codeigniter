<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
        </div>
        <div class="col-md-9">
            <small>Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong> </small>
            <p><?php echo word_limiter($post['body'], 150); ?></p>
            <a class='btn btn-default' href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read more</a>
        </div>
    </div>
<?php endforeach; ?>