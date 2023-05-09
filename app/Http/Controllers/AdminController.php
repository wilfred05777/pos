<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function AdminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/logout');
        // return redirect('/login');
        // return redirect('/admin/logout/page');
    }

    public function AdminLogoutPage(Request $request)
    {
        return view('admin.admin_logout');
    }

    public function AdminProfile(Request $request)
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
    }
}
