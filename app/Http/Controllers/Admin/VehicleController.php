<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganisationModel;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use Illuminate\Support\Facades\Log;

class VehicleController extends Controller
{
    public function vehicle()
    {
        $vehicle = VehicleModel::all();
        return view("admin_panel.vehicle", compact('vehicle'));
    }

    public function update(Request $request)
    {
        $vehicle = VehicleModel::find($request->id);
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->gear_type = $request->gear_type;


        if ($request->hasFile('img')) {
            try {
                $file = $request->file('img');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $filename);
                $vehicle->img = 'storage/images/' . $filename;
            } catch (\Exception $e) {
                Log::error('img upload failed', ['error' => $e->getMessage()]);
                return redirect()->back()->with('error', 'Fotoğraf yüklenirken bir hata oluştu.');
            }
        } else {

            $vehicle->img = $vehicle->getOriginal('img');
        }

        $vehicle->save();

        return redirect()->back()->with('success', 'Araç başarıyla güncellendi!');
    }

    public function add(Request $request)
    {
        // Validasyon kontrolü
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'gear_type' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096', // Boyut limiti artırıldı
        ]);

        Log::info('Adding a new vehicle', ['request' => $request->all()]);

        $vehicle = new VehicleModel();
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->gear_type = $request->gear_type;


        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $vehicle->img = 'storage/images/' . $filename;
        }

        // Veritabanına kaydetme işlemi
        try {
            $vehicle->save();
            Log::info('vehicle saved successfully', ['vehicle' => $vehicle]);
        } catch (\Exception $e) {
            Log::error('vehicle save failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Araç kaydedilirken bir hata oluştu.');
        }
        $organisation = OrganisationModel::first();
        $organisation->vehicle_number = $organisation->vehicle_number + 1;
        $organisation->save();
        return redirect()->back()->with('success', 'Araç başarıyla oluşturuldu!');
    }

    public function delete(Request $request)
    {
        $vehicle = VehicleModel::find($request->id);

        if (!$vehicle) {
            return redirect()->back()->with('error', 'Araç bulunamadı.');
        }

        try {
            $vehicle->delete();
            Log::info('vehicle deleted successfully', ['vehicle_id' => $request->id]);
        } catch (\Exception $e) {
            Log::error('vehicle delete failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Araç silinirken bir hata oluştu.');
        }
        $organisation = OrganisationModel::first();
        $organisation->vehicle_number = $organisation->vehicle_number + 1;
        $organisation->save();

        return redirect()->back()->with('success', 'Araç başarıyla silindi!');
    }
}
