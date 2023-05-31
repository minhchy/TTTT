<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nha_cung_cap;
use Illuminate\Http\Request;
use Exception;

class NhaCungCapsController extends Controller
{

    /**
     * Display a listing of the nha cung caps.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $nhaCungCaps = nha_cung_cap::paginate(25);

        return view('nha_cung_caps.index', compact('nhaCungCaps'));
    }

    /**
     * Show the form for creating a new nha cung cap.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('nha_cung_caps.create');
    }

    /**
     * Store a new nha cung cap in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            nha_cung_cap::create($data);

            return redirect()->route('nha_cung_caps.nha_cung_cap.index')
                ->with('success_message', 'Nha Cung Cap was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified nha cung cap.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $nhaCungCap = nha_cung_cap::findOrFail($id);

        return view('nha_cung_caps.show', compact('nhaCungCap'));
    }

    /**
     * Show the form for editing the specified nha cung cap.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $nhaCungCap = nha_cung_cap::findOrFail($id);
        

        return view('nha_cung_caps.edit', compact('nhaCungCap'));
    }

    /**
     * Update the specified nha cung cap in the storage.
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
            
            $nhaCungCap = nha_cung_cap::findOrFail($id);
            $nhaCungCap->update($data);

            return redirect()->route('nha_cung_caps.nha_cung_cap.index')
                ->with('success_message', 'Nha Cung Cap was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified nha cung cap from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $nhaCungCap = nha_cung_cap::findOrFail($id);
            $nhaCungCap->delete();

            return redirect()->route('nha_cung_caps.nha_cung_cap.index')
                ->with('success_message', 'Nha Cung Cap was successfully deleted.');
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
                'id_ncc' => 'required|string|min:1|nullable',
            'ten_ncc' => 'string|min:1|nullable',
            'phone_ncc' => 'string|min:1|nullable',
            'email_ncc' => 'nullable',
            'address_ncc' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
