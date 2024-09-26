<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoutesModel;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function routes()
    {
        $routes = RoutesModel::all();
        return view("admin_panel.routes", compact('routes'));
    }

    public function update(Request $request)
    {
        $routes = RoutesModel::find($request->id);
        $routes->title = $request->title;
        $routes->content = $request->content;
        $routes->videoUrl = $request->videoUrl;
        $routes->mapUrl = $request->mapUrl;
        $routes->save();

        return redirect()->back()->with('success', 'Rota başarıyla güncellendi!');
    }

    public function add(Request $request)
    {
        $routes = new RoutesModel();
        $routes->title = $request->title;
        $routes->content = $request->content;
        $routes->videoUrl = $request->videoUrl;
        $routes->mapUrl = $request->mapUrl;
        $routes->save();
        return redirect()->back()->with('success', 'Rota başarıyla oluşturuldu!');
    }

    public function delete(Request $request)
    {
        $routes = RoutesModel::find($request->id);

        if (!$routes) {
            return redirect()->back()->with('error', 'Rota bulunamadı.');
        }
        $routes->delete();

        return redirect()->back()->with('success', 'Rota başarıyla silindi!');
    }
}
