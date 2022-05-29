<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Friend;


class FriendController extends Controller

{
    use AuthorizesRequests;
    public function friend(Request $request){

        $friend = new Friend;

        $friend_allready = Friend::all()->where('user_id_1','=',Auth::user()->id)->where('user_id_2','=',$request->id)->first();

        if($friend_allready == null){

            $friend->user_id_1 = Auth::user()->id;

            $friend->user_id_2 = $request->id;

            $friend->save();

            return redirect("/home")->with('success', 'Added to your friend list');

        }
        else
        {

            return redirect("/home")->with('success', 'This user is allready your friend');

        }


    }

    public function myFriends($id){

        $user = User::find($id);
        return view('myfriends',compact('user'));

    }

    public function editUser(User $user)
    {
        $user = Auth::user();
        return view('edituser', compact('user'));
    }



    public function updateUser(Request $request)
    {
        if($request->has('img_path')){
            $image_name = time() . '-' . $request->name . '.' .$request->img_path->extension();
            $request->img_path->move(public_path('images'), $image_name);

            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->img_path = $image_name;
            $user->password = bcrypt($request->password);

            $user->save();
            return redirect("/home")->with('success', 'Your Profile Updated');

        }
        else{

            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect("/home")->with('success', 'Your Profile Updated');

        }
    }

    public function removeFriend(Request $request)

    {
        $friend = Friend::all()->where('user_id_1','=',Auth::user()->id)->where('user_id_2','=',$request->id)->first();

        if($friend != null){

            $friend->delete();
            return redirect("/home")->with('success', 'Removed from your friend list');

        }
        else{

            return redirect("/home")->with('success', 'This User is not your friend');
        }
    }

}
