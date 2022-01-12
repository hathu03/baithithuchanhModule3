<?php

namespace Database\Seeders;

use App\Models\staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff();
        $staff->id = '1';
        $staff->group = 'Quản lý phỏng';
        $staff->name = 'Nguyễn Thu Hà';
        $staff->gender = 'Nữ';
        $staff->phone = '0867754118';
        $staff->save();

        $staff = new Staff();
        $staff->id = '2';
        $staff->group = 'Quản trị hệ thông';
        $staff->name = 'Trần Hoàng Mỹ';
        $staff->gender = 'Nữ';
        $staff->phone = '0867754118';
        $staff->save();

        $staff = new Staff();
        $staff->id = '3';
        $staff->group = 'Lễ tân';
        $staff->name = 'Hoàng Ngọc Nam';
        $staff->gender = 'Nam';
        $staff->phone = '0867754118';
        $staff->save();

        $staff = new Staff();
        $staff->id = '4';
        $staff->group = 'Quản lý nhân sự';
        $staff->name = 'Nguyễn Văn Tèo';
        $staff->gender = 'Nam';
        $staff->phone = '0867754118';
        $staff->save();

        $staff = new Staff();
        $staff->id = '5';
        $staff->group = 'Quản lý dịch vụ';
        $staff->name = 'Nguyễn Thị Lô';
        $staff->gender = 'Nữ';
        $staff->phone = '0867754118';
        $staff->save();

        $staff = new Staff();
        $staff->id = '6';
        $staff->group = 'Lễ tân';
        $staff->name = 'Lê Văn Đề';
        $staff->gender = 'Nam';
        $staff->phone = '0867754118';
        $staff->save();
    }
}
