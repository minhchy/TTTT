<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kho_hang;
use Illuminate\Http\Request;
use Exception;

class KhoHangsController extends Controller
{

    /**
     * Display a listing of the kho hangs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $khoHangs = kho_hang::paginate(25);

        return view('kho_hangs.index', compact('khoHangs'));
    }

    /**
     * Show the form for creating a new kho hang.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('kho_hangs.create');
    }

    /**
     * Store a new kho hang in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            kho_hang::create($data);

            return redirect()->route('kho_hangs.kho_hang.index')
                ->with('success_message', 'Kho Hang was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified kho hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $khoHang = kho_hang::findOrFail($id);

        return view('kho_hangs.show', compact('khoHang'));
    }

    /**
     * Show the form for editing the specified kho hang.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $khoHang = kho_hang::findOrFail($id);
        

        return view('kho_hangs.edit', compact('khoHang'));
    }

    /**
     * Update the specified kho hang in the storage.
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
            
            $khoHang = kho_hang::findOrFail($id);
            $khoHang->update($data);

            return redirect()->route('kho_hangs.kho_hang.index')
                ->with('success_message', 'Kho Hang was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified kho hang from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $khoHang = kho_hang::findOrFail($id);
            $khoHang->delete();

            return redirect()->route('kho_hangs.kho_hang.index')
                ->with('success_message', 'Kho Hang was successfully deleted.');
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
            'ten_khohang' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
