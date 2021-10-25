<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use DB;
class MainVoting extends Controller
{

    // public function profile(){
    //     // return view('')
    // }
    public function details(){
        return view('user.detail');
    }
    public function setting(){
        return view('user.setting');
    }
    public function aboutus(){
        return view('user.about-us');
    }
    public function admin(){
        return view('admin.admin');
    }
    public function candidateform(){
        return view('addCandidate.candidateform');
    }
    public function save(Request $request)
    {       
        $request->validate([
            'cname'=> 'required',
            'cdetail'=>'required'
        ]);
         $candidate = new candidate;
         $candidate->cimage = $request->cimage;
         $candidate->cname = $request->cname;
         $candidate->cdetail = $request->cdetail;
         $candidate->cimage = $request->cimage;
         $save = $candidate->save();

        if($save){
            return back()->with('success','New user has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function check(Request $request)
    {
        $UserInfo = Candidate::where('cname','=', $request->cname)->first();
    }
    public function voting()
    {
        $candidate = Candidate::all();
        return view('user.voting',['candidates'=>$candidate]);    
    }
    public function add($id)
    {
        $candidate = Candidate::find($id);
        return redirect('user/voting');  
    }
}
