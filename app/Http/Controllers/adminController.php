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
use App\Models\addgallery;
use App\Models\viewgallery;
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
public function addgallery()
  {
    return view('user.addgallery');
  }
  public function addgalleryaction(request $req)
  {
    $addgallery = $req->file('addgallery');
    $filename = $addgallery->getClientOriginalName();
    $addgallery->move(public_path().'/images/',$filename);
    $description = $req->input('description');

     $data=['addgallery'=>$filename,
    'description'=>$description];

      $result=addgallery::insert($data);
    return redirect('/addgallery');

}
 public function viewgallery()
  {
    $id=session('sessionid');
    $data['result']=addgallery::get();
    return view('user.viewgallery',$data);
  }
   public function editgallery($id)
    {
        $data['result']=addgallery:: where('id',$id)->get();
        return view('user.editgallery',$data,);
     }
      public function updatedata(request $req,$id)
    {
        $addgallery = $req->file('addgallery');
                $description = $req->input('description');
      if($addgallery=="")
      {

        $data=['description'=>$description];
      } 
      else
      {
         $filename = $addgallery->getClientOriginalName();
        $addgallery->move(public_path().'/images/',$filename);

         $data=['addgallery'=>$filename,
    'description'=>$description];
    
      }
   
    $result=addgallery::where('id',$id)->update($data);
     return redirect('/addgallery');
 }
}

    

