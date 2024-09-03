<?php
class book extends CIF_Controller
{

    public $layout = 'full';
    public $module = 'book';
    public $model = 'Categories_model';

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->load->library('form_validation');
    }


    public function index()
    {
        //load model
        $this->load->model('m_booking');

        $x['invoice'] = $this->m_booking->get_no_invoice();
        $data = array(
            'book' => $this->m_booking->get_booking()->result()
        );
        //load view
        $this->load->view('book', $x, $data);
    }

    public function tambah()
    {
        //load view
        $this->load->view('book');
    }

    public function simpan()
    {
        // Aturan validasi
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Asal Kota', 'required');
        $this->form_validation->set_rules('nohp', 'No Handphone', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, load view lagi dengan error
            $this->load->view('book');
        } else {
            // Jika validasi berhasil, lanjutkan proses simpan data
            //load model
            $this->load->model('m_booking');

            //get data dari form
            $kode_booking = $this->input->post('kode_booking');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');
            $training = $this->input->post('training');

            $data = array(
                'kode_booking' => $kode_booking,
                'nama' => $nama,
                'email' => $email,
                'alamat' => $alamat,
                'nohp' => $nohp,
                'training' => $training,
            );

            //insert data via model
            $this->m_booking->simpan_booking($data, $kode_booking);

            //redirect ke controller siswa
            redirect('payment');

        }

    }


}

