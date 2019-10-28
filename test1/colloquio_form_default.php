<html><head>
<style type="text/css">
* {
  box-sizing: border-box;
}
<?php include 'colloquio_css.php'; ?>
</style>

</head>
<body>


<div class="container">
	<form action="/bot_colloqio.php" method="post">

		<input type="text" name="nome"  id="fname" placeholder="Il tuo nome">

		<input type="text" name="mit"  id="fname" placeholder="Es:tuonome@mail.com">
		
		<input type="text" name="ogg"  id="fname" placeholder="Oggetto del messaggio">

		<textarea id="area" name="corpo"  placeholder="Scrivi qui il tuo messaggio" >Scrivi qui il tuo messaggio</textarea>

		<input type="submit" value="Invia">
	</form>
</div>
</body>
</html>
