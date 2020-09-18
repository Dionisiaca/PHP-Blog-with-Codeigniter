<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <small>Posted on: <?php echo $post['created_at']; ?></small>
    <p><?php echo word_limiter($post['body'], 150); ?></p>
    <a class='btn btn-default' href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a>    
<?php endforeach; ?>