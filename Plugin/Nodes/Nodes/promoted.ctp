<div class="nodes promoted">
	
	<!-- <h1>News & Higlights</h1>
	<hr/> -->
        
	<?php
		if (count($nodes) == 0) {
			echo __('No items found.');
		}
	?>

	<?php
		foreach ($nodes as $node):
			$this->Nodes->set($node);
	?>
	<div id="node-<?php echo $this->Nodes->field('id'); ?>" class="node node-type-<?php echo $this->Nodes->field('type'); ?>">
		<h2><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h2>
		<?php
			// Show excerpt (with "Read More" link) if provided
			// hardcode for strlen() is length of empty content plus wrapping tags
			echo $this->Nodes->info();
			$e = $this->Nodes->excerpt();
			$eLink = $this->Html->link('Read More...', $this->Nodes->field('url'));
			$b = $this->Nodes->body();
			echo (strlen($e) > 35) ? ($e . $eLink) : $b;
			echo $this->Nodes->moreInfo();
		?>
	</div>
	<?php
		endforeach;
	?>

	<div class="bs-example">
		<ul class="pagination">
			<li>
				<?php echo $this->Paginator->first('← first'); ?>
			</li>
			<li>
				<?php echo $this->Paginator->prev('← prev'); ?>
			</li>
			<li>
				<?php echo $this->Paginator->numbers(); ?>
			</li>
			<li>	
				<?php echo $this->Paginator->next('next →'); ?>
			</li>
			<li>
				<?php echo $this->Paginator->last('last →'); ?>
			</li>
		</ul>
	</div>
</div>
