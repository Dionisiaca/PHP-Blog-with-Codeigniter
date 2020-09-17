<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/new'); ?>
<form>
  <div class="form-group">
    <label>Post Title</label>
    <input type="text" class="form-control" placeholder="Add your post title" name="title">
  </div>
  <div class="form-group">
    <label>Post content</label>
    <textarea class="form-control" placeholder="Add your post content" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>