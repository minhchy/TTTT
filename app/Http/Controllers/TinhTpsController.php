<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tinh_tp;
use Illuminate\Http\Request;
use Exception;

class TinhTpsController extends Controller
{

    /**
     * Display a listing of the tinh tps.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tinhTps = tinh_tp::paginate(25);

        return view('tinh_tps.index', compact('tinhTps'));
    }

    /**
     * Show the form for creating a new tinh tp.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('tinh_tps.create');
    }

    /**
     * Store a new tinh tp in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            tinh_tp::create($data);

            return redirect()->route('tinh_tps.tinh_tp.index')
                ->with('success_message', 'Tinh Tp was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified tinh tp.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tinhTp = tinh_tp::findOrFail($id);

        return view('tinh_tps.show', compact('tinhTp'));
    }

    /**
     * Show the form for editing the specified tinh tp.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tinhTp = tinh_tp::findOrFail($id);
        

        return view('tinh_tps.edit', compact('tinhTp'));
    }

    /**
     * Update the specified tinh tp in the storage.
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
            
            $tinhTp = tinh_tp::findOrFail($id);
            $tinhTp->update($data);

            return redirect()->route('tinh_tps.tinh_tp.index')
                ->with('success_message', 'Tinh Tp was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified tinh tp from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $tinhTp = tinh_tp::findOrFail($id);
            $tinhTp->delete();

            return redirect()->route('tinh_tps.tinh_tp.index')
                ->with('success_message', 'Tinh Tp was successfully deleted.');
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
                'id_tinh_tp' => 'required|string|min:1|nullable',
            'ten_tinh_tp' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
