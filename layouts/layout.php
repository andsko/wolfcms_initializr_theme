<?php $this->includeSnippet('header'); ?>
<?php $this->includeSnippet('menu'); ?>
<div class="container">
    <?php echo $this->content(); ?> 
</div>
<?php $this->includeSnippet('columns'); ?>
<?php $this->includeSnippet('footer'); ?>