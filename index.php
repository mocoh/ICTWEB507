<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mindroom Student Ideas</title>
	<link rel="stylesheet" href="style.css">
</head>

<div class="bg-dark">
    <div class="row row-fullWidth">
        <h1><?php  bloginfo('description') ?> </h1>
    </div>
</div>
<div class="row">
    <div class="column">
      <ul class="bar bar-center">
        <?php while (have_posts()) : the_post(); ?>
            <li>
                <h2><?php the_title() ?> </h2> 
            </li>
        <?php endwhile ?>
      </ul>
      <a class="bar" href="<?php the_permalink?>"> Read More </a>
    </div>
</div>

<div class="row">
    <div class="column">
        <?php while (have_posts()) : the_post(); ?>

            <h2><?php the_title() ?> </h2>

            <div><?php the_excerpt() ?></div>

            <a class="a" href="<?php the_permalink?>"> Read More </a>

        <?php endwhile ?>
    </div>
</div>