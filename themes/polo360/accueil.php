	<?php $this->inc('elements/header.php');?>
	<div id="wrap">
		<div class="backdiapo">
			<div class="diapo">
				<?php $a = new Area('Diapo'); $a->display($c);?>
				
			</div>
			
		</div>
		
		<div class = "container">
			
			<h1 class="lorem"><?php $a = new Area('Contenu'); $a->display($c);?></h1>
			<hr/>
		</div>
		
		<div>
			<div id="block">
				<?php $a = new Area('block'); $a->display($c);?>

			</div>
			
			<div id="block2">
				<?php $a = new Area('block2'); $a->display($c);?>

			</div>

			<div id="block3">
			<?php $a = new Area('block3'); $a->display($c);?>

			</div>
		</div>
		
		<div class = "container">
			<?php $a = new Area('Contenu2'); $a->display($c);?>
			<hr/>
		</div>
			<div>
			<div id="block4">
				<?php $a = new Area('block4'); $a->display($c);?>

			</div>
			
			<div id="block5">
				<?php $a = new Area('block5'); $a->display($c);?>

			</div>

			<div id="block6">
				<?php $a = new Area('block6'); $a->display($c);?>
			</div>
		</div>
	</div>
	<?php $this->inc('elements/footer.php');?>