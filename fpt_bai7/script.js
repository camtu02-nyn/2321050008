let danhSachPhim = [
    {
        id: 1,
        tenPhim: "Mưa đỏ",
        namPhatHanh: 2025,
        tuoi: "T13",
        thoiLuong: "124 phút",
        quocGia: "Việt Nam",
        poster: "./img/mua-do2-1122.jpeg",
    },
    {
        id: 2,
        tenPhim: "Conan",
        namPhatHanh: 2024,
        tuoi: "T13",
        thoiLuong: "110 phút",
        quocGia: "Nhật Bản",
        poster: "./img/phim/conan.jpg",
    },
    {
        id: 3,
        tenPhim: "Người đẹp và quái vật",
        namPhatHanh: 2017,
        tuoi: "T16",
        thoiLuong: "130 phút",
        quocGia: "Mỹ",
        poster: "./img/phim/beautyandthebeaets.jpg",
    },
    {
        id: 4,
        tenPhim: "Kungfu Panda",
        namPhatHanh: 2024,
        tuoi: "P",
        thoiLuong: "115 phút",
        quocGia: "Mỹ",
        poster: "./img/phim/kungfupanda.jpg",
    },
];

let phimHienTai = danhSachPhim[0];

let bannerImg = document.getElementById("banner");

let bannerText = document.getElementById("tenphim");

function chonPhim(idPhim) {
    for (let i = 0; i < danhSachPhim.length; i++) {
        if (danhSachPhim[i].id == idPhim) {
            bannerImg.src = danhSachPhim[i].poster;
            alert("Bạn đã chọn phim: " + danhSachPhim[i].tenPhim);
            bannerText.innerHTML = danhSachPhim[i].tenPhim;
            break;

        }
    }
}
