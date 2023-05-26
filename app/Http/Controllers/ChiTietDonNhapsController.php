<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chi_tiet_don_nhap;
use Illuminate\Http\Request;
use Exception;

class ChiTietDonNhapsController extends Controller
{

    /**
     * Display a listing of the chi tiet don nhaps.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $chiTietDonNhaps = chi_tiet_don_nhap::paginate(25);

        return view('chi_tiet_don_nhaps.index', compact('chiTietDonNhaps'));
    }

    /**
     * Show the form for creating a new chi tiet don nhap.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('chi_tiet_don_nhaps.create');
    }

    /**
     * Store a new chi tiet don nhap in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chi_tiet_don_nhap::create($data);

            return redirect()->route('chi_tiet_don_nhaps.chi_tiet_don_nhap.index')
                ->with('success_message', 'Chi Tiet Don Nhap was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chi tiet don nhap.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $chiTietDonNhap = chi_tiet_don_nhap::findOrFail($id);

        return view('chi_tiet_don_nhaps.show', compact('chiTietDonNhap'));
    }

    /**
     * Show the form for editing the specified chi tiet don nhap.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $chiTietDonNhap = chi_tiet_don_nhap::findOrFail($id);
        

        return view('chi_tiet_don_nhaps.edit', compact('chiTietDonNhap'));
    }

    /**
     * Update the specified chi tiet don nhap in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $chiTietDonNhap = chi_tiet_don_nhap::findOrFail($id);
            $chiTietDonNhap->update($data);

            return redirect()->route('chi_tiet_don_nhaps.chi_tiet_don_nhap.index')
                ->with('success_message', 'Chi Tiet Don Nhap was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chi tiet don nhap from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chiTietDonNhap = chi_tiet_don_nhap::findOrFail($id);
            $chiTietDonNhap->delete();

            return redirect()->route('chi_tiet_don_nhaps.chi_tiet_don_nhap.index')
                ->with('success_message', 'Chi Tiet Don Nhap was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'id_hh' => 'required|string|min:1|nullable',
            'id_nh' => 'string|min:1|nullable',
            'soluong_ctdn' => 'string|min:1|nullable',
            'dongia_ctdn' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
