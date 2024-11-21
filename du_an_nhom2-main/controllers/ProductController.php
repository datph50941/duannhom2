<?php

class ProductController{
    public function index(){
        // lấy id
        $id = $_GET['id'];
        $products = (new Product)->listProductInCategory($id);
        
        // lấy tên danh mục
        $title = $products[0]['cate_name'] ?? "";

        $categories = (new Category)->all();
        return view('clients.category.category', compact('products' , 'categories','title')
        );
    }
}