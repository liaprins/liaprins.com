<?php snippet('head') ?>

    <body>

<!-- LEAVE ALONE ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

        <a href="../liaprins"> 
            <img src="../assets/images/backarrow.svg" alt="Back to all projects" height="10px" weight="30px">
        </a>

        <ul>

            <a href="#opportunities">
                <li>Opportunities</li>
            </a>

            <a href="#process">
                <li>Process</li>
            </a>

            <a href="#outcomes">
                <li>Outcomes</li>
            </a>

            <a href="#livelearn">
                <li>Live + learn</li>
            </a>

        </ul>

        <h1>
            <?php echo $page->title()->html() ?>
        </h1> 

        <h2>
            <?php echo $page->intro()->html() ?>
        </h2>



        <?php if($page->opportunities()->exists()): ?>

        <details open>

            <summary>
                <h3 id="opportunities">Opportunities</h3>
            </summary>

            <?php echo $page->opportunities()->html() ?>

        </details>

        <?php endif ?>



        <?php if($page->process()->exists()): ?>

        <details open>

            <summary>
                <h3 id="process">Process</h3>
            </summary>

            <?php echo $page->process()->html() ?>

        </details>

        <?php endif ?>



        <?php if($page->outcomes()->exists()): ?>

        <details open>

            <summary>
                <h3 id="outcomes">Outcomes</h3>
            </summary>

            <?php echo $page->outcomes()->html() ?>

        </details>

        <?php endif ?>



        <?php if($page->livelearn()->exists()): ?>

        <details open>

            <summary>
                <h3 id="livelearn">Live + learn</h3>
            </summary>

            <?php echo $page->livelearn()->html() ?>

        </details>

        <?php endif ?>



        <hr>

        <div>

        <?php foreach ($page->parent()
                            ->children()
                            ->visible() 
                            ->flip() as $project): ?>

            <?php snippet('project-list', array('project' => $project)) ?>

        <?php endforeach ?>


        </div>


<!-- LEAVE ALONE vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->      

    </body>
</html>


























