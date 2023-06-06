<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_hang_hoa;
use Illuminate\Http\Request;
use Exception;

class LoaiHangHoasController extends Controller
{

    /**
     * Display a listing of the loai hang hoas.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $loaiHangHoas = loai_hang_hoa::paginate(25);

        return view('loai_hang_hoas.index', compact('loaiHangHoas'));
    }

    /**
     * Show the form for creating a new loai hang hoa.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('loai_hang_hoas.create');
    }

    /**
     * Store a new loai hang hoa in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            loai_hang_hoa::create($data);

            return redirect()->route('loai_hang_hoas.loai_hang_hoa.index')
                ->with('success_message', 'Loai Hang Hoa was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified loai hang hoa.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $loaiHangHoa = loai_hang_hoa::findOrFail($id);

        return view('loai_hang_hoas.show', compact('loaiHangHoa'));
    }

    /**
     * Show the form for editing the specified loai hang hoa.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $loaiHangHoa = loai_hang_hoa::findOrFail($id);
        

        return view('loai_hang_hoas.edit', compact('loaiHangHoa'));
    }

    /**
     * Update the specified loai hang hoa in the storage.
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
            
            $loaiHangHoa = loai_hang_hoa::findOrFail($id);
            $loaiHangHoa->update($data);

            return redirect()->route('loai_hang_hoas.loai_hang_hoa.index')
                ->with('success_message', 'Loai Hang Hoa was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified loai hang hoa from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $loaiHangHoa = loai_hang_hoa::findOrFail($id);
            $loaiHangHoa->delete();

            return redirect()->route('loai_hang_hoas.loai_hang_hoa.index')
                ->with('success_message', 'Loai Hang Hoa was successfully deleted.');
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
                'id_lhh' => 'required|string|min:1|nullable',
            'ten_lhh' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
