<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Auth {

	var $CI = NULL;
    public $suffix_pass = 'ci_lab';

	function __construct()
	{
		$this->CI =& get_instance();		
		// Load additional libraries, helpers, etc.
		$this->CI->load->library('session');
		$this->CI->load->helper('security');
		$this->CI->load->database();
		$this->CI->load->helper('url');
	}

	/**
	 *
	 * Process the data from the login form
	 *
	 * @access	public
	 * @param	array	array with 2 values, username and password (in that order)
	 * @return	boolean
	 */	
	function process_login($login = NULL)
	{
		// A few safety checks
		// Our array has to be set
		if(!isset($login))
			return FALSE;
			
		//Our array has to have 2 values
		//No more, no less!
		if(count($login) != 2)
			return FALSE;
				
		$username = $login[0];
		$password = md5($this->suffix_pass.$login[1]);
		//$password = do_hash($password);
		
		// Query time
		$this->CI->db->where('email', $username);
		$this->CI->db->where('password', $password);
		$query = $this->CI->db->get('user');
		
		if ($query->num_rows() == 1)
		{
			$row = $query->row_array(); 
			// Our user exists, set session.
			$newdata = array(
                   'logged_user'    => $row['username'],
                   'user_id'        => $row['id'],
                   'permission'     => $row['permission'],
                   'timer'          => time(),
                   'name'           => $row['username'],
                   'email'          => $row['email'],
                   'fullname'       => $row['fullname'],
                   'status'         => $row['status'],
             );
			$this->CI->session->set_userdata(array('logined' => $newdata));
			return TRUE;
		}
		else 
		{
			// No existing user.
			return FALSE;
		}
	}
	
	/**
	 *
	 * This function redirects users after logging in
	 *
	 * @access	public
	 * @return	void
	 */	
	function redirect()
	{
		if ($this->CI->session->userdata('redirected_from') == FALSE)
		{
			redirect(base_url().'admincp/');
		} else {
			redirect(base_url().'index.php?'.$this->CI->session->userdata('redirected_from'));
		}
		
	}
	
	/**
	 *
	 * This function restricts users from certain pages.
	 * use restrict(TRUE) if a user can't access a page when logged in
	 *
	 * @access	public
	 * @param	boolean	wether the page is viewable when logged in
	 * @return	void
	 */	
	function restrict($logged_out = FALSE)
	{
		// If the user is logged in and he's trying to access a page
		// he's not allowed to see when logged in,
		// redirect him to the index!
		if ($logged_out && $this->logged_in())
		{
			redirect(base_url().'index.php?/Cp_admin/data/news');
		}
		
		// If the user isn' logged in and he's trying to access a page
		// he's not allowed to see when logged out,
		// redirect him to the login page!
		if ( ! $logged_out && ! $this->logged_in()) 
		{
			$this->CI->session->set_userdata('redirected_from', $this->CI->uri->uri_string()); // We'll use this in our redirect method.
			redirect(base_url().'login');
		}
	}
	
	/**
	 *
	 * Checks if a user is logged in
	 *
	 * @access	public
	 * @return	boolean
	 */	
	function logged_in()
	{
		if (!$this->CI->session->has_userdata('logined'))
		{
			return FALSE;
		}
		else 
		{
			return TRUE;
		}
	}
	
	/**
	 *
	 * Logs user out by destroying the session.
	 *
	 * @access	public
	 * @return	TRUE
	 */	
	function logout() 
	{
		$this->CI->session->sess_destroy();
		
		return TRUE;
	}
	
}

/* End of file: Auth.php */
/* Location: ./system/application/libraries/Auth.php */