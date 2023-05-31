<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pt_hh;
use Illuminate\Http\Request;
use Exception;

class PtHhsController extends Controller
{

    /**
     * Display a listing of the pt hhs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $ptHhs = pt_hh::paginate(25);

        return view('pt_hhs.index', compact('ptHhs'));
    }

    /**
     * Show the form for creating a new pt hh.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('pt_hhs.create');
    }

    /**
     * Store a new pt hh in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            pt_hh::create($data);

            return redirect()->route('pt_hhs.pt_hh.index')
                ->with('success_message', 'Pt Hh was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified pt hh.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ptHh = pt_hh::findOrFail($id);

        return view('pt_hhs.show', compact('ptHh'));
    }

    /**
     * Show the form for editing the specified pt hh.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $ptHh = pt_hh::findOrFail($id);
        

        return view('pt_hhs.edit', compact('ptHh'));
    }

    /**
     * Update the specified pt hh in the storage.
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
            
            $ptHh = pt_hh::findOrFail($id);
            $ptHh->update($data);

            return redirect()->route('pt_hhs.pt_hh.index')
                ->with('success_message', 'Pt Hh was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified pt hh from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $ptHh = pt_hh::findOrFail($id);
            $ptHh->delete();

            return redirect()->route('pt_hhs.pt_hh.index')
                ->with('success_message', 'Pt Hh was successfully deleted.');
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
                'id_pt' => 'required|string|min:1|nullable',
            'id_hh' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
