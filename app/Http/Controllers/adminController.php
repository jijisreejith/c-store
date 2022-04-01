<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\index;
use App\Models\userregister;
use App\Models\usercontact;
use App\Models\viewusers;
use App\Models\viewfeedback;
use App\Models\addproducts;
use App\Models\viewproducts;
use Auth;




class adminController extends Controller
{
    public function index()
    {
        return view('index');
    }
     public function viewusers()
  {
    $id=session('sessionid');
    $data['result']=userregister::get();
    return view('user.viewusers',$data);
  }
  public function viewfeedback()
  {
    $id=session('sessionid');
    $data['result']=usercontact::get();
    return view('user.viewfeedback',$data);
  }
   public function addproduct()
  {
    return view('user.addproduts');
  }
  public function addproductaction(request $req)
  {
    $productimage = $req->file('productimage');
    $filename = $productimage->getClientOriginalName();
    $productimage->move(public_path().'/images/',$filename);
    $productname = $req->input('productname');
    $productprice = $req->input('productprice');
    $date = $req->input('date');


    $data=['productimage'=>$filename,
    'productname'=>$productname,
    'productprice'=>$productprice,
    'date'=>$date];

    $result=addproducts::insert($data);
    return redirect('/addproducts');

  }
   public function viewproducts()
  {
    $id=session('sessionid');
    $data['result']=addproducts::get();
    return view('user.viewproducts',$data);
  }
   public function edit($id)
    {
        $data['result']=addproducts:: where('id',$id)->get();
        return view('user.edit',$data,);
     }
      public function update(request $req,$id)
    {
        $productimage = $req->file('productimage');
        $filename = $productimage->getClientOriginalName();
        $productimage->move(public_path().'/images/',$filename);
        $productname = $req->input('productname');
        $productprice = $req->input('productprice');
        $date = $req->input('date');

    $data=['productimage'=>$filename,
    'productname'=>$productname,
    'productprice'=>$productprice,
    'date'=>$date ];

     $result=addproducts::where('id',$id)->update($data);
     return redirect('/addproducts');
 }
 public function delete($id)
    {
        $data=addproducts::where('id',$id)->delete();
        return  redirect('/addproducts');

    }
    public function logout(request $req)
{
Auth::logout();
Return redirect ('/addproducts');

}
}

    

