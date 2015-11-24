<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller contains the general home site pages.
 *
 */

class General extends MY_Controller
{

	protected $models = array( 'Api' );

    protected $helpers = array( 'url' );

    /**
	 * Override construct()
	 *
	 * @access public
	 */
	public function __construct()
	{
		parent::__construct();

         // Load via MY_Controller
        $this->set_page_title('Example Page Title');
        $this->set_meta_description('Example Meta Description.');
        $this->load_css(array(
            // relative path to your page specific css eg: /css/example.css
            'css/styles.css'
        ));
        $this->load_js(array(
            // relative path to your page specific javascript eg: /js/example.js
            // Remember we are going to handle the JS with require.js
            'js/plugins.js',
            'js/libs/modernizr-2.8.3-respond-1.1.0.min.js'
        ));
        $this->data['bodyClass'] = 'home';
    }

    public function index()
    {
        // $this->data['users'] = array('user1', 'user2');

    }

    public function show($id)
    {
        if ($this->input->is_ajax_request())
        {
            $this->view = FALSE;
            $this->layout = FALSE;
            $this->data['user'] = $this->Api->get($id);
            $this->return_json($this->data);
        }else{
            $this->data['user'] = $this->Api->get($id);
            // $this->data['groups'] = $this->group->get_all();
            // Assign your data to an array
            // relative path to your views file.php eg: index.php or custom/index.php
            // pass your data to the view
            // $this->view = 'general/wat';
        }
	}


}