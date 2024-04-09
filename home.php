<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct()
    {
        parent::__construct();
        $this->load->model(array('mo_sql'));	 
    }

	public function index()
	{ 
		
        
	}
	
	
	
public function register()
{

	if($this->input->server('REQUEST_METHOD') === 'POST')
	{
	if($this->input->post('submit'))
	{
$data_to_storecat = array(	
	                 'FirstName'   => $this->input->post('Name'),
					 'LastName' =>$this->input->post('name'),	
	                 'Email'   => $this->input->post('email'),
					 'Password'   => $this->input->post('Password'),
                     'gender ' =>$this->input->post('gender'),
                     'Country' =>$this->input->post('Country')
				     );
 
	$this->mo_sql->insert('registertable',$data_to_storecat) ;
	redirect(base_url().'register-success');
					}
				}
$this->load->view("homepage/register",$data);
}

public function reg()
{

$this->load->view("homepage/reg",$data);
}
public function register_success()
{ 
	$this->load->view("homepage/register-success",$data);

	redirect(base_url().'register');
}


	








	function image_thumb($image_path ,$img_name,$width,$height,$folder) {
    // Get the CodeIgniter super object
    $CI =& get_instance();

    // Path to image thumbnail
    $image_thumb = $folder . '/' . $img_name;
		
        // LOAD LIBRARY
        $CI->load->library( 'image_lib' );

        // CONFIGURE IMAGE LIBRARY
        $config['image_library']    = 'gd2';
        $config['source_image']     = $image_path;
        $config['new_image']        = $image_thumb;
        $config['maintain_ratio']   = FALSE;
        $config['height']           = $height;
        $config['width']            = $width;
        $CI->image_lib->initialize( $config );
        $CI->image_lib->resize();
        $CI->image_lib->clear();
}

	
}
