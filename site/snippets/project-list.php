       
        	<!--
            <?php if($thumbnail = $project->thumbnail()->toFile()): ?>
            <p>
                <?php echo $project->title()->html() ?>
            </p>
            	<a href="<?php echo $project->url() ?>">
                	<img src="<?= $thumbnail->url() ?>">
            	</a>
            <?php endif; ?>
        	-->

            <?php if($thumbnail = $project->thumbnail()->toFile()): ?>
            	<a href="<?php echo $project->url() ?>">
                	<div style="background-image: url(<?= $thumbnail->url() ?>)" height="267px" width="267px">
                        <p>
                			<?php echo $project->title()->html() ?>
            			</p>
                	</div>
            	</a>
            <?php endif; ?>



























