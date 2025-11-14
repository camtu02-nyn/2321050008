CREATE DATABASE if not EXISTS quan_ly_web_fpt;
USE quan_ly_web_fpt;
1. thể loại phim
    - id int PRIMARY KEY
    - ten_the_loai varchar(50) 

2. phim
    - id int
    - tên phim varchar
    - dao_dien_id int
    - quoc_gia_id int
    - năm sản xuất int
    - poster varchar
    - so_tap int
    - lượt xem
    - điểm đánh giá
    - trailer varchar
    - trạng thái
    - độ tuổi int
    - mô tả text
3. phim_dien_vien
    - id int
    - phim_id
    - dien_vien_id
3.1 phim_the_loai
    - id int
    - phim_id int
    - the_loai_id int
4. người dùng 
    - id int
    - tai_khoan int
    - tên đăng nhập varchar(50)
    - tên người dùng varchar(50)
    - mật khẩu varchar(50)
    - email varchar(50)
    - số điện thoại varchar(10)
    - (vai trò quyền hạn) vai_tro_id int
    - ngày đăng ký tài khoản
    - ảnh đại diện 
    - ngày sinh date
5. vai trò
    - id int
    - ten_vai_tro varchar(50)
6. tập phim
    - id int
    - phim_id int
    - tieu_de varchar(100)
    - tập số int
    - link xem
    - ngày đăng tập
7. quốc gia
    - id int
    - ten_quoc_gia varchar(50)
-- dựa vào khung xây dựng csdl trên để tạo các bảng trong mysql
-- và thêm các ràng buộc khóa chính, khóa ngoại phù hợp
-- viết các câu lệnh để chạy nhiều lần không bị lỗi
-- mỗi 1 bảng tầm 30 dữ liệu mẫu 


