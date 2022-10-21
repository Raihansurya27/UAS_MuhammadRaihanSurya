<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Booking;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Komentar;
use App\Models\Menu;
use App\Models\Peran;
use App\Models\Tipe;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
            $bookCount = Acara::count();
            $category = Booking::count();
            $userCount = User::count();
            $userCount = Jabatan::count();
            $userCount = Karyawan::count();
            $userCount = Komentar::count();
            $userCount = Menu::count();
            $userCount = Peran::count();
            $userCount = Tipe::count();
           return view('dashboard',[
            'book_count' => $bookCount,
            'category_count'=>$category,
            'user_count'=>$userCount

        ]);
    }
}