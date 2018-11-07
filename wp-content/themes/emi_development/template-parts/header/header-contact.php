<?php

?>
<div class="row">
<div class="col-0 col-xl-4">
</div>
   
            <div class="mobile-alt col-xl-2 col-lg-3 col-md-12 col-sm-12 col-6 pt-0 pr-0 float-right">		        
                <span>
                    <i class="fas fa-mobile-alt"></i>
                    <?php 
                        if( get_theme_mod( 'emi_development_call1','' ) != '') { 
                        echo esc_html( get_theme_mod('emi_development_call1','') ); ?>
                </span>
            </div>
    <?php } ?>
    <div class="mail col-xl-3  col-lg-4 col-md-12 col-sm-12 col-6 pt-0 pr-0 float-right">
        <?php if( get_theme_mod( 'emi_development_email','' ) != '') { ?>
            <i class="far fa-envelope "></i>
            <span>
                <?php echo esc_html( get_theme_mod('emi_development_email','') ); ?>
            </span>
        <?php } ?>
    </div>
    <div class="col-xl-3 col-lg-5 col-md-12 col-sm-12 col-12 pt-0 pr-0 float-right">
    <div class="readbutton">
        <?php if( get_theme_mod( 'emi_development_donate','' ) != '') { ?>
            <a href="#"><?php echo esc_html( get_theme_mod('emi_development_donate','') ); ?></a>
        <?php } ?>
    </div>
        </div>
</div>