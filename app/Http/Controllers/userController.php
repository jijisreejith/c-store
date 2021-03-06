<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userregister;
use App\Models\usercontact;
use App\Models\viewusers;
use App\Models\viewfeedback;
use App\Models\addproducts;
use App\models\addcart;
use App\models\viewcart;
use App\Models\payments;
use App\Models\medicines;





class userController extends Controller
{
     public function __construct()
  {
    $this->obj=new addcart;
}
    
    public function index()
    {
        $data['result']=addproducts::get();
        return view('user.index',$data);
    }
    public function medicines()
    {
        $data['result']=addproducts::get();

    return view('user.medicines',$data);
    }
    public function userregister()
  {
    return view('user.userregister');
  }
  public function userregaction(request $req)
  {
    $name = $req->input('name');
    $contactnumber = $req->input('contactnumber');
    $email = $req->input('email');
    $password = $req->input('password');

    $data=['name'=>$name,
    'contactnumber'=>$contactnumber,
    'email'=>$email,
    'password'=>$password];

    $result=userregister::insert($data);
    return redirect('/userlogin');
  }
   public function userlogin()
    {
    return view('user.userlogin');
    }
    public function userloginaction(request $req)
    {
        $email =$req->input('email');
        $password =$req->input('password');
        $data=userregister::where('email',$email)->where('password',$password)->first();


        if(isset($data))
        {
        $req->session()->put(array('sessionid'=>$data->id));    
        return redirect('/home');
    }
    else
    {
        return redirect('/userlogin')->with('error','invalid email or password');
    }

    }
    public function about()
    {
        return view('user.about');
    }
      public function usercontact()
    {
        return view('user.usercontact');
    }
  
   
  public function usercontactaction(request $req)
  {
    $yourname = $req->input('yourname');
    $phonenumber = $req->input('phonenumber');
    $email = $req->input('email');
    $message = $req->input('message');

    $data=['yourname'=>$yourname,
    'phonenumber'=>$phonenumber,
    'email'=>$email,
    'message'=>$message];

    $result=usercontact::insert($data);
    return redirect('/usercontact');
  }
  public function home()
    {
        $id=session('sessionid');
        $data['result']=addproducts::get();
        $data['user']= userregister::where('id',$id)->get();

        return view('user.home',$data);
    }
     public function editprofile()
    {
        $id=session('sessionid');
        $data['result']=userregister:: where('id',$id)->get();
        return view('user.editprofile',$data,);
     }
      public function update(request $req,$id)
    {
       $name = $req->input('name');
    $contactnumber = $req->input('contactnumber');
    $email = $req->input('email');
    $password = $req->input('password');
    
    $data=['name'=>$name,
    'contactnumber'=>$contactnumber,
    'email'=>$email,
    'password'=>$password];
    $result=userregister::where('id',$id)->update($data);
    return redirect('/editprofile');

    }
    public function addcart($id)
    {
        $user_id=session('sessionid');
        $price=addproducts::where('id',$id)->value('productprice');
        $data =['pid'=>$id,
        'uid'=>$user_id,
        'price'=>$price
        ];
       addcart::insert($data);
        return redirect('/viewcart');

    }
   
   public function viewcart()
   {
    $id=session('sessionid');
$data['result']=addcart::join('addproducts','addproducts.id','=', 'addcarts.pid')
->where('addcarts.uid',$id)
->where('addcarts.status',"addcart")
->select(['addcarts.id','addproducts.productname','addproducts.productimage','addproducts.productprice','addcarts.quantity','addcarts.price','addcarts.pid','addcarts.status'])
->get();
// print_r($data);
return view('user.viewcart',$data);
   }
   public function deletedata($id)
    {
        $data=addcart::where('id',$id)->delete();
        return redirect('/viewcart');
    }
   public function total(request $req,$id)
    {
        // $cid=session('sess');
       $pid=$req->input('pid');
       $qnty=$req->input('qnty');
       $total=$req->input('total');
       $data=[
        // ?'p_id'=>$pid,
        'price'=>$total,
        'quantity'=>$qnty
    ];
        $res=addcart::where('id',$id)->update($data);
        
    }
         public function buyproduct()
  {
    $id=session('sessionid');
$data['result']=addcart::join('addproducts','addproducts.id','=', 'addcarts.pid')
->where('addcarts.uid',$id)
->where('addcarts.status',"addcart")
->select(['addcarts.id','addproducts.productname','addproducts.productimage','addproducts.productprice','addcarts.quantity','addcarts.price','addcarts.pid'])
->get();
$data['sum']=$this->obj->productsum('addcarts',$id);
// print_r($data);
return view('user.buyproduct',$data);
  }

// public function total price()
// {
//     buyproduct::where('id',$id)->sum('quantity');

//   return products::where('id_buyproduct', Auth::user()->id)->get();
// }
  public function payments()
  {
$id=session('sessionid');

 $data['sum']=$this->obj->productsum('addcarts',$id);
 // $data['sum']=$this->obj->productsum('addcarts',$id);


    return view('user.payments',$data);
  }
  public function  paymentAction(request $req)
  {
    $id=session('sessionid');
    $data1=['status'=>"payed"];
    $debitcardnumber = $req->input('debitcardnumber');
    $cvv = $req->input('cvv');
    $expirydate = $req->input('expirydate');
    $cardholdername = $req->input('cardholdername');
    $amount = $req->input('amount');

    $data1=['debitcardnumber'=>$debitcardnumber,
    'uid'=>$id,
    'cvv'=>$cvv,
    'expirydate'=>$expirydate,
    'cardholdername'=>$cardholdername,
    'amount'=>$amount];
    $result=payments::insert($data1);
    return redirect('/payments');

    addcart::where('uid',$id)->update($data);

  }
 
}
