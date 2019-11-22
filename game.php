<h1>Steen Papier Schaar</h1>
<h2>Speler 1: </h2>
<?php
if (!isset($_GET['een'])) {
?>
<form method="GET">
	<select name="een">
		<option value="steen">Steen</option>
		<option value="papier">Papier</option>
		<option value="schaar">Schaar</option>
	</select>
</form>
<?php
} else {
?>
<p><?php echo $_GET['een']; ?></p>
<?php
}
?>
<h2>Speler 2: </h2>
<?php
if (isset($_GET['een'])) {
if (!isset($_GET['twee'])) {
?>
<form method="GET">
	<select name="twee">
		<option value="steen">Steen</option>
		<option value="papier">Papier</option>
		<option value="schaar">Schaar</option>
	</select>
	<input type="hidden" name="een" value="<?php echo $_GET['een'] ?>"
</form>
<?php
} else {
?>
<p><?php echo $_GET['twee']; ?></p>
<?php
}
}
?>