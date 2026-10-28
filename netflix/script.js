function xemTrailer(index){


        var phim = danhSachPhim[index];
        var anh = phim.banner;
        var link = phim.trailer;

            document.getElementsByClassName("trailer")[0].src = link;
            // document.getElementsByClassName("banner-anh")[0].src = anh;

            // ẩn banner đi
            document.getElementsByClassName("banner")[0].style = "display:none";
            // hien thi trailer
            document.getElementsByClassName("banner")[1].style = "display:block";
        }

var danhSachPhim = [
    {
        id : 1,
        ten : "canh sat truong labrador",
        thuoiLuong : 20,
        banner: "./anh/labrador.jpg",
        trailer: "https://www.youtube.com/embed/OuNo8Tkb3lI?si=bAExUI65U_MdnaY5"
    },

    {
        id : 2,
        ten : "car",
        thoiLuong : 20,
        banner: "./anh/poster-phim-hoat-hinh-02.webp",
        trailer: "https://www.youtube.com/embed/XszNWHhpaTc?si=ML61qON7a7Qht1Fq"
    },

    {
        id : 3,
        ten : "inside out 2",
        thoiLuong: 100,
        banner: "./anh/poster-phim-hoat-hinh-03.webp",
        trailer:"https://www.youtube.com/embed/VWavstJydZU?si=LpSJjXFMmk0lMMpL"
    },

    {
        id : 4,
        ten : "Minions 4",
        thoiLuong: 100,
        banner: "./anh/poster-phim-hoat-hinh-20.webp",
        trailer:"https://www.youtube.com/embed/S1dnnQsY0QU?si=E-GahMCqVtts7r0P"
    },

    {
        id : 5,
        ten : "Kungfu Panda 4",
        thoiLuong: 100,
        banner: "./anh/poster-phim-hoat-hinh-24.webp",
        trailer:"https://www.youtube.com/embed/_inKs4eeHiI?si=gyvRfHZ9I4dMhHIn"
    },

    {
        id : 6,
        ten : "Incredibles 2",
        thoiLuong: 100,
        banner: "./anh/poster-phim-hoat-hinh-32.webp",
        trailer:"https://www.youtube.com/embed/i5qOzqD9Rms?si=r46sFJzgxnr9eeiP"
    },

    {
        id : 7,
        ten : "Elemental",
        thoiLuong: 100,
        banner: "./anh/poster-phim-hoat-hinh-09.webp",
        trailer:"https://www.youtube.com/embed/hXzcyx9V0xw?si=Lt8nilbNcF7i-6Wu"
    },

    {
        id : 8 ,
        ten : "Coco",
        thoiLuong: 100,
        banner: "./anh/poster-phim-hoat-hinh-12.webp",
        trailer:"https://www.youtube.com/embed/xlnPHQ3TLX8?si=fh_zMwaPCrgMczQJ"
    },

    
]
