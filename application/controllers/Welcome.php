<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	public function index()
	{
		// instantiate and use the dompdf class
		$dompdf = new Dompdf\Dompdf();

		$html = $this->load->view('welcome_message',[],true);

		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Get the generated PDF file contents
		$pdf = $dompdf->output();

		// Output the generated PDF to Browser
		$dompdf->stream();
	}
}
