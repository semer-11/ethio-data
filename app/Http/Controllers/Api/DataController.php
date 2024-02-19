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
        $data = $this->data(Name::class, $request, 'names');
        return response(['status' => 'success', 'data' => $data]);
    }

    public function woreda(WoredaRequest $request)
    {
        $data = $this->data(Woreda::class, $request, 'woredas');
        return response(['status' => 'success', 'data' => $data]);
    }

    public function city(CityRequest $request)
    {
        $data = $this->data(City::class, $request, 'city');
        return response(['status' => 'success', 'data' => $data]);
    }

    public function celebrity(CelebrityRequest $request)
    {
        $data = $this->data(Celebrity::class, $request, 'celebrities');
        return response(['status' => 'success', 'data' => $data]);
    }

    public function bank(BankRequest $request)
    {
        $data = $this->data(Bank::class, $request, 'bank');
        return response(['status' => 'success', 'data' => $data]);
    }

    private function data($model, $request, $type)
    {
        $filters = $request->only(filterable($type));
        $limit = $request->limit ?? 1;
        $fields = $request->fields ?? ["*"];
        return $model::where($filters)->inRandomOrder()->limit($limit)->get($fields);
    }
}
