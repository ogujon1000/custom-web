<?php

namespace App\Http\Controllers;

use App\Models\Parkslot;
use Illuminate\Http\Request;

class ParkslotController extends Controller
{

    public function insert(Request $request)
    {
        $parkslots = new Parkslot();
        $parkslots->slotNumber = $request->input('slotNumber');
        $parkslots->slotName = $request->input('slotName');
        $parkslots->parkRate = $request->input('parkRate');
        $parkslots->parkStatus = $request->input('parkStatus');
        $parkslots->save();

        return redirect('/admin/parkslot')->with('success', "Slot Added!");
    }

    // To retrieve
    public function index()
    {
        $parkslots = Parkslot::all();
        return view('admin.parkslot', compact('parkslots'));
    }

    // To pass data to another view
    public function getSlot()
    {
        $parkslots = Parkslot::all();
        return view('layout.parking')->with('parking', $parkslots);
    }

    // total user in users dashboard
    public function totalSlot()
    {
        $parkslots = Parkslot::count();
        return view('layout.dashboard', compact('parkslots'));
        return view('admin.admindash', compact('parkslots'));
    }

    public function totalSlot2()
    {
        $parkslots = Parkslot::count();
        return view('admin.admindash', compact('parkslots'));
    }
}
