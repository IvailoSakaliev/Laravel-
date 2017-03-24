<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Product;
use App\Entity\Comment;
use File;

class ProductsController extends Controller
{
    public function AddProduct(Request $request)
    {
        $p = new Product;
        $p->title=$request->input('title');
        $p->description=$request->input('desc');
        $p->price=$request->input('price');
        $file  = $request -> file('photo');

         $newFileName = rand();
        $newFileName .= '.'.$file->getClientOriginalExtension();
        $file->move('photos',$newFileName);

        $dbPath = "photos/$newFileName";

        $p->imagePath = $dbPath;
        $p->save();

        return back()-> with("Messege",'Succsess deleted product ');
    }
    public function DeleteProduct($id)
    {
        $p = Product::find($id);

        if ($p == null) {
            return redirect(404);
        }
        $p-> delete();

        return back()-> with("message",'succsess deleted product ');

        
    }
    public function EditProduct($id, Request $request)
    {
        $p = Product::find($id);

        if($p == null)
        {
            return redirect(404);
        }

        $p->title = $request->input('title');
        $p->description = $request->input('desc');
        $p->price = $request->input('price');
        $file = $request->file('photo');

        if($file)
        {
            File::delete($p->imagePath);
            $newFileName = rand();
            $newFileName .= '.'.$file->getClientOriginalExtension();
            $file->move('photos',$newFileName);
            $dbPath = "photos/$newFileName";
            $p->imagePath = $dbPath;
        }
        
        $p->save();

        return back()->with('Messege','successfully edited!');
    }
    public function Index()
    {
    	$products['products'] = Product::orderBy('id','DESC')->paginate(4);

    	return view('listProduct', $products);
    }
    public function IndexDashboard()
    {
        $viewModel['products'] = Product::orderBy('id','DESC')->paginate(20);

        return view('Admin/productPreview', $viewModel);
    }
    public function IndexEdit($id)
    {
        $product = Product::find($id);
        return view('Admin/editProduct', ['product'=>$product]);
    }
    public function IndexDelete($id)
    {
        return view('Admin/deleteProduct');
    }
    public function ViewProduct($id)
    {
        $product = Product::find($id);
        return view('viewProduct' , ['product'=>$product]);
    }

    public function FilterProducts(Request $request)
    {
        $name = $request-> get('name');
        $price = $request-> get('price');
        
        if ($name == "" && $price == "") {
            return view('listProduct');
        }
        else
        {
            if ($name == "" && $price != "")  {
                $products['products'] = Product::where('price','<',$price)->paginate(4);
                return view('listProduct', $products);
            }
            elseif ($name != "" && $price == "") {
                $products['products'] = Product::where('title','=',$name)->paginate(4);
                return view('listProduct', $products);
            }
            else
            {
                $products['products'] = Product::where('price','<', $price)
                    ->where('title','=', $name)
                    ->paginate(4);
                return view('listProduct', $products);
            }
        }

        
    }
    public function EnterComment($id, Request $request)
    {
        $p = new Comment;
        $p->comment = $request->input('comment');
        $p->product_id =$id;
        $p->save();
        return back()-> with("Messege",'Succsess enter comment ');
    

    }
    public function IndexCommnets($id)
    {
        $comment['comments'] = Comment::where('product_id', $id)->get();

        return view('comment', $comment);
    }
        


}
