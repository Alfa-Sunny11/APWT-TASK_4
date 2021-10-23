<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    function getdata(Request $req){
        $validateddata = $req->validate([
            'name' =>'required|string',
            'code' => 'required|max:12',
            'img' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'rate' => 'required|min:1|max:10',
            'purchased' => 'required'
        ],
        [
            'name.required' => 'Enter Product Name',
            'code.required' => 'Enter Product Code',
            'description.required' => 'Write Product Description',
            'category.required' => 'Select Any Category',
            'price.required' => 'Enter Product Price',
            'quantity.required' => 'Select Quantity',
            'date.required' => 'Select Date',
            'rate.required' => 'Rating The Product',
        ]);
        $var = new Product();
        $var->name = $req->input('name');
        $var->code = $req->input('code');
        if($req->hasfile('img')){
            $img = $req->file('img');
            $extension = $img->getClientOriginalExtension();
            $filename = $req->input('name').'.'.$extension;
            $img->move('img/product/',$filename);
            $var->img = $filename;
        }
        $var->description = $req->input('description');
        $var->category = $req->input('category');
        $var->price = $req->input('price');
        $var->quantity = $req->input('quantity');
        $var->date = $req->input('date');
        $var->rate= $req->input('rate');
        $var->purchased= $req->input('purchased');
        $var->save();
       // return 'Full Name: '.$name.'<br>'.'Email: '.$code.'<br>'.'Query: '.$description;
      // return 'Name: '.$name.'<br>'.'code: '.$code.'<br>'.'description: '.$description.'<br>'.'category: '.$category.'price: '.$price.'<br>'.'quantity: '.$quantity.'<br>'.'date: '.$date.'<br>'.'rate: '.$rate.'<br>'.'purchased: '.$purchased;
      return redirect('product/list')
      ->with('msg','Product Added Successfully');
    }

    function index(){
        $products = Product::all();

           return view('home')
            ->with('product',$products);
     //   return view('home');
    }
    function create(){
        return view('productCreate');
    }
    function index2(){
        return view('productDetail');
    }
    function index3(){
        return view('productList');
    }


    

    public function list(){
     //   $products = array();
        $products = Product::all();

        return view('productList')->with('product',$products);
    }
    public function details(){
        //   $products = array();
           $products = Product::all();
           $data = DB::table('products')->sum('price');
           $fish = DB::table('products')->where('category','fish')->sum('price');
           $fishA = DB::table('products')->where('category','fish')->sum('quantity');
           $snack = DB::table('products')->where('category','snacks')->sum('price');
           $snackA = DB::table('products')->where('category','snacks')->sum('quantity');
           $meat = DB::table('products')->where('category','meat')->sum('price');
           $meatA = DB::table('products')->where('category','meat')->sum('quantity');
           $dairy = DB::table('products')->where('category','dairy')->sum('price');
           $dairyA = DB::table('products')->where('category','dairy')->sum('quantity');
        // $id = $req->id;   
        // $p = DB::table('Product')->where('id',$id)->first();
        // $cart=[];
        // //$jsonCart = $req->session()->get('cart'); to get session value
        // //session()->get('cart')
        // if(session()->has('cart')){
        //     $cart = json_decode(session()->get('cart'));
        // }
        
        // $cart[] = (object)($products);
        // $jsonCart = json_encode($cart);
        // session()->put('cart',$jsonCart);


           return view('productDetail')
            ->with('product',$products)
            ->with('data',$data)
            ->with('fish',$fish)
            ->with('fishA',$fishA)
            ->with('snack',$snack)
            ->with('snackA',$snackA)
            ->with('dairy',$dairy)
            ->with('dairyA',$dairyA)
            ->with('meat',$meat)
            ->with('meatA',$meatA);
       }
    
    public function edit(Request $req){
        //
        $id = $req->id;

        $product = Product::where('id',$id)->first();

        return view('productEdit')->with('product', $product);

    }   
       
    public function editSubmit(Request $req){
        
        $var = Product::where('id',$req->id)->first();
        $var->name = $req->input('name');
        $var->code = $req->input('code');
        
        if($req->hasfile('img')){
            $destination = 'img/product/'.$var->img;
            
            $img = $req->file('img');
            $extension = $img->getClientOriginalExtension();
            $filename = $req->input('name').'.'.$extension;
            $img->move('img/product/',$filename);
            $var->img = $filename;

        }
        $var->description = $req->input('description');
        $var->category = $req->input('category');
        $var->price = $req->input('price');
        $var->quantity = $req->input('quantity');
        $var->date = $req->input('date');
        $var->rate= $req->input('rate');
        $var->purchased= $req->input('purchased');
        $var->save();
        return redirect()->route('list');

    }
    
    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('list');
    }   
    // function operation(){
    //     $data = DB::table('products')->sum('price');
    //     return view('product',['data'=> $data]);
    // } 

    //order display
    function getOrder(){
        return view('user.order');
    }
    public function addtocart(Request $req){
        
        
        $var = Product::where('id',$req->id)->first();
      //  $var->id = $req->id;
        $var->cart=[];
        //$jsonCart = $req->session()->get('cart'); to get session value
        //session()->get('cart')
        if(session()->has('cart')){
            $cart = json_decode(session()->get('cart'));
        }
        $product = array('id'=>$var->id,'qty'=>1,'name'=>$var->name,'price'=>$var->price,'img'=>$var->img);
        $cart[] = (object)($product);
        $jsonCart = json_encode($cart);
        session()->put('cart',$jsonCart);
        // return session()->get('cart');
        return redirect()->route('list');
    }
    public function emptycart(){
        session()->forget('cart');
        if(!session()->has('cart')){
            return "Cart is empty";
        }
        return session('cart');
        
    }
    public function mycart(){
        $cart = json_decode(session()->get('cart'));
        return view('cart')
        ->with('cart',$cart);
    }
    public function checkout(Request $req){
        //let when logged in there will be a field in session
        $products = json_decode(session()->get('cart'));
        //creating order
        $customer_id = session()->get('user');
        $order = new Order();
        $order->customer_id = $customer_id;
        $order->status="Ordered";
        $order->price = $req->total_price;
        $order->save();

        //creating order details
        foreach($products as $p){
            $o_d = new detail();
            $o_d->order_id = $order->id;
            $o_d->product_id = $p->id;
            $o_d->qty = $p->qty;
            $o_d->unit_price = $p->price;
            $o_d->save();
        }

        session()->forget('cart');

        return "Pruchase Done!";
        

    }
    function getdetails(Request $req){
        

        $id = $req->id;

       $products = Product::where('id',$id)->first();
       // return $products;
        

        return view('productDetail')->with('product', $products);

    }
    function mycart(){
        return view('cart');
    }

   

   
}
