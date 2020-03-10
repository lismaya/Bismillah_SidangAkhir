<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $administrator = new \App\User;
         $administrator->username="administrator";
         $administrator->name="Site Admin";
         $administrator->email="administrator@mekia.test";
         $administrator->password = \Hash::make("12345678");
         $administrator->alamat = "Tukang Kayu Banyuwangi";
         $administrator->level_id=json_encode(["ADMIN"]);
         $administrator->tanggal_lahir= "2000-03-10";
         $administrator->nomor_telephon="82340380126";


         $administrator->save();

         $this->command->info("User Admin berhasil diinsert");

    }
}
