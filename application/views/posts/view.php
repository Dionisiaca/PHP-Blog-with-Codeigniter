<h2><?php echo $post['title'] ?></h2>
<div class='post-body'>
    <small>Posted on: <?php echo $post['created_at']; ?></small>
    <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
    <p><?php echo $post['body']; ?></p>
</div>

<hr>

<a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
<form action="submit">
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
