<?php
// Wordpress Shortcode
function basic_shortcoder(){
    return "This is SENHAS short code.";
};

add_shortcode( 'sen', 'basic_shortcoder' );


function button_shortcode( $atts, $content = null ){
    $values = shortcode_atts( array (
      'url' => '#',
    ), $atts );
    return '<a class="btn btn-danger" href="'.esc_attr($values['url']) .'">' . $content . '</a>';
  }
add_shortcode( 'button', 'button_shortcode');


// [current_user_display_name]
function display_current_user_display_name ($atts) {

    $values = shortcode_atts( array (
        'role' => '#',
      ), $atts );
    // echo $values['role'];

    // get current user details
    $user = wp_get_current_user();
    $display_name = $user->display_name;
    $role = $user->roles[0];

    // get all the roles and their capabilities
    global $wp_roles;
	$roles = $wp_roles->roles;
    // print_r($roles);

    // get users
    $args = array(
        // 'role'    => 'subscriber',  // write here a particular role
        'role'    => $values['role'],
        'orderby' => 'user_nicename',
        'order'   => 'ASC'
    );
    $users = get_users( $args );
    foreach($users as $item) {
        print_r($item->user_nicename);
        echo "<br>";
    };

    // echo gettype($users);

    return $user->roles[0];
}
add_shortcode('user_role', 'display_current_user_display_name');