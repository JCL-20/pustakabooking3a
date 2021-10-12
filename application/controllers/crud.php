<?php
class Crud extends CI_Controller{
{
    function
    {
        parent::__construct()
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    function index()
    {
        $data['user'] = $this ->m_data->tampil_data()->result();
        $data->load->view('v_tampil' , $data
    }
}
