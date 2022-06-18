<?php

/**
 * Description of UserController
 *
 * @author https://roytuts.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Test_form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('usermodel');
        $this->load->library('upload');
    }

    // public function index()
    // {
    //     if ($this->input->post('finish')) {
    //         $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
    //         $this->form_validation->set_rules('password', 'Password', 'trim|required');
    //         $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
    //         $this->form_validation->set_rules('phone', 'Phone No.', 'trim|required');
    //         $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
    //         $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
    //         $this->form_validation->set_rules('address', 'Contact Address', 'trim|required');

    //         if ($this->form_validation->run() !== FALSE) {
    //             $result = $this->usermodel->insert_user($this->input->post('name'), $this->input->post('password'), $this->input->post('email'), $this->input->post('phone'), $this->input->post('gender'), $this->input->post('dob'), $this->input->post('address'));
    //             $data['success'] = $result;
    //             $this->load->view('test_form', $data);
    //         } else {
    //             $this->load->view('test_form');
    //         }
    //     } else {
    //         $this->load->view('test_form');
    //     }
    // }
    public function index()
    {
        // $data['title'] = "FREEWORK";
        // $data['kategori'] = $this->model_produk->get_kategori_query();
        // $data['subkategori'] = $this->model_produk->subkategori();
        // $data['category'] = $this->model_produk->category();
        // $data['subcategory'] = $this->model_produk->subcategory();
        // $data['jenis'] = $this->model_produk->jenis();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('templates/js', $data);
        $this->load->view('test_form', $data);
        // $this->load->view('templates/footer');
    }

    public function up()
    {
        if ($this->input->post('finish')) {
            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('nama_depan', 'nama depan', 'trim|required');
            $this->form_validation->set_rules('nama_belakang', 'nama belakang', 'trim|required');
            $this->form_validation->set_rules('nomor_handphone', 'nomor handphone', 'trim|required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('tentang_anda', 'Tentang Anda', 'trim|required');
            $this->form_validation->set_rules('nomor_ktp', 'Nomor KTP', 'trim|required');
            $this->form_validation->set_rules('nama_depan_ktp', 'Nama Depan di KTP', 'trim|required');
            $this->form_validation->set_rules('nama_belakang_ktp', 'Nama Belakang di KTP', 'trim|required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'trim|required');

            if ($this->form_validation->run() !== false) {
                $upload_image = $_FILES['image']['name'];

                if ($upload_image) {
                    $config_img['upload_path']   = './assets/img';
                    $config_img['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config_img['max_size']      = '2048';

                    $this->upload->initialize($config_img);

                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('image', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
                $portofolio = $_FILES['portofolio']['name'];

                if ($portofolio) {
                    $config_portofolio['upload_path']   = './assets/img/portofolio';
                    $config_portofolio['allowed_types'] = 'pdf|jpg|png|jpeg';
                    $config_portofolio['max_size']      = '2048';

                    $this->upload->initialize($config_portofolio);

                    if ($this->upload->do_upload('portofolio')) {
                        $portofolio = $this->upload->data('file_name');
                        $this->db->set('portofolio', $portofolio);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
                $foto_ktp = $_FILES['foto_ktp']['name'];

                if ($foto_ktp) {
                    $config_foto_ktp['upload_path']   = './assets/img/foto_ktp';
                    $config_foto_ktp['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config_foto_ktp['max_size']      = '2048';

                    $this->upload->initialize($config_foto_ktp);

                    if ($this->upload->do_upload('foto_ktp')) {
                        $foto_ktp = $this->upload->data('file_name');
                        $this->db->set('foto_ktp', $foto_ktp);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
                $selfie_ktp = $_FILES['selfie_ktp']['name'];

                if ($selfie_ktp) {
                    $config_selfie_ktp['upload_path']   = './assets/img/selfie_ktp';
                    $config_selfie_ktp['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config_selfie_ktp['max_size']      = '2048';

                    $this->upload->initialize($config_selfie_ktp);

                    if ($this->upload->do_upload('selfie_ktp')) {
                        $selfie_ktp = $this->upload->data('file_name');
                        $this->db->set('selfie_ktp', $selfie_ktp);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                $username          = $this->input->post('username');
                $nama_depan        = $this->input->post('nama_depan');
                $nama_belakang     = $this->input->post('nama_belakang');
                $email             = $this->input->post('email');
                $nomor_handphone   = $this->input->post('nomor_handphone');
                $tanggal_lahir     = $this->input->post('tanggal_lahir');
                $tentang_anda      = $this->input->post('tentang_anda');
                $nomor_ktp         = $this->input->post('nomor_ktp');
                $nama_depan_ktp    = $this->input->post('nama_depan_ktp');
                $nama_belakang_ktp = $this->input->post('nama_belakang_ktp');
                $jenis_kelamin     = $this->input->post('jenis_kelamin');
                $alamat            = $this->input->post('alamat');
                $kode_pos          = $this->input->post('kode_pos');

                $this->db->set('username', $username);
                $this->db->set('nama_depan', $nama_depan);
                $this->db->set('nama_belakang', $nama_belakang);
                $this->db->set('nomor_handphone', $nomor_handphone);
                $this->db->set('tanggal_lahir', $tanggal_lahir);
                $this->db->set('tentang_anda', $tentang_anda);
                $this->db->set('nomor_ktp', $nomor_ktp);
                $this->db->set('nama_depan_ktp', $nama_depan_ktp);
                $this->db->set('nama_belakang_ktp', $nama_belakang_ktp);
                $this->db->set('jenis_kelamin', $jenis_kelamin);
                $this->db->set('alamat', $alamat);
                $this->db->set('kode_pos', $kode_pos);
                $this->db->where('email', $email);
                $this->db->update('user');

                // $data['data_user'] = $this->db->get_where('user', ['email' => $this->session->userdatrea('email')])->result_array();
                $data['success'] = $this->db->affected_rows();
                // $data['title'] = "FREEWORK";
                // $data['kategori'] = $this->model_produk->get_kategori_query();
                // $data['subkategori'] = $this->model_produk->subkategori();
                // $data['category'] = $this->model_produk->category();
                // $data['subcategory'] = $this->model_produk->subcategory();
                // $data['jenis'] = $this->model_produk->jenis();
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                // $this->load->view('templates/header', $data);
                // $this->load->view('templates/topbar', $data);
                $this->load->view('templates/js', $data);
                $this->load->view('test_form', $data);
            // $this->load->view('templates/footer');
            } else {
                return redirect('test_form');
                // return $this->index();
            }
        }
    }
}
