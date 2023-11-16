<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slide;
use App\Models\User;
class PageController extends Controller
{
   
    public function getindex(){
        $slide = Slide::all();
    //     print_r($slide);
    //    exit;
        // $new_product =  Product::skip(0)->take(4)->get();
        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
        return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
        
    }
    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        return view('page.loai_sanpham',compact('sp_theoloai'));
    }
    public function getChitiet(){
        return view('page.chitiet_sanpham');
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getGioithieu(){
        return view('page.gioithieu');
    }
    public function getDangky(){
        return view('page.dangky');
    }
    public function postDangky(Request $req){
        $this->validate(
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max|20',
                'fullname'=>'required',
                're_password'=>'required|same:password',
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không định dạng đúng email',
                'email.unique'=>'email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            ] );
           
            $user = new User();
            $user->full_name = $req->
    }

    public function getGiohang(){
        return view('page.giohang');
    }
    public function getGia(){
        return view('page.gia');
    }
    public function getDangnhap(){
        return view('page.dangnhap');
    }
    public function getKiemtralai(){
        return view('page.kiemtralai');
    }
    public function getloi(){
        return view('page.404');
    }


    // public function postAdminAdd(Request $request){
    //     $product = new Product();
    //     if($request->hasFile('inputImage')){
    //         $file = $request->file('inputImage');
    //         $fileName = $file->getClientOriginalName('inputImage');
    //         $file->move('source/image/product',$fileName);
    //     }
    //     $file_name = null;
    //     if($request->file('inputImage') != null) {
    //         $file_name = $request->file('inputImage')->getClientOriginalName();
    //     }
    //     $product->name = $request->inputName;
    //     $product->image = $file_name;
    //     $product->description = $request->inputDescription;
    //     $product->unit_price= $request->inputPrice;
    //     $product->promotion_price = $request->inputPromotionPrice;
    //     $product->unit = $request->inputUnit;
    //     $product->new = $request->inputNew;
    //     $product->id_type = $request->inputType;
    //     $product->save();
    //     return $this->getIdexAdmin();
    // }
    // public function postAdminEdit(Request $request){
    //     $id = $request->editId;
    //     $product = Product::find($id);
    //     if($request->hasFile('editImage')){
    //         $file = $request->file('editImage');
    //         $fileName = $file->getClientOriginalName('editImage');
    //         $file->move('source/image/product',$fileName);
    //     }
    //     if($request->file('editImage') != null) {
    //         $product->image = $fileName;
    //     }
    //     $product->name = $request->editName;
    //     $product->description = $request->editDescription;
    //     $product->unit_price= $request->editPrice;
    //     $product->promotion_price = $request->editPromotionPrice;
    //     $product->unit = $request->editUnit;
    //     $product->new = $request->editNew;
    //     $product->id_type = $request->editType;
    //     $product->save();
    //     return $this->getIdexAdmin();
    // }

}
