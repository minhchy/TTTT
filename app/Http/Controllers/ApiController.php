<?php

namespace App\Http\Controllers;
use App\Models\chuc_vu;
use App\Models\nhan_vien;
use App\Models\don_vi;
use App\Models\hang_hoa;
use App\Models\khach_hang;
use App\Models\nha_cung_cap;
use App\Models\phuong_tien;
use App\Models\trang_thai;
use App\Models\tinh_tp;
use App\Models\trang_thai_phuong_tien;
use App\Models\xa;
use App\Models\xuat_hang;
use App\Models\loai_hang_hoa;
use App\Models\kho_hang;
use App\Models\chi_tiet_don_nhap;
use App\Models\chi_tiet_don_xuat;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function lay_ds_chuc_vu()
    {
        $chucvuList = chuc_vu::orderBy("TEN_CHUCVU",'asc')->get();
        return response([
            'data' => $chucvuList
        ]);
    }
    public function lay_ds_nhan_vien()
    {
        $data = nhan_vien::orderBy("USERNAME_NV",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_don_vi()
    {
        $data = don_vi::orderBy("TEN_DV",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_hang_hoa()
    {
        $data = hang_hoa::orderBy("TEN_HH",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_khach_hang()
    {
        $data = khach_hang::orderBy("TEN_KH",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_nha_cung_cap()
    {
        $data = nha_cung_cap::orderBy("TEN_NCC",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_phuong_tien()
    {
        $data = phuong_tien::orderBy("TEN_PT",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_trang_thai()
    {
        $data = trang_thai::orderBy("TEN_TT",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_tinh_tp()
    {
        $data = tinh_tp::orderBy("TEN_TINH_TP",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_trang_thai_phuong_tien()
    {
        $data = trang_thai_phuong_tien::orderBy("TEN_TTPT",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_xa()
    {
        $data = xa::orderBy("TEN_XA",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_xuat_hang()
    {
        $data = xuat_hang::orderBy("TIME_XH",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_loai_hang_hoa()
    {
        $data = loai_hang_hoa::orderBy("TEN_LHH",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_kho_hang()
    {
        $data = kho_hang::orderBy("TEN_KHOHANG",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_chi_tiet_don_nhap()
    {
        $data = chi_tiet_don_nhap::orderBy("SOLUONG_CTDN",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
    public function lay_ds_chi_tiet_don_xuat()
    {
        $data = chi_tiet_don_nhap::orderBy("SOLUONG_CTDX",'asc')->get();
        return response([
            'data' => $data
        ]);
    }
}
