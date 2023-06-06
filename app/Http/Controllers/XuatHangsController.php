<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\xuat_hang;
use Illuminate\Http\Request;
use Exception;

class XuatHangsController extends Controller
{

    /**
     * Display a listing of the xuat hangs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $xuatHangs = xuat_hang::paginate(25);

        return view('xuat_hangs.index', compact('xuatHangs'));
    }

    /**
     * Show the form for creating a new xuat hang.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('xuat_hangs.create');
    }

    /**
     * Store a new xuat hang in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            xuat_hang::create($data);

            return redirect()->route('xuat_hangs.xuat_hang.index')
                ->with('success_message', 'Xuat Hang was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified xuat hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $xuatHang = xuat_hang::findOrFail($id);

        return view('xuat_hangs.show', compact('xuatHang'));
    }

    /**
     * Show the form for editing the specified xuat hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $xuatHang = xuat_hang::findOrFail($id);
        

        return view('xuat_hangs.edit', compact('xuatHang'));
    }

    /**
     * Update the specified xuat hang in the storage.
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
            
            $xuatHang = xuat_hang::findOrFail($id);
            $xuatHang->update($data);

            return redirect()->route('xuat_hangs.xuat_hang.index')
                ->with('success_message', 'Xuat Hang was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified xuat hang from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $xuatHang = xuat_hang::findOrFail($id);
            $xuatHang->delete();

            return redirect()->route('xuat_hangs.xuat_hang.index')
                ->with('success_message', 'Xuat Hang was successfully deleted.');
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
                // 'id_xh' => 'required|string|min:1|nullable',
            'id_kh' => 'string|min:1|nullable',
            'id_ncc' => 'string|min:1|nullable',
            'id_nv' => 'string|min:1|nullable',
            'time_xh' => 'string|min:1|nullable',
            'tongtien_xh' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
