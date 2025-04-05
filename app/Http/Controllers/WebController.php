<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetEmail;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    function appLogin()
    {
        $page_title = 'Samji Web Portal';
        return view('applogin', compact('page_title'));
    }
    function privacyPolicy()
    {
        $page_title = 'Samji Privacy Policy';
        return view('privacy-policy', compact('page_title'));
    }
    function index()
    {
        $page_title = 'Samji Web Portal';
        return view('index', compact('page_title'));
    }
    function about()
    {
        $page_title = 'Samji Web Portal - About';
        return view('about', compact('page_title'));
    }
    function contact()
    {
        $page_title = 'Samji Web Portal - Contact';
        return view('contact', compact('page_title'));
    }

    function econtact()
    {
        $page_title = 'Samji Web Portal - Emergency Contacts';
        return view('emergency-contact', compact('page_title'));
    }

    function viewRegistration()
    {
        $page_title = 'Samji Web Portal - Registration';
        return view('registration', compact('page_title'));
    }

    function saveRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric|digits:10|unique:users,mobile',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'terms' => 'accepted',
        ]);
        try {
            $input = $request->except(array('password_confirmation', 'terms'));
            $input['password'] = Hash::make($request->password);
            User::create($input);
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('login')->with("success", "User registered successfully");
    }

    function viewLogin()
    {
        $page_title = 'Samji Web Portal - Login';
        return view('login', compact('page_title'));
    }

    function loginAuthentication(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('index')
                    ->with("success", 'User logged in successfully');
            }
            return redirect()->back()->with("error", "Invalid Credentials")->withInput($request->all());
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
    }

    function forgotPassword()
    {
        $page_title = 'Samji Web Portal - Forgot Password';
        return view('forgot-password', compact('page_title'));
    }

    function forgotPasswordFetch(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        try {
            $user = User::where('email', $request->email)->firstOrFail();
            Mail::to($request->email)->send(new PasswordResetEmail($user));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Password reset link sent successfully");
    }

    function resetPassword(Request $request)
    {
        $page_title = 'Samji Web Portal - Reset Password';
        $user = User::findOrFail(decrypt($request->uid));
        return view('reset-password', compact('page_title', 'user'));
    }

    function resetPasswordUpdate(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);
        try {
            $user = User::findOrFail(decrypt($request->uid));
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('login')->with("success", "Password updated successfully");
    }

    public function deleteMyAccount(Request $request)
    {
        User::findOrFail(Auth::user()->id)->delete();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with("success", "User account deleted successfully");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with("success", "User logged out successfully");
    }
}
