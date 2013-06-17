<?php
    $config_hero = array(
                    'header'=>'Hello, world!',
                    'text'  =>'This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.',
                    'url'   =>'#'
                    );
    
    use_helper('CreateUrl');
?>
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1><?php echo $config_hero['header']; ?></h1>
                <p><?php echo $config_hero['text']; ?></p>
                <p><a class="btn btn-primary btn-large" href="<?php echo createUrl($config_hero['url'],$this); ?>">Learn more &raquo;</a></p>
            </div>