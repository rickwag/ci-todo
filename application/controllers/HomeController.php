<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('HomeModel');
    }

    public function index($page = 'HomeView')
    {
        $data['todos'] = $this->HomeModel->get_todos();

        $this->load->view('templates/Header');
        $this->load->view($page, $data);
        $this->load->view('templates/Footer');
    }

    public function view($id)
    {
        $data['todo'] = $this->HomeModel->get_specific_todo($id);

        $this->load->view('templates/Header');
        $this->load->view('TodoDetailsView', $data);
        $this->load->view('templates/Footer');
    }

    public function edit($id = null)
    {
        $this->form_validation->set_rules('due-date', 'Date', 'required');
        $this->form_validation->set_rules('note', 'Note', 'required');

        if ($this->form_validation->run()) {

            $save = [
                'duedate' => $this->input->post('due-date'),
                'note' => $this->input->post('note')
            ];

            $this->HomeModel->update($save, $this->input->post('id'));

            $this->load->view('templates/Header');
            $this->load->view('SuccessView');
            $this->load->view('templates/Footer');
        } else {
            if ($id === null)
                $id = $this->input->post('id');

            $data['todo'] = $this->HomeModel->get_specific_todo($id);

            $this->load->view('templates/Header');
            $this->load->view('TodoEditView', $data);
            $this->load->view('templates/Footer');
        }
    }

    public function delete($id)
    {
        $this->HomeModel->delete($id);

        $this->index();
    }

    public function create()
    {
        $this->form_validation->set_rules('due-date', 'Date', 'required');
        $this->form_validation->set_rules('note', 'Note', 'required');

        if ($this->form_validation->run()) {

            $save = [
                'duedate' => $this->input->post('due-date'),
                'note' => $this->input->post('note')
            ];

            $this->HomeModel->create($save);

            $this->load->view('templates/Header');
            $this->load->view('SuccessView');
            $this->load->view('templates/Footer');
        } else {
            $this->load->view('templates/Header');
            $this->load->view('TodoCreateView');
            $this->load->view('templates/Footer');
        }
    }
}

/* End of file HomeController.php and path \application\controllers\HomeController.php */
