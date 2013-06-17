       <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo URL_PUBLIC; ?>">
                        <?php
                            $main = $this->find('/');
                            echo $main->title();
                        ?>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?php
                                foreach($main->children() as $menu_item):
                            ?>
                            <li<?php if( in_array($menu_item->slug, explode('/', $this->uri())) ) {
                                    echo ' class="active"';
                                }
                                ?>>
                                <?php 
                                    echo $menu_item->link($menu_item->title);
                                ?>
                            </li>
                                <?php
                                    endforeach;
                                ?>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
