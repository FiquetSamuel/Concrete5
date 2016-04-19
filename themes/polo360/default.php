<?php $this->inc('elements/header.php');?>
<div class="container">
<?php $a = new Area('Contenu');
	  $a->display($c);
?>
</div>
<?php $this->inc('elements/footer.php');?>