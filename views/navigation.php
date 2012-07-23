<?php $total = count($links); ?>
<?php $pos = 0; ?>
<ul <?php echo $attributes ?>>
	<?php if ($header): ?>
	<li class="nav-header">
		<?php echo $header ?>
	</li>
	<?php endif; ?>
	<?php foreach ($links as $link) : ?>
		<li class="<?php if ($link['active']) : ?>active<?php endif; ?><?php if ($pos == 0) : ?> first<?php endif; ?><?php if (($pos + 1) != $total) : ?> last<?php endif; ?>">
			<?php echo Html::anchor($link['url'], $link['title'], array('class' => $link['class'])) ?>
		</li>
		<?php $pos++; ?>
	<?php endforeach; ?>
</ul>