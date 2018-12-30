<?php
/**
 * Created by PhpStorm.
 * User: neilg
 * Date: 12/26/2018
 * Time: 11:18 PM
 */

class parser extends CI_Controller
{

	public function index(){
		$parser = new \Smalot\PdfParser\Parser();
		$pdf    = $parser->parseFile(base_url('public/uploads/resume.pdf'));

		$text = $pdf->getText();
		echo $text;
	}
}
