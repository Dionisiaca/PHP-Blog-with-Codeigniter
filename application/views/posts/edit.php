<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<form>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label>Post Title</label>
    <input type="text" class="form-control" placeholder="Add your post title" name="title" value="<?php echo $post['title'] ?>" >
  </div>
  <div class="form-group">
    <label>Post content</label>
    <textarea id="editor1" class="form-control" placeholder="Add your post content" name="content"><?php echo $post['body'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>