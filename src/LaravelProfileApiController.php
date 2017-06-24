<?php

namespace Berkayoztunc\LaravelProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LaravelProfileApiController extends Controller
{
    protected $user;

    public function __construct()
    {
        $user = config()->get('profile.user_class');
        $this->user = new $user();
    }

    private function userGetter()
    {
        return $this->user->find(Auth::guard(config()->get('profile.guard'))->user()->id);
    }

    public function profile()
    {
        $user = $this->userGetter();
        return response()->json($user);
    }

    public function activity()
    {
        $user = $this->userGetter();
        $activitys = $user->userActivitys;
        return response()->json($activitys);
    }

    public function setProfile(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|max:255',
            ]);

        $user = $this->userGetter();
        $user->update([
            'name' => $request->name,
        ]);
        return response()->json($user);
    }

    public function setAbout(Request $request)
    {
        $this->validate($request,
            [
                'about' => 'required',
            ]);
        $user = $this->userGetter();
        $user->update([
            'about' => $request->about,
        ]);
        return response()->json($user);

    }

    public function setPassword(Request $request)
    {
        $this->validate($request,
            [
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]);
        $user = $this->userGetter();
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        return response()->json($user);

    }

    public function setEmail(Request $request)
    {
        $user = $user = $this->userGetter();
        if ($user->email != $request->email) {
            $this->validate($request,
                [
                    'email' => 'required|unique:users,email|email',
                ]);
            $user->update([
                'email' => $request->email,
            ]);
        }
        return response()->json($user);
    }
}
