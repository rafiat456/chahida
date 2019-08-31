<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Libraries\CommonFunction;
use App\Libraries\Encryption;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function registrationForm(Request $request){
        $tempsignup = $request->get('temp');
        if ($tempsignup != "") {
            dd('pleae verify your email');
        }
        
    	 return view('register');
    }

    public function store(Request $request){

    	    $this->validate($request, [
               'u_name'=>'required',
               'u_email'=>'required',
               'u_city'=>'required',
               'u_address' => 'required',
                'u_mobile' => 'required'
            ]);
           $user = new User();

            $token_no = hash('SHA256', "-" . $request->get('u_email') . "-");
            $encrypted_token = Encryption::encodeId($token_no);

           $user->u_name = $request->get('u_name');
           $user->u_email = $request->get('u_email');
           $user->u_city = $request->get('u_city');
           $user->u_address = $request->get('u_address');
           $user->u_mobile = $request->get('u_mobile');
           $user->user_hash = $encrypted_token;
           $user->save();
         
           if($this->signupMail($request,$encrypted_token))
            {
                return redirect('register?tmp=' . Encryption::encodeId($request->get('u_email')));
            }
            else
            {
                return Redirect::back()->withInput();
            }


    }

    private function signupMail($request,$token)
    {
        try
        {
            $email = $request->get('u_email');
            $user_phone = $request->get('user_phone');
            $verify_link = 'signup/verification/' . ($token);
            $body_msg = "Thank you for requesting to open an account in our system.<br/>
                              Click the following link to verify your email account.
                            <br/><a href='" . url($verify_link) . "'>Verify the e-mail address you have provided earlier</a>";
            $body_msg .= "<br><br>This is a system generated email. Please don't reply.<br/><br/><br/>Thanks <br/>";


            $params = array([
                'emailYes' => '1',
                'emailTemplate' => 'Users::message',
                'emailBody' => $body_msg,
                'emailSubject' => 'Confirmation about sign-up ',
                'emailHeader' => 'Confirmation about sign-up',
                'emailAdd' => $email,
                'mobileNo' => $user_phone,
                'smsYes' => '0',
                'smsBody' => '',
            ]);
            CommonFunction::sendMessageFromSystem($params);

            \Session::flash('success', 'Thanks for signing up! Please check your email and follow the instruction to complete the sign up process');
            return true;
        }
        catch (\Exception $e)
        {
            Session::flash('error', 'Sorry! Something went wrong, Please try again later.');
            return false;
        }
    }

    public function checklogin(Request $request){


    	$rules = [
                'email' => 'required|email',
                'password' => 'required|max:30',
            ];

            $this->validate($request, $rules);

            $response = $this->commonLoginCheck($request);

            if($response['result'])
            {
                Session::flash('success', $response['msg']);
            }
            else
            {
                Session::flash('error', $response['msg']);
            }
    	 return redirect()->route($response['redirect_to']);
    }

        private function commonLoginCheck($request){
        try
        {

        	
                $loggedin = Auth::attempt(['u_email' => $request->get('email'),'password' => $request->get('password')]);

            if($loggedin)
            {
                
                $response = array('result'=>true,'msg'=>'Logged in successfully, Welcome to '.env('PROJECT_NAME') ,'redirect_to'=>'shop');
                        return $response;
			}else
            {
                $response = array('result'=>false,'msg'=>'Invalid email or password' ,'redirect_to'=>'login');
                return $response;
            }
        }
        catch(\Exception $e)
        {
            Auth::logout();
            $response = array('result'=>false,'msg'=>'Something went wrong' ,'redirect_to'=>'login');
            return $response;
        }
    }

        public function verification($confirmationCode) {
        $user = User::where('user_hash', $confirmationCode)->first();
        if (!$user) {
            \Session::flash('error', 'Invalid Token! Please resend email verification link.');
            return redirect('login');
        }

        if($user->user_verification == 'yes'){
              \Session::flash('error', 'your Email is already verified.');
            return redirect('login');

        }
        /*$currentTime = new Carbon;
        $validateTime = new Carbon($user->created_at . '+6 hours');
        if ($currentTime >= $validateTime) {
            Session::flash('error', 'Verification link is expired (validity period 6 hrs). Please sign up again!');
            return redirect('/login');
        }*/

        $email = $user->user_email;
        $user_password = str_random(10);

        $data = array(
            'password' => Hash::make($user_password),
            'user_verification' => 'yes',
            'email_verified_at' => Carbon::now()
        );

        User::where('id',$user->id)->update($data);

         $body_msg = "<span style='color: #1164f3'>Password of your account :<strong><code>" . $user_password . '</code></strong></span>';
        $body_msg .= "<br/>This is a secret password generated by the system."
            . "But to ensure your own security and convenience, you should change the password after logging in.";
        $body_msg .= "<br><br>This is a system generated email. Please don't reply.<br/><br/><br/>Thanks <br/>OSS Framework Team";


        $params = array([
            'emailYes' => '1',
            'emailTemplate' => 'Users::message',
            'emailBody' => $body_msg,
            'emailSubject' => 'Account Access Information',
            'emailHeader' => 'Verify the e-mail address you have provided earlier',
            'emailAdd' => $email,
            'mobileNo' => '',
            'smsYes' => '0',
            'smsBody' => '',
        ]);
        CommonFunction::sendMessageFromSystem($params);
         
        \Session::flash('success', 'Thanks for signing up! Please check your email for the account activation message.');
           return redirect('login');
    }


    public function logout()
    {
        Session::getHandler()->destroy(Session::getId());
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
