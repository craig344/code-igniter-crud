<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('CrudModel');
        $records = $this->CrudModel->getRecords();
        $this->load->view('home', ['records' => $records]);
    }
    public function edit()
    {
        echo "Edit";
    }
    public function delete()
    {
        echo "Delete";
    }
    public function create()
    {
        $this->load->view('create');
    }
    public function save()
    {
        $this->form_validation->set_rules('customerName', 'Customer Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_error_delimiters('<span class="badge badge-pill badge-danger">', '</span>');
        if ($this->form_validation->run()) {
            $this->load->model('CrudModel');
            $data = $this->input->post();
            if($this->CrudModel->saveRecord($data)){
                $this->session->set_flashdata('response', 'Record saved successfully');
            }else{
                $this->session->set_flashdata('error', 'mysqli error');
            }
            return redirect('home');
        } else {
            $this->load->view('create');
        }
    }
}
