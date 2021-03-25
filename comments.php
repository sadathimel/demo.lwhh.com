<div class="comments">
	<h2 class= "comments-title">
		<?php
		$alpha_cn = get_comments_number();
		if (1== $alpha_cn) {
		 	_e("1 Comments", "alpha"); 
		 } else{
		 	echo $alpha_cn." ".__("Comments", "alpha"); 
		 }

		?>
	</h2>

	

	<div class="comment-list">
		<?php 
			wp_list_comments();
		?>

			<div class="comment-pagination">
				<?php 
					the_comments_pagination(array( 
						'screen_reader_text' =>__('Pagination', 'alpha'),
						'prev_text' => '<'. __('Previous Comments','alpha'),
						'nest_text' => '>'. __('Next Comments','alpha'),
					));
				?>	
			</div>

			<?php
			if (!comments_open()) {
				_e("Comments are closed");
			}
		?>
	</div>
	
	<div class="comment-form">
		<?php
			comment_form();
		?>
	</div>
	
</div>