<?php

class Frankly_Widget extends WP_Widget {
    

    function __construct() {
        parent::__construct(
            'frankly_widget',
            __( 'Frankly.me', 'frankly-me' ),
            array( 'description' => __( 'Sidebar widget for Frankly.me', 'frankly-me' ), )
        );
    }



    public function widget( $args, $instance ) {

        $widget_type = empty($instance['frankly_widget_type']) ? 'ask':  $instance['frankly_widget_type'];


        echo $args['before_widget'];

        // Vartical badge Start Here


        /*********************************************
        @ Vartical Widget *************************
        *********************************************/

        if($widget_type=='vertical')
        {
            echo $widget_type;
            $widget_height=444;
            $widget_width=202;

            if ( ! empty( $instance['frankly_userid'] ) ) {
                
                $uid = get_user_meta ( $instance['frankly_userid'], 'frankly', true );

                if( $uid != NULL ){

                    ?>
                    
              <div  style="" class="franklywidget" data-user="<?php _e($uid); ?>" data-widget="userWidgetSm" data-query="" data-height="450" data-width="230" ><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script>
                
               <?php }

            }

        }

        // Vartical badge end Here


        /*********************************************
        @ Ask button  lg Widget *************************
        *********************************************/
        if($widget_type=='asklg')
        {
            $widget_height=20;
            $widget_width=52;

            if ( ! empty( $instance['frankly_userid'] ) ) {

                $uid = get_user_meta ( $instance['frankly_userid'], 'frankly', true );
                
                if( $uid != NULL ){

                    ?>
                  <div  style="" class="franklywidget" data-user="<?=$uid; ?>" data-widget="askButtonLg" data-query="" data-height="40" data-width="300" style="margin: auto"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script> 

              <?php  }
            }


        }

        /*********************************************
        @ Ask button  md Widget *************************
        *********************************************/
        if($widget_type=='askmd')
        {
            $widget_height=20;
            $widget_width=52;

            if ( ! empty( $instance['frankly_userid'] ) ) {

                $uid = get_user_meta ( $instance['frankly_userid'], 'frankly', true );
                
                if( $uid != NULL ){

                    ?>
                  <div  style="" class="franklywidget" data-user="<?=$uid; ?>" data-widget="askButtonLg" data-query="" data-height="40" data-width="120" style="margin: auto"><a href="https://frankly.me">Frankly.me</a></div>
                        <script src="https://frankly.me/js/franklywidgets.js"> </script> 

              <?php  }
            }


        }


        


        echo $args['after_widget'];
    }




    public function form( $instance ) {
    
        $args = array(
                'meta_key'     => 'frankly',
                'meta_value'   => '',
                'meta_compare' => '!=',
                'orderby'      => 'login',
                'order'        => 'ASC',
                'fields'       => 'all',
            ); 

        $users = get_users($args); 

        if(count($users)>0){
                    
                $frankly_userid = ! empty( $instance['frankly_userid'] ) ? $instance['frankly_userid'] : __( '', 'frankly-me' );
            
            ?>
            
                <p>
            
                    <label for="<?php echo $this->get_field_id( 'frankly_userid' ); ?>">
                        <?php _e( 'Frankly.me User Id:' ); ?>
                    </label>

                    <select class="widefat" id="<?php echo $this->get_field_id( 'frankly_userid' ); ?>"
                     name="<?php echo $this->get_field_name( 'frankly_userid' ); ?>" type="text" >
                        <?php
                        foreach ($users as $key => $user) {
                            $x = get_user_meta ( $user->ID, 'frankly', true );

                            ?>
                            
                            

                            <option value="<?php echo $user->ID;?>"  <?php echo (($frankly_userid == $user->ID)?'selected':''); ?> >
                             <?php echo $x;?> ( for user having WP login id: <?php echo $user->user_login; ?> ) </option>

                            <?php

                        }
                        
                        ?>

                    </select>


                </p>


            <?php
            
                $frankly_widget_type = ! empty( $instance['frankly_widget_type'] ) ? $instance['frankly_widget_type'] : __( 'ask', 'frankly-me' );
            
            ?>
            
                <p>
                
                    <label for="<?php echo $this->get_field_id( 'frankly_widget_type' ); ?>"><?php _e( 'Widget Type:' ); ?></label>

                    <select class='widefat' id="<?php echo $this->get_field_id('frankly_widget_type'); ?>"
                            name="<?php echo $this->get_field_name('frankly_widget_type'); ?>" type="text">
                              
                        <option value='asklg'<?php echo ($frankly_widget_type=='asklg')?'selected':''; ?>>Ask Large Button</option>
                        <option value='askmd'<?php echo ($frankly_widget_type=='askmd')?'selected':''; ?>>Ask Medium Button</option>
                        <option value='vertical'<?php echo ($frankly_widget_type=='vertical')?'selected':''; ?>>Vertical Descriptive Widget</option>
                        <!--<option value='lg'<?php //echo ($frankly_widget_type=='lg')?'selected':''; ?>>Large Descriptive Widget (280x340)</option>-->
                    </select>

                </p>


                <p>
                    * Only those users are shown in the dropdown those who have registered their frankly.me user settings in Profile information.
                </p>

            <?php
            }

            else{

                ?>
                
                <p>
                    <b style="color:red"> To use our widgets, you first need to add frankly.me profile information of required user in his Wordpress User settings. If you don't know where it is, just head on to Admin Panel>Users, select the required user and then scroll to the bottom and fill out his Frankly.me Profile Information.</b>
                </p>

                <?php

            }

    }




    public function update( $new_instance, $old_instance ) {
        $instance = array();

        $instance['frankly_userid'] = ( ! empty( $new_instance['frankly_userid'] ) ) ? strip_tags( $new_instance['frankly_userid'] ) : '';


        $instance['frankly_widget_type'] = ( ! empty( $new_instance['frankly_widget_type'] ) ) ? strip_tags( $new_instance['frankly_widget_type'] ) : '';

        return $instance;
    }

}




function register_frankly_widget() {
    register_widget( 'Frankly_Widget' );
}

add_action( 'widgets_init', 'register_frankly_widget' );

/***********************************************************************
* @ Collect poll result Through Wp Ajax 
 **********************************************************************/

/*add_action( 'wp_ajax_my_poll', 'get_poll' );


function get_poll() {
    global $wpdb;
    $poll_id=$_POST['poll_id'];
    $answer=$_POST['answer'];
    $d=mktime(11, 14, 54, 8, 12, 2014);
    $created= date("Y-m-d h:i:sa", $d);

    $Insert=$wpdb->insert(
                'wp_frankly_ans',
                array('poll_id' => $poll_id,
                    'vote' => $answer,
                    'created'=>$created
                     )
                );
    /*******************  Count vote **************
    $sql="SELECT count(*) FROM wp_frankly_ans WHERE vote='YES' AND poll_id='$poll_id'";
    $count_yes=$wpdb->get_var($sql);
    $sql="SELECT count(*) FROM wp_frankly_ans WHERE vote='NO' AND poll_id='$poll_id'";
    $count_no=$wpdb->get_var($sql);
    echo json_encode(array('YES'=>$count_yes,
            'NO'=>$count_no));
     wp_die();
}*/


?>