<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\huyen;
use Illuminate\Http\Request;
use Exception;

class HuyensController extends Controller
{

    /**
     * Display a listing of the huyens.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $huyens = huyen::paginate(25);

        return view('huyens.index', compact('huyens'));
    }

    /**
     * Show the form for creating a new huyen.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('huyens.create');
    }

    /**
     * Store a new huyen in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            huyen::create($data);

            return redirect()->route('huyens.huyen.index')
                ->with('success_message', 'Huyen was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified huyen.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $huyen = huyen::findOrFail($id);

        return view('huyens.show', compact('huyen'));
    }

    /**
     * Show the form for editing the specified huyen.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $huyen = huyen::findOrFail($id);
        

        return view('huyens.edit', compact('huyen'));
    }

    /**
     * Update the specified huyen in the storage.
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
            
            $huyen = huyen::findOrFail($id);
            $huyen->update($data);

            return redirect()->route('huyens.huyen.index')
                ->with('success_message', 'Huyen was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified huyen from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $huyen = huyen::findOrFail($id);
            $huyen->delete();

            return redirect()->route('huyens.huyen.index')
                ->with('success_message', 'Huyen was successfully deleted.');
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
                'id_huyen' => 'required|string|min:1|nullable',
            'id_tinh' => 'string|min:1|nullable',
            'ten_huyen' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
