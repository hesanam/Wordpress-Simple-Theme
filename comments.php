<article class="the-article the-comments">
					<!-- <h4>Comments</h4>
					<div class="comment-info">
						<div class="name"><a href="">Alireza</a></div>
						<div class="created-at">
							<a href="">Augest 6, 2016 at 10:31 am</a>
						</div>
						<div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam sunt, minima, nam voluptatem velit dignissimos voluptates! Animi nostrum molestias omnis quos praesentium tenetur sequi vitae.</div>
						<div class="comment-btns clearfix">
							<a href="">Reply</a>
						</div>
					</div>
					<div class="comment-info">
						<div class="name"><a href="">Ehsan</a></div>
						<div class="created-at">
							<a href="">Augest 5, 2016 at 09:02 pm</a>
						</div>
						<div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus nostrum sequi nisi iste, eveniet temporibus at! Laboriosam natus veritatis consequuntur, saepe, ipsa vel sequi facilis eaque explicabo velit aliquam dicta dolorem at aut aperiam distinctio aspernatur repellendus necessitatibus culpa illum!</div>
						<div class="comment-btns clearfix">
							<a href="">Reply</a>
						</div>
					</div>
					<div class="comment-info">
						<div class="name"><a href="">Sourena</a></div>
						<div class="created-at">
							<a href="">Augest 3, 2016 at 03:24 pm</a>
						</div>
						<div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sed ut dolores sequi, iste, quia.</div>
						<div class="comment-btns clearfix">
							<a href="">Reply</a>
						</div>
					</div>
					 -->
					<?php if ( have_comments() ) : ?>
						<h4>Comments</h4>
							<?php 
										$reply = array(
											'walker'            => null,
											'max_depth'         => '3',
											'style'             => 'div',
											'type'              => 'all',
											'reply_text'        => 'Reply',
											
											'avatar_size'       => 0,
											
										     'echo'              => true     // boolean, default is true
										);

										  
										?>
										
											<?php wp_list_comments( $reply); ?>
										
							<?php the_comments_navigation(); ?>
					<?php else : // or, if we don't have comments:
						if ( ! comments_open() ) : ?>
							<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>
						<?php endif; // end ! comments_open() ?>
					<?php endif; // end have_comments() ?>

					<div class="leave-comment clearfix">
						<?php 
						$args = array(
							
							'comment_field' => '<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
								'<textarea id="message" name="comment"  aria-required="true"></textarea>',
						    'comment_notes_after' => '',
						    
						);
						comment_form($args); ?>
					</div>
				</article>