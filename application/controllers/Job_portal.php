<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/26/2018
 * Time: 11:41 PM
 */

class job_portal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('skills_model');
		$this->load->model('job_model');
		$this->load->model('applicant_model');
		$this->load->model('nlp_model');
	}

	public function index(){
		$data = array(
			"job_model"=>$this->job_model,
			"applicant_model"=>$this->applicant_model
		);
		$this->load->view('job_portal', $data);
	}

	public function apply(){
		if(isset($_POST['apply'])){
			$config['upload_path']          = './public/uploads/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 5000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('resume'))
			{
				$error = array('error' => $this->upload->display_errors());
				redirect(site_url('job_portal'));
			}
			else
			{
				$upload = $this->upload->data();
				$parser = new \Smalot\PdfParser\Parser();
				$pdf    = $parser->parseFile(base_url('public/uploads/'.$upload['file_name']));

				$text = $pdf->getText();
//				echo $text;

//				echo $education = $this->getBetween($text, "EDUCATION", "SKILLS");
				$skills = $this->getBetween($text, "SKILLS", "WORK EXPERIENCE");
				$experience = $this->getBetween($text, "WORK EXPERIENCE", "SEMINAR");
				$seminar = $this->getBetween($text, "SEMINAR", "==");
				//name
				$created = date('Y-m-d h:i:s');
				$applicant_id = date('ymdhis');


				//rank the applicant

				$rank_skill = substr(preg_replace('/\s+/','', $skills), 0, -1);
				$job_skill = preg_replace('/\s+/','', $_POST['job_skill']);


				$r_skill = explode(",", $rank_skill);
				$j_skill = explode(",", $job_skill);

				$skill_rank = 0;
				foreach ($r_skill as $i) {
					if (in_array($i,$j_skill)) $skill_rank++;
				}

				$exp = 0;
				preg_match_all('/[0-9]{4}/', preg_replace('/\s+/','', $experience), $matches);
				$years_array = array_values(array_unique($matches[0]));
				sort($years_array);
				$difference = end($years_array)-$years_array[0];

				$difference == 0 ? $exp = 0: $exp = $difference;

				echo $exp;

				//get the skill rank first
				if($skill_rank == 0){
					$skill_result = 10;
				}
				else if($skill_rank ==1){
					$skill_result = 9;
				}
				else if($skill_rank == 2){
					$skill_result = 8;
				}
				else if($skill_rank == 3){
					$skill_result = 7;
				}
				else if($skill_rank == 4){
					$skill_result = 6;
				}
				else if($skill_rank == 5){
					$skill_result = 5;
				}
				else if($skill_rank == 6){
					$skill_result = 4;
				}
				else if($skill_rank == 7){
					$skill_result = 3;
				}
				else if($skill_rank == 8){
					$skill_result = 2;
				}
				else if($skill_rank == 9){
					$skill_result = 2;
				}
				else if($skill_rank >=10){
					$skill_result = 1;
				}
				else{
					$skill_result = 5;
				}

				if($exp == 0){
					$exp_result = 10;
				}
				else if($exp ==1){
					$exp_result = 9;
				}
				else if($exp == 2){
					$exp_result = 8;
				}
				else if($exp == 3){
					$exp_result = 7;
				}
				else if($exp == 4){
					$exp_result = 6;
				}
				else if($exp == 5){
					$exp_result = 5;
				}
				else if($exp == 6){
					$exp_result = 4;
				}
				else if($exp == 7){
					$exp_result = 3;
				}
				else if($exp == 8){
					$exp_result = 2;
				}
				else if($exp == 9){
					$exp_result = 2;
				}
				else if($exp >=10){
					$exp_result = 1;
				}
				else{
					$exp_result = 5;
				}

				$r = $exp_result + $skill_result;
				$r_total = round($r/ 10);

				$rank = array(
					"applicant_id"=>$applicant_id,
					"job_id"=>$_POST['job_id'],
					"rank"=>"$r_total",
					"created_at"=>$created
				);
				$nlp = array(
					"applicant_id"=>$applicant_id,
					"skills"=>preg_replace('/\s+/','', $skills),
					"experience"=>preg_replace('/\s+/',' ', $experience),
					"seminar"=>preg_replace('/\s+/',' ', $seminar),
					"exp_year"=>$exp,
					"created_at"=>$created
				);
				$data = array(
					"applicant_id"=>$applicant_id,
					"upload"=>$upload['file_name'],
					"firstname"=>$_POST['firstname'],
					"middlename"=>$_POST['middlename'],
					"lastname"=>$_POST['lastname'],
					"gender"=>$_POST['gender'],
					"address"=>$_POST['address'],
					"job_applied"=>$_POST['job_applied'],
					"created_at"=>$created,
					"contact"=>$_POST['contact'],
					"email"=>$_POST['email']
				);

				$insert = $this->applicant_model->apply($data);
				$resume = $this->applicant_model->save_nlp($nlp);
				$rank_save = $this->nlp_model->save_ranking($rank);
				if($insert){
					$this->session->set_flashdata('msg', 'Application Successfully Submited!');
					redirect('job_portal', 'refresh');
				}
				else{
					$this->session->set_flashdata('msg', 'There was an error');
					redirect('job_portal', 'refresh');
				}
			}
		}
	}

	public function download(){
		$this->load->helper('download');
		$data = file_get_contents('public/assets/template.docx');
		force_download('resume_template.docx', $data);
	}

	function getBetween($content,$start,$end){
		$r = explode($start, $content);
		if (isset($r[1])){
			$r = explode($end, $r[1]);
			return $r[0];
		}
		return '';
	}

}
