<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\chuc_vu;
use Illuminate\Http\Request;
use Exception;

class ChucVusController extends Controller
{

    /**
     * Display a listing of the chuc vus.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $chucVus = chuc_vu::paginate(25);

        return view('chuc_vus.index', compact('chucVus'));
    }

    /**
     * Show the form for creating a new chuc vu.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('chuc_vus.create');
    }

    /**
     * Store a new chuc vu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            chuc_vu::create($data);

            return redirect()->route('chuc_vus.chuc_vu.index')
                ->with('success_message', 'Chuc Vu was successfully added.');
        } catch (Exception $exception) {
            var_dump($exception);
            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified chuc vu.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $chucVu = chuc_vu::findOrFail($id);

        return view('chuc_vus.show', compact('chucVu'));
    }

    /**
     * Show the form for editing the specified chuc vu.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $chucVu = chuc_vu::findOrFail($id);
        

        return view('chuc_vus.edit', compact('chucVu'));
    }

    /**
     * Update the specified chuc vu in the storage.
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
            
            $chucVu = chuc_vu::findOrFail($id);
            $chucVu->update($data);

            return redirect()->route('chuc_vus.chuc_vu.index')
                ->with('success_message', 'Chuc Vu was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified chuc vu from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $chucVu = chuc_vu::findOrFail($id);
            $chucVu->delete();

            return redirect()->route('chuc_vus.chuc_vu.index')
                ->with('success_message', 'Chuc Vu was successfully deleted.');
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
                'id_chucvu' => 'required|string|min:1|nullable',
            'ten_chucvu' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
