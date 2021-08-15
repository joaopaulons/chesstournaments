<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsletterController extends Controller
{
    public function index()
    {
        $products = new Newsletter();

        return view('products.index')->with('products', $products->allData());
    }

    public function store(Request $request)
    {
        request()->validate([
            'email' => 'required', 'string', 'email', 'max:255', 'unique:newsletter',
        ]);

        $newsletter = new Newsletter();

        $newsletter->newData($request->only('email'));

        return back()->with('status', 200)->with('msg', 'Inscrito com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $this->database(Auth::user()->id_companie);

        $products = new Products();
        $products = $products->showData($request->id_products);

        return response()->json([
            'status' => 200,
            'products_name' => $products->products_name
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
        $this->database(Auth::user()->id_companie);

        $products = new Products();
        $products->updateData($request->only('products_name'), $request->only('id_products'));

        return back()->with('status', 200)->with('msg', 'Updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->database(Auth::user()->id_companie);
        $storage = new Products();
        $result = $storage->deleteProducts($request->id_products);

        if ($result == 1){
            return back()->with('status', 200)->with('msg', 'Deleted successfully!');
        }else {
            return back()->with('status', 400)->with('msg', 'Error with this action!');
        }
    }
}
