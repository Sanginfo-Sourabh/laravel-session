<?php
namespace App\Http\Controllers;
use App\Models\PurchaseOrderHeader;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests;
use Mockery\Exception;
use JasperPHP\JasperPHP;
class AdminSiteController extends Controller
{
  
    public function userlogin(Request $request)
    {
      try{
        $username = $request->input('username');

        $request->session()->put('my_name',$username);

        $sessionvalue = $request->session()->get('my_name');

        return redirect()->route('polist');

      } catch (Exception $error) {
          return $error->getMessage();
      }
    }

}
