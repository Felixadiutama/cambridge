<div class="row">
	<div class="col-md-12">
		<div id="collections-menu">
			<ul class="list-inline">

				<?php

					$collections = get_terms(
						'collections', array(
						'hide_empty' => 0
					) );
					foreach ($collections as $collection) {
						if ($term == $collection->slug || $singleTerm->slug == $collection->slug) {
							$active = 'hoverActive';
						}else{
							$active = '';
						}
				?>
					<li>
						<a href="/<?php echo $collection->slug;?>" class="<?php echo $active;?>"><?php echo $collection->name;?></a> |
					</li>

				<?php }?>
			</ul>

		</div>
	</div>
</div>