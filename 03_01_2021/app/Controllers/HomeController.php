<?php

namespace App\Controllers;


use App\Core\BaseController;
use App\Models\Product;
use App\Models\User;

class HomeController extends BaseController
{
        public function index()
        {
            $product = Product::create([
                'name' => 'Product1',
                'category_id' => 1,
                'brand_id' => 1
            ]);

            $product->name = 'Product 2';
            $product->save();
//        $prod2 = new Product();
            var_dump($product);
//            var_dump(User::findById(1));
//            $this->render('home.main');
        }

}