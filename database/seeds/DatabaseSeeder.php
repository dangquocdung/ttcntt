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
        // $this->call(UsersTableSeeder::class);

        // $this->call(TinTucTableSeeder::class);
        // $this->call(LichCongTacTableSeeder::class);
        // $this->call(CongVanTableSeeder::class);

        // $this->call(DichVuTableSeeder::class);

        // $this->call(DonViTableSeeder::class);
        $this->call(LoaiVBTableSeeder::class);
        // $this->call(ChucVuTableSeeder::class);

        // $this->call(TrangThaiTableSeeder::class);
        // $this->call(LevelTableSeeder::class);


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
              ['name' => 'Lê Viết Kiên', 'email' => 'kientechnology@gmail.com', 'password'=>bcrypt('123456@'), 'chucvu'=>'0', 'dienthoai'=>'', 'didong'=>'', 'quyen'=>'0'],
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
            ['user_id' => '3','ngaydang'=>date("2017-1-1"), 'giodang'=>'8:00:00', 'socv'=>'123/CV', 'tieude'=>'Tieu de van ban', 'vanban'=>'Noidung cong van', 'ghichu'=>'ghichu']
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
          ['ten' => 'Ứng dụng CNTT trong CCHC và Chính phủ điện tử', 'tenkhongdau'=>changeTitle('Ứng dụng CNTT trong CCHC và Chính phủ điện tử'), 'hinh'=>'thietke', 'diengiai' => '<p>Thiết kế, xây dựng, cho thuê công trình công nghệ thông tin:</p><p>Phần mềm và hệ thống phần mềm</p><p>Cơ sở dữ liệu và hệ thống cơ sở dữ liệu</p><p>Cho thuê trọn gói hệ thống CNTT trong Cải cách hành chính</p>', 'fa'=>'fa-youtube-play'],
          ['ten' => 'Dịch vụ mạng và Hạ tầng', 'tenkhongdau'=>changeTitle('Dịch vụ mạng và Hạ tầng'), 'hinh'=>'hatangmang', 'diengiai' => '<p>Hoạt động quản trị vận hành cơ sở hạ tầng công nghệ thông tin và truyền thông.</p><p> Dịch vụ thiết kế triển khai hệ thống mạng.</p><p> Dịch vụ bảo trì phần cứng.</p>', 'fa'=>'fa-cogs'],
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
          ['user_id' => '3','tieude'=>'Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng','tieudekhongdau'=>changeTitle('Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng'),'urlhinh'=>'http://i.baohatinh.vn/news/1634/105d0122857t6686l8.jpg','tomtat'=>'Sau 2 ngày thi đấu, sáng 28/8, Giải bóng đá nam ngành Thông tin và truyền thông mở rộng chào mừng kỷ niệm ngày truyền thống đã diễn ra thành công tốt đẹp.','noidung'=>'Giải được tổ chức từ ngày 26-28/8, với sự tham gia của 6 đội bóng: Sở TT&TT, Viettel Hà Tĩnh, Bưu điện Hà Tĩnh, VNPT Hà Tĩnh, Cty Cổ phần Vạn Xuân và FPT Hà Tĩnh. Với tinh thần thi đấu nhiệt tình, quyết liệt các đội đã cống hiến cho khán giả những trận đấu đầy kịch tính, bất ngờ với nhiều bàn thắng đẹp mắt.','ngaydang'=>Carbon::now(),'ghichu'=>'ghichu'],
          ['user_id' => '3','tieude'=>'Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng','tieudekhongdau'=>changeTitle('Tổ chức thành công Giải bóng đá ngành TT&TT mở rộng'),'urlhinh'=>'http://i.baohatinh.vn/news/1634/105d0122857t6686l8.jpg','tomtat'=>'Sau 2 ngày thi đấu, sáng 28/8, Giải bóng đá nam ngành Thông tin và truyền thông mở rộng chào mừng kỷ niệm ngày truyền thống đã diễn ra thành công tốt đẹp.','noidung'=>'Giải được tổ chức từ ngày 26-28/8, với sự tham gia của 6 đội bóng: Sở TT&TT, Viettel Hà Tĩnh, Bưu điện Hà Tĩnh, VNPT Hà Tĩnh, Cty Cổ phần Vạn Xuân và FPT Hà Tĩnh. Với tinh thần thi đấu nhiệt tình, quyết liệt các đội đã cống hiến cho khán giả những trận đấu đầy kịch tính, bất ngờ với nhiều bàn thắng đẹp mắt.','ngaydang'=>date("2016-08-26"),'ghichu'=>'ghichu']

      ]);

    }
}

class DonViTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('donvi')->delete();
      DB::table('donvi')->insert([
          ['tendonvi' => 'Sở Thông Tin Truyền Thông','capquanly'=>'2','donvicha'=>'1'],
          ['tendonvi' => 'Trung Tâm CNTT và Truyền Thông', 'capquanly' =>'3','donvicha'=>'1']

      ]);

    }
}



class PhongBanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('phongban')->delete();
      DB::table('phongban')->insert([
          ['tenphongban' => 'Ban Giám Đốc', 'donvi_id'=>'2'],
          ['tenphongban' => 'Văn Phòng', 'donvi_id'=>'2'],
          ['tenphongban' => 'Phòng Phát triển Ứng dụng', 'donvi_id'=>'2'],
          ['tenphongban' => 'Phòng Đào Tạo', 'donvi_id'=>'2'],
          ['tenphongban' => 'Phòng Cổng - Sàn', 'donvi_id'=>'2'],
          ['tenphongban' => 'Bộ Phận Kinh Doanh - Dịch Vụ', 'donvi_id'=>'2'],
          ['tenphongban' => 'Ban Giám Đốc', 'donvi_id'=>'1'],
          ['tenphongban' => 'Phòng CNTT', 'donvi_id'=>'1']

      ]);

    }
}

class ChucVuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('chucvu')->delete();
      DB::table('chucvu')->insert([
          ['chucvu' => 'Giám Đốc'],
          ['chucvu' => 'P.Giám Đốc'],
          ['chucvu' => 'Trưởng Phòng'],
          ['chucvu' => 'P.Trưởng Phòng'],
          ['chucvu' => 'Nhân viên']



      ]);

    }
}

class TrangThaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('trangthai')->delete();
      DB::table('trangthai')->insert([
          ['trangthai' => 'Chờ tiếp nhận'],
          ['trangthai' => 'Đã Từ chối'],
          ['trangthai' => 'Đã chuyển tiếp'],
          ['trangthai' => 'Đã tiếp nhận'],
          ['trangthai' => 'Đang Xử lý'],
          ['trangthai' => 'Đã hoàn thành']
      ]);

    }
}

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('level')->delete();
      DB::table('level')->insert([
          ['level' => 'Khách'],
          ['level' => 'Cấp 1'],
          ['level' => 'Cấp 2'],
          ['level' => 'Cấp 3'],
          ['level' => 'Admin']

      ]);
    }
}

class LoaiVBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('loaivb')->delete();
      DB::table('loaivb')->insert([
          ['tenloaivb' => 'Thông báo'],
          ['tenloaivb' => 'Báo cáo'],
          ['tenloaivb' => 'Kế hoạch'],
          ['tenloaivb' => 'Chương trình'],
          ['tenloaivb' => 'Giấy mời'],
          ['tenloaivb' => 'Quyết định'],
          ['tenloaivb' => 'Chỉ thị'],
          ['tenloaivb' => 'Giấy phép'],
          ['tenloaivb' => 'Công văn']



      ]);
    }
}
