<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\khach_hang;
use Illuminate\Http\Request;
use Exception;

class KhachHangsController extends Controller
{

    /**
     * Display a listing of the khach hangs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $khachHangs = khach_hang::paginate(25);

        return view('khach_hangs.index', compact('khachHangs'));
    }

    /**
     * Show the form for creating a new khach hang.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('khach_hangs.create');
    }

    /**
     * Store a new khach hang in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            khach_hang::create($data);

            return redirect()->route('khach_hangs.khach_hang.index')
                ->with('success_message', 'Khach Hang was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified khach hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $khachHang = khach_hang::findOrFail($id);

        return view('khach_hangs.show', compact('khachHang'));
    }

    /**
     * Show the form for editing the specified khach hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $khachHang = khach_hang::findOrFail($id);
        

        return view('khach_hangs.edit', compact('khachHang'));
    }

    /**
     * Update the specified khach hang in the storage.
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
            
            $khachHang = khach_hang::findOrFail($id);
            $khachHang->update($data);

            return redirect()->route('khach_hangs.khach_hang.index')
                ->with('success_message', 'Khach Hang was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified khach hang from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $khachHang = khach_hang::findOrFail($id);
            $khachHang->delete();

            return redirect()->route('khach_hangs.khach_hang.index')
                ->with('success_message', 'Khach Hang was successfully deleted.');
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
                'id_kh' => 'required|string|min:1|nullable',
            'ten_kh' => 'string|min:1|nullable',
            'phone_kh' => 'string|min:1|nullable',
            'email_kh' => 'nullable',
            'address_kh' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
