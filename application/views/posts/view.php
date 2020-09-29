<h2><?php echo $post['title'] ?></h2>
<div class='post-body'>
    <small>Posted on: <?php echo $post['created_at']; ?></small>
    <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
    <p><?php echo $post['body']; ?></p>
</div>

<hr>

<a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('posts/delete/' . $post['id']); ?>
<form action="submit">
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
<hr>
<h3>Comments</h3>
<?php if ($comments) : ?>
    <?php foreach ($comments as $comment) : ?>
        <div class="well">
            <h5>
                <?php echo $comment['body']; ?>
            </h5>
            <br>
            <p>by <strong><?php echo $comment['name'];?> </strong> on <?php echo $comment['created_at']?>
            </p>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No comments yet</p>
<?php endif; ?>

<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name='name' class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name='email' class="form-control">
</div>
<div class="form-group">
    <label>Comment</label>
    <textarea name='body' class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button type="submit" class="btn btn-primary">Comment</button>
</form>