<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Str;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{//register
    public function register(Request $request){

        $validator=validator()->make($request->all(),[
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required|unique:clients,email',
        'phone'=>'required|unique:clients,phone',
        'password'=>'required|confirmed',
        ]);
        if($validator->fails()){
        return ResponseJson(0,$validator->errors()->first(),$validator->errors());
        }
        $request->merge(['password'=>bcrypt($request->password)]);
        $client=Client::create($request->all());
        $token = $client->createToken('API Token')->accessToken;
        $client->save();
             
        return ResponseJson(1,'success',[
            'token'=>$token,
        'client'=>$client
        ]);
        }

//login
        public function login(Request $request){
            $validator=validator()->make($request->all(),[
               
                'phone'=>'required',
                'pin_code'=>'required',
                
                
                ]);
                if($validator->fails()){
                
                
                    return ResponseJson(0,$validator->errors()->first(),$validator->errors());
                }
        
        
                $client=Client::where('phone',$request->phone)->first();
                if($client){
              if($request->pin_code==$client->pin_code){

        $token = $client->createToken('API Token')->accessToken;
            return ResponseJson(1,'success', [
        
                'token'=>$token,
                'client'=>$client
            ]);
        }else{
            return ResponseJson(0,'uncorrect data');
        }
                }else{
                    return ResponseJson(0,'uncorrect data');
        
                }
                }

//profile
                public function profile(Request $request){
                    $validator=validator()->make($request->all(),[
                       
                       
                        'email'=>Rule::unique('clients')->ignore($request->user()->id),
                        'phone'=>Rule::unique('clients')->ignore($request->user()->id),
                
                        
                        
                        ]);
                        if($validator->fails()){
                        $data=$validator->errors();
                        
                            return ResponseJson(0,$validator->errors()->first(),$data);
                        }
                
                        $loginUser=$request->user();
                        $loginUser->update($request->all());
                         $loginUser->save();
                    
                
                $data=[
                
                'user'=>$request->user()
                
                
                ];
                
                return ResponseJson(1,'data updated successfully',$data);
                
                }





}
