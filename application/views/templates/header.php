<html>

<head>
    <title>BLOG</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">BLOG</a>
            </div>
            <div id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>about">About</a></li>
                    <li><a href="<?php echo base_url(); ?>posts">Posts</a></li>
                    <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>posts/new">Create post</a></li>
                    <li><a href="<?php echo base_url(); ?>categories/create">Create category</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alter alert-sucess">'.$this->session->flashdata("user_registered").'</p>'; ?>            
        <?php endif; ?>
        <?php if($this->session->flashdata('post_created')): ?>
            <?php echo '<p class="alter alert-sucess">'.$this->session->flashdata("user_registered").'</p>'; ?>            
        <?php endif; ?>
        <?php if($this->session->flashdata('post_updated')): ?>
            <?php echo '<p class="alter alert-sucess">'.$this->session->flashdata("user_registered").'</p>'; ?>            
        <?php endif; ?>
         <?php if($this->session->flashdata('post_deleted')): ?>
            <?php echo '<p class="alter alert-sucess">'.$this->session->flashdata("user_registered").'</p>'; ?>            
        <?php endif; ?>
        <?php if($this->session->flashdata('category_created')): ?>
            <?php echo '<p class="alter alert-sucess">'.$this->session->flashdata("user_registered").'</p>'; ?>            
        <?php endif; ?>
       
      