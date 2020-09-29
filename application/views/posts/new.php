<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/new'); ?>
<form>
  <div class="form-group">
    <label>Post Title</label>
    <input type="text" class="form-control" placeholder="Add your post title" name="title">
  </div>
  <div class="form-group">
    <label>Post content</label>
    <textarea id="editor1" class="form-control" placeholder="Add your post content" name="content"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach ($categories as $category) : ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>