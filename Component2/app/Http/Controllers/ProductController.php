<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookProduct;
use App\Http\Controllers\CdProduct;

class ProductController extends Controller
{
    public static function makeProductArray() {
         $file = '../public/products.json';
         $string = file_get_contents($file);

         $productsJson = json_decode($string, true);

         $products = [];
         $books=[];
         $cds=[];
         foreach ($productsJson as $product) {
             switch($product['type']) {
               case "cd":
                    $cdproduct = new CdProduct($product['id'],$product['title'],  $product['firstname'],
                        $product['mainname'],$product['price'], $product['playlength']);
                    $cds[] = $cdproduct;
                    break;
                case "book":
                    $bookproduct = new BookProduct($product['id'],$product['title'],  $product['firstname'],
                        $product['mainname'],$product['price'], $product['numpages']);
                    $books[]=$bookproduct;
                    break;
            }
         }
        // return $products;
        return view('products',['cds'=>$cds,'books'=>$books]);
    }


    public static function deleteProductWithId(int $id) {
         $file = '../public/products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);

        $products = [];
        foreach ($productsJson as $product) {
            if($product['id'] != $id) {
                $products[] = $product;
            }
        }
        $json = json_encode($products);
        if(file_put_contents($file, $json))
            return redirect ('/products');
        else
            return false;
    }

    public static function getProductWithId(int $id) {
        $file = '../public/products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);

        $products = [];
        foreach ($productsJson as $product) {
            if($product['id']==$id) {
                switch ($product['type']) {
                    case "cd":
                        $cdproduct = new CdProduct($product['id'], $product['title'],  $product['firstname'],
                            $product['mainname'], $product['price'], $product['playlength']);
                        $products[] = $cdproduct;
                        return view ('singleCd',['id'=> $products]);
                        break;
                    case "book":
                        $bookproduct = new BookProduct($product['id'], $product['title'],  $product['firstname'],
                            $product['mainname'], $product['price'], $product['numpages']);
                        $products[] = $bookproduct;
                        return view ('singleBook',['id'=> $products]);

                        break;
                }
                break;
            }
        }
        // return $products;
        // return view('singleProduct',['id'=>$products]);
    }
 

    public static function addNewProduct()
    {
        $file='../public/products.json';
        $string = file_get_contents($file);

        $productsJson = json_decode($string, true);
        $ids = [];
        foreach ($productsJson as $product) {
             $ids[] = $product['id'];
        }
        rsort($ids);
        $newId = $ids[0] + 1;

        $products = [];
        foreach ($productsJson as $product) {
            $products[] = $product;
        }
        $newProduct = [];
        $newProduct['id'] = $newId;
        $newProduct['type'] = request('type');
        $newProducttype = request('type');
        $newProduct['title'] = request('title');
        $newProduct['firstname'] = request('firstname');
        $newProduct['mainname'] = request('surname');
        $newProduct['price'] = request('price');

        if($newProducttype=='cd') $newProduct['playlength'] = request('papl');
        if($newProducttype=='book') $newProduct['numpages'] = request('papl');

        $products[] = $newProduct;

        $json = json_encode($products);
        if(file_put_contents($file, $json))
            return redirect ('/products');
        else
            return 'Data Insertion Failed';
    }

    public static function updateProductWithId(Request $request, $id)
    {
        $file='../public/products.json';
        $string = file_get_contents($file);
        $products= [];
        $productsJson = json_decode($string, true);
        $title=$request->title;
        $type=$request->type;
        $firstname=$request->firstname;
        $surname=$request->surname;
        $price=$request->price;

        $pages=$request->papl;

        foreach ($productsJson as $product) {
            if($product['id']==$id) {
                $product['title'] = $title;
                $product['firstname'] = $firstname;
                $product['mainname'] = $surname;
                $product['price'] = $price;


                 
                if($product['type']=='cd') $product['playlength'] = $pages;
                if($product['type']=='book') $product['numpages'] = $pages;
            }
            $products[] = $product;
        }

        $json = json_encode($products);
        if(file_put_contents($file, $json))
             return redirect ('/products');
        else
            return redirect ('/products');
    }
}