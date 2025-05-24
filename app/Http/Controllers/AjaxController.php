<?php

namespace App\Http\Controllers;

use App\Models\Caste;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function getDropDown(Request $request)
    {
        $items = collect();
        switch ($request->give):
            case 'religion';
                if ($request->take == 'caste')
                    $items = Caste::where('parent', $request->typeId)->get();
                break;
            case 'caste';
                if ($request->take == 'subcaste')
                    $items = Caste::where('parent', $request->typeId)->get();
                break;
            default:
                break;
        endswitch;
        return response()->json([
            'items' => $items,
        ]);
    }
}
