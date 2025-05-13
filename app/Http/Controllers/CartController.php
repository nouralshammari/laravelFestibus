<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function add(Request $request)
    {
        try {
            $ticket = [
                'id' => $request->input('id'),
                'name' => $request->input('name'),
                'location' => $request->input('location'),
                'date' => $request->input('date'),
                'price' => $request->input('price'),
                'quantity' => 1
            ];

            if (!$ticket['id'] || !$ticket['name']) {
                return response()->json(['error' => 'Ongeldige gegevens ontvangen.'], 422);
            }

            $cart = session()->get('cart', []);
            $cart[$ticket['id']] = $ticket;
            session()->put('cart', $cart);

            return response()->json(['message' => 'Toegevoegd', 'festival' => $ticket['name']]);
        } catch (\Exception $e) {
            \Log::error('Cart toevoegen mislukt', [
                'error' => $e->getMessage(),
                'data' => $request->all()
            ]);
            return response()->json(['error' => 'Er ging iets mis bij het toevoegen aan de winkelwagen.'], 500);
        }
    }


    public function remove(Request $request)
    {
        $id = $request->input('id');
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart.show')->with('success', 'Ticket verwijderd uit winkelwagen.');
    }
}
