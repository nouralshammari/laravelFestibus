<?php
// CartController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller {
    public function show() {
        return view('cart');
    }

    public function add(Request $request) {
        // Logica voor het toevoegen van tickets aan de winkelwagen
        return redirect()->route('cart.show')->with('success', 'Ticket toegevoegd aan winkelwagen.');
    }

    public function remove(Request $request) {
        // Logica voor het verwijderen van tickets uit de winkelwagen
        return redirect()->route('cart.show')->with('success', 'Ticket verwijderd uit winkelwagen.');
    }
}
