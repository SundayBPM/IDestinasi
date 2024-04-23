<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi iDestinasi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-slate-100">
    <header class="w-screen fixed z-40">
        <nav class="flex justify-between items-center px-5 lg:px-28 bg-white py-4">
            <div class="flex-1">
                <img class="w-32" src="{{ asset('asset/images/logo.png') }}" alt="">
            </div>
            <div class="md:flex flex-col items-center hidden">
                <h1 class="text-xl font-bold">Verifikasi Objek Wisata</h1>
                <p class="text-slate-500">Kelola pengajuan dan verifikasi objek wisata disini</p>
            </div>
            <div class="flex-1 flex justify-end">
                <div class="w-10 h-10 bg-slate-400 rounded-full overflow-hidden">
                    <img class="w-32" src="{{ asset('asset/images/beach-icon.png') }}" alt="">
                </div>
            </div>
        </nav>
    </header>
    <main class="px-5 lg:px-28 2xl:px-[50rem] pt-24 md:pt-32 pb-20">
        <div class="head flex flex-col gap-3">
            <h1 class="text-lg md:text-xl font-bold">Informasi Statistik Pendaftaran</h1>
            <div class="flex flex-wrap gap-4">
                <div class="py-4 w-full md:w-fit px-6 bg-white rounded-xl">
                    <div class="flex flex-1 items-center gap-4">
                        <div class="">
                            <img src="{{ asset('asset/images/total-pendaftar.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1>Total Pendaftar</h1>
                            <span class="text-2xl font-bold">200</span>
                        </div>
                    </div>
                </div>
                <div class="py-4 w-full md:w-fit px-6 bg-white rounded-xl">
                    <div class="flex flex-1 items-center gap-4">
                        <div class="">
                            <img src="{{ asset('asset/images/belum-direview.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1>Belum Di-review</h1>
                            <span class="text-2xl font-bold">60</span>
                        </div>
                    </div>
                </div>
                <div class="py-4 w-full md:w-fit px-6 bg-white rounded-xl">
                    <div class="flex flex-1 items-center gap-4">
                        <div class="">
                            <img src="{{ asset('asset/images/total-diterima.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1>Total Diterima</h1>
                            <span class="text-2xl font-bold">120</span>
                        </div>
                    </div>
                </div>
                <div class="py-4 w-full md:w-fit px-6 bg-white rounded-xl">
                    <div class="flex flex-1 items-center gap-4">
                        <div class="">
                            <img src="{{ asset('asset/images/total-ditolak.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1>Total Ditolak</h1>
                            <span class="text-2xl font-bold">20</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input flex flex-col gap-3 pt-4">
            <h1 class="text-lg md:text-xl font-bold">Kelola Pendaftar</h1>
            <div class="w-full md:w-96 relative">
                <img class="absolute top-[50%] translate-y-[-50%] left-3 md:left-7"
                    src="{{ asset('asset/images/search-icon.svg') }}" alt="">
                <input class="w-full pl-10 md:pl-14 py-2 md:py-5 rounded-xl border" type="text"
                    placeholder="Objek Wisata">
            </div>
            <div class="flex gap-5">
                <div class="flex flex-1 flex-col gap-2">
                    <h1 class="text-sm md:text-lg font-normal text-slate-400">Saring berdasarkan Tanggal</h1>
                    <div class="relative">
                        <select class="w-full pl-7 pr-5 py-2 md:py-5 rounded-xl border appearance-none">
                            <option value="Hari ini" selected>Hari ini</option>
                        </select>
                        <img class="absolute w-5 top-[50%] translate-y-[-50%] right-5 pointer-events-none"
                            src="{{ asset('asset/images/down-arrow.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex flex-1 flex-col gap-2">
                    <h1 class="text-sm md:text-lg font-normal text-slate-400">Sortir dengan status</h1>
                    <div class="relative">
                        <select class="w-full pl-7 pr-5 py-2 md:py-5 rounded-xl border appearance-none">
                            <option value="Ditolak" selected>Ditolak</option>
                        </select>
                        <img class="absolute w-5 top-[50%] translate-y-[-50%] right-5 pointer-events-none"
                            src="{{ asset('asset/images/down-arrow.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="table-data flex flex-col gap-3 pt-4 w-full overflow-scroll lg:overflow-hidden">
            <table class=" bg-white rounded-xl table-auto">
                <thead class="border-b-2">
                    <tr class="">
                        <td>Nama Pendaftar</td>
                        <td>Objek Wisata</td>
                        <td>Status</td>
                        <td>Waktu Daftar</td>
                        <td>Data Pendaftar</td>
                        <td>Seleksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ariana Amelia R.</td>
                        <td>Dieng</td>
                        <td>Menunggu Verifikasi</td>
                        <td>25/05/2023</td>
                        <td><a href="#" class="underline">Lihat disini</a></td>
                        <td class="flex gap-2">
                            <button
                                class="px-2 py-1 transition-all ease-in-out bg-danger hover:bg-danger/85 text-white rounded-md">Tolak</button>
                            <button data-toggle="modal" type="button"
                                class="px-2 py-1 transition-all ease-in-out bg-success hover:bg-success/85 text-white rounded-md">Diterima</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Nazwa Tazkia Kirana</td>
                        <td>Fun Land Bandung</td>
                        <td>Menunggu Verifikasi</td>
                        <td>25/05/2023</td>
                        <td><a href="#" class="underline">Lihat disini</a></td>
                        <td class="flex gap-2">
                            <button
                                class="px-2 py-1 transition-all ease-in-out bg-danger hover:bg-danger/85 text-white rounded-md">Tolak</button>
                            <button data-toggle="modal" type="button"
                                class="px-2 py-1 transition-all ease-in-out bg-success hover:bg-success/85 text-white rounded-md">Diterima</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Fariz Prima</td>
                        <td>Museum Membaca</td>
                        <td>Menunggu Verifikasi</td>
                        <td>25/04/2023</td>
                        <td><a href="#" class="underline">Lihat disini</a></td>
                        <td class="flex gap-2">
                            <button
                                class="px-2 py-1 transition-all ease-in-out bg-danger hover:bg-danger/85 text-white rounded-md">Tolak</button>
                            <button data-toggle="modal" type="button" id="success"
                                class="px-2 py-1 transition-all ease-in-out bg-success hover:bg-success/85 text-white rounded-md">Diterima</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Alifran Akmal R.</td>
                        <td>Playground Nature</td>
                        <td>Ditolak</td>
                        <td>25/05/2023</td>
                        <td><a href="#" class="underline">Lihat disini</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    {{-- Modal Dialog --}}
    <div role="dialog" id="modal-example" aria-hidden="false" style="display: flex;"
        class="modal fixed top-0 left-0 z-50 w-screen h-screen bg-black/30 flex items-center flex-col justify-center p-6 fade"
        tabindex="-1">

        <div class="absolute top-0 left-0 z-[0] w-full h-full" tabindex="-1"></div>

        <article class="modal-content flex flex-col relative m-0 rounded-md bg-white sm:my-16"
            aria-labelledby="modal-title" aria-describedby="modal-body">
            <main class="relative flex-[1_1_auto] p-6" style="--size: 32rem">
                <div class="flex justify-center h-32 relative">
                    <img class="w-20" src="{{ asset('asset/images/success-icon.svg') }}" alt="">
                    <img class="absolute animate-ping" src="{{ asset('asset/images/success-icon-bg.svg') }}"
                        alt="">
                </div>
                <p class="text-2xl font-bold">Berhasil Menerima Objek Wisata</p>
            </main>
            <footer class="flex flex-wrap items-center justify-end flex-row p-4 gap-1">
                <button type="button"
                    class="w-full flex items-center justify-center px-4 py-3 font-medium bg-primary text-white rounded-md hover:bg-primary/85 transition-all duration-300"
                    data-dismiss="modal">
                    <span class="flex items-center justify-center space-x-2">Kembali</span>
                </button>
            </footer>
        </article>
    </div>

    <script>
        const buttonClose = document.querySelectorAll('[data-dismiss="modal"]')
        const modal = document.querySelector('.modal')
        const trigger = document.querySelector('[data-toggle="modal"]')



        // Static backdrop

        function getStaticClass(modal) {
            modal.classList.add('astroui-modal-static')
            document.body.style.overflow = 'hidden'
            document.body.classList.add('astroui-modal-open')
            setTimeout(() => {
                modal.classList.remove('astroui-modal-static')
            }, 100)
        }

        // Show modal

        function showModal(modal) {
            modal.style.display = 'flex'
            setTimeout(() => {
                modal.classList.add('show')
            }, 100)
            modal.setAttribute('aria-hidden', 'false')
            document.body.style.overflow = 'hidden'
            document.body.classList.add('astroui-modal-open')
        }


        // Remove modal

        function dismissModal(modal) {
            modal.classList.remove('show')
            setTimeout(() => {
                modal.style.display = 'none'
            }, 200)
            modal.setAttribute('aria-hidden', 'true')
            document.body.style.overflow = ''
            document.body.classList.remove('astroui-modal-open')
        }

        dismissModal(modal)

        //
        // Function on dismissing modal by button close

        const getDismiss = (buttonClose, modal) => {
            buttonClose.addEventListener('click', () => {
                dismissModal(modal)
            })
        }

        buttonClose.forEach((buttonClose) => {
            getDismiss(buttonClose, modal)
        })


        // Open modal

        trigger.addEventListener('click', () => {
            showModal(modal)
        })

        // Close modal with press escape

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && modal.classList.contains('show')) {
                dismissModal(modal)
            }

        })
    </script>
</body>

</html>
