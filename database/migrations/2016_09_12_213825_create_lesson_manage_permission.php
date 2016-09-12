<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonManagePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $permSemesterManage = Permission::create([
            'name'         => 'semester.manage',
            'display_name' => '管理學期資料',
            'description'  => '新增、修改、刪除學期資料',
        ]);

        $permLessonManage = Permission::create([
            'name'         => 'lesson.manage',
            'display_name' => '管理課程',
            'description'  => '新增、修改、刪除課程',
        ]);

        $permFileManage = Permission::create([
            'name'         => 'file.manage',
            'display_name' => '管理檔案',
            'description'  => '新增、修改、刪除課程檔案',
        ]);

        // Find Admin and give permission to him
        /* @var Role $admin */
        $admin = Role::where('name', 'Admin')->first();
        $admin->attachPermission($permSemesterManage);
        $admin->attachPermission($permLessonManage);
        $admin->attachPermission($permFileManage);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Permission::where('name', 'semester.manage')->delete();
        Permission::where('name', 'lesson.manage')->delete();
        Permission::where('name', 'file.manage')->delete();
    }
}
