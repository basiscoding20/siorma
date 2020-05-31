<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Login extends CI_Controller {
  
    public function __construct()
    {
      parent::__construct();
      
      $this->load->model('LoginModel');
    }
// Super Admin
    public function login_super_admin()
    {
      $this->load->view('super_admin/login');
    }

    public function masuk_super_admin()
    {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $table    = 'super_admin';

      $result = $this->LoginModel->validasi($username, $password, $table);

      if ($result->num_rows() > 0) {
        foreach ($result->result() as $rs) {
          $data_session = array(
            'username'      => $username,
            'nama_lengkap'  => $rs->nama_super_admin,
            'id'            => $rs->id,
            'foto'          => $rs->foto,
            'email'         => $rs->email,
            'nama_akses'    => "Super Admin",
            'level'         => 1,
            'link'          => "super_admin",
            'status'        => "login"
          );
          

          $this->session->set_userdata($data_session);
        };
        $response = array(
          'status' => 'sukses',
          'message' => 'Anda Berhasil Login',
          'redirect' => base_url($this->session->userdata('link').'/Dashboard'),
          );
      }else{
        $response = array(
          'status' => 'gagal',
          'message' => 'Username Atau Password yang anda masukan salah !',
          'redirect' => base_url('super_admin')
          );
      };

      echo json_encode($response);
    }
// Super Admin

// Admin
    public function login_admin()
    {
      $this->load->view('admin/login');
    }

    public function masuk_admin()
    {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $table    = 'admin';

      $result = $this->LoginModel->validasi($username, $password, $table);

      if ($result->num_rows() > 0) {
        foreach ($result->result() as $rs) {
          $data_session = array(
            'username'      => $username,
            'nama_lengkap'  => $rs->nama_admin,
            'id'            => $rs->id,
            'foto'          => $rs->foto,
            'email'         => $rs->email,
            'nama_akses'    => "Admin Organisasi",
            'level'         => 1,
            'link'          => "admin",
            'id_ormawa'     => $rs->id_ormawa,
            'status'        => "login"
          );
          

          $this->session->set_userdata($data_session);
        };
        $response = array(
          'status' => 'sukses',
          'message' => 'Anda Berhasil Login',
          'redirect' => base_url($this->session->userdata('link').'/Dashboard'),
          );
      }else{
        $response = array(
          'status' => 'gagal',
          'message' => 'Username Atau Password yang anda masukan salah !',
          'redirect' => base_url('admin')
          );
      };

      echo json_encode($response);
    }
// Admin

// Admin
    public function login_anggota()
    {
      $this->load->view('anggota/login');
    }

    public function masuk_anggota()
    {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $table    = 'anggota';

      $result = $this->LoginModel->validasi($username, $password, $table);

      if ($result->num_rows() > 0) {
        foreach ($result->result() as $rs) {
          $data_session = array(
            'username'      => $username,
            'nama_lengkap'  => $rs->nama_anggota,
            'id'            => $rs->id,
            'foto'          => $rs->foto,
            'email'         => $rs->email,
            'nama_akses'    => "Anggota Organisasi",
            'level'         => 1,
            'id_ormawa'     => $rs->id_ormawa,
            'link'          => "anggota",
            'status'        => "login"
          );
          

          $this->session->set_userdata($data_session);
        };
        $response = array(
          'status' => 'sukses',
          'message' => 'Anda Berhasil Login',
          'redirect' => base_url($this->session->userdata('link').'/Dashboard'),
          );
      }else{
        $response = array(
          'status' => 'gagal',
          'message' => 'Username Atau Password yang anda masukan salah !',
          'redirect' => base_url('anggota')
          );
      };

      echo json_encode($response);
    }
// Admin
  }
  
  /* End of file login.php */
  /* Location: ./application/controllers/admin/login.php */
?>