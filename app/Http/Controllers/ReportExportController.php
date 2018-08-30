<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


use App\Exports\UsersExport;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ReportExportController extends Controller
{
    function excel_user(){        
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    function excel_projects(){        
        return Excel::download(new ProjectsExport, 'projects.xlsx');
    }
}
