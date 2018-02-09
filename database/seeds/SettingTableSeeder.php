<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $setting = App\Setting::create([

          'logo' => 'uploads/setting/logo.png',
          'sitetitle' => 'PATUNAM',
          'meta_des' => 'Patunam market online',
          'meta_key' => 'pautnam',
          'chat' => 'Welcome to patunam market',
          'address' => '122 หมู่5 ต.บ้านใหม่หนองไทร อ.อรัญประเทศ จ.สระแก้ว 27120',
          'phone' => '0600601020',
          'email' => 'patunam@patunam.com',
          'facebook' => 'patunam_facebook',
          'twitter' => 'patunam_twitter',
          'google' => 'patunam_google',
          'line' => 'patunam_line'

        ]);
    }
}
