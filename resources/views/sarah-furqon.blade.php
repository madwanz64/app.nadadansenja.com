<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Senin, 1 Mei 2023. Tanpa Mengurangi Rasa Hormat, Kami Mengundang Anda Untuk Menghadiri Acara Pernikahan Kami.">
    <meta property="og:description" content="Senin, 1 Mei 2023. Tanpa Mengurangi Rasa Hormat, Kami Mengundang Anda Untuk Menghadiri Acara Pernikahan Kami.">

    <title>The Wedding of Sarah & Furqon</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ 'css/app.css' }}">
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        nav a {
            cursor: pointer;
        }

        nav * {
            cursor: grab;
        }

        nav.dragging {
            cursor: grab;
        }

        nav.dragging *{
            cursor: grab;
        }

        .radio-button {
            position: relative;
            display: inline-block;
            padding-left: 25px;
            cursor: pointer;
            font-size: 18px;
        }

        .radio-button input {
            position: absolute;
            background-color: #EDEDED;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 30px;
            width: 30px;
            background-color: #EDEDED;
            border: 10px solid #EDEDED;
            border-radius: 50%;
        }

        .radio-button:hover input~.checkmark {
            background-color: #ccc;
        }

        .radio-button input:checked~.checkmark {
            background-color: #fff;
        }

        .label-text {
            margin-left: 15px;
        }
    </style>
</head>
<body class="bg-black font-['Cormorant'] w-screen min-h-screen">
<div id="cover" class="w-full h-screen z-50 fixed bg-black">
    <div class="w-full h-full max-w-md mx-auto z-50">
        <div id="home" class="h-screen bg-[url('/images/bg-cover.png')] bg-cover flex flex-col justify-end text-center text-white py-12 z-50">
            <p class="text-[22px]">Wedding Invitation</p>
            <p class="text-7xl font-['Petit_Formal_Script']">Sarah</p>
            <p class="text-6xl font-['Petit_Formal_Script']">&</p>
            <p class="text-7xl font-['Petit_Formal_Script']">Furqon</p>
            @if(isset($_GET['name']))
                <p class="font-semibold text-lg mt-4">Kepada Bapak/Ibu/Saudara(i)</p>
                <p class="font-bold text-[25px] -my-2">{{ $_GET['name'] }}</p>
                <p class="font-semibold text-lg">di Tempat</p>
            @endif
            <a href="#" id="openInvitation" class="bg-[#701651] w-80 mx-auto py-2 rounded-full mt-8 mb-8" onclick="renderAudio()">Buka Undangan</a>
        </div>
    </div>
</div>
<div id="main" class="-z-10">
    <div class="max-w-md mx-auto bg-white relative">
        <div id="home" class="min-h-[calc(100vh-80px)] bg-[url('/images/bg-content.png')] bg-cover flex flex-col justify-end text-center text-[#701651]">
            <p class="text-[22px]">The Wedding Of</p>
            <p class="text-7xl font-['Petit_Formal_Script']">Sarah</p>
            <p class="text-6xl font-['Petit_Formal_Script']">&</p>
            <p class="text-7xl font-['Petit_Formal_Script']">Furqon</p>
            <img src="{{asset('images/nadadansenja.svg')}}" class="w-11 mx-auto mt-16 mb-2">
            <p class="font-semibold text-xs mb-6">Designed by <span class="font-semibold font-['Poppins']">Nada & Senja Studio™</span></p>
        </div>
        <div id="profil" class=" bg-white bg-cover flex flex-col text-center py-12 text-[#701651] relative">
            <img src="{{asset('images/bismillah.svg')}}" class="w-48 mx-auto">
            <img src="{{asset('images/tangkai-pohon-profil.svg')}}" class="absolute top-[30%] left-0">
            <p class="text-lg mt-4 font-semibold px-16 text-[#0D1131]"> Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah)”. (Q.S Adz-Dzariyat [51] : 49)</p>
            <p class="text-lg mt-2 font-semibold px-16 text-[#0D1131]"> Dengan ini kami mengundang Bapak/Ibu/Saudara(i) untuk
                menghadiri acara pernikahan kami,</p>
            <div class="">
                <img src="{{asset('images/Sarah-Furqon_Woman.svg')}}" class="rounded-full w-44 mx-auto mt-4">
                <p class="font-['Petit_Formal_Script'] text-[26px] text-[#701651] mt-3">Sarah Shabrina, S.Si.</p>
                <p class="text-base text-[#AE508E]">Anak keempat dari Bapak Narto, S.T., M.M. <br>
                    & Ibu Neni Viantin Diyah Martiva, S.Pd.</p>
            </div>
            <p class="font-['Petit_Formal_Script'] text-[40px] my-4">&</p>
            <div class="">
                <img src="{{asset('images/Sarah-Furqon_Man.svg')}}" class="rounded-full w-44 mx-auto mt-4">
                <p class="font-['Petit_Formal_Script'] text-[26px] text-[#701651] mt-3">M. Arif Furqon S.T.</p>
                <p class="text-base text-[#AE508E]">Anak ketiga dari Bapak Dr. Abdul Rohman M.Pd. <br>
                    & Ibu Dra. Idah Hadijah M.Pd.</p>
            </div>
        </div>
        <div id="acara" class=" bg-white bg-cover flex flex-col text-center mt-8 py-16 text-[#701651] relative">
            <img src="{{asset('images/tangkai-pohon-acara.svg')}}" class="absolute -top-20 right-0">
            <img src="{{asset('images/bunga.svg')}}" class="absolute -top-6 left-0 right-0 mx-auto">
            <p class="font-['Petit_Formal_Script'] text-[35px] text-[#701651]">Akad & Resepsi</p>
            <div class="flex flex-row mx-auto mt-8">
                <div class="flex-shrink-0 w-28">
                    <p id="weeks" class="text-[60px] font-semibold -mt-8 -mb-2">11</p>
                    <p>Minggu</p>
                </div>
                <div class="flex-shrink-0 w-28 border-x-2">
                    <p id="days" class="text-[60px] font-semibold -mt-8 -mb-2">11</p>
                    <p>Hari</p>
                </div>
                <div class="flex-shrink-0 w-28">
                    <p id="hours" class="text-[60px] font-semibold -mt-8 -mb-2">11</p>
                    <p>Jam</p>
                </div>
            </div>
            <p class="font-medium text-[21px] text-[#0D1131] mt-6">Senin, 1 Mei 2023 | 09.00 - selesai <br>
                ASTON Banyuwangi Hotel & <br>
                Conference Center</p>
            <p class="text-lg text-[#A00A2B] px-12 mt-2">Jl. Brawijaya, Lingkungan Cungking, Mojopanggung, Kec. Giri, Kabupaten Banyuwangi, Jawa Timur 68425</p>
            <div class="mx-auto mt-4 relative w-80 h-40">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.8289696271086!2d114.3530662!3d-8.2199486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241c61dc85899%3A0xf0267439cd75b194!2sASTON%20Banyuwangi%20Hotel%20%26%20Conference%20Center!5e0!3m2!1sen!2sid!4v1679231341711!5m2!1sen!2sid" style="border:0;" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="absolute top-0 left-0 w-full h-full rounded-xl" style="cursor:none!important"></iframe>
            </div>
            <a href="#" class="w-80 bg-[#701651] mx-auto mt-4 py-1 text-white rounded-2xl">Ingatkan via Google Calendar</a>
            <a target="_blank" href="https://instagram.com/rahshabrina" class="w-80 bg-[#701651] mx-auto mt-4 py-1 text-white rounded-2xl">Tonton Live Instagram di sini</a>
        </div>
        <div id="rsvp" class=" bg-white flex flex-col text-center mt-8 py-16 text-[#701651] relative">
            <img src="{{asset('images/bunga-rsvp.svg')}}" class="absolute -top-6 left-0 right-0 mx-auto">
            <p class="text-[35px] mx-auto font-['Petit_Formal_Script']">RSVP</p>
            <p class="text-lg font-medium text-[#0D1131] mt-4">Konfirmasi Kehadiran</p>
            <input type="text" class="bg-[#EDEDED] rounded-xl w-80 py-3 px-2 mx-auto mt-3 placeholder:text-[#C0C0C0] text-[#303030] text-lg" placeholder="&nbsp;Nama" name="name_rsvp_add">
            <div class="w-80 flex mx-auto mt-3">
                <div class="w-40 -ml-4">
                    <label class="radio-button">
                        <input type="radio" name="confirmation_rsvp_add" value="Akan Hadir">
                        <span class="checkmark"></span>
                        <span class="label-text text-[#0D1131]">Akan Hadir</span>
                    </label>
                </div>
                <div class="w-40 -ml-4">
                    <label class="radio-button">
                        <input type="radio" name="confirmation_rsvp_add" value="Tidak Hadir">
                        <span class="checkmark"></span>
                        <span class="label-text text-[#0D1131]">Tidak Hadir</span>
                    </label>
                </div>
            </div>
            <button id="button-rsvp" class="bg-[#701651] w-80 py-1 text-white mx-auto mt-6 rounded-2xl text-lg" type="button" onclick="postRSVP()">Submit</button>
        </div>
        <div id="ucapan" class=" bg-white flex flex-col text-center mt-8 py-16 text-[#701651] relative">
            <img src="{{asset('images/tangkai-pohon-ucapan.svg')}}" class="absolute -top-20 left-0">
            <img src="{{asset('images/bunga-ucapan.svg')}}" class="absolute -top-6 left-0 right-0 mx-auto">
            <p class="text-[35px] mx-auto font-['Petit_Formal_Script']">Friends Wishes</p>
            <p class="text-lg font-medium text-[#0D1131] mt-4">Ucapan & Doa</p>
            <input type="text" class="bg-[#EDEDED] rounded-xl w-80 py-3 px-2 mx-auto mt-3 placeholder:text-[#C0C0C0] text-[#303030] text-lg" placeholder="&nbsp;&nbsp;Nama" name="name_wish_add">
            <textarea rows="5" class="bg-[#EDEDED] rounded-xl w-80 py-3 px-2 mx-auto mt-3 resize-none placeholder:text-[#C0C0C0] text-[#303030] no-underline text-lg" placeholder="&nbsp;&nbsp;Pesan untuk mempelai" name="message_wish_add"></textarea>
            <button id="button-wish" class="bg-[#701651] w-80 py-1 text-white mx-auto mt-6 rounded-2xl text-lg" onclick="postWish()">Submit</button>
            <div class="mt-8 bg-[#D9D9D9] w-80 h-80 mx-auto rounded-2xl overflow-y-scroll p-4 pb-0">
                @foreach($wishes as $wish)
                    <div class="bg-white mx-auto w-full rounded-2xl px-4 py-2 mb-4">
                        <p class="text-left text-base font-bold">{{ $wish->name }}</p>
                        <p class="text-left text-base text-[#241E22] font-normal">{{ $wish->message }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="protokol" class="bg-white flex flex-col text-center mt-8 pt-16 pb-12 text-[#701651] relative">
            <img src="{{asset('images/tangkai-pohon-protokol.svg')}}" class="absolute -top-20 right-0">
            <img src="{{asset('images/bunga-protokol.svg')}}" class="absolute -top-6 left-0 right-0 mx-auto">
            <p class="text-[35px] mx-auto font-['Petit_Formal_Script']">Prokotol<br>Kesehatan</p>
            <div class="flex flex-row flex-wrap space-x-6 justify-center mt-8 mx-auto">
                <div class="w-24 mb-6">
                    <img src="{{ asset('images/protokol-masker.svg') }}" class="w-24 h-24 mx-auto">
                    <p class="font-semibold text-lg text-[#0D1131] mt-2 leading-5">Wajib memakai masker</p>
                </div>
                <div class="w-24 mb-6">
                    <img src="{{ asset('images/protokol-hand-sanitizer.svg') }}" class="w-24 h-24 mx-auto">
                    <p class="font-semibold text-lg text-[#0D1131] mt-2 leading-5">Gunakan penyanitasi tangan</p>
                </div>
                <div class="w-24 mb-6">
                    <img src="{{ asset('images/protokol-basuh-tangan.svg') }}" class="w-24 h-24 mx-auto">
                    <p class="font-semibold text-lg text-[#0D1131] mt-2 leading-5">Cuci tangan Anda</p>
                </div>
                <div class="w-24 mb-6">
                    <img src="{{ asset('images/protokol-bersin.svg') }}" class="w-24 h-24 mx-auto">
                    <p class="font-semibold text-lg text-[#0D1131] mt-2 leading-5">Tutup mulut & hidung saat bersin</p>
                </div>
                <div class="w-24 mb-6">
                    <img src="{{ asset('images/protokol-jarak.svg') }}" class="w-24 h-24 mx-auto">
                    <p class="font-semibold text-lg text-[#0D1131] mt-2 leading-5">Jaga jarak Anda</p>
                </div>
            </div>
        </div>
        <div class="bg-[url('/images/bg-quote.jpg')] w-full h-56 bg-cover bg-bottom text-[#701651] relative px-8 sm:px-12 flex flex-col justify-between">
            <div class="">
                <p class="font-['Petit_Formal_Script'] text-lg pt-8 sm:pt-12 mx-auto">Lalu Dia menjadikan darinya sepasang laki-laki dan perempuan</p>
                <p class="font-semibold text-lg text-right mt-4">QS. Al-Qiyamah : 39</p>
            </div>
            <p class="font-semibold text-center text-sm mb-4">Designed by <span class="font-semibold font-['Poppins']">Nada & Senja Studio™</span></p>
        </div>
        <div class="h-20 bg-white"></div>
    </div>
    <div class="fixed bottom-0 left-0 right-0 max-w-md mx-auto mb-24 flex justify-end px-4">
        <a id="audioPlayer" onclick="toggleAudio()"><img src="{{asset('images/pause-button.svg')}}" style="filter: invert(13%) sepia(51%) saturate(3895%) hue-rotate(301deg) brightness(90%) contrast(95%);" width="30px"></a>
    </div>
    <nav id="navigation" class="fixed bottom-0 left-0 right-0 max-w-md bg-white mx-auto  overflow-x-scroll border-t-2 flex-nowrap z-10 text-[#701651]">
        <div id="navigation-bar" class="flex h-20">
            <div class="w-24 flex-shrink-0 text-center flex flex-col justify-center bg-white">
                <a href="#profil">
                    <div class="h-8 flex align-middle">
                        <img src="{{asset('images/material-symbols_users.svg')}}" class="mx-auto w-12">
                    </div>
                    <p class="text-lg font-semibold">Profil</p>
                </a>
            </div>
            <div class="w-24 flex-shrink-0 text-center flex flex-col justify-center bg-white">
                <a href="#acara">
                    <div class="h-8 flex align-middle">
                        <img src="{{asset('images/material-symbols_calendar.svg')}}" class="mx-auto w-12">
                    </div>
                    <p class="text-lg font-semibold">Acara</p>
                </a>
            </div>
            <div class="w-24 flex-shrink-0 text-center flex flex-col justify-center bg-white">
                <a href="#rsvp">
                    <div class="h-8 flex align-middle">
                        <img src="{{asset('images/material-symbols_rsvp.svg')}}" class="mx-auto w-12">
                    </div>
                    <p class="text-lg font-semibold">Konfirmasi</p>
                </a>
            </div>
            <div class="w-24 flex-shrink-0 text-center flex flex-col justify-center bg-white">
                <a href="#ucapan">
                    <div class="h-8 flex align-middle">
                        <img src="{{asset('images/material-symbols_mail-outline.svg')}}" class="mx-auto w-12">
                    </div>
                    <p class="text-lg font-semibold">Ucapan</p>
                </a>
            </div>
            <div class="w-24 flex-shrink-0 text-center flex flex-col justify-center bg-white">
                <a href="#protokol">
                    <div class="h-8 flex align-middle">
                        <img src="{{asset('images/material-symbols_health-and-safety-outline-rounded.svg')}}" class="mx-auto w-12">
                    </div>
                    <p class="text-lg font-semibold">Protokol</p>
                </a>
            </div>
        </div>
    </nav>
</div>

<script>
    const startDate = new Date("2023-05-01T09:00:00+07:00")

    const weeks = document.querySelector('#weeks');
    const days = document.querySelector('#days');
    const hours = document.querySelector('#hours');

    function updateCountdown() {
        const now = new Date();
        const timeRemaining = startDate - now;

        const weeksLeft = Math.floor(timeRemaining / (1000 * 60 * 60 * 24 * 7));
        const daysLeft = Math.floor(timeRemaining / (1000 * 60 * 60 * 24)) % 7;
        const hoursLeft = Math.floor(timeRemaining / (1000 * 60 * 60)) % 24;

        weeks.innerHTML = weeksLeft;
        days.innerHTML = daysLeft;
        hours.innerHTML = hoursLeft;
    }

    updateCountdown();
    setInterval(updateCountdown(), 60000)

    const nav = document.querySelector('nav#navigation')
    const navbar = document.querySelector('#navigation-bar')

    let isDragging = false;
    let startPosition;
    let currentTranslate = 0;

    navbar.addEventListener('mousedown', e => {
        isDragging = true;
        nav.classList.add('dragging');
        startPosition = e.clientX - nav.offsetLeft;
    });

    navbar.addEventListener('mousemove', e => {
        if (!isDragging) return;
        e.preventDefault();
        const currentPosition = e.clientX - nav.offsetLeft;
        const difference = currentPosition - startPosition;
        const maxScroll = navbar.clientWidth - navbar.scrollWidth;
        const minScroll = 0;
        let newTranslate = currentTranslate + difference;
        if (newTranslate > minScroll) {
            newTranslate = minScroll;
        } else if (newTranslate < maxScroll) {
            newTranslate = maxScroll;
        }
        navbar.style.transform = `translateX(${newTranslate}px)`;
    });

    navbar.addEventListener('mouseup', e => {
        isDragging = false;
        nav.classList.remove('dragging');
        currentTranslate += e.clientX - nav.offsetLeft - startPosition;
    });


    const button = document.querySelector('#openInvitation');
    const cover = document.querySelector('#cover');
    const coverParent = cover.parentElement;
    button.addEventListener('click', function () {
        removeFadeOut(cover, 2000);
    })

    function removeFadeOut(el, speed) {
        var seconds = speed / 1000;
        el.style.transition = "opacity " + seconds + "s ease";

        el.style.opacity = 0;
        setTimeout(function () {
            el.parentNode.removeChild(el);
        }, speed);
    }

    const main = document.querySelector('#main');
    let audio;

    function renderAudio() {
        audio = document.createElement("audio");
        let src = document.createElement("source");
        audio.controlsList = "nodownload";
        src.src = "{{asset('audios/bg-audio.mp3')}}";
        audio.appendChild(src);
        main.appendChild(audio)
        audio.play();
    }

    function toggleAudio() {
        const audioElement = document.querySelector('audio');
        const audioPlayer = document.querySelector('#audioPlayer')
        isPaused = audioElement.paused;
        if(!isPaused) {
            audioPlayer.firstElementChild.src = '{{asset('images/play-button.svg')}}'
            audioElement.pause();
        } else {
            audioPlayer.firstElementChild.src = '{{asset('images/pause-button.svg')}}'
            audioElement.play();
        }
    }

    function postRSVP() {
        const xhr = new XMLHttpRequest();
        const rsvps = document.querySelectorAll("[name$='rsvp_add']");
        const buttonRSVP = document.querySelector("#button-rsvp");
        let data = {};

        rsvps.forEach(function (rsvp) {
            if (rsvp.type === "radio" && rsvp.checked) {
                data[rsvp.name] = rsvp.value
            } else if (rsvp.type === "text" && rsvp.value !== "") {
                data[rsvp.name] = rsvp.value
            }
        });
        xhr.open( 'POST','{{route('rsvp.add', ['username' => 'sarah-furqon'])}}', true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
        xhr.onload = function () {
            let response = JSON.parse(xhr.response);
            if (xhr.status === 200) {
                const para = document.createElement("p");
                const node = document.createTextNode(response.message);
                para.classList.add('text-[#701651]')
                para.classList.add('text-base')
                para.classList.add('mt-4')
                para.appendChild(node);
                buttonRSVP.replaceWith(para);
            }
        }
        xhr.send(JSON.stringify(data));
    }

    function postWish() {
        const xhr = new XMLHttpRequest();
        const wishes = document.querySelectorAll("[name$='wish_add']");
        const buttonWish = document.querySelector("#button-wish");
        let data = {};

        wishes.forEach(function (wish) {
            if (wish.type === "radio" && wish.checked) {
                data[wish.name] = wish.value
            } else if (wish.type === "text" && wish.value !== "") {
                data[wish.name] = wish.value
            } else if (wish.type === "textarea" && wish.value !== "") {
                data[wish.name] = wish.value
            }
        });

        xhr.open("POST", "{{route('wishes.add', ['username' => 'sarah-furqon'])}}", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
        xhr.onload = function () {
            let response = JSON.parse(xhr.response);
            if (xhr.status === 200) {
                const para = document.createElement("p");
                const node = document.createTextNode(response.message);
                para.classList.add('text-[#701651]')
                para.classList.add('text-base')
                para.classList.add('mt-4')
                para.appendChild(node);
                buttonWish.replaceWith(para);
            }
        }
        xhr.send(JSON.stringify(data));
    }
</script>
</body>

</html>
