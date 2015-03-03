
<?php $this->inc('elements/header.php'); ?>
<section>
			 <?php
							$a = new Area('contenu');
							$a->display($c);
							?>
			
			</section>
<h2 class="text_logo">Quid enim tam absurdum quam delectari multis inanimis rebus </h2>

			<hr class="trai_sect">
			<article class="wrapper">
					<div id="article_1">
						 <?php
							$a = new Area('col1');
							$a->display($c);
							?>
					</div>
					
					<div id="article_2">
						 <?php
							$a = new Area('col2');
							$a->display($c);
							?>
					</div>
					
					<div id="article_3">
						 <?php
							$a = new Area('col3');
							$a->display($c);
							?>
					</div>
			<hr class="trai_sect">
			</article>
               
           <aside class="wrapper">
				<div id="social">
 <?php
							$a = new Area('social');
							$a->display($c);
							?>
				</div>
						<div id="contact">
							 <?php
							$a = new Area('conctact');
							$a->display($c);
							?>
						</div>
						
						
						<div id="updats">
						<?php
							$a = new Area('updats');
							$a->display($c);
							?>
	
						</div>
					
					 
					
					
		   
		   </aside>
<?php $this->inc('elements/footer.php'); ?>