<?php

    add_shortcode('franklyAsk','frankly_widget_ask');
    add_shortcode('franklyHBadge','frankly_HoriBadge');
    add_shortcode('franklySBadge','frankly_SideBadge');
    add_shortcode('franklyAnswer','frankly_Answer');
    



    /*add_shortcode('franklyAsk','frankly_widget_ask');
    add_shortcode('franklyAskLg','frankly_widget_ask_lg');
    add_shortcode('franklySmall','frankly_widget_sm');
    add_shortcode('franklyLarge','frankly_widget_lg');
    add_shortcode('frankly','frankly_widget');*/

    //Ask Button
    /*******************************
    @ Widget Ask me  buttton
    @ Type Sm , lg , md 
    ********************************/ 
    function frankly_widget_ask( $atts ) {

        $a = shortcode_atts(
            array(
                'id' => '1',
                'type'=>'lg',
                'height' => '20px',
                'width'  => '52px',
                'style'    => 'float:right',

            ), $atts);

                
                if ( ! empty( $a['id'] ) ) {

                    $uid = get_user_meta ( $a['id'], 'frankly', true );
                    
                    if( $uid != NULL ){

                        ob_start();

                        // For Small Askme Button 

                        if($a['type']=='sm'){
                        ?>
                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="askButtonLg" data-query="" data-height="40" data-width="80" style="<?php _e($a['style']);?>"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                     

                        <?php
                    } 
                        // For Medium Ask Me button

                    if($a['type']=='md'){
                        ?>

                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="askButtonLg" data-query="" data-height="40" data-width="120" style="margin: auto"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                     

                        <?php
                    } 
                        // For Large Ask Me button

                     if($a['type']=='lg'){
                        ?>

                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="askButtonLg" data-query="" data-height="40" data-width="300" style="margin: auto"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                 

                        <?php
                    } 

                        return ob_get_clean();
                    }
                
                }

    }

     //Frankly horizontel Badge
    /*******************************
    @ Widget Frankly horizontel Badge
    @ Type Sm , lg 
    ********************************/ 

    function frankly_HoriBadge( $atts ) {

        $a = shortcode_atts(
            array(
                'id' => '1',
                'type'=>'lg',
                'height' => '20px',
                'width'  => '52px',
                'style'    => 'float:right',

            ), $atts);

                
                if ( ! empty( $a['id'] ) ) {

                    $uid = get_user_meta ( $a['id'], 'frankly', true );
                    
                    if( $uid != NULL ){

                        ob_start();

                        // For Small Frankly horizontel Badge

                        if($a['type']=='sm'){
                        ?>
                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="userWidgetLg" data-query="" data-height="185" data-width="320" style="<?php _e($a['style']);?>"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                     

                        <?php
                    } 
                     
                        // For Large Frankly horizontel Badge

                     if($a['type']=='lg'){
                        ?>

                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="userWidgetLg" data-query="" data-height="290" data-width="450" style="margin: auto"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                 

                        <?php
                    } 

                        return ob_get_clean();
                    }
                
                }

    }


     //Frankly Sidereel Badge
    /*******************************
    @ Widget Frankly Sidereel Badge
    @ Type Sm , lg  
    ********************************/ 

    function frankly_SideBadge( $atts ) {

        $a = shortcode_atts(
            array(
                'id' => '1',
                'type'=>'lg',
                'height' => '20px',
                'width'  => '52px',
                'style'    => 'float:right',

            ), $atts);

                
                if ( ! empty( $a['id'] ) ) {

                    $uid = get_user_meta ( $a['id'], 'frankly', true );
                    
                    if( $uid != NULL ){

                        ob_start();

                        // For Small Frankly Sidereel Badge

                        if($a['type']=='sm'){
                        ?>

                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="userWidgetSm" data-query="" data-height="450" data-width="230" style="<?php _e($a['style']);?>"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                     

                        <?php
                    } 

                     
                        // For Medium Frankly Sidereel Badge

                     if($a['type']=='md'){
                        ?>
                        
                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="userWidgetSm" data-query="" data-height="470" data-width="250" style="margin: auto"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                 

                        <?php
                    } 

                    // For Large Frankly Sidereel Badge

                     if($a['type']=='lg'){
                        ?>

                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="userWidgetSm" data-query="" data-height="560" data-width="300" style="margin: auto"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                 

                        <?php
                    } 

                        return ob_get_clean();
                    }
                
                }

    }

       //Frankly Sidereel Badge
    /*******************************
    @ Widget Frankly Sidereel Badge
    @ Type Sm , lg  
    ********************************/ 

    function frankly_Answer( $atts ) {

        $a = shortcode_atts(
            array(
                'id' => '1',
                'type'=>'lg',
                'height' => '20px',
                'width'  => '52px',
                'style'    => 'float:right',

            ), $atts);

                
                if ( ! empty( $a['id'] ) ) {

                    $uid = get_user_meta ( $a['id'], 'frankly', true );
                    
                    if( $uid != NULL ){

                        ob_start();

                        // For Small Frankly Sidereel Badge

                      
                        ?>

                        <div  style="<?php _e($a['style']);?>" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="userWidgetBatch" data-query="" data-height="600" data-width="850" style="<?php _e($a['style']);?>"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>                     

                        <?php
                    

                     
                                            return ob_get_clean();
                    }
                
                }

    }








/*
    function frankly_widget_ask_lg( $atts ) {

        $a = shortcode_atts(
            array(

                'id'  =>  '1',
                'height' => '50px',
                'width'  => '255px',
                'style'    => 'float:right',

            ), $atts);


            if ( ! empty( $a['id'] ) ) {

                $uid = get_user_meta ( $a['id'], 'frankly', true );

                if( $uid != NULL ){

                    ob_start();
                    ?>
                    <iframe src="https://frankly.me/widgets/askBtnLg/<?php _e($uid); ?>?url=http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"
                        height="<?php _e($a['height']);?>" width="<?php _e($a['width']);?>"
                        style="<?php _e($a['style']);?>" frameborder="0" scrolling="no" 
                        marginheight="0px" marginwidth="0px"></iframe>

                    <?php
                    return ob_get_clean();
                }
            }

    }





    //Small Widget
    function frankly_widget_sm( $atts ) {

        $a = shortcode_atts(
            array(

                'id'  =>  '1',
                'height' => '444px',
                'width'  => '202px',
                'style'    => 'float:right',
            ), $atts);

            if ( ! empty( $a['id'] ) ) {

                $uid = get_user_meta ( $a['id'], 'frankly', true );

                if( $uid != NULL ){

                    ob_start();
                    ?>

                     <iframe src="https://frankly.me/widgets/userWidgetSm/<?php _e($uid); ?>?url=http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"
                        height="<?php _e($a['height']);?>" width="<?php _e($a['width']);?>" 
                        style="<?php _e($a['style']);?>" frameborder="0" scrolling="no" 
                        marginheight="0px" marginwidth="0px"></iframe>

                    <?php
                    return ob_get_clean();
                }
            }
    }




   //Large Widget
    function frankly_widget_lg( $atts ) {

        $a = shortcode_atts(
            array(

                'id'  =>  '1',
                'height' => '480px',
                'width'  => '640px',
                'style'    => 'float:right',

            ), $atts);

            if ( ! empty( $a['id'] ) ) {
                
                $uid = get_user_meta ( $a['id'], 'frankly', true );
                
                if( $uid != NULL ){

                    ob_start();
                    ?>

                    <iframe src="https://frankly.me/widgets/userWidgetLg/<?php _e($uid); ?>?url=http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"
                        height="<?php _e($a['height']);?>" width="<?php _e($a['width']);?>"
                        style="<?php _e($a['style']);?>" frameborder="0" scrolling="no" 
                        marginheight="0px" marginwidth="0px"></iframe>

                    <?php
                    return ob_get_clean();
                }
            }
    }






    //Versatile widget - just pass type="ask/sm/lg" as attribute
    function frankly_widget( $atts ) {



        $a = shortcode_atts(
            array(

                'id'  =>  '1',
                'type'   => 'lg',
                'height' => '480px',
                'width'  => '640px',
                'style'    => 'float:right',

            ), $atts);



        if($a['type']=='ask') {

            if ( ! empty( $a['id'] ) ) {

                $uid = get_user_meta ( $a['id'], 'frankly', true );
                
                if( $uid != NULL ){

                    $a['height'] = '20px';
                    $a['width'] = '52px';

                    ob_start();

                    ?>

                    <iframe src="https://frankly.me/widgets/askBtnSm/<?php _e($uid); ?>?url=http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"
                        height="<?php _e($a['height']);?>" width="<?php _e($a['width']);?>" 
                        style="<?php _e($a['style']);?>" frameborder="0" scrolling="no" 
                        marginheight="0px" marginwidth="0px"></iframe>                      
                    
                    <?php
                    return ob_get_clean();
                }

            }

        }
        
        

        else if($a['type']=='ask_lg') {

            if ( ! empty( $a['id'] ) ) {

                $uid = get_user_meta ( $a['id'], 'frankly', true );
                
                if( $uid != NULL ){

                    $a['height'] = '50px';
                    $a['width'] = '255px';

                    ob_start();

                    ?>

                    <iframe src="https://frankly.me/widgets/askBtnLg/<?php _e($uid); ?>?url=http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"
                        height="<?php _e($a['height']);?>" width="<?php _e($a['width']);?>"
                        style="<?php _e($a['style']);?>" frameborder="0" scrolling="no" 
                        marginheight="0px" marginwidth="0px"></iframe>

                    <?php
                    return ob_get_clean();
                }

           }

        }


        else if($a['type']=='sm') {

            if ( ! empty( $a['id'] ) ) {

                
                $uid = get_user_meta ( $a['id'], 'frankly', true );
                
                if( $uid != NULL ){

                    $a['height'] = '444px';
                    $a['width'] = '202px';

                    ob_start();

                    ?>


                    <iframe src="https://frankly.me/widgets/userWidgetSm/<?php _e($uid); ?>?url=http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"
                        height="<?php _e($a['height']);?>" width="<?php _e($a['width']);?>" 
                        style="<?php _e($a['style']);?>" frameborder="0" scrolling="no" 
                        marginheight="0px" marginwidth="0px"></iframe>


                    <?php
                    return ob_get_clean();
                }
            }

        }


        else if($a['type']=='lg') {

            if ( ! empty( $a['id'] ) ) {

                $uid = get_user_meta ( $a['id'], 'frankly', true );
                
                if( $uid != NULL ){

                    ob_start();
                    ?>


                    <iframe src="https://frankly.me/widgets/userWidgetLg/<?php _e($uid); ?>?url=http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"
                        height="<?php _e($a['height']);?>" width="<?php _e($a['width']);?>"
                        style="<?php _e($a['style']);?>" frameborder="0" scrolling="no" 
                        marginheight="0px" marginwidth="0px"></iframe>

                    <?php
                    return ob_get_clean();
                }

            }

        }
    

    }*/
?>