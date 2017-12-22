<?php snippet('head') ?>

	<body>

<!-- LEAVE ALONE ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

		<details>

			<summary>

				<h1>
                    <?php echo $page->title()->html() ?>
                </h1>

				<img src="assets/images/+x.svg" alt="About" height="30px" width="30px">

			</summary>

            <?php if($mypic = $page->photo()->toFile()): ?>
                <img src="<?= $mypic->url() ?>" alt="The author and designer in Oia, Santorini, Greece" height="200px" width="200px">
            <?php endif; ?>

			<p>
        		<?php echo $page->about()->kirbytext() ?>
        	</p>

		</details>

		<h2>
        	<?php echo $page->tagline()->html() ?>
        </h2>

        
        <div>

		<?php foreach ($page->children()
        		            ->visible() 
                		    ->flip() as $project): ?>

            <?php snippet('project-list', array('project' => $project)) ?>

        <?php endforeach ?>

		</div>



<!-- LEAVE ALONE vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->		

	</body>
</html>


























