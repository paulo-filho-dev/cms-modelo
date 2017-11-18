<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller
{

  function __construct()
  {
    parent::__construct();
    if(!$this->ion_auth->in_group('admin'))
    {
      $this->session->set_flashdata('message','Você não tem permissão para visitar a página de Usuários.');
      redirect('admin','refresh');
    }
  }

  public function index()
  {
    $this->data['page_title'] = 'Usuários';
    $this->data['users'] = $this->ion_auth->users()->result();
    $this->render('admin/users/list_users_view');
  }
  public function create()
  {
    $this->data['page_title'] = 'Criar Usuário';
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','Nome','trim|required|is_unique[users.username]');
    $this->form_validation->set_rules('email','Email','trim|required');
    $this->form_validation->set_rules('password','Senha','trim|required');
    $this->form_validation->set_rules('password','Confirmar Senha','trim|required');
  
    if($this->form_validation->run()===FALSE)
    {
      $this->load->helper('form');
      $this->render('admin/users/create_user_view');
    }
    else
    {
      $group_name = $this->input->post('group_name');
      $group_description = $this->input->post('group_description');
      $this->ion_auth->create_group($group_name, $group_description);
      $this->session->set_flashdata('message',$this->ion_auth->messages());
      redirect('admin/groups','refresh');
    }
  }
  public function edit($group_id = NULL)
  {
    $group_id = $this->input->post('group_id') ? $this->input->post('group_id') : $group_id;
    $this->data['page_title'] = 'Editar Grupo';
    $this->load->library('form_validation');
         
    $this->form_validation->set_rules('group_name','Nome','trim|required');
    $this->form_validation->set_rules('group_description','Descrição','trim|required');
    $this->form_validation->set_rules('group_id','Id','trim|integer|required');
  
    if($this->form_validation->run() === FALSE)
    {
      if($group = $this->ion_auth->group((int) $group_id)->row())
      {
        $this->data['group'] = $group;
      }
      else
      {
        $this->session->set_flashdata('message', 'O grupo não existe.');
        redirect('admin/groups', 'refresh');
      }
      $this->load->helper('form');
      $this->render('admin/groups/edit_group_view');
    }
    else
    {
      $group_name = $this->input->post('group_name');
      $group_description = $this->input->post('group_description');
      $group_id = $this->input->post('group_id');
      $this->ion_auth->update_group($group_id, $group_name, $group_description);
      $this->session->set_flashdata('message',$this->ion_auth->messages());
      redirect('admin/groups','refresh');
    }
  }
  public function delete($group_id = NULL)
  {
    if(is_null($group_id))
    {
      $this->session->set_flashdata('message','Não há nenhum grupo a ser excluído.');
    }
    else
    {
      $this->ion_auth->delete_group($group_id);
      $this->session->set_flashdata('message',$this->ion_auth->messages());
    }
    redirect('admin/groups','refresh');
  }
}