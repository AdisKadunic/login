<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>proba3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="css/proba3.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="top">
	<img class="top-mustang" src="photos/logo.png" alt="vrh2 ">
	</div>
	<?php include "index.php"; ?>
	<style>
	<?php include "css/navbar.css" ;?>
	</style>
	<div id="vid">
		<video width="600" controls>
			<source src="mov_bbb.mp4" type="video/mp4">
  			<source src="mov_bbb.ogg" type="video/ogg"> 
		</video>
	</div>
	<div id="about"> 
		<div class="column left">
		<div id="portret">
			<img class="about-por" src="photos/bill.png" alt="por">
		</div>
		<div id="text">
			<p class="text1">MY NAME</p>
			<p class="text2">IS</p>
			<p class="text3">GORE</p>
			<p class="text4">BROWN</p>
			</div>
		</div>
		<div id="text-side">
			<div class="column right">
				<p class="tex-lor-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aliquam ullam voluptatibus commodi totam. Officiis vitae voluptatem, facere commodi sunt nobis hic? Neque, dignissimos esse vitae. Quos, cupiditate commodi necessitatibus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem qui vero culpa numquam facilis totam fuga possimus quis, illum quae repudiandae pariatur eaque odio adipisci dolore obcaecati temporibus ab placeat?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, hic corporis facere labore illum accusamus nam, numquam velit nulla nesciunt aperiam architecto at modi necessitatibus, asperiores? Repudiandae, placeat commodi ipsum.</p>
			</div>
			<div id="about-us-text">
				<div class="column right">
				<p class="about-us-us">ABOUT-US</p>
				<p class="about-us-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cupiditate expedita doloremque ut quam reiciendis sint, cum nisi mollitia, aut sit quaerat quos repudiandae minus dolorem id velit? Veniam, consequatur.
				Natus eligendi totam quae, voluptas sed architecto saepe obcaecati, facere in doloribus nesciunt necessitatibus nulla enim amet eos cupiditate quia debitis ducimus! Iure beatae iusto aliquid quas illum dicta voluptatibus!
				Quae dicta, quibusdam, esse, quod minus corrupti magnam soluta quis atque placeat cum cumque reprehenderit quos culpa, nulla quia enim! Quas amet repellendus perspiciatis quam quis excepturi, eligendi magnam consequatur.</p>
				<p class="about-us-us">RULES</p>
				<p class="about-us-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusantium nisi quas optio nemo voluptas temporibus nihil libero sequi ipsum amet cum, enim voluptate culpa placeat quod ipsa. Repellendus, rem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur consectetur distinctio nulla, ea optio doloremque libero minus provident sed excepturi reprehenderit repudiandae iusto perferendis beatae odit illum quia tempora sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, voluptates officiis eius, iure aperiam ratione accusantium ipsa illo dignissimos aliquid quaerat sint doloribus ex tenetur repellendus aut quis impedit, labore.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="previe">
		<--! staviti 3 random automobila za pregled -->  
	</div>
	
	<div id="contacts">
		<p class="contacts-top">CONTACTS</p>
			<form id="contacts-input" action="contact/contactform.php" method="post">
				<input type="text" name="name" id="fname" placeholder="First name"><br>
				<input type="email" name="mail" id="email" placeholder="E-mail"><br>
				<input type="text" name="subject" id="lname" placeholder="Subject"><button type="submit" name="submit" id="button">SEND MAIL</button><br>
				<textarea rows="4" cols="50" name="massage" id="ask" placeholder="Your question here"></textarea>
			</form>
	</div>
</body>
</html>
