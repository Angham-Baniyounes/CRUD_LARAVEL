<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function index() {
        $admin = new Admin();
        $admins = $admin->all();
        return view("admin", compact('admins'));
    }
    public function create() {
        return view("admin");
    }

    public function store(Request $req) {
        $req->validate([
            'admin_email'    => 'required | email',
            'admin_password' => 'required | min:8 | max:16',
            'admin_fullname' => 'required'
        ]);
        $admin = new Admin();
        // admin_email	admin_password	admin_fullname	admin_image
        $admin->admin_email    = $req['admin_email'];
        $admin->admin_password = $req['admin_password'];
        $admin->admin_fullname = $req['admin_fullname'];
        
        $admin->save();
        return redirect('admin');
    }

    public function destroy($id) {
        $admin = new Admin();
        $admin->destroy($id);
        return redirect('admin');
    }

    public function edit($id) {
        $adminModel = new Admin();
        $admin = $adminModel->find($id);
        return view('editadmin' , compact('admin'));
    }
    
    public function update(Request $req, $id) {
        $admin = new Admin();
        $admin = $admin->find($id);
        $admin->admin_email    = $req['admin_email'];
        $admin->admin_password = $req['admin_password'];
        $admin->admin_fullname = $req['admin_fullname'];
        $admin->save();
        return redirect("admin");
    }    
}
