<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HypnoTeraphy</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        html{
            scroll-behavior: smooth;
        }

        *{
            font-family: "Poppins", sans-serif;
            font-weight: 400;
        }
        #welcome{
            background-image: url("assets/Hypno-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            
        }
    </style>

    @vite('resources/css/app.css')
</head>
<header class="bg-white py-16 px-32 shadow-xl fixed top-0 w-full z-50 tablet:py-8 tablet:px-16 ">
    <nav class="flex justify-between ">
    <a href="#" class="text-3xl hover:text-custom-second-color tablet:text-base"><h1>Hypno<span class="font-bold">Teraphy</span></h1></a>
    <ul class="text-2xl flex gap-16 text-gray-500 tablet:gap-8">
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">Home</li></a>
        <a href="#about"><li class="font-normal hover:text-custom-second-color tablet:text-base">About Me</li></a>
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">HypnoTeraphy</li></a>
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">Services</li></a>
    </ul>
    <a href="#" class="text-s text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-2 px-5 
    tablet:py-1.5 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800 tablet:text-[8px]">Contact Me</a>
    </nav>
</header>                                               

<body class="bg-custom-main-color ">
    <!-- SECTION WELCOME START -->
    <section id="welcome" class="flex items-center justify-center h-screen bg-black-400 mt-32">
        <div class="flex flex-col items-center gap-10">
            <h1 class="text-white text-6xl font-bold">HypnoTeraphy</h1>
            <p class="text-white font-normal text-xl">"Efektivitas Terapy Penyakit Kejiwaan"</p>
            <a class="text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-1.5 px-8 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800" href="#">Pelajari</a>
        </div>
    </section>
        <!-- SECTION WELCOME END -->

        <!-- SECTION ABOUT ME START -->
    <section id="about" class="h-screen">
        <div class="flex flex-col items-center gap-20 tablet:gap-10 bg-white shadow-2xl py-20 px-16 my-32 mx-60 tablet:mx-20 tablet:justify-center tablet:text-center">
            <div class="flex flex-wrap items-center justify-between gap-12 tablet:gap-1 tablet:justify-center">
                <img src="assets\pas-foto.png" alt="pas-foto">
                <div class="flex flex-col gap-10 justify-center mt-24">
                    <div class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text">
                    <h1 class="text-5xl font-bold">Terapis Bersertifikasi</h1>
                    </div>
                    <p class="text-white bg-gradient-to-r from-cyan-400 to-cyan-800 py-3 px-8 rounded-full 
                    text-center max-w-[530px] text-2xl ">Muhamad Rifki Septian.,A.Md.,CHt</p>
                    <p class="text-gray-500 max-w-[530px] text-xl leading-loose">Ditangani oleh perawat berpengalaman dalam bidang 
                        Psikoterapist dan Hypnoteraphy.</p>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-9 tablet:gap-20 ml-4 tablet:ml-0 tablet:justify-center">
                <img class="w-[395px] ml-5 tablet:ml-0" src="assets\sertifikat.png" alt="sertifikat">
                <div class="flex flex-col bg-gradient-to-br from-cyan-400 to-cyan-800 text-white px-10 py-7 gap-10 rounded-3xl ml-4 tablet:ml-0">
                    <h1 class="text-5xl font-semibold">Jadwal Konsultasi</h1>
                    <div class="flex gap-3 text-3xl items-center">
                        <img class="w-10" src="assets\time-circle.png" alt="time-circle">
                        <p>Setiap Hari, 08:00 - 20:00 WIB</p>
                    </div>
                    <a href="#" class="text-xl font-semibold text-blue-900 bg-white text-center py-4 rounded-full max-w-48 hover:shadow-2xl">Download CV</a>
                </div>
            </div>
        </div>
        {{-- <div class="bg-white shadow-xl flex flex-wrap flex-col items-center justify-around py-20 px-28 m-32 tablet:m-16 tablet:gap-24 rounded-3xl">
            <div class="flex gap-5 items-center">
                <div class="flex flex-col">
                <img src="/assets/pas-foto.png" alt="pas-foto">
                <p class="text-white bg-gradient-to-br from-cyan-300 to-cyan-800 py-2 px-8 rounded-full">Muhamad Rifki Septian.,A.Md.,CHt</p>
                <div class="flex gap-2 items-center justify-center">
                    <img src="/assets/time-circle.png" alt="jam">
                    <p class="text-blue-900 font-semibold">Setiap Hari, 08:00 - 20:00 WIB</p>
                </div>
                <a class="text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-2 px-8 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800" href="#">Download CV</a>
            </div>
            </div>
            <div class="flex flex-col gap-5">
                <h4 class="font-semibold">Perawat Berpengalaman</h4>
                <div class="bg-gradient-to-br from-cyan-400 to-cyan-800 text-transparent bg-clip-text">
                <h1 class="text-5xl font-bold">Terapis Bersertifikasi</h1>
                </div>
                <p class="max-w-lg text-gray-500">Ditangani oleh perawat berpengalaman dalam bidang 
                    Psikoterapist dan Hypnoteraphy.</p>
                <p><img src="/assets/sertifikat.png" alt="sertifikat"></p>
            </div> --}}
        </div>
    </section>
            <!-- SECTION ABOUT ME END -->


</body>
</html>