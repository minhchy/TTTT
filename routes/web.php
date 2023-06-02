<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChucVusController;
use App\Http\Controllers\ChiTietDonNhapsController;
use App\Http\Controllers\ChiTietDonXuatsController;
use App\Http\Controllers\DonVisController;
use App\Http\Controllers\HangHoasController;
use App\Http\Controllers\HuyensController;
use App\Http\Controllers\KhachHangsController;
use App\Http\Controllers\KhoHangsController;
use App\Http\Controllers\LoaiHangHoasController;
use App\Http\Controllers\LoaiPhuongTiensController;
use App\Http\Controllers\NhanViensController;
use App\Http\Controllers\NhapHangsController;
use App\Http\Controllers\NhaCungCapsController;
use App\Http\Controllers\PhuongTiensController;
use App\Http\Controllers\PtHhsController;
use App\Http\Controllers\ThuocKhoHangsController;
use App\Http\Controllers\TinhTpsController;
use App\Http\Controllers\TrangThaisController;
use App\Http\Controllers\TrangThaiPhuongTiensController;
use App\Http\Controllers\XasController;
use App\Http\Controllers\XuatHangsController;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
     'prefix' => 'api',
 ], function () {
     Route::get('/lay_ds_chuc_vu', [ApiController::class, 'lay_ds_chuc_vu'])->name('ApiController.lay_ds_chuc_vu');
     Route::get('/lay_ds_nhan_vien', [ApiController::class, 'lay_ds_nhan_vien'])->name('ApiController.lay_ds_nhan_vien');
     Route::get('/lay_ds_don_vi', [ApiController::class, 'lay_ds_don_vi'])->name('ApiController.lay_ds_don_vi');
     Route::get('/lay_ds_hang_hoa', [ApiController::class, 'lay_ds_hang_hoa'])->name('ApiController.lay_ds_hang_hoa');
     Route::get('/lay_ds_khach_hang', [ApiController::class, 'lay_ds_khach_hang'])->name('ApiController.lay_ds_khach_hang');
     Route::get('/lay_ds_nha_cung_cap', [ApiController::class, 'lay_ds_nha_cung_cap'])->name('ApiController.lay_ds_nha_cung_cap');
     Route::get('/lay_ds_phuong_tien', [ApiController::class, 'lay_ds_phuong_tien'])->name('ApiController.lay_ds_phuong_tien');
     Route::get('/lay_ds_trang_thai', [ApiController::class, 'lay_ds_trang_thai'])->name('ApiController.lay_ds_trang_thai');
     Route::get('/lay_ds_tinh_tp', [ApiController::class, 'lay_ds_tinh_tp'])->name('ApiController.lay_ds_tinh_tp');
     Route::get('/lay_ds_trang_thai_phuong_tien', [ApiController::class, 'lay_ds_trang_thai_phuong_tien'])->name('ApiController.lay_ds_trang_thai_phuong_tien');
     Route::get('/lay_ds_xa', [ApiController::class, 'lay_ds_xa'])->name('ApiController.lay_ds_xa');
     Route::get('/lay_ds_xuat_hang', [ApiController::class, 'lay_ds_xuat_hang'])->name('ApiController.lay_ds_xuat_hang');
     Route::get('/lay_ds_loai_hang_hoa', [ApiController::class, 'lay_ds_loai_hang_hoa'])->name('ApiController.lay_ds_loai_hang_hoa');
     Route::get('/lay_ds_kho_hang', [ApiController::class, 'lay_ds_kho_hang'])->name('ApiController.lay_ds_kho_hang');
     Route::get('/lay_ds_chi_tiet_don_xuat', [ApiController::class, 'lay_ds_chi_tiet_don_xuat'])->name('ApiController.lay_ds_chi_tiet_don_xuat');
     Route::get('/lay_ds_chi_tiet_don_nhap', [ApiController::class, 'lay_ds_chi_tiet_don_nhap'])->name('ApiController.lay_ds_chi_tiet_don_nhap');
 });
 
Route::group([
    'prefix' => 'chuc_vus',
], function () {
    Route::get('/', [ChucVusController::class, 'index'])
         ->name('chuc_vus.chuc_vu.index');
    Route::get('/create', [ChucVusController::class, 'create'])
         ->name('chuc_vus.chuc_vu.create');
    Route::get('/show/{chucVu}',[ChucVusController::class, 'show'])
         ->name('chuc_vus.chuc_vu.show');
    Route::get('/{chucVu}/edit',[ChucVusController::class, 'edit'])
         ->name('chuc_vus.chuc_vu.edit');
    Route::post('/', [ChucVusController::class, 'store'])
         ->name('chuc_vus.chuc_vu.store');
    Route::put('chuc_vu/{chucVu}', [ChucVusController::class, 'update'])
         ->name('chuc_vus.chuc_vu.update');
    Route::delete('/chuc_vu/{chucVu}',[ChucVusController::class, 'destroy'])
         ->name('chuc_vus.chuc_vu.destroy');
});

Route::group([
    'prefix' => 'chi_tiet_don_nhaps',
], function () {
    Route::get('/', [ChiTietDonNhapsController::class, 'index'])
         ->name('chi_tiet_don_nhaps.chi_tiet_don_nhap.index');
    Route::get('/create', [ChiTietDonNhapsController::class, 'create'])
         ->name('chi_tiet_don_nhaps.chi_tiet_don_nhap.create');
    Route::get('/show/{chiTietDonNhap}',[ChiTietDonNhapsController::class, 'show'])
         ->name('chi_tiet_don_nhaps.chi_tiet_don_nhap.show');
    Route::get('/{chiTietDonNhap}/edit',[ChiTietDonNhapsController::class, 'edit'])
         ->name('chi_tiet_don_nhaps.chi_tiet_don_nhap.edit');
    Route::post('/', [ChiTietDonNhapsController::class, 'store'])
         ->name('chi_tiet_don_nhaps.chi_tiet_don_nhap.store');
    Route::put('chi_tiet_don_nhap/{chiTietDonNhap}', [ChiTietDonNhapsController::class, 'update'])
         ->name('chi_tiet_don_nhaps.chi_tiet_don_nhap.update');
    Route::delete('/chi_tiet_don_nhap/{chiTietDonNhap}',[ChiTietDonNhapsController::class, 'destroy'])
         ->name('chi_tiet_don_nhaps.chi_tiet_don_nhap.destroy');
});

Route::group([
    'prefix' => 'chi_tiet_don_xuats',
], function () {
    Route::get('/', [ChiTietDonXuatsController::class, 'index'])
         ->name('chi_tiet_don_xuats.chi_tiet_don_xuat.index');
    Route::get('/create', [ChiTietDonXuatsController::class, 'create'])
         ->name('chi_tiet_don_xuats.chi_tiet_don_xuat.create');
    Route::get('/show/{chiTietDonXuat}',[ChiTietDonXuatsController::class, 'show'])
         ->name('chi_tiet_don_xuats.chi_tiet_don_xuat.show');
    Route::get('/{chiTietDonXuat}/edit',[ChiTietDonXuatsController::class, 'edit'])
         ->name('chi_tiet_don_xuats.chi_tiet_don_xuat.edit');
    Route::post('/', [ChiTietDonXuatsController::class, 'store'])
         ->name('chi_tiet_don_xuats.chi_tiet_don_xuat.store');
    Route::put('chi_tiet_don_xuat/{chiTietDonXuat}', [ChiTietDonXuatsController::class, 'update'])
         ->name('chi_tiet_don_xuats.chi_tiet_don_xuat.update');
    Route::delete('/chi_tiet_don_xuat/{chiTietDonXuat}',[ChiTietDonXuatsController::class, 'destroy'])
         ->name('chi_tiet_don_xuats.chi_tiet_don_xuat.destroy');
});

Route::group([
    'prefix' => 'don_vis',
], function () {
    Route::get('/', [DonVisController::class, 'index'])
         ->name('don_vis.don_vi.index');
    Route::get('/create', [DonVisController::class, 'create'])
         ->name('don_vis.don_vi.create');
    Route::get('/show/{donVi}',[DonVisController::class, 'show'])
         ->name('don_vis.don_vi.show');
    Route::get('/{donVi}/edit',[DonVisController::class, 'edit'])
         ->name('don_vis.don_vi.edit');
    Route::post('/', [DonVisController::class, 'store'])
         ->name('don_vis.don_vi.store');
    Route::put('don_vi/{donVi}', [DonVisController::class, 'update'])
         ->name('don_vis.don_vi.update');
    Route::delete('/don_vi/{donVi}',[DonVisController::class, 'destroy'])
         ->name('don_vis.don_vi.destroy');
});

Route::group([
    'prefix' => 'hang_hoas',
], function () {
    Route::get('/', [HangHoasController::class, 'index'])
         ->name('hang_hoas.hang_hoa.index');
    Route::get('/create', [HangHoasController::class, 'create'])
         ->name('hang_hoas.hang_hoa.create');
    Route::get('/show/{hangHoa}',[HangHoasController::class, 'show'])
         ->name('hang_hoas.hang_hoa.show');
    Route::get('/{hangHoa}/edit',[HangHoasController::class, 'edit'])
         ->name('hang_hoas.hang_hoa.edit');
    Route::post('/', [HangHoasController::class, 'store'])
         ->name('hang_hoas.hang_hoa.store');
    Route::put('hang_hoa/{hangHoa}', [HangHoasController::class, 'update'])
         ->name('hang_hoas.hang_hoa.update');
    Route::delete('/hang_hoa/{hangHoa}',[HangHoasController::class, 'destroy'])
         ->name('hang_hoas.hang_hoa.destroy');
});

Route::group([
    'prefix' => 'huyens',
], function () {
    Route::get('/', [HuyensController::class, 'index'])
         ->name('huyens.huyen.index');
    Route::get('/create', [HuyensController::class, 'create'])
         ->name('huyens.huyen.create');
    Route::get('/show/{huyen}',[HuyensController::class, 'show'])
         ->name('huyens.huyen.show');
    Route::get('/{huyen}/edit',[HuyensController::class, 'edit'])
         ->name('huyens.huyen.edit');
    Route::post('/', [HuyensController::class, 'store'])
         ->name('huyens.huyen.store');
    Route::put('huyen/{huyen}', [HuyensController::class, 'update'])
         ->name('huyens.huyen.update');
    Route::delete('/huyen/{huyen}',[HuyensController::class, 'destroy'])
         ->name('huyens.huyen.destroy');
});

Route::group([
    'prefix' => 'khach_hangs',
], function () {
    Route::get('/', [KhachHangsController::class, 'index'])
         ->name('khach_hangs.khach_hang.index');
    Route::get('/create', [KhachHangsController::class, 'create'])
         ->name('khach_hangs.khach_hang.create');
    Route::get('/show/{khachHang}',[KhachHangsController::class, 'show'])
         ->name('khach_hangs.khach_hang.show');
    Route::get('/{khachHang}/edit',[KhachHangsController::class, 'edit'])
         ->name('khach_hangs.khach_hang.edit');
    Route::post('/', [KhachHangsController::class, 'store'])
         ->name('khach_hangs.khach_hang.store');
    Route::put('khach_hang/{khachHang}', [KhachHangsController::class, 'update'])
         ->name('khach_hangs.khach_hang.update');
    Route::delete('/khach_hang/{khachHang}',[KhachHangsController::class, 'destroy'])
         ->name('khach_hangs.khach_hang.destroy');
});

Route::group([
    'prefix' => 'kho_hangs',
], function () {
    Route::get('/', [KhoHangsController::class, 'index'])
         ->name('kho_hangs.kho_hang.index');
    Route::get('/create', [KhoHangsController::class, 'create'])
         ->name('kho_hangs.kho_hang.create');
    Route::get('/show/{khoHang}',[KhoHangsController::class, 'show'])
         ->name('kho_hangs.kho_hang.show');
    Route::get('/{khoHang}/edit',[KhoHangsController::class, 'edit'])
         ->name('kho_hangs.kho_hang.edit');
    Route::post('/', [KhoHangsController::class, 'store'])
         ->name('kho_hangs.kho_hang.store');
    Route::put('kho_hang/{khoHang}', [KhoHangsController::class, 'update'])
         ->name('kho_hangs.kho_hang.update');
    Route::delete('/kho_hang/{khoHang}',[KhoHangsController::class, 'destroy'])
         ->name('kho_hangs.kho_hang.destroy');
});

Route::group([
    'prefix' => 'loai_hang_hoas',
], function () {
    Route::get('/', [LoaiHangHoasController::class, 'index'])
         ->name('loai_hang_hoas.loai_hang_hoa.index');
    Route::get('/create', [LoaiHangHoasController::class, 'create'])
         ->name('loai_hang_hoas.loai_hang_hoa.create');
    Route::get('/show/{loaiHangHoa}',[LoaiHangHoasController::class, 'show'])
         ->name('loai_hang_hoas.loai_hang_hoa.show');
    Route::get('/{loaiHangHoa}/edit',[LoaiHangHoasController::class, 'edit'])
         ->name('loai_hang_hoas.loai_hang_hoa.edit');
    Route::post('/', [LoaiHangHoasController::class, 'store'])
         ->name('loai_hang_hoas.loai_hang_hoa.store');
    Route::put('loai_hang_hoa/{loaiHangHoa}', [LoaiHangHoasController::class, 'update'])
         ->name('loai_hang_hoas.loai_hang_hoa.update');
    Route::delete('/loai_hang_hoa/{loaiHangHoa}',[LoaiHangHoasController::class, 'destroy'])
         ->name('loai_hang_hoas.loai_hang_hoa.destroy');
});

Route::group([
    'prefix' => 'loai_phuong_tiens',
], function () {
    Route::get('/', [LoaiPhuongTiensController::class, 'index'])
         ->name('loai_phuong_tiens.loai_phuong_tien.index');
    Route::get('/create', [LoaiPhuongTiensController::class, 'create'])
         ->name('loai_phuong_tiens.loai_phuong_tien.create');
    Route::get('/show/{loaiPhuongTien}',[LoaiPhuongTiensController::class, 'show'])
         ->name('loai_phuong_tiens.loai_phuong_tien.show');
    Route::get('/{loaiPhuongTien}/edit',[LoaiPhuongTiensController::class, 'edit'])
         ->name('loai_phuong_tiens.loai_phuong_tien.edit');
    Route::post('/', [LoaiPhuongTiensController::class, 'store'])
         ->name('loai_phuong_tiens.loai_phuong_tien.store');
    Route::put('loai_phuong_tien/{loaiPhuongTien}', [LoaiPhuongTiensController::class, 'update'])
         ->name('loai_phuong_tiens.loai_phuong_tien.update');
    Route::delete('/loai_phuong_tien/{loaiPhuongTien}',[LoaiPhuongTiensController::class, 'destroy'])
         ->name('loai_phuong_tiens.loai_phuong_tien.destroy');
});

Route::group([
    'prefix' => 'nhan_viens',
], function () {
    Route::get('/', [NhanViensController::class, 'index'])
         ->name('nhan_viens.nhan_vien.index');
    Route::get('/create', [NhanViensController::class, 'create'])
         ->name('nhan_viens.nhan_vien.create');
    Route::get('/show/{nhanVien}',[NhanViensController::class, 'show'])
         ->name('nhan_viens.nhan_vien.show');
    Route::get('/{nhanVien}/edit',[NhanViensController::class, 'edit'])
         ->name('nhan_viens.nhan_vien.edit');
    Route::post('/', [NhanViensController::class, 'store'])
         ->name('nhan_viens.nhan_vien.store');
    Route::put('nhan_vien/{nhanVien}', [NhanViensController::class, 'update'])
         ->name('nhan_viens.nhan_vien.update');
    Route::delete('/nhan_vien/{nhanVien}',[NhanViensController::class, 'destroy'])
         ->name('nhan_viens.nhan_vien.destroy');
});

Route::group([
    'prefix' => 'nhap_hangs',
], function () {
    Route::get('/', [NhapHangsController::class, 'index'])
         ->name('nhap_hangs.nhap_hang.index');
    Route::get('/create', [NhapHangsController::class, 'create'])
         ->name('nhap_hangs.nhap_hang.create');
    Route::get('/show/{nhapHang}',[NhapHangsController::class, 'show'])
         ->name('nhap_hangs.nhap_hang.show');
    Route::get('/{nhapHang}/edit',[NhapHangsController::class, 'edit'])
         ->name('nhap_hangs.nhap_hang.edit');
    Route::post('/', [NhapHangsController::class, 'store'])
         ->name('nhap_hangs.nhap_hang.store');
    Route::put('nhap_hang/{nhapHang}', [NhapHangsController::class, 'update'])
         ->name('nhap_hangs.nhap_hang.update');
    Route::delete('/nhap_hang/{nhapHang}',[NhapHangsController::class, 'destroy'])
         ->name('nhap_hangs.nhap_hang.destroy');
});

Route::group([
    'prefix' => 'nha_cung_caps',
], function () {
    Route::get('/', [NhaCungCapsController::class, 'index'])
         ->name('nha_cung_caps.nha_cung_cap.index');
    Route::get('/create', [NhaCungCapsController::class, 'create'])
         ->name('nha_cung_caps.nha_cung_cap.create');
    Route::get('/show/{nhaCungCap}',[NhaCungCapsController::class, 'show'])
         ->name('nha_cung_caps.nha_cung_cap.show');
    Route::get('/{nhaCungCap}/edit',[NhaCungCapsController::class, 'edit'])
         ->name('nha_cung_caps.nha_cung_cap.edit');
    Route::post('/', [NhaCungCapsController::class, 'store'])
         ->name('nha_cung_caps.nha_cung_cap.store');
    Route::put('nha_cung_cap/{nhaCungCap}', [NhaCungCapsController::class, 'update'])
         ->name('nha_cung_caps.nha_cung_cap.update');
    Route::delete('/nha_cung_cap/{nhaCungCap}',[NhaCungCapsController::class, 'destroy'])
         ->name('nha_cung_caps.nha_cung_cap.destroy');
});

Route::group([
    'prefix' => 'phuong_tiens',
], function () {
    Route::get('/', [PhuongTiensController::class, 'index'])
         ->name('phuong_tiens.phuong_tien.index');
    Route::get('/create', [PhuongTiensController::class, 'create'])
         ->name('phuong_tiens.phuong_tien.create');
    Route::get('/show/{phuongTien}',[PhuongTiensController::class, 'show'])
         ->name('phuong_tiens.phuong_tien.show');
    Route::get('/{phuongTien}/edit',[PhuongTiensController::class, 'edit'])
         ->name('phuong_tiens.phuong_tien.edit');
    Route::post('/', [PhuongTiensController::class, 'store'])
         ->name('phuong_tiens.phuong_tien.store');
    Route::put('phuong_tien/{phuongTien}', [PhuongTiensController::class, 'update'])
         ->name('phuong_tiens.phuong_tien.update');
    Route::delete('/phuong_tien/{phuongTien}',[PhuongTiensController::class, 'destroy'])
         ->name('phuong_tiens.phuong_tien.destroy');
});

Route::group([
    'prefix' => 'pt_hhs',
], function () {
    Route::get('/', [PtHhsController::class, 'index'])
         ->name('pt_hhs.pt_hh.index');
    Route::get('/create', [PtHhsController::class, 'create'])
         ->name('pt_hhs.pt_hh.create');
    Route::get('/show/{ptHh}',[PtHhsController::class, 'show'])
         ->name('pt_hhs.pt_hh.show');
    Route::get('/{ptHh}/edit',[PtHhsController::class, 'edit'])
         ->name('pt_hhs.pt_hh.edit');
    Route::post('/', [PtHhsController::class, 'store'])
         ->name('pt_hhs.pt_hh.store');
    Route::put('pt_hh/{ptHh}', [PtHhsController::class, 'update'])
         ->name('pt_hhs.pt_hh.update');
    Route::delete('/pt_hh/{ptHh}',[PtHhsController::class, 'destroy'])
         ->name('pt_hhs.pt_hh.destroy');
});

Route::group([
    'prefix' => 'thuoc_kho_hangs',
], function () {
    Route::get('/', [ThuocKhoHangsController::class, 'index'])
         ->name('thuoc_kho_hangs.thuoc_kho_hang.index');
    Route::get('/create', [ThuocKhoHangsController::class, 'create'])
         ->name('thuoc_kho_hangs.thuoc_kho_hang.create');
    Route::get('/show/{thuocKhoHang}',[ThuocKhoHangsController::class, 'show'])
         ->name('thuoc_kho_hangs.thuoc_kho_hang.show');
    Route::get('/{thuocKhoHang}/edit',[ThuocKhoHangsController::class, 'edit'])
         ->name('thuoc_kho_hangs.thuoc_kho_hang.edit');
    Route::post('/', [ThuocKhoHangsController::class, 'store'])
         ->name('thuoc_kho_hangs.thuoc_kho_hang.store');
    Route::put('thuoc_kho_hang/{thuocKhoHang}', [ThuocKhoHangsController::class, 'update'])
         ->name('thuoc_kho_hangs.thuoc_kho_hang.update');
    Route::delete('/thuoc_kho_hang/{thuocKhoHang}',[ThuocKhoHangsController::class, 'destroy'])
         ->name('thuoc_kho_hangs.thuoc_kho_hang.destroy');
});

Route::group([
    'prefix' => 'tinh_tps',
], function () {
    Route::get('/', [TinhTpsController::class, 'index'])
         ->name('tinh_tps.tinh_tp.index');
    Route::get('/create', [TinhTpsController::class, 'create'])
         ->name('tinh_tps.tinh_tp.create');
    Route::get('/show/{tinhTp}',[TinhTpsController::class, 'show'])
         ->name('tinh_tps.tinh_tp.show');
    Route::get('/{tinhTp}/edit',[TinhTpsController::class, 'edit'])
         ->name('tinh_tps.tinh_tp.edit');
    Route::post('/', [TinhTpsController::class, 'store'])
         ->name('tinh_tps.tinh_tp.store');
    Route::put('tinh_tp/{tinhTp}', [TinhTpsController::class, 'update'])
         ->name('tinh_tps.tinh_tp.update');
    Route::delete('/tinh_tp/{tinhTp}',[TinhTpsController::class, 'destroy'])
         ->name('tinh_tps.tinh_tp.destroy');
});

Route::group([
    'prefix' => 'trang_thais',
], function () {
    Route::get('/', [TrangThaisController::class, 'index'])
         ->name('trang_thais.trang_thai.index');
    Route::get('/create', [TrangThaisController::class, 'create'])
         ->name('trang_thais.trang_thai.create');
    Route::get('/show/{trangThai}',[TrangThaisController::class, 'show'])
         ->name('trang_thais.trang_thai.show');
    Route::get('/{trangThai}/edit',[TrangThaisController::class, 'edit'])
         ->name('trang_thais.trang_thai.edit');
    Route::post('/', [TrangThaisController::class, 'store'])
         ->name('trang_thais.trang_thai.store');
    Route::put('trang_thai/{trangThai}', [TrangThaisController::class, 'update'])
         ->name('trang_thais.trang_thai.update');
    Route::delete('/trang_thai/{trangThai}',[TrangThaisController::class, 'destroy'])
         ->name('trang_thais.trang_thai.destroy');
});

Route::group([
    'prefix' => 'trang_thai_phuong_tiens',
], function () {
    Route::get('/', [TrangThaiPhuongTiensController::class, 'index'])
         ->name('trang_thai_phuong_tiens.trang_thai_phuong_tien.index');
    Route::get('/create', [TrangThaiPhuongTiensController::class, 'create'])
         ->name('trang_thai_phuong_tiens.trang_thai_phuong_tien.create');
    Route::get('/show/{trangThaiPhuongTien}',[TrangThaiPhuongTiensController::class, 'show'])
         ->name('trang_thai_phuong_tiens.trang_thai_phuong_tien.show');
    Route::get('/{trangThaiPhuongTien}/edit',[TrangThaiPhuongTiensController::class, 'edit'])
         ->name('trang_thai_phuong_tiens.trang_thai_phuong_tien.edit');
    Route::post('/', [TrangThaiPhuongTiensController::class, 'store'])
         ->name('trang_thai_phuong_tiens.trang_thai_phuong_tien.store');
    Route::put('trang_thai_phuong_tien/{trangThaiPhuongTien}', [TrangThaiPhuongTiensController::class, 'update'])
         ->name('trang_thai_phuong_tiens.trang_thai_phuong_tien.update');
    Route::delete('/trang_thai_phuong_tien/{trangThaiPhuongTien}',[TrangThaiPhuongTiensController::class, 'destroy'])
         ->name('trang_thai_phuong_tiens.trang_thai_phuong_tien.destroy');
});

Route::group([
    'prefix' => 'xas',
], function () {
    Route::get('/', [XasController::class, 'index'])
         ->name('xas.xa.index');
    Route::get('/create', [XasController::class, 'create'])
         ->name('xas.xa.create');
    Route::get('/show/{xa}',[XasController::class, 'show'])
         ->name('xas.xa.show');
    Route::get('/{xa}/edit',[XasController::class, 'edit'])
         ->name('xas.xa.edit');
    Route::post('/', [XasController::class, 'store'])
         ->name('xas.xa.store');
    Route::put('xa/{xa}', [XasController::class, 'update'])
         ->name('xas.xa.update');
    Route::delete('/xa/{xa}',[XasController::class, 'destroy'])
         ->name('xas.xa.destroy');
});

Route::group([
    'prefix' => 'xuat_hangs',
], function () {
    Route::get('/', [XuatHangsController::class, 'index'])
         ->name('xuat_hangs.xuat_hang.index');
    Route::get('/create', [XuatHangsController::class, 'create'])
         ->name('xuat_hangs.xuat_hang.create');
    Route::get('/show/{xuatHang}',[XuatHangsController::class, 'show'])
         ->name('xuat_hangs.xuat_hang.show');
    Route::get('/{xuatHang}/edit',[XuatHangsController::class, 'edit'])
         ->name('xuat_hangs.xuat_hang.edit');
    Route::post('/', [XuatHangsController::class, 'store'])
         ->name('xuat_hangs.xuat_hang.store');
    Route::put('xuat_hang/{xuatHang}', [XuatHangsController::class, 'update'])
         ->name('xuat_hangs.xuat_hang.update');
    Route::delete('/xuat_hang/{xuatHang}',[XuatHangsController::class, 'destroy'])
         ->name('xuat_hangs.xuat_hang.destroy');
});
