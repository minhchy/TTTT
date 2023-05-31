<?php

namespace App\Http\Controllers;
use App\Models\chuc_vu;
use App\Models\nhan_vien;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function lay_ds_chuc_vu()
    {
        $chucvuList = chuc_vu::orderBy("ten_chucvu",'asc')->get();
        return response([
            'data' => $chucvuList
        ]);
    }
    public function lay_ds_nhan_vien()
    {
        $data = nhan_vien::orderBy("username_nv",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
}
