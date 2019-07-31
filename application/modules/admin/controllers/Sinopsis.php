<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sinopsis extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sinopsis_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

      $datasinopsis=$this->Sinopsis_model->get_all();//panggil ke modell
      $datafield=$this->Sinopsis_model->get_field();//panggil ke modell

      $data = array(
        'contain_view' => 'admin/sinopsis/sinopsis_list',
        'sidebar'=>'admin/sidebar',
        'css'=>'admin/crudassets/css',
        'script'=>'admin/crudassets/script',
        'datasinopsis'=>$datasinopsis,
        'datafield'=>$datafield,
        'module'=>'admin',
        'titlePage'=>'sinopsis',
        'controller'=>'sinopsis'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => 'admin/sinopsis/sinopsis_form',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/sinopsis/create_action',
        'module'=>'admin',
        'titlePage'=>'sinopsis',
        'controller'=>'sinopsis'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Sinopsis_model->get_by_id($id);
      $data = array(
        'contain_view' => 'admin/sinopsis/sinopsis_edit',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/sinopsis/update_action',
        'dataedit'=>$dataedit,
        'module'=>'admin',
        'titlePage'=>'sinopsis',
        'controller'=>'sinopsis'
       );
      $this->template->load($data);
    }


    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judulfilm' => $this->input->post('judulfilm',TRUE),
		'genrefilm' => $this->input->post('genrefilm',TRUE),
		'sinopsisfilm' => $this->input->post('sinopsisfilm',TRUE),
		'gambarfilm' => $this->input->post('gambarfilm',TRUE),
		'durasifilm' => $this->input->post('durasifilm',TRUE),
	    );

            $this->Sinopsis_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/sinopsis'));
        }
    }



    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
		'judulfilm' => $this->input->post('judulfilm',TRUE),
		'genrefilm' => $this->input->post('genrefilm',TRUE),
		'sinopsisfilm' => $this->input->post('sinopsisfilm',TRUE),
		'gambarfilm' => $this->input->post('gambarfilm',TRUE),
		'durasifilm' => $this->input->post('durasifilm',TRUE),
	    );

            $this->Sinopsis_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/sinopsis'));
        }
    }

    public function delete($id)
    {
        $row = $this->Sinopsis_model->get_by_id($id);

        if ($row) {
            $this->Sinopsis_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/sinopsis'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/sinopsis'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('judulfilm', 'judulfilm', 'trim|required');
	$this->form_validation->set_rules('genrefilm', 'genrefilm', 'trim|required');
	$this->form_validation->set_rules('sinopsisfilm', 'sinopsisfilm', 'trim|required');
	$this->form_validation->set_rules('gambarfilm', 'gambarfilm', 'trim|required');
	$this->form_validation->set_rules('durasifilm', 'durasifilm', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
