<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$page_data['page_name']='dashboard';
		$this->load->view('index',$page_data);
	}
	public function dashboard()
	{
		$page_data['page_name']='dashboard';
		$this->load->view('index',$page_data);
	}
							/*ACCOUNTANT MANAGEMENT START*/
	//ACCOUNTANT ADD VIEW
	function accountant_add()
	{
		$page_data['page_name']='accountant_add';
		$this->load->view('index',$page_data);
	}
	//ACCOUNTANT EDIT VIEW
	function accountant_edit($pamr1="",$pamr2=""){
		if($pamr1="edit_view"){
			$page_data['accountant']   =$this->db->get_where('accountant',array('accountant_id' => $pamr2))->result_array();
			$page_data['page_name']='accountant_edit';
			$this->load->view('index',$page_data);
		}	
	}
	//ACCOUNTANT MANAGE
	function accountant($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['gender']         				= $this->input->post('gender');
			$data['appointment_date']         		= $this->input->post('appointment_date');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			$this->db->insert('accountant',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/accountant_image/accountant_".$id.".jpg");
			redirect(base_url().'index.php/admin/accountant/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['accountants']   = $this->db->get('accountant')->result_array();
			$page_data['page_name']   = 'accountant_list';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "profile"){
			$page_data['accountants']   = $this->db->get_where('accountant',array('accountant_id' => $pamr2))->result_array();
			$page_data['page_name']   = 'accountant_profile';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['gender']         				= $this->input->post('gender');
			$data['appointment_date']         		= $this->input->post('appointment_date');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			
			$this->db->where('accountant_id',$pamr2);
			$this->db->update('accountant',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/accountant_image/accountant_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/accountant/view', 'refresh');		
		} else if($pamr1 == "delete"){
			if(file_exists("uploads/accountant_image/accountant_".$pamr2.".jpg"))
			{
				unlink("uploads/accountant_image/accountant_".$pamr2.".jpg");
			}
			$this->db->where('accountant_id',$pamr2);
			$this->db->delete('accountant');
			redirect(base_url().'index.php/admin/accountant/view', 'refresh');
		}
	}
							/*ACCOUNTANT MANAGEMENT END*/
							
							/*TEACHERS MANAGEMENT START*/
	//TEACHERS ADD VIEW	
	function teachers_add()
	{
		$page_data['page_name']='teachers_add';
		$this->load->view('index',$page_data);
	}
	//TEACHERS EDIT VIEW
	function teachers_edit($pamr1="",$pamr2=""){
		if($pamr1="edit_view"){
			$page_data['teachers']   =$this->db->get_where('teachers',array('teachers_id' => $pamr2))->result_array();
			$page_data['page_name']='teachers_edit';
			$this->load->view('index',$page_data);
		}	
	}
	//TEACHERS MANAGE
	function teachers($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['gender']         				= $this->input->post('gender');
			$data['appointment_date']         		= $this->input->post('appointment_date');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			$this->db->insert('teachers',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/teachers_image/teachers_".$id.".jpg");
			redirect(base_url().'index.php/admin/teachers/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['teachers']   = $this->db->get('teachers')->result_array();
			$page_data['page_name']   = 'teachers_list';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "profile"){
			$page_data['teachers']   = $this->db->get_where('teachers',array('teachers_id' => $pamr2))->result_array();
			$page_data['page_name']   = 'teachers_profile';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['gender']         				= $this->input->post('gender');
			$data['appointment_date']         		= $this->input->post('appointment_date');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			
			$this->db->where('teachers_id',$pamr2);
			$this->db->update('teachers',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/teachers_image/teachers_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/teachers/view', 'refresh');		
		} else if($pamr1 == "delete"){
			if(file_exists("uploads/teachers_image/teachers_".$pamr2.".jpg"))
			{
				unlink("uploads/teachers_image/teachers_".$pamr2.".jpg");
			}
			$this->db->where('teachers_id',$pamr2);
			$this->db->delete('teachers');
			redirect(base_url().'index.php/admin/teachers/view', 'refresh');
		}
	}
							/*TEACHERS MANAGEMENT END*/
							
							/*NURSE MANAGEMENT START*/
	//NURSE ADD VIEW	
	function nurse_add()
	{
		$page_data['page_name']='nurse_add';
		$this->load->view('index',$page_data);
	}
	//NURSE EDIT VIEW
	function nurse_edit($pamr1="",$pamr2=""){
		if($pamr1="edit_view"){
			$page_data['nurse']   =$this->db->get_where('nurse',array('nurse_id' => $pamr2))->result_array();
			$page_data['page_name']='nurse_edit';
			$this->load->view('index',$page_data);
		}	
	}
	//NURSE MANAGE
	function nurse($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['appointment_date']         		= $this->input->post('appointment_date');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			$this->db->insert('nurse',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/nurse_image/nurse_".$id.".jpg");
			redirect(base_url().'index.php/admin/nurse/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['nurse']   = $this->db->get('nurse')->result_array();
			$page_data['page_name']   = 'nurse_list';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "profile"){
			$page_data['nurse']   = $this->db->get_where('nurse',array('nurse_id' => $pamr2))->result_array();
			$page_data['page_name']   = 'nurse_profile';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['appointment_date']         		= $this->input->post('appointment_date');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			
			$this->db->where('nurse_id',$pamr2);
			$this->db->update('nurse',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/nurse_image/nurse_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/nurse/view', 'refresh');		
		} else if($pamr1 == "delete"){
			if(file_exists("uploads/nurse_image/nurse_".$pamr2.".jpg"))
			{
				unlink("uploads/nurse_image/nurse_".$pamr2.".jpg");
			}
			$this->db->where('nurse_id',$pamr2);
			$this->db->delete('nurse');
			redirect(base_url().'index.php/admin/nurse/view', 'refresh');
		}
	}
							/*NURSE MANAGEMENT END*/
							
							/*GUARDIANS MANAGEMENT START*/
	//GUARDIANS ADD VIEW	
	function guardians_add()
	{
		$page_data['page_name']='guardians_add';
		$this->load->view('index',$page_data);
	}
	//GUARDIANS EDIT VIEW
	function guardians_edit($pamr1="",$pamr2=""){
		if($pamr1="edit_view"){
			$page_data['guardians']   =$this->db->get_where('guardians',array('guardians_id' => $pamr2))->result_array();
			$page_data['page_name']='guardians_edit';
			$this->load->view('index',$page_data);
		}	
	}
	//GUARDIANS MANAGE
	function guardians($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			$this->db->insert('guardians',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/guardians_image/guardians_".$id.".jpg");
			redirect(base_url().'index.php/admin/guardians/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['guardians']   = $this->db->get('guardians')->result_array();
			$page_data['page_name']   = 'guardians_list';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "profile"){
			$page_data['guardians']   = $this->db->get_where('guardians',array('guardians_id' => $pamr2))->result_array();
			$page_data['page_name']   = 'guardians_profile';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['password']         				= $this->input->post('password');
			$data['address']         				= $this->input->post('address');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['facebook']         				= $this->input->post('facebook');
			$data['twiter']         				= $this->input->post('twiter');
			$data['google_plus']         			= $this->input->post('google_plus');
			
			$this->db->where('guardians_id',$pamr2);
			$this->db->update('guardians',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/guardians_image/guardians_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/guardians/view', 'refresh');		
		} else if($pamr1 == "delete"){
			if(file_exists("uploads/guardians_image/guardians_".$pamr2.".jpg"))
			{
				unlink("uploads/guardians_image/guardians_".$pamr2.".jpg");
			}
			$this->db->where('guardians_id',$pamr2);
			$this->db->delete('guardians');
			redirect(base_url().'index.php/admin/guardians/view', 'refresh');
		}
	}
							/*GUARDIANS MANAGEMENT END*/
							
							/*CARE TIME CATEGORY MANAGEMENT START*/
	function care_time_category($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['name']         				= $this->input->post('name');
			
			$this->db->insert('care_time_category',$data);
			redirect(base_url().'index.php/admin/care_time_category/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['care_time_category']   = $this->db->get('care_time_category')->result_array();
			$page_data['page_name']   = 'care_time_category_list';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "do_update"){
			$data['name']         				= $this->input->post('name');
			
			$this->db->where('care_time_category_id',$pamr2);
			$this->db->update('care_time_category',$data);
			redirect(base_url().'index.php/admin/care_time_category/view', 'refresh');
		} else if($pamr1 == "delete"){
			$this->db->where('care_time_category_id',$pamr2);
			$this->db->delete('care_time_category');
			redirect(base_url().'index.php/admin/care_time_category/view', 'refresh');
		}
	}
							/*CARE TIME CATEGORY MANAGEMENT END*/
							
							/*AGE CATEGORY MANAGEMENT START*/
	function age_category($pamr1="",$pamr2=""){
		
		if($pamr1 == "add"){
			$data['name']   	      				= $this->input->post('name');
			$data['start_age']         				= $this->input->post('start_age');
			$data['end_age']         				= $this->input->post('end_age');
			
			$this->db->insert('age_category',$data);
			
			redirect(base_url().'index.php/admin/age_category/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['age_category']   = $this->db->get('age_category')->result_array();
			$page_data['page_name']   = 'age_category_list';
			$this->load->view('index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']   	      					= $this->input->post('name');
			$data['start_age']   	      				= $this->input->post('start_age');
			$data['end_age']         					= $this->input->post('end_age');
			
			$this->db->where('age_category_id',$pamr2);
			$this->db->update('age_category',$data);
			redirect(base_url().'index.php/admin/age_category/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			$this->db->where('age_category_id',$pamr2);
			$this->db->delete('age_category');
			redirect(base_url().'index.php/admin/age_category/view', 'refresh');
		}
	}
							/*AGE CATEGORY MANAGEMENT END*/
							
							/*EDUCATION LEVEL MANAGEMENT START*/
							
	function education_level($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['name']         				= $this->input->post('name');
			
			$this->db->insert('education_level',$data);
			redirect(base_url().'index.php/admin/education_level/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['education_level']   = $this->db->get('education_level')->result_array();
			$page_data['page_name']   = 'education_level_list';
			$this->load->view('index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         				= $this->input->post('name');
			
			$this->db->where('education_level_id',$pamr2);
			$this->db->update('education_level',$data);
			redirect(base_url().'index.php/admin/education_level/view', 'refresh');
		} else if($pamr1 == "delete"){
			$this->db->where('education_level_id',$pamr2);
			$this->db->delete('education_level');
			redirect(base_url().'index.php/admin/education_level/view', 'refresh');
		}
	}
						/*EDUCATION LEVEL MANAGEMENT END*/
						
						/*EDUCATION CATEGORY MANAGEMENT START*/
							
	function education_category($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['name']         				= $this->input->post('name');
			$data['level']         				= $this->input->post('level');
			
			$this->db->insert('education_category',$data);
			redirect(base_url().'index.php/admin/education_category/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['education_category']   = $this->db->get('education_category')->result_array();
			$page_data['page_name']   = 'education_category_list';
			$this->load->view('index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         				= $this->input->post('name');
			$data['level']         				= $this->input->post('level');
			
			$this->db->where('education_category_id',$pamr2);
			$this->db->update('education_category',$data);
			redirect(base_url().'index.php/admin/education_category/view', 'refresh');
		} else if($pamr1 == "delete"){
			$this->db->where('education_category_id',$pamr2);
			$this->db->delete('education_category');
			redirect(base_url().'index.php/admin/education_category/view', 'refresh');
		}
	}
						/*EDUCATION CATEGORY MANAGEMENT END*/
						
						/*ADMISSION MANAGEMENT START*/
	//ADMISSION ADD VIEW
	function admission_add()
	{
		$page_data['page_name']='admission_add';
		$this->load->view('index',$page_data);
	}
	//ADMISSION EDIT VIEW
	function admission_edit($pamr1="",$pamr2=""){
		if($pamr1="edit_view"){
			$page_data['admission']   =$this->db->get_where('admission',array('admission_id' => $pamr2))->result_array();
			$page_data['page_name']='admission_edit';
			$this->load->view('index',$page_data);
		}	
	}
	//ADMISSION MANAGE
	function admission($pamr1="",$pamr2=""){
		if($pamr1 == "add"){
			$data['admission_date']         		= $this->input->post('admission_date');
			$data['baby_name']         				= $this->input->post('baby_name');
			$data['age_category']         			= $this->input->post('age_category');
			$data['education_level']         		= $this->input->post('education_level');
			$data['education_category']         	= $this->input->post('education_category');
			$data['guardian_name']         			= $this->input->post('guardian_name');
			$data['relation']         				= $this->input->post('relation');
			
			$this->db->insert('admission',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/baby_image/baby_".$id.".jpg");
			redirect(base_url().'index.php/admin/admission/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['admission']   = $this->db->get('admission')->result_array();
			$page_data['page_name']   = 'admission_list';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "profile"){
			$page_data['admission']   = $this->db->get_where('admission',array('admission_id' => $pamr2))->result_array();
			$page_data['page_name']   = 'admission_profile';
			$this->load->view('index',$page_data);
		} else if($pamr1 == "do_update"){
			$data['admission_date']         		= $this->input->post('admission_date');
			$data['baby_name']         				= $this->input->post('baby_name');
			$data['age_category']         			= $this->input->post('age_category');
			$data['education_level']         		= $this->input->post('education_level');
			$data['education_category']         	= $this->input->post('education_category');
			$data['guardian_name']         			= $this->input->post('guardian_name');
			$data['relation']         				= $this->input->post('relation');
			
			$this->db->where('admission_id',$pamr2);
			$this->db->update('admission',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"uploads/baby_image/baby_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/admission/view', 'refresh');		
		} else if($pamr1 == "delete"){
			if(file_exists("uploads/baby_image/baby_".$pamr2.".jpg"))
			{
				unlink("uploads/baby_image/baby_".$pamr2.".jpg");
			}
			$this->db->where('admission_id',$pamr2);
			$this->db->delete('admission');
			redirect(base_url().'index.php/admin/admission/view', 'refresh');
		}
	}
							/*ADMISSION MANAGEMENT END*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */