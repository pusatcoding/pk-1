<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
	function __construct()
  {
    parent::__construct();

    /* memanggil model untuk ditampilkan pada masing2 modul */
		$this->load->model('Blog_model');
		$this->load->model('Cart_model');
		$this->load->model('Company_model');
		$this->load->model('Featured_model');
		$this->load->model('Kategori_model');
		$this->load->model('Kontak_model');
    	$this->load->model('Produk_model');

    /* memanggil function dari masing2 model yang akan digunakan */
		$this->data['blog_data'] 					= $this->Blog_model->get_all_sidebar();
		$this->data['company_data'] 			= $this->Company_model->get_by_company();
		$this->data['featured_data'] 			= $this->Featured_model->get_all_front();
		$this->data['kategori_data'] 			= $this->Kategori_model->get_all();
		$this->data['kontak'] 						= $this->Kontak_model->get_all();
		$this->data['total_cart_navbar'] 	= $this->Cart_model->total_cart_navbar();
		
  }

	public function read($id)
	{
    /* mengambil data berdasarkan id */
		$row = $this->Produk_model->get_by_id_front($id);

    /* melakukan pengecekan data, apabila ada maka akan ditampilkan */
		if ($row)
    {
      /* memanggil function dari masing2 model yang akan digunakan */
    	$this->data['produk']       	= $this->Produk_model->get_by_id_front($id);
		$this->data['produk_lainnya']	= $this->Produk_model->get_random();

		$this->data['title'] = $row->judul_produk;

      /* memanggil view yang telah disiapkan dan passing data dari model ke view*/
			$this->load->view('front/produk/body', $this->data);
		}
			else
	    {
				echo "<script>alert('Produk tidak ditemukan');location.replace('".base_url()."')</script>";
	    }
	}

	public function cari_produk()
  {
    /* menyiapkan data yang akan disertakan/ ditampilkan pada view */
  	$this->data['title'] = 'Hasil Pencarian Anda';

    /* memanggil function dari model yang akan digunakan */
    $this->data['hasil_pencarian'] = $this->Produk_model->get_cari_produk();

    /* memanggil view yang telah disiapkan dan passing data dari model ke view*/
    $this->load->view('front/produk/hasil_pencarian', $this->data);
  }

  public function katalog()
  {
    /* menyiapkan data yang akan disertakan/ ditampilkan pada view */
    $this->data['title'] = "Katalog Produk";

    /* memanggil library pagination (membuat halaman) */
    $this->load->library('pagination');

    /* menghitung jumlah total data */
    $jumlah = $this->Produk_model->total_rows();

    // Mengatur base_url
    $config['base_url'] = base_url().'produk/katalog/halaman/';
    //menghitung total baris
    $config['total_rows'] = $jumlah;
    //mengatur total data yang tampil per halamannya
    $config['per_page'] = 8;
    // tag pagination bootstrap

		$config['full_tag_open'] 		= ' <nav class="navigation pagination" role="navigation"><div class="nav-links">';
		$config['full_tag_close'] 		= '</div></nav>';
		
		$config['num_tag_open'] 		= '<span class="page-numbers" href="#">';
		$config['num_tag_close'] 		= '</span>';
		
		$config['cur_tag_open'] 		= '<span class="page-numbers current" href="#">';
		$config['cur_tag_close'] 		= '</span>';
		
		$config['next_link']       		= '<span class="next page-numbers"><i class="lnr lnr-arrow-right"></i>';
		$config['next_tag_open'] 		= '<a href="#">';
		$config['next_tagl_close'] 		= '</span></a>';
		
		$config['prev_link']        	= '<span class="next page-numbers"><i class="lnr lnr-arrow-left"></i>';
		$config['prev_tag_open'] 		= '<a  href="#">';
		$config['prev_tagl_close'] 		= '</span></a>';
		
		$config['first_link']       	= '<span class="next page-numbers"><i class="lnr lnr-arrow-down"></i>';
		$config['first_tag_open'] 		= '<a  href="#">';
		$config['first_tagl_close'] 	= '</span></a>';
		
		$config['last_link']        	= '<span class="next page-numbers"><i class="lnr lnr-arrow-up"></i>';
		$config['last_tag_open'] 		= '<a href="#">';
		$config['last_tagl_close'] 		= '</span></a>';

	
		// mengambil uri segment ke-4
    	$dari = $this->uri->segment('4');

    /* eksekusi library pagination ke model penampilan data */
    $this->data['katalog_data'] = $this->Produk_model->get_all_katalog($config['per_page'],$dari);
		
    $this->pagination->initialize($config);

    /* memanggil view yang telah disiapkan dan passing data dari model ke view*/
    $this->load->view('front/produk/katalog', $this->data);
  }

}
