<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\trang_thai;
use Illuminate\Http\Request;
use Exception;

class TrangThaisController extends Controller
{

    /**
     * Display a listing of the trang thais.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $trangThais = trang_thai::paginate(25);

        return view('trang_thais.index', compact('trangThais'));
    }

    /**
     * Show the form for creating a new trang thai.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('trang_thais.create');
    }

    /**
     * Store a new trang thai in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            trang_thai::create($data);

            return redirect()->route('trang_thais.trang_thai.index')
                ->with('success_message', 'Trang Thai was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified trang thai.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $trangThai = trang_thai::findOrFail($id);

        return view('trang_thais.show', compact('trangThai'));
    }

    /**
     * Show the form for editing the specified trang thai.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $trangThai = trang_thai::findOrFail($id);
        

        return view('trang_thais.edit', compact('trangThai'));
    }

    /**
     * Update the specified trang thai in the storage.
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
            
            $trangThai = trang_thai::findOrFail($id);
            $trangThai->update($data);

            return redirect()->route('trang_thais.trang_thai.index')
                ->with('success_message', 'Trang Thai was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified trang thai from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $trangThai = trang_thai::findOrFail($id);
            $trangThai->delete();

            return redirect()->route('trang_thais.trang_thai.index')
                ->with('success_message', 'Trang Thai was successfully deleted.');
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
                'id_tt' => 'required|string|min:1|nullable',
            'id_xh' => 'string|min:1|nullable',
            'ten_tt' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
