<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\trang_thai_phuong_tien;
use Illuminate\Http\Request;
use Exception;

class TrangThaiPhuongTiensController extends Controller
{

    /**
     * Display a listing of the trang thai phuong tiens.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $trangThaiPhuongTiens = trang_thai_phuong_tien::paginate(25);

        return view('trang_thai_phuong_tiens.index', compact('trangThaiPhuongTiens'));
    }

    /**
     * Show the form for creating a new trang thai phuong tien.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('trang_thai_phuong_tiens.create');
    }

    /**
     * Store a new trang thai phuong tien in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            trang_thai_phuong_tien::create($data);

            return redirect()->route('trang_thai_phuong_tiens.trang_thai_phuong_tien.index')
                ->with('success_message', 'Trang Thai Phuong Tien was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified trang thai phuong tien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $trangThaiPhuongTien = trang_thai_phuong_tien::findOrFail($id);

        return view('trang_thai_phuong_tiens.show', compact('trangThaiPhuongTien'));
    }

    /**
     * Show the form for editing the specified trang thai phuong tien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $trangThaiPhuongTien = trang_thai_phuong_tien::findOrFail($id);
        

        return view('trang_thai_phuong_tiens.edit', compact('trangThaiPhuongTien'));
    }

    /**
     * Update the specified trang thai phuong tien in the storage.
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
            
            $trangThaiPhuongTien = trang_thai_phuong_tien::findOrFail($id);
            $trangThaiPhuongTien->update($data);

            return redirect()->route('trang_thai_phuong_tiens.trang_thai_phuong_tien.index')
                ->with('success_message', 'Trang Thai Phuong Tien was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified trang thai phuong tien from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $trangThaiPhuongTien = trang_thai_phuong_tien::findOrFail($id);
            $trangThaiPhuongTien->delete();

            return redirect()->route('trang_thai_phuong_tiens.trang_thai_phuong_tien.index')
                ->with('success_message', 'Trang Thai Phuong Tien was successfully deleted.');
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
                // 'id_ttpt' => 'required|string|min:1|nullable',
            'ten_ttpt' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
