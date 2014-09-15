<?php
class IndexController extends Controller{
    public function index(){
        global $wpdb;
        $oi = $wpdb->get_results("SELECT * FROM wp_posts");
        var_dump($oi);
    }
}
?>
