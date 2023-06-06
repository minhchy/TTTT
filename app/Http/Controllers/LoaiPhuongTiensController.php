<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_phuong_tien;
use Illuminate\Http\Request;
use Exception;

class LoaiPhuongTiensController extends Controller
{

    /**
     * Display a listing of the loai phuong tiens.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $loaiPhuongTiens = loai_phuong_tien::paginate(25);
        return view('loai_phuong_tiens.index', compact('loaiPhuongTiens'));
    }

    /**
     * Show the form for creating a new loai phuong tien.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('loai_phuong_tiens.create');
    }

    /**
     * Store a new loai phuong tien in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            loai_phuong_tien::create($data);
            
            return redirect()->route('loai_phuong_tiens.loai_phuong_tien.index')
                ->with('success_message', 'Loai Phuong Tien was successfully added.');
        } catch (Exception $exception) {
            var_dump($exception);
            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified loai phuong tien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $loaiPhuongTien = loai_phuong_tien::findOrFail($id);
        return view('loai_phuong_tiens.show', compact('loaiPhuongTien'));
    }

    /**
     * Show the form for editing the specified loai phuong tien.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $loaiPhuongTien = loai_phuong_tien::findOrFail($id);
        

        return view('loai_phuong_tiens.edit', compact('loaiPhuongTien'));
    }

    /**
     * Update the specified loai phuong tien in the storage.
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
            
            $loaiPhuongTien = loai_phuong_tien::findOrFail($id);
            $loaiPhuongTien->update($data);

            return redirect()->route('loai_phuong_tiens.loai_phuong_tien.index')
                ->with('success_message', 'Loai Phuong Tien was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified loai phuong tien from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $loaiPhuongTien = loai_phuong_tien::findOrFail($id);
            $loaiPhuongTien->delete();

            return redirect()->route('loai_phuong_tiens.loai_phuong_tien.index')
                ->with('success_message', 'Loai Phuong Tien was successfully deleted.');
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
                //  'id_lpt' => 'required|string|min:1|nullable',
            'ten_lpt' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
