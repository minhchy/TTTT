<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\phuong_tien;
use Illuminate\Http\Request;
use Exception;

class PhuongTiensController extends Controller
{

    /**
     * Display a listing of the phuong tiens.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $phuongTiens = phuong_tien::paginate(25);

        return view('phuong_tiens.index', compact('phuongTiens'));
    }

    /**
     * Show the form for creating a new phuong tien.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('phuong_tiens.create');
    }

    /**
     * Store a new phuong tien in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            phuong_tien::create($data);

            return redirect()->route('phuong_tiens.phuong_tien.index')
                ->with('success_message', 'Phuong Tien was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified phuong tien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $phuongTien = phuong_tien::findOrFail($id);

        return view('phuong_tiens.show', compact('phuongTien'));
    }

    /**
     * Show the form for editing the specified phuong tien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $phuongTien = phuong_tien::findOrFail($id);
        

        return view('phuong_tiens.edit', compact('phuongTien'));
    }

    /**
     * Update the specified phuong tien in the storage.
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
            
            $phuongTien = phuong_tien::findOrFail($id);
            $phuongTien->update($data);

            return redirect()->route('phuong_tiens.phuong_tien.index')
                ->with('success_message', 'Phuong Tien was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified phuong tien from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $phuongTien = phuong_tien::findOrFail($id);
            $phuongTien->delete();

            return redirect()->route('phuong_tiens.phuong_tien.index')
                ->with('success_message', 'Phuong Tien was successfully deleted.');
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
                // 'id_pt' => 'required|string|min:1|nullable',
            'id_ttpt' => 'string|min:1|nullable',
            'id_lpt' => 'string|min:1|nullable',
            'ten_pt' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
