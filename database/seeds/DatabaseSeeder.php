<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DoiNguTableSeeder::class);
        $this->call(DichVuTableSeeder::class);
        $this->call(TinTucTableSeeder::class);
        $this->call(LichCongTacTableSeeder::class);

    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        DB::table('users')->delete();
        DB::table('users')->insert([
              ['name' => 'Dương Văn Tuấn', 'email' => 'duongtuanht81@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'Giám Đốc', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Nguyễn Thanh Lâm', 'email' => 'ntlamht@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'P.Giám Đốc', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Đặng Quốc Dũng', 'email' => 'dungthinhvn@gmail.com', 'password'=>bcrypt('s01awind5'), 'chucvu'=>'P. Giám Đốc', 'dienthoai'=>'039.3854474', 'didong'=>'', 'quyen'=>'1'],
              ['name' => 'Lê Văn Đương', 'email' => 'leduonghtiac@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Nguyễn Thị Vân', 'email' => 'vdb020185@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Hoàng Dương Liễu', 'email' => 'lieuhd282@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Nguyễn Tiến Dũng', 'email' => 'tiendunght29@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Phạm Thị Thanh Hải', 'email' => 'gdha1606@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Nguyễn Mạnh Hoàng', 'email' => 'hoangchungsg@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Trần Xuân Sơn', 'email' => 'xuansonpc@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Lê Viết Kiên', 'email' => 'kientechnology@gmail.comphuc4t.ht@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Đậu Minh Phúc', 'email' => 'phuc4t.ht@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Phạm Thị Phương', 'email' => 'phamthiphuong11@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
              ['name' => 'Chu Bá Dũng', 'email' => 'dung0951070225@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0']

            ]);
    }
}

class LichCongTacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        DB::table('lichcongtac')->delete();
        DB::table('lichcongtac')->insert([
            ['user_id' => '3','ngaythang'=>date("2017-1-1"), 'noidung' => 'noidung', 'diadiem'=>'diadiem', 'batdau'=>'8:00:00', 'ketthuc'=>'10:30:15', 'ghichu'=>'ghichu'],
            ['user_id' => '3','ngaythang'=>date("2017-1-1"), 'noidung' => 'noidung', 'diadiem'=>'diadiem', 'batdau'=>'9:00:00', 'ketthuc'=>'10:30:15', 'ghichu'=>'ghichu'],
            ['user_id' => '3','ngaythang'=>date("2017-1-2"), 'noidung' => 'noidung', 'diadiem'=>'diadiem', 'batdau'=>'10:00:00', 'ketthuc'=>'10:30:15', 'ghichu'=>'ghichu'],
            ['user_id' => '3','ngaythang'=>date("2017-1-2"), 'noidung' => 'noidung', 'diadiem'=>'diadiem', 'batdau'=>'11:00:00', 'ketthuc'=>'12:30:15', 'ghichu'=>'ghichu']
            ]);
    }
}

class CongVanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        DB::table('congvan')->delete();
        DB::table('congvan')->insert([
            ['user_id' => '3','ngaythang'=>date("2017-1-1"), 'giodang'=>'8:00:00', 'socv'=>'123/CV', 'tieude'=>'Tieu de van ban', 'vanban'=>'Noidung cong van', 'ghichu'=>'ghichu']
          ]);
    }
}

class DoiNguTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('doingu')->delete();
      DB::table('doingu')->insert([
          'hoten' => 'Đặng Quốc Dũng', 'tenkhongdau'=>changeTitle('Đặng Quốc Dũng'), 'chucvu'=>'P.Giám Đốc', 'email' => 'dungthinhvn@gmail.com', 'codinh'=>'9999999', 'didong'=>'0986242487', 'hinh'=>'dungdq1'
      ]);

    }
}

class DichVuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('dichvu')->delete();
      DB::table('dichvu')->insert([
          ['ten' => 'Tư vấn - Quản lý Dự án', 'tenkhongdau'=>changeTitle('Tư vấn - Quản lý Dự án'), 'hinh'=>'tuvanqlda', 'diengiai' => 'Tư vấn, quản lý các dự án, hạng mục công việc về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.', 'fa'=>'fa-users'],
          ['ten' => 'Truyền thông Đa phương tiện', 'tenkhongdau'=>changeTitle('Truyền thông Đa phương tiện'), 'hinh'=>'thietke', 'diengiai' => 'Nghiên cứu, thiết kế, xây dựng các sản phẩm và dịch vụ Công nghệ thông tin, Truyền thông Xuất bản và báo chí.', 'fa'=>'fa-youtube-play'],
          ['ten' => 'Dịch vụ mạng và Hạ tầng', 'tenkhongdau'=>changeTitle('Dịch vụ mạng và Hạ tầng'), 'hinh'=>'hatangmang', 'diengiai' => 'Hoạt động quản trị vận hành cơ sở hạ tầng công nghệ thông tin và truyền thông. Dịch vụ thiết kế triển khai hệ thống mạng. Dịch vụ bảo trì phần cứng.', 'fa'=>'fa-cogs'],
          ['ten' => 'Đào tạo & Tổ chức sự kiện.', 'tenkhongdau'=>changeTitle('Đào tạo & Tổ chức sự kiện.'), 'hinh'=>'antt', 'diengiai' => 'Tổ chức thực hiện các sự kiện, hội nghị, hội thảo, họp báo, triển lãm; phổ biến, tuyên truyền chính sách của ngành, các ứng dụng công nghệ thông tin.', 'fa'=>'fa-graduation-cap']
      ]);

    }
}

class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tintuc')->delete();
      DB::table('tintuc')->insert([
          ['tieude'=>'Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng','tieudekhongdau'=>changeTitle('Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng'),'urlhinh'=>'http://i.baohatinh.vn/news/1634/105d0122857t6686l8.jpg','tomtat'=>'Sau 2 ngày thi đấu, sáng 28/8, Giải bóng đá nam ngành Thông tin và truyền thông mở rộng chào mừng kỷ niệm ngày truyền thống đã diễn ra thành công tốt đẹp.','noidung'=>'Giải được tổ chức từ ngày 26-28/8, với sự tham gia của 6 đội bóng: Sở TT&TT, Viettel Hà Tĩnh, Bưu điện Hà Tĩnh, VNPT Hà Tĩnh, Cty Cổ phần Vạn Xuân và FPT Hà Tĩnh. Với tinh thần thi đấu nhiệt tình, quyết liệt các đội đã cống hiến cho khán giả những trận đấu đầy kịch tính, bất ngờ với nhiều bàn thắng đẹp mắt.','ngaydang'=>Carbon::now()],
          ['tieude'=>'Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng','tieudekhongdau'=>changeTitle('Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng'),'urlhinh'=>'http://i.baohatinh.vn/news/1634/105d0122857t6686l8.jpg','tomtat'=>'Sau 2 ngày thi đấu, sáng 28/8, Giải bóng đá nam ngành Thông tin và truyền thông mở rộng chào mừng kỷ niệm ngày truyền thống đã diễn ra thành công tốt đẹp.','noidung'=>'Giải được tổ chức từ ngày 26-28/8, với sự tham gia của 6 đội bóng: Sở TT&TT, Viettel Hà Tĩnh, Bưu điện Hà Tĩnh, VNPT Hà Tĩnh, Cty Cổ phần Vạn Xuân và FPT Hà Tĩnh. Với tinh thần thi đấu nhiệt tình, quyết liệt các đội đã cống hiến cho khán giả những trận đấu đầy kịch tính, bất ngờ với nhiều bàn thắng đẹp mắt.','ngaydang'=>date("2016-08-26")]

      ]);

    }
}
