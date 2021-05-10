<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Http\Models\Store;

class StoresTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Store::create([
      'store_name' => 'Lama Lama Id',
      'store_email' => 'lamalama@gmail.com',
      'store_wa' => '62812345723',
      'store_phone' => '0812345723',
      'store_address' => 'Jl Jawa',
    ]);
  }
}
