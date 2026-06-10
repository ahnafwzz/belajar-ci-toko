<?php

namespace App\Controllers;

use App\Models\ProductModel; 

class Home extends BaseController
{
    protected $productModel;

    function __construct(){
        helper(['number', 'form']);
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        // 🔍 Tangkap kata kunci 'keyword' dari form pencarian di header
        $keyword = $this->request->getGet('keyword');

        if ($keyword) {
            // Jika ada keyword, filter nama produk yang mirip
            $products = $this->productModel->like('nama', $keyword)->findAll();
        } else {
            // Jika tidak ada, tampilkan semua seperti biasa
            $products = $this->productModel->findAll();
        }

        $data['products'] = $products;
        $data['hlm'] = 'Home'; 
        return view('v_home', $data);
    }

    public function contact() 
    {
        $data['hlm'] = 'Contact'; 
        return view('v_contact', $data);
    }
}