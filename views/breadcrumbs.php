<?php $total = count($links); ?>
<ul class="breadcrumb">
	<?php foreach ($links as $pos => $link) : ?>
		<li<?php if ($link['active']) : ?> class="active"<?php endif; ?>>
			<?php if ($link['url'] != false) : ?>
				<?php echo Html::anchor($link['url'], $link['title']) ?>
			<?php else : ?>
				<?php echo $link['title'] ?>
			<?php endif; ?>

			<?php if (($pos + 1) != $total) : ?>
				<span class="divider">/</span>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
</ul>