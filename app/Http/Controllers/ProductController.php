<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use App\Models\TypeSausage;
use Illuminate\Http\Request;
use PHPUnit\Metadata\PostCondition;
use Illuminate\Database\Eloquent;

class ProductController extends Controller
{
    public function index(){
        return view('kylik.index');
    }
    public function product(){
        $productsType = TypeSausage::all();
        return view('kylik.product', compact('productsType'));
    }
    public function contact(){
        return view('kylik.contact');
    }
    public function about_us(){
        return view('kylik.about_us');
    }
    public function syrokopcheni($id){
        $sausages = Product::all()->where('type_sausage_id','=',$id);
        return view('kylik.syrokopcheni', compact('sausages'));
    }
    public function basket(){
        $baskets = Basket::all();
        return view('kylik.basket',compact('baskets'));
    }
    public function phone(){
        return view('kylik.phone-menu');
    }

    public function show(string $name,string $value){
        $data = array(
            'name' => $name,
            'value' => $value
        );
        return view('kylik.product_syrokop', $data);
    }

    public function add(string $name,int $id){
        $bas = Basket::all();
        $t=Basket::all()->where('product_id','=',$id);
        $a=null;
        foreach ($t as $g){
            $a = $g;
        }
        if($a!=null) {
            $basket = Basket::findOrFail($a->id);
        }
        $check=1;
        if(count(Basket::all())==0){
            $temp = [
                'product_id'=>$id,
                'amount'=>1,
            ];
            Basket::create($temp);
            $check=0;
        }
        foreach ($bas as $item){
            if(($item->product_id)==$id) {
                $arr=[
                    'product_id'=>($item->product_id),
                    'amount'=> ($item->amount += 1),
                ];
                $basket->update($arr);
                $check = 0;
                break;
            }
        }
        if($check){
            $temp = [
                'product_id'=>$id,
                'amount'=>1,
            ];
            Basket::create($temp);
        }

        return $this->show($name,$id);
    }

    public function delete($id){
        $basket = Basket::findOrFail($id);
        $basket->delete();
        $baskets = Basket::all();
        return view('kylik.basket',compact('baskets'));
    }
}
