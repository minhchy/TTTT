<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\hang_hoa;
use Illuminate\Http\Request;
use Exception;

class HangHoasController extends Controller
{

    /**
     * Display a listing of the hang hoas.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $hangHoas = hang_hoa::paginate(25);

        return view('hang_hoas.index', compact('hangHoas'));
    }

    /**
     * Show the form for creating a new hang hoa.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('hang_hoas.create');
    }

    /**
     * Store a new hang hoa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            hang_hoa::create($data);

            return redirect()->route('hang_hoas.hang_hoa.index')
                ->with('success_message', 'Hang Hoa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified hang hoa.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $hangHoa = hang_hoa::findOrFail($id);

        return view('hang_hoas.show', compact('hangHoa'));
    }

    /**
     * Show the form for editing the specified hang hoa.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $hangHoa = hang_hoa::findOrFail($id);
        

        return view('hang_hoas.edit', compact('hangHoa'));
    }

    /**
     * Update the specified hang hoa in the storage.
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
            
            $hangHoa = hang_hoa::findOrFail($id);
            $hangHoa->update($data);

            return redirect()->route('hang_hoas.hang_hoa.index')
                ->with('success_message', 'Hang Hoa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified hang hoa from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $hangHoa = hang_hoa::findOrFail($id);
            $hangHoa->delete();

            return redirect()->route('hang_hoas.hang_hoa.index')
                ->with('success_message', 'Hang Hoa was successfully deleted.');
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
                'id_hh' => 'required|string|min:1|nullable',
            'id_lhh' => 'string|min:1|nullable',
            'id_dv' => 'string|min:1|nullable',
            'ten_hh' => 'string|min:1|nullable',
            'gia_mua_hh' => 'string|min:1|nullable',
            'gia_ban_hh' => 'string|min:1|nullable',
            'soluong_hh' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
