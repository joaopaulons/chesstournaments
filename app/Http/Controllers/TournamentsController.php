<?php

namespace App\Http\Controllers;

use App\Tournaments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TournamentsController extends Controller
{
    public function index()
    {
        $tournaments = new Tournaments();
        $response = $tournaments->allData();

        return view('lockscreen')->with('calendarDates', $response);
    }

    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required', 'string', 'max:255',
            'state' => 'required', 'string', 'max:255',
            'rhythm' => 'required', 'string', 'max:255',
            'event_start_date' => 'required', 'date',
            'event_end_date' => 'required', 'date',
            'host_name' => 'required', 'max:255', 'string',
            'description' => 'required', 'max:255', 'string',
        ]);

        $tournaments = new Tournaments();

        try {
            $result = $tournaments->newData($request->only('name', 'state', 'rhythm', 'event_start_date', 'event_end_date', 'host_name', 'description'));
        } catch (\Exception $err) {
            return response()->json([
                'status' => 400,
                'msg' => 'Não foi possivel adicionar esse campeonato!'
            ]);
        }

        $data = implode('/', array_reverse(explode('-', $result->event_start_date)));

        return response()->json([
            'status' => 200,
            'name' => $result->name,
            'host_name' => $result->host_name,
            'event_start_date' => $data,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $tournaments = new Tournaments();
        $tournaments = $tournaments->showData($request->id);


        dd($tournaments);

        return response()->json([
            'status' => 200,
            'tournaments' => $tournaments
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $products = new Products();
        $products->updateData($request->only('products_name'), $request->only('id_products'));

        return back()->with('status', 200)->with('msg', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->database(Auth::user()->id_companie);
        $storage = new Products();
        $result = $storage->deleteProducts($request->id_products);

        if ($result == 1) {
            return back()->with('status', 200)->with('msg', 'Deleted successfully!');
        } else {
            return back()->with('status', 400)->with('msg', 'Error with this action!');
        }
    }
}
