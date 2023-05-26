<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nhap_hang;
use Illuminate\Http\Request;
use Exception;

class NhapHangsController extends Controller
{

    /**
     * Display a listing of the nhap hangs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $nhapHangs = nhap_hang::paginate(25);

        return view('nhap_hangs.index', compact('nhapHangs'));
    }

    /**
     * Show the form for creating a new nhap hang.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('nhap_hangs.create');
    }

    /**
     * Store a new nhap hang in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            nhap_hang::create($data);

            return redirect()->route('nhap_hangs.nhap_hang.index')
                ->with('success_message', 'Nhap Hang was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified nhap hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $nhapHang = nhap_hang::findOrFail($id);

        return view('nhap_hangs.show', compact('nhapHang'));
    }

    /**
     * Show the form for editing the specified nhap hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $nhapHang = nhap_hang::findOrFail($id);
        

        return view('nhap_hangs.edit', compact('nhapHang'));
    }

    /**
     * Update the specified nhap hang in the storage.
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
            
            $nhapHang = nhap_hang::findOrFail($id);
            $nhapHang->update($data);

            return redirect()->route('nhap_hangs.nhap_hang.index')
                ->with('success_message', 'Nhap Hang was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified nhap hang from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $nhapHang = nhap_hang::findOrFail($id);
            $nhapHang->delete();

            return redirect()->route('nhap_hangs.nhap_hang.index')
                ->with('success_message', 'Nhap Hang was successfully deleted.');
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
                'id_nh' => 'required|string|min:1|nullable',
            'id_tt' => 'string|min:1|nullable',
            'id_ncc' => 'string|min:1|nullable',
            'id_nv' => 'string|min:1|nullable',
            'time_nh' => 'string|min:1|nullable',
            'tongtien_nh' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
