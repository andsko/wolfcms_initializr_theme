<?php 
$this->includeSnippet('hero');
$page_article = $this->find('/articles/');
$standard_column =<<<EOT
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a href="#" class="btn">View details »</a></p>
                </div>
EOT;
if ($page_article->childrenCount() > 0) {
    $last_articles = $page_article->children(array('limit'=>3, 'offset' => 0, 'order'=>'page.created_on DESC'));
?>
<div class="row">
<?php
    foreach ($last_articles as $i=>$article):
?>
                <div class="span4">
                    <h2><?php echo $article->title(); ?></h2>
                    <?php echo $article->content(); ?>
                    <?php if ($article->hasContent('extended')) {
                        echo  '<p> <a href="'.$article->url().'" class="btn">View details »</a></p>';  
                    }
                    ?>
                </div>

<?php
    endforeach;
    switch ($i){
        case 0:echo $standard_column;
        case 1:echo $standard_column;
    }
}
?>
</div>