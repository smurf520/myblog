<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>single</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/single.css">
</head>
<body>
	<div id="header_contact">
		<img src="images/bg2.jpg" alt="">
		<div class="top_mask">
			<div class="mask_list">
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">PORTFOLIO</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
				<span class="close_btn">
				</span>
			</div>
		</div>
		<span class="open_btn"></span>
	</div>
	<div id="single">
		<div class="wrap">
			<div class="single_container">
				<img src="images/single.jpg" class="single_img">
				<p class="img_content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil </p>
				<div class="comment_list">
					<h5 class="comment_author">
						"Written by"
						<a href="#">admin</a>
					</h5>
					<div class="comment_content">
						<img src="images/avatar.png" class="comment_img">
						<p>
							"View all posts by:"
							<a href="#">admin</a>
						</p>
					</div>
				</div>
				<div class="comment_area">
					<h3>Add New Comment</h3>
					<form>
						<p class="name">
							<label>Name</label>
							<input type="text" >
						</p>
						<p class="email">
							<label>Email</label>
							<input type="text" >
						</p>
						<p class="website">
							<label>Website</label>
							<input type="text" >
						</p>
						<p class="subject">
							<label>Subject</label>
							<textarea></textarea>
						</p>
						<p class="sub">
							<input type="submit" value="Submit Comment" class="subb">
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="wrap">
			<div class="footer_left">
				<p>Template by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
			</div>
			<div class="footer_right">
				<ul>
					<li class="facebook"><a></a></li>
					<li class="twitter"><a></a></li>
					<li class="dri"><a></a></li>
					<li class="tech"><a></a></li>
				</ul>
			</div>
		</div>
	</div>
<script src="js/require.js" data-main="js/single.js"></script>	
</body>
</html>