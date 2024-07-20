<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function export_excel()
    {
        return Excel::download(new ExportUser, 'user.xlsx');
    }
}
