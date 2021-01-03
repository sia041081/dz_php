<?php


namespace App\Controllers\Admin;


use App\core\BaseController;
use App\Helpers\Debugger;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Router;

class ProductController extends BaseController
{
    public $layout = 'admin';

    // вывод списка
    public function index()
    {
        $count = count(Product::getAll());
        $currentPage = $_GET['page'] ?? 1;
        $currentPage = $currentPage < 1 ? 1 : $currentPage;
        $limit = 5;
        $offset = $limit*($currentPage-1)-1;
        $offset = $offset > 0 ? $offset : 0;

        $products = Product::selectWithConditions([
            'order' => [
                'field' => 'id',
                'way' => 'DESC'
            ],
            'limit' => [
                'limit' => 5,
                'offset' => $offset
            ]
        ]);
        $categories = Category::getAll();
        $categoryList = [];
        foreach ($categories as $category){
            $categoryList[$category->id] = $category;
        }
        unset($categories);

//        var_dump($products);
        return $this->render('admin.products.index', [
            'products' => $products,
            'pages' => ceil($count/$limit),
            'currentPage' => $currentPage,
            'categories' => $categoryList
        ]);
    }

    // отображение одного товара
    public function show()
    {
        $id = Router::getRouteArgs()[0];
        $categories = Category::getAll();
        $brands = Brand::getAll();
        $product = Product::findById($id);
        return $this->render('admin.products.show', compact('categories', 'brands', 'product'));
    }

    public function edit()
    {
        var_dump($_POST);
        $id = Router::getRouteArgs()[0];
        $category = Category::findById($id);
        $products->name = $_POST['name'];
        $category->save();


        return $this->redirect('/admin/product');

    }

    public function save()
    {
        $products = new Product();
        $products->load($_POST);
        $products->save();
        return $this->redirect('/admin/product');
    }

    public function add()
    {
        $categories = Category::getAll();
        $brands = Brand::getAll();

        return $this->render('admin.products.show',
            compact('categories', 'brands')
        );
    }

    public function delete()
    {
        Product::delete(Router::getRouteArgs()[0]);
        return $this->redirect('/admin/product');

    }
}