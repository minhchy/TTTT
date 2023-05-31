<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\don_vi;
use Illuminate\Http\Request;
use Exception;

class DonVisController extends Controller
{

    /**
     * Display a listing of the don vis.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $donVis = don_vi::paginate(25);

        return view('don_vis.index', compact('donVis'));
    }

    /**
     * Show the form for creating a new don vi.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('don_vis.create');
    }

    /**
     * Store a new don vi in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            don_vi::create($data);

            return redirect()->route('don_vis.don_vi.index')
                ->with('success_message', 'Don Vi was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified don vi.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $donVi = don_vi::findOrFail($id);

        return view('don_vis.show', compact('donVi'));
    }

    /**
     * Show the form for editing the specified don vi.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $donVi = don_vi::findOrFail($id);
        

        return view('don_vis.edit', compact('donVi'));
    }

    /**
     * Update the specified don vi in the storage.
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
            
            $donVi = don_vi::findOrFail($id);
            $donVi->update($data);

            return redirect()->route('don_vis.don_vi.index')
                ->with('success_message', 'Don Vi was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified don vi from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $donVi = don_vi::findOrFail($id);
            $donVi->delete();

            return redirect()->route('don_vis.don_vi.index')
                ->with('success_message', 'Don Vi was successfully deleted.');
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
                'id_dv' => 'required|string|min:1|nullable',
            'ten_dv' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
