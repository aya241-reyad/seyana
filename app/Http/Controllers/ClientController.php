<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $clients=Client::all();
        return view('clients.index',compact('clients'));
    }

    public function changeStatus(Request $request)

    {

        $client = Client::find($request->client_id);

        $client->is_active = $request->is_active;

        $client->save();

        return response()->json(['success'=>'Status change successfully.']);

    }


    public function destroy($id)
    {
        $client=Client::findOrFail($id);
        $client->delete();
        return redirect('clients');
    }
    
}
