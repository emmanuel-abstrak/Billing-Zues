<?php

namespace Database\Seeders;

use App\Models\BillingProvider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        BillingProvider::query()->create([
            'name' => 'City of Masvingo',
            'endpoint' => 'https://api-masvingo.abstrak.agency/api'
        ]);

        BillingProvider::query()->create([
            'name' => 'Private Utility (PUC)',
            'endpoint' => ''
        ]);
    }
}
