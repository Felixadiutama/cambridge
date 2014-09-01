<div class="container">
	<div class="col-md-12">
		<div id="collections-menu">
		<?php
			$collections = get_terms(
				'collections', array(
				'hide_empty' => 0
			) );
			foreach ($collections as $collection) {
		?>
			<ul>
				<li>
					<a href="/<?php echo $collection->slug;?>"><?php echo $collection->name;?></a>
				</li>
			</ul>

		<?php }?>

		</div>
	</div>
</div>
