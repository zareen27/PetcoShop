<?php

use Illuminate\Database\Seeder;

class SettingsTableSeederCustom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $setting = $this->findSetting('site.stock_threshold');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Stock Threshold',
                'value'        => 5,
                'details'      => '',
                'type'         => 'text',
                'order'        => 6,
                'group'        => 'Site',
            ])->save();
        }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
