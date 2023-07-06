<?php
use Illuminate\Database\Seeder;
use App\Unit;

class ProductUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            ['name' => 'Kilogram'],
            ['name' => 'Gram'],
            ['name' => 'Liter'],
            ['name' => 'Mililiter'],
            ['name' => 'pcs'],
            ['name' => 'Paket'],
            ['name' => 'Botol'],
            ['name' => 'Sachet'],
            // Tambahkan jenis unit lainnya sesuai kebutuhan
        ];
        

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}
