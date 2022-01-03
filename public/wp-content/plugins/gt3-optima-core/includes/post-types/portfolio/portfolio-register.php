<?php


/**
* Portfolio Register
*/
class gt3PortfolioRegister{

	public $cpt;
	public $dest_taxonomy;
    private $tag_taxonomy;
	private $slug;

	function __construct(){
		$this->cpt = 'portfolio';
		$this->taxonomy = 'portfolio-category';
        $this->tag = 'portfolio-tag';
		$this->slug =  'portfolio';
        if (function_exists('gt3_option')) {
            $slug_option = gt3_option('portfolio_slug');
        }else{
            $slug_option = '';
        }

        if (empty($slug_option)) {
            $this->slug = 'portfolio';
        }else{
            $this->slug = sanitize_title( $slug_option );
        }

		if (function_exists('gt3_option')) {
			$single_label = gt3_option('portfolio_name');
		}else{
			$single_label = '';
		}

		if (empty($single_label)) {
			$single_label = apply_filters( "gt3_portfolio_single_label_filter", esc_html__('Portfolio', 'gt3_core'));
		}

		$this->single_label=$single_label;
		//$this->multiple_label  = apply_filters( "gt3_portfolio_multiple_label_filter", __('Portfolios', 'gt3_core'));

	}

	public function register(){
		$this->registerPostType();
		$this->registerTax();
	}

	private function registerPostType(){

        register_post_type($this->cpt,
            array(
                'labels' 		=> array(
                    'name' 				=> $this->single_label,
                    'singular_name' 	=> $this->single_label,
                    'add_item'			=> wp_sprintf( __('New %s', 'gt3_themes_core'), $this->single_label ),
                    'add_new_item' 		=> wp_sprintf( __('Add New %s', 'gt3_themes_core'), $this->single_label ),
                    'edit_item' 		=> wp_sprintf( __('Edit %s', 'gt3_themes_core'), $this->single_label )
                ),
                'public'		=>	true,
                'has_archive' => true,
                'rewrite' 		=> 	array('slug' => $this->slug),
                'menu_position' => 	5,
                'show_ui' => true,
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes','comments'),
                'menu_icon'  =>  'dashicons-format-gallery'
            )
        );

	}

	private function registerTax() {
        $labels = array(
            'name' => wp_sprintf( __('%s Categories', 'gt3_themes_core'), $this->single_label ),
            'singular_name' => wp_sprintf( __('%s Category', 'gt3_themes_core'), $this->single_label ),
            'search_items' =>  wp_sprintf( __('Search %s Categories', 'gt3_themes_core'), $this->single_label ),
            'all_items' => wp_sprintf( __('All %s Categories', 'gt3_themes_core'), $this->single_label ),
            'parent_item' => wp_sprintf( __('Parent %s Category', 'gt3_themes_core'), $this->single_label ),
            'parent_item_colon' => wp_sprintf( __('Parent %s Category:', 'gt3_themes_core'), $this->single_label ),
            'edit_item' => wp_sprintf( __('Edit %s Category', 'gt3_themes_core'), $this->single_label ),
            'update_item' => wp_sprintf( __('Update %s Category', 'gt3_themes_core'), $this->single_label ),
            'add_new_item' => wp_sprintf( __('Add New %s Category', 'gt3_themes_core'), $this->single_label ),
            'new_item_name' => wp_sprintf( __('New %s Category Name', 'gt3_themes_core'), $this->single_label ),
            'menu_name' => __( 'Categories','gt3_core' ),
        );

        register_taxonomy($this->taxonomy, array($this->cpt), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => $this->slug.__('-category','gt3_core') ),
        ));

        $labels = array(
            'name' => wp_sprintf( __('%s Tags', 'gt3_themes_core'), $this->single_label ),
            'singular_name' => wp_sprintf( __('%s Tag', 'gt3_themes_core'), $this->single_label ),
            'search_items' =>  wp_sprintf( __('Search %s Tags', 'gt3_themes_core'), $this->single_label ),
            'all_items' => wp_sprintf( __('All %s Tags', 'gt3_themes_core'), $this->single_label ),
            'parent_item_colon' => wp_sprintf( __('Parent %s Tag:', 'gt3_themes_core'), $this->single_label ),
            'edit_item' => wp_sprintf( __('Edit %s Tag', 'gt3_themes_core'), $this->single_label ),
            'update_item' => wp_sprintf( __('Update %s Tag', 'gt3_themes_core'), $this->single_label ),
            'add_new_item' => wp_sprintf( __('Add New %s Tag', 'gt3_themes_core'), $this->single_label ),
            'new_item_name' => wp_sprintf( __('New %s Tag Name', 'gt3_themes_core'), $this->single_label ),
            'menu_name' => __( 'Tags','gt3_core' ),
        );

        register_taxonomy($this->tag, array($this->cpt), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => $this->slug.__('-tag','gt3_core') ),
        ));
    }

    public function registerSingleTemplate($single){
        global $post;
        if($post->post_type == $this->cpt) {
            if(!file_exists(get_template_directory().'/single-'.$this->cpt.'.php')) {
                return plugin_dir_path( dirname( __FILE__ ) ) .'portfolio/templates/single-'.$this->cpt.'.php';
            }
        }
        return $single;
    }

    public function registerArchiveTemplate($archive){
        global $post;
        if($post->post_type == $this->cpt && is_archive()) {
            if(!file_exists(get_template_directory().'/archive-'.$this->cpt.'.php')) {
                return plugin_dir_path( dirname( __FILE__ ) ) .'portfolio/templates/archive-'.$this->cpt.'.php';
            }
        }

        return $archive;
    }

}

