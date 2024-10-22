<?php

namespace App\Http\Controllers;

use App\Http\Resources\BillingProviderResource;
use App\Models\BillingProvider;
use Illuminate\Http\JsonResponse;

class BillingProviderController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(BillingProviderResource::collection(BillingProvider::all()));
    }
}
