@extends('layouts.main')


@section('container')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Wisata</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-slate-100">
    <header class="w-screen fixed z-40">
        <nav class="flex justify-between items-center px-5 md:px-28 bg-white py-4">
            <div class="flex-1 flex gap-3 items-center">
                <button class="p-2 rounded-full border">
                    <img class="w-5" src="{{ asset('asset/images/back-icons.svg')}}" alt="">
                </button>
                <h1 class="text-xl font-bold">Kepulauan Derawan , Kaltim</h1>
            </div>
        </nav>
    </header>

    <main class="px-5 xl:px-56 2xl:px-[50rem] pt-24 md:pt-32 pb-20 flex flex-col gap-y-5">
        <div class="basis-1 bg-white rounded-lg">
            <div class="header p-6 border-b-2">
                <h1 class="text-2xl font-bold">Informasi Umum</h1>
            </div>
            <div class="body p-6">
                <div class="flex flex-col gap-2 mb-2">
                    <label for="namaWisata" class="text-sm md:text-base font-normal text-slate-400">Nama Objek
                        Wisata</label>
                    <input type="text" name="namaWisata" class="w-full px-3 py-2 md:py-3 rounded-xl border"
                        placeholder="" value="Kepulauan Derawan, Kaltim">
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="lokasi" class="text-sm md:text-base font-normal text-slate-400">Lokasi</label>
                    <input type="text" name="lokasi" class="w-full px-3 py-2 md:py-3 rounded-xl border"
                        placeholder=""
                        value="PULAU DERAWAN KECAMATAN, Jl. Pulau Derawan, Kabupaten Berau, Kalimantan Timur 77315">
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="koordinat" class="text-sm md:text-base font-normal text-slate-400">Titik
                        Koordinat</label>
                    <div class="flex flex-col xl:flex-row gap-2 md:gap-5">
                        <input type="text" name="koordinat" class="flex-1 px-3 py-2 md:py-3 rounded-xl border"
                            placeholder="" value="-6.193125">
                        <input type="text" name="koordinat" class="flex-1 px-3 py-2 md:py-3 rounded-xl border"
                            placeholder="" value="106.821810">
                    </div>
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="operasional" class="text-sm md:text-base font-normal text-slate-400">Jam
                        Operasional</label>
                    <input type="text" name="operasional" class="w-full px-3 py-2 md:py-3 rounded-xl border"
                        placeholder="" value="07.00 - 17.00 WIB">
                </div>
            </div>
        </div>
        <div class="basis-1 bg-white rounded-lg">
            <div class="header p-6 border-b-2">
                <h1 class="text-2xl font-bold">Informasi Detail</h1>
            </div>
            <div class="body p-6">
                <div class="flex flex-col gap-2 mb-2">
                    <label for="jenisWisata" class="text-sm md:text-base font-normal text-slate-400">Jenis
                        Wisata</label>
                    <textarea name="jenisWisata" rows="8" style="resize: none" class="w-full px-3 py-2 md:py-3 rounded-xl border"
                        placeholder="">Salah satu daya tarik utama Kepulauan Derawan adalah Terumbu Karangnya yang masih terjaga dengan baik. Terumbu karang yang indah ini menjadi rumah bagi berbagai jenis biota laut, seperti ikan-ikan warna-warni, penyu, dan ubur-ubur. Selain itu, Kepulauan Derawan juga terkenal dengan wisata hiu pausnya, di mana wisatawan dapat menyaksikan hiu paus dari dekat. Selain keindahan bawah lautnya, Kepulauan Derawan juga memiliki pantai pasir putih yang menawan dan air laut yang jernih. Pulau-pulau di sekitarnya, seperti Pulau Maratua dan Pulau Kakaban, juga menawarkan pesona alam yang tidak kalah menariknya</textarea>
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="namaTiket" class="text-sm md:text-base font-normal text-slate-400">Nama Tiket</label>
                    <input type="text" name="namaTiket" class="w-full px-3 py-2 md:py-3 rounded-xl border"
                        placeholder="" value="Tiket Derawan Lengkap">
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="harga" class="text-sm md:text-base font-normal text-slate-400">Harga Tiket</label>
                    <input type="text" name="harga" class="w-full px-3 py-2 md:py-3 rounded-xl border"
                        placeholder="" value="100.000">
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="harga" class="text-sm md:text-base font-normal text-slate-400">Foto Objek
                        Wisata</label>
                    <div class="gallery flex gap-2 overflow-scroll xl:overflow-hidden">
                        <img class="hover:scale-95 transition-all ease-in-out pointer-events-none xl:pointer-events-auto cursor-pointer"
                            src="{{ asset('asset/images/fotowisata/foto-1.png') }}" alt=""
                            onclick="openModal('modal-1', 1)">
                        <img class="hover:scale-95 transition-all ease-in-out pointer-events-none xl:pointer-events-auto cursor-pointer"
                            src="{{ asset('asset/images/fotowisata/foto-2.png') }}" alt=""
                            onclick="openModal('modal-1', 2)">
                        <img class="hover:scale-95 transition-all ease-in-out pointer-events-none xl:pointer-events-auto cursor-pointer"
                            src="{{ asset('asset/images/fotowisata/foto-3.png') }}" alt=""
                            onclick="openModal('modal-1', 3)">
                        <img class="hover:scale-95 transition-all ease-in-out pointer-events-none xl:pointer-events-auto cursor-pointer"
                            src="{{ asset('asset/images/fotowisata/foto-4.png') }}" alt=""
                            onclick="openModal('modal-1', 4)">
                    </div>
                </div>
            </div>
        </div>
        <button type="button"
        class="basis-1 flex items-center justify-center px-4 py-3 font-medium bg-primary text-white rounded-md hover:bg-primary/85 transition-all duration-300"
        data-dismiss="modal">
        <span class="flex items-center justify-center space-x-2">Simpan Perubahan</span>
    </button>
    </main>

    <!-- Modal Gallery -->
    <div id="modal-1" class="modal-gallery">
        <span class="close" onclick="closeModal('modal-1')">&times;</span>
        <div class="modal-content rounded-md">
            <div class="carousel flex justify-center overflow-hidden">
                <img src="{{ asset('asset/images/fotowisata/foto-1.png') }}" alt="">
                <img src="{{ asset('asset/images/fotowisata/foto-2.png') }}" alt="">
                <img src="{{ asset('asset/images/fotowisata/foto-3.png') }}" alt="">
                <img src="{{ asset('asset/images/fotowisata/foto-4.png') }}" alt="">
            </div>
            <button class="prev" onclick="plusSlides(-1, 'modal-1')">&#10094;</button>
            <button class="next" onclick="plusSlides(1, 'modal-1')">&#10095;</button>
        </div>
    </div>

    <script>
        // Open modal
        function openModal(modalId, imageIndex) {
            document.getElementById(modalId).style.display = "block";
            showSlides(imageIndex, modalId);
        }

        // Close modal dengan animasi fade out
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('fade-out'); // Tambahkan kelas fade-out
            setTimeout(() => {
                modal.style.display = "none";
                modal.classList.remove('fade-out'); // Hapus kelas fade-out setelah animasi selesai
            }, 300); // Sesuaikan dengan durasi animasi fade-out
        }

        // Carousel functionality
        let slideIndex = 1;

        // Carousel functionality with loop
        function plusSlides(n, modalId) {
            slideIndex += n;
            const slides = document.querySelectorAll(`#${modalId} .carousel img`);
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            if (slideIndex < 1) {
                slideIndex = slides.length;
            }
            showSlides(slideIndex, modalId);
        }


        function showSlides(imageIndex, modalId) {
            const slides = document.querySelectorAll(`#${modalId} .carousel img`);
            slides.forEach((slide, index) => {
                if (index === imageIndex - 1) {
                    slide.style.display = "block";
                } else {
                    slide.style.display = "none";
                }
            });
        }

        // Fungsi untuk menutup modal jika klik di luar area modal
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal-gallery');
            for (let i = 0; i < modals.length; i++) {
                const modal = modals[i];
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>
</body>

</html>

@endsection