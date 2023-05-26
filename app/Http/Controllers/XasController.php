<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\xa;
use Illuminate\Http\Request;
use Exception;

class XasController extends Controller
{

    /**
     * Display a listing of the xas.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $xas = xa::paginate(25);

        return view('xas.index', compact('xas'));
    }

    /**
     * Show the form for creating a new xa.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('xas.create');
    }

    /**
     * Store a new xa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            xa::create($data);

            return redirect()->route('xas.xa.index')
                ->with('success_message', 'Xa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified xa.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $xa = xa::findOrFail($id);

        return view('xas.show', compact('xa'));
    }

    /**
     * Show the form for editing the specified xa.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $xa = xa::findOrFail($id);
        

        return view('xas.edit', compact('xa'));
    }

    /**
     * Update the specified xa in the storage.
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
            
            $xa = xa::findOrFail($id);
            $xa->update($data);

            return redirect()->route('xas.xa.index')
                ->with('success_message', 'Xa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified xa from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $xa = xa::findOrFail($id);
            $xa->delete();

            return redirect()->route('xas.xa.index')
                ->with('success_message', 'Xa was successfully deleted.');
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
                'id_xa' => 'required|string|min:1|nullable',
            'id_huyen' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
