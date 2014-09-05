<div class="container sidebar-wrapper">
	<div class="col-md-12">
		<div id="collections-menu">
			<ul class="list-inline">
				Collections
				<?php
					$collections = get_terms(
						'collections', array(
						'hide_empty' => 0
					) );
					foreach ($collections as $collection) {
				?>
					<li>
						<a href="/<?php echo $collection->slug;?>"><?php echo $collection->name;?></a>
					</li>

				<?php }?>
			</ul>

		</div>
	</div>
</div>
