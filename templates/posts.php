<!DOCTYPE html>
<html>
	<head>
		<title>List post in blog</title>

		<style type="text/css">
			
			img.thumbnail {
			    float: left;
			    width: 250px;
			    height: auto;
			   	margin-right: 15px;
			}

			.item-post {
			    clear: both;
			    padding: 20px;
			}

			.time {
			    float: left;
			    margin-right: 15px;
			}

			h2 {
			    margin-top: 0px;
			    margin-bottom: 5px;
			}

		</style>

	</head>

	<body>

		<?php foreach ($posts as $post) : ?>
			<div class='item-post'>
				<img class="thumbnail" src="<?php echo $post['url_thumbnail'] ?>">
				<h2><?php echo $post['title'] ?></h2>

				<div class="time"><?php echo $post['time'] ?></div>
				<div class="tag"><?php echo $post['tag'] ?></div>


				<p><?php echo $post['content'] ?></p>

			</div>
		<?php endforeach; ?>


	</body>
</html>