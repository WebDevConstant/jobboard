<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Job\Application;
use App\Models\Job\JobSaved;
use Auth;

class UsersController extends Controller
{
    public function profile(){
        $profile = User::find(Auth::user()->id);

        return view('users.profile', compact('profile'));
    }

    public function applications(){
        $applications = Application::where('user_id',Auth::user()->id)
        ->get();

        return view('users.applications', compact('applications'));
    }

    public function savedJobs(){
        $savedJobs = JobSaved::where('user_id',Auth::user()->id)
        ->get();

        return view('users.savedJobs', compact('savedJobs'));
    }


    public function editDetails(){
        $user = User::find(Auth::user()->id);
        return view('users.editdetails', compact('user'));
    }
    
    public function updateDetails(Request $request){
        $userUpdate = User::find(Auth::user()->id);
        $userUpdate->update([
            "name" => $request->name,
            "job_title" => $request->jobtitle,
            "bio" => $request->bio,
            "linkedin" => $request->linkedin,
            "faceook" => $request->facebook,
            "twitter" => $request->twitter,
            
            ]
        );

        if ($userUpdate){
            return redirect("/users/edit-details/")->with('update','Profile updated successfully!');
        }
        
    }
    
}

