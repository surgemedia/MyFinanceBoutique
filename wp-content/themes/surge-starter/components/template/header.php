<header class="banner hide-print">
  <div class="container">
    <?php 
      get_component([
            'template' => 'atom/brand',
            'vars' => [
                        'logo' => get_field('logo','option')
                      ]
      ]);
      ?>

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <nav class="nav-primary">
       <?php
        if (has_nav_menu('primary_navigation')) :
           wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
      ?>
        <div class="visible-xs-inline-block social-responsive">
          <ul>
      
        <li>
            <i class="icon-telephone">
            </i>
            <a href="tel: <?php echo $tel;?> ">
            </a>
        </li>
        <li>
            <a href='<?php echo get_field("facebook","option"); ?>'>
                <i class="icon-facebook">
                </i>
            </a>
        </li>
        <li>
            <a href='<?php echo  get_field("instagram","option"); ?>'>
                <i class="icon-instagram">
                </i>
            </a>
        </li>
        <?php /* ?>
        <!-- <li>
            <a href='<?php //echo  get_field("pinterest","option"); ?>'>
                <i class="icon-pinterest">
                </i>
            </a>
        </li> -->
        <?php */ ?>
    </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
