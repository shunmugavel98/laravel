<?php
namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Validate,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use App\Admin;
use App\customers;
use App\product;


class UserController extends Controller
{
    public function store(request $request)
    {
        $newUser = new Admin;
        $newUser->name = $request->name;
        $newUser->password = Hash::make($request->password);
        $newUser->save();
     
        return Redirect::to(env('APP_URL').'login');
    }

     public function logs(Request $request)
   {
 
        if ($admin = Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
           $data=Admin::where('name',$request->name)->first();
            $request->session()->put('session_data',$data);
            // Authentication passed...
         return Redirect::to(env('APP_URL').'dashboard');
            // echo'login';
        } else {
            return Redirect::to(env("APP_URL")."login");
            //return redirect("login");
            // echo'Not login';
        }
 
        // return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }


  public function dashboard()
   
     {
return view("dashboard");
      
     }

  public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }   



    
     public function create()
{
   return view('create');
}

   public function stores(Request $request)
{
        $newUser = new customers;
        $newUser->name = $request->name;
        $newUser->address =$request->address;
        $newUser->salary =$request->salary;
        $newUser->save();
         return Redirect::to(env('APP_URL').'index');
}
  //public function stores(Request $request)
//{
        //$validatedData = $request->validate([
         //   'name' => 'required',
       //     'address' => 'required',
     //       'salary' => 'required',
   //     ]);
  //      $show = customers::create($validatedData);
   
        //return redirect('/customer')->with('success', 'Corona Case is successfully saved');
 
//}
    
public function index()
{
  
  $coronacases = customers::orderBy('id', 'asc')->paginate(5);
        return view('index', compact('coronacases'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        $coronacases = customers::all();

        return view('index', compact('coronacases'));
   
}

public function edit($id)
{
        $coronacase = customers::findOrFail($id);

        return view('edit', compact('coronacase'));
}
public function update(Request $request)
{
     // print_r($id);exit;
    // $validatedData = $request->validate([
    //         'name' => 'required',
    //       'address' => 'required',
    //         'salary' => 'required',
    //     ]);

        $data['name'] = $request->name;
         $data['address'] = $request->address;
          $data['salary'] = $request->salary;
        customers::where('id',$request->id)->update($data);
 return Redirect::to(env('APP_URL').'index');
        //return redirect('/customer')->with('success', 'Corona Case Data is successfully updated');
      }
public function destroy(Request $request)
{
         $data['name'] = $request->name;
         $data['address'] = $request->address;
          $data['salary'] = $request->salary;
        customers::where('id',$request->id)->delete($data);
         return Redirect::to(env('APP_URL').'index');
}
public function count()
{
  $data=DB::table('customer');
  return view('count',compact('data'));
}

public function employees()
{
  
 
        $coronacases = product::all();

        return view('employees', compact('coronacases'));
   
}
 public function create1()
{
   return view('create1');
}

 public function storess(Request $request)
{
        $newUser = new product;
        $newUser->name = $request->name;
        $newUser->age =$request->age;
        $newUser->contact =$request->contact;
        $newUser->gender =$request->gender;
        $newUser->save();
         return Redirect::to(env('APP_URL').'employees');
}
public function destroy1(Request $request)
{
         $data['name'] = $request->name;
         $data['age'] = $request->age;
         $data['contact'] = $request->contact;
         $data['gender'] = $request->gender;
        product::where('id',$request->id)->delete($data);
         return Redirect::to(env('APP_URL').'employees');
}
}
?>

