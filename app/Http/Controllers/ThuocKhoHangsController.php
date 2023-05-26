<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\thuoc_kho_hang;
use Illuminate\Http\Request;
use Exception;

class ThuocKhoHangsController extends Controller
{

    /**
     * Display a listing of the thuoc kho hangs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $thuocKhoHangs = thuoc_kho_hang::paginate(25);

        return view('thuoc_kho_hangs.index', compact('thuocKhoHangs'));
    }

    /**
     * Show the form for creating a new thuoc kho hang.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('thuoc_kho_hangs.create');
    }

    /**
     * Store a new thuoc kho hang in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            thuoc_kho_hang::create($data);

            return redirect()->route('thuoc_kho_hangs.thuoc_kho_hang.index')
                ->with('success_message', 'Thuoc Kho Hang was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified thuoc kho hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $thuocKhoHang = thuoc_kho_hang::findOrFail($id);

        return view('thuoc_kho_hangs.show', compact('thuocKhoHang'));
    }

    /**
     * Show the form for editing the specified thuoc kho hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $thuocKhoHang = thuoc_kho_hang::findOrFail($id);
        

        return view('thuoc_kho_hangs.edit', compact('thuocKhoHang'));
    }

    /**
     * Update the specified thuoc kho hang in the storage.
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
            
            $thuocKhoHang = thuoc_kho_hang::findOrFail($id);
            $thuocKhoHang->update($data);

            return redirect()->route('thuoc_kho_hangs.thuoc_kho_hang.index')
                ->with('success_message', 'Thuoc Kho Hang was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified thuoc kho hang from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $thuocKhoHang = thuoc_kho_hang::findOrFail($id);
            $thuocKhoHang->delete();

            return redirect()->route('thuoc_kho_hangs.thuoc_kho_hang.index')
                ->with('success_message', 'Thuoc Kho Hang was successfully deleted.');
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
                'id_khohang' => 'required|string|min:1|nullable',
            'id_hh' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
