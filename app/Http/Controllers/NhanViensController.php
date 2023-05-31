<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nhan_vien;
use App\Models\chuc_vu;
use Illuminate\Http\Request;
use Exception;

class NhanViensController extends Controller
{

    /**
     * Display a listing of the nhan viens.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $nhanViens = nhan_vien::paginate(25);

        return view('nhan_viens.index', compact('nhanViens'));
    }

    /**
     * Show the form for creating a new nhan vien.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $chucVuList = chuc_vu::pluck('ten_chucvu', 'id_chucvu');
        return view('nhan_viens.create', ['chucVuList' => $chucVuList]);
    }

    /**
     * Store a new nhan vien in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            nhan_vien::create($data);

            return redirect()->route('nhan_viens.nhan_vien.index')
                ->with('success_message', 'Nhan Vien was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified nhan vien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $nhanVien = nhan_vien::findOrFail($id);

        return view('nhan_viens.show', compact('nhanVien'));
    }

    /**
     * Show the form for editing the specified nhan vien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $nhanVien = nhan_vien::findOrFail($id);
        

        return view('nhan_viens.edit', compact('nhanVien'));
    }

    /**
     * Update the specified nhan vien in the storage.
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
            
            $nhanVien = nhan_vien::findOrFail($id);
            $nhanVien->update($data);

            return redirect()->route('nhan_viens.nhan_vien.index')
                ->with('success_message', 'Nhan Vien was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified nhan vien from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $nhanVien = nhan_vien::findOrFail($id);
            $nhanVien->delete();

            return redirect()->route('nhan_viens.nhan_vien.index')
                ->with('success_message', 'Nhan Vien was successfully deleted.');
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
                'id_nv' => 'required|string|min:1|nullable',
            'id_chucvu' => 'string|min:1|nullable',
            'phone_nv' => 'string|min:1|nullable',
            'email_nv' => 'nullable',
            'address_nv' => 'string|min:1|nullable',
            'username_nv' => 'string|min:1|nullable',
            'password_nv' => 'nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
