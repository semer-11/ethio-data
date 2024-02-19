<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankRequest;
use App\Http\Requests\CelebrityRequest;
use App\Http\Requests\CityRequest;
use App\Http\Requests\NameRequest;
use App\Http\Requests\WoredaRequest;
use App\Models\Bank;
use App\Models\Celebrity;
use App\Models\City;
use App\Models\Name;
use App\Models\Woreda;

class DataController extends Controller
{
    //

    public function name(NameRequest $request)
    {
        
        $filters = $request->only(filterable('names'));
        $limit = $request->limit ?? 1;
        $fields = $request->fields ?? ["*"];
        $data = Name::where($filters)->inRandomOrder()->limit($limit)->get($fields);
        return response(['status' => 'success', 'data' => $data]);
    }

    public function woreda(WoredaRequest $request)
    {
        $filters = $request->only(filterable('woredas'));
        $limit = $request->limit ?? 1;
        $fields = $request->fields ?? ["*"];
        $data = Woreda::where($filters)->inRandomOrder()->limit($limit)->get($fields);
        return response(['status' => 'success', 'data' => $data]);
    }

    public function city(CityRequest $request)
    {
        $filters = $request->only(filterable('city'));
        $limit = $request->limit ?? 1;
        $fields = $request->fields ?? ["*"];
        $data = City::where($filters)->inRandomOrder()->limit($limit)->get($fields);
        return response(['status' => 'success', 'data' => $data]);
    }

    public function celebrity(CelebrityRequest $request)
    {
        $filters = $request->only(filterable('celebrities'));
        $limit = $request->limit ?? 1;
        $fields = $request->fields ?? ["*"];
        $data = Celebrity::where($filters)->inRandomOrder()->limit($limit)->get($fields);
        return response(['status' => 'success', 'data' => $data]);
    }

    public function bank(BankRequest $request)
    {
        $filters = $request->only(filterable('celebrities'));
        $limit = $request->limit ?? 1;
        $fields = $request->fields ?? ["*"];
        $data = Bank::where($filters)->inRandomOrder()->limit($limit)->get($fields);
        return response(['status' => 'success', 'data' => $data]);
    }
}
