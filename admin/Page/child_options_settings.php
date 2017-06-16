<?php
class MySettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
    	add_action( 'admin_menu', array( $this, 'add_child_theme_page' ) );
    	add_action( 'admin_init', array( $this, 'page_init' ) );
        add_action('script_options_childs',array($this,'script_options'));
    }

    /**
     * Add options page
     */
    public function add_child_theme_page()
    {
        // This page will be under "Settings"
        add_menu_page( 'Child Theme Options', 'Child Theme Options', 'edit_theme_options', 'options_child', array($this,'create_child_page'));

        if(function_exists( 'wp_enqueue_media' )&& isset($_GET['page'])&&($_GET['page'] ==='options_child')){
          wp_enqueue_media();
      }else{
          wp_enqueue_style('thickbox');
          wp_enqueue_script('media-upload');
          wp_enqueue_script('thickbox');
      }

  }

    /**
     * Options page callback
     */
    public function create_child_page()
    {
        // Set class property
    	$this->options = get_option( 'child_theme' );
    	?>
    	<div class="wrap">
    		<h1>My Settings</h1>
    		<form method="post" action="options.php">
    			<?php
                // This prints out all hidden setting fields
    			settings_fields( 'child_theme_group' );
    			do_settings_sections( 'options_child' );
                do_action('script_options_childs');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
    public function script_options(){
        ?>
        <script>
          jQuery(document).ready(function($) {
             $('.imagen_upload').click(function(e) {
                e.preventDefault();
                var	este=$(this),
                input=este.data('input-selector'),
                image=este.data('image-selector');
                var custom_uploader = wp.media({
                   title: 'Custom Image',
                   button: {
                      text: 'Upload Image'
                  },
                multiple: false  // Set this to true to allow multiple files to be selected
            })
                .on('select', function() {
                   var attachment = custom_uploader.state().get('selection').first().toJSON();
                   $(image).attr('src', attachment.url);
                   $(input).val(attachment.id);

               })
                .open();
            });
         });
     </script>
     <?php
 }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
    	register_setting(
            'child_theme_group', // Option group
            'child_theme', // Option name
            array( $this, 'sanitize' ) // Sanitize
            );

    	add_settings_section(
            'logo_options', // ID
            'Ubicaciones de Logo', // Title
            array( $this, 'print_section_info' ), // Callback
            'options_child' // Page
            );  

    	add_settings_field(
            'logo_cargador', // ID
            'Logo Cargador', // Title 
            array( $this, 'logo_cargador_callback' ), // Callback
            'options_child', // Page
            'logo_options' // Section           
            );
    	
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
    	$new_input = array();
    	if( isset( $input['imagen_top_id'] ) )
    		$new_input['imagen_top_id'] =  absint($input['imagen_top_id']);
    	if( isset( $input['imagen_on_scroll_id'] ) )
    		$new_input['imagen_on_scroll_id'] =  absint($input['imagen_on_scroll_id']);

    	return $new_input;
    }

    /** 
     * Print the Section text
     */
    public function print_section_info()
    {
    	print 'Seleccione los logos en las ubicaciones deseadas:';
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function logo_cargador_callback(){
    	$logoCargador=isset( $this->options['logo_cargador'] ) ? esc_attr( $this->options['logo_cargador']) : '';
    	$imagen=wp_get_attachment_image( $logoCargador ,null,true,array("class"=>"imagen_upload"));
    	// echo '<p><strong>Header Logo Image URL:</strong><br />';
    	echo $imagen;
    	if($imagen='')
    		echo '<img class="imagen_element imagen_upload" src="" />';
    	printf('<input class="logo_cargador_url" type="text" name="child_theme[logo_cargador]" value="%s">', $logoCargador);
    	echo '<a href="#" class="imagen_upload" data-input-selector=".logo_cargador_url" data-image-selector=".imagen_upload">Upload</a>';
    }
}

if( is_admin() )
	$my_settings_page = new MySettingsPage();