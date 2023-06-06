<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chi_tiet_don_xuat;
use Illuminate\Http\Request;
use Exception;

class ChiTietDonXuatsController extends Controller
{

    /**
     * Display a listing of the chi tiet don xuats.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $chiTietDonXuats = chi_tiet_don_xuat::paginate(25);

        return view('chi_tiet_don_xuats.index', compact('chiTietDonXuats'));
    }

    /**
     * Show the form for creating a new chi tiet don xuat.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('chi_tiet_don_xuats.create');
    }

    /**
     * Store a new chi tiet don xuat in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chi_tiet_don_xuat::create($data);

            return redirect()->route('chi_tiet_don_xuats.chi_tiet_don_xuat.index')
                ->with('success_message', 'Chi Tiet Don Xuat was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chi tiet don xuat.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $chiTietDonXuat = chi_tiet_don_xuat::findOrFail($id);

        return view('chi_tiet_don_xuats.show', compact('chiTietDonXuat'));
    }

    /**
     * Show the form for editing the specified chi tiet don xuat.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $chiTietDonXuat = chi_tiet_don_xuat::findOrFail($id);
        

        return view('chi_tiet_don_xuats.edit', compact('chiTietDonXuat'));
    }

    /**
     * Update the specified chi tiet don xuat in the storage.
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
            
            $chiTietDonXuat = chi_tiet_don_xuat::findOrFail($id);
            $chiTietDonXuat->update($data);

            return redirect()->route('chi_tiet_don_xuats.chi_tiet_don_xuat.index')
                ->with('success_message', 'Chi Tiet Don Xuat was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chi tiet don xuat from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chiTietDonXuat = chi_tiet_don_xuat::findOrFail($id);
            $chiTietDonXuat->delete();

            return redirect()->route('chi_tiet_don_xuats.chi_tiet_don_xuat.index')
                ->with('success_message', 'Chi Tiet Don Xuat was successfully deleted.');
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
            'id_xh' => 'string|min:1|nullable',
            'soluong_ctdx' => 'string|min:1|nullable',
            'dongia_ctdx' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
