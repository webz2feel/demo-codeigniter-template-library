<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->template->write('title', 'My Awesome Website');
		$this->template->write('header', 'My Awesome Article');
		$this->template->write('content', 'My Awesome Content');
		$this->template->render();
	}

	public function customer()
	{
		$data['customers'] = array(
			"John" => "john@freak.com",
			"Ben" => "ben@freak.com",
			"Joe"=>"joe@freak.com",
			"Nina" => "nina@freak.com",
			"Nasri" => "nasri@freak.com"
		);

		$this->template->write('title', 'Manage Customer');
		$this->template->write('header', 'All Registerted Customers');
		$this->template->write_view('content', 'welcome/customer', $data);
		$this->template->render();
	}
}