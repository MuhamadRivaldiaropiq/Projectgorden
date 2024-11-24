<x-app-layout>

    <section class="max-w-[31rem] mx-auto bg-white shadow-2xl">
        <div class="w-56 mt-20 mx-auto">
            <img src="/images/logo.png" alt="">
            {{-- <img src="{{ ('images/' . $de->image) }}" alt=""> --}}
        </div>
        <div>
            <div class="text-center mt-3 text-lg tracking-tighter uppercase font-bold">Jasa Pasang Gorden di Bandung terpecaya</div>
            <div class="text-center text-base mt-7 mb-3">Salah satu hal yang membuat Jasa gorden di Bandung menonjol adalah kualitas dan keahlian dalam pekerjaan kami.</div>
            <div class="text-center">Dengan menggunakan tenaga kerja yang terampil, kami dapat memberikan hasil yang memuaskan kepada pelanggan.</div>
            <div class="flex justify-center mt-10">
                <button href="#" class="px-5 py-2 rounded-sm mb-16 flex justify-center bg-blue-900 text-base font-semibold text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp mr-2 my-auto" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                  </svg>Hubungi Kami</button>
            </div>
        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L120,122.7C240,149,480,203,720,192C960,181,1200,107,1320,69.3L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> --}}
    <main class="mx-auto bg-blue-400 shadow-2xl pt-5">
        <div>
            <div class="text-center uppercase mt-7 my-7 text-xl font-semibold">Layanan Kami</div>
            <hr class="w-28 bg-black h-1 mx-auto -mt-3">
        </div>
        <div class="grid grid-cols-1 grid-rows-3 gap-5 p-5">
           <div class="bg-white p-3 flex rounded-lg">
            <img src="/images/produk3.jpeg" alt="" class="w-40">
            <div class="ml-4 my-auto">
                <div class="text-lg font-semibold">{{ $data->judul_card }}</div>
                <div class="text-base">{{ $data->isi_card }}</div>
            </div>
           </div>
        </div>
        <div class="flex justify-center mt-10">
            <button href="#" class="px-5 py-2 rounded-sm mb-7 flex bg-blue-900 text-base font-semibold text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp mr-2 my-auto" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
              </svg>Hubungi Kami</button>
        </div>
        <div>
            <div class="text-center uppercase mt-7 my-7 text-xl font-semibold">Galeri Kami</div>
            <hr class="w-28 bg-black h-1 mx-auto -mt-3">
        </div>
        <div class="grid grid-cols-3 grid-rows-4 gap-3 p-5">
            <div>
                <img src="/images/p1.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p2.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p3.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p3.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p6.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p6.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p7.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p8.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p9.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p10.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p11.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
            <div>
                <img src="/images/p12.jpeg" alt="" class="w-full h-48 rounded-md">
            </div>
        </div>
        <div class="flex justify-center mt-16 mb-16">
            <button href="#" class="px-5 py-2 rounded-sm bg-blue-900 mb-10 flex text-base font-semibold text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp mr-2 my-auto" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
              </svg>Hubungi Kami</button>
        </div>
    </main>
    <main class="mx-auto bg-white shadow-2xl">
        <div class="text-center">
            <div class="text-xl tracking-tighter font-bold mt-10">Sedang Membutuhkan Jasa Gorden di Bandung?</div>
            <hr class="w-20 bg-black h-1 mx-auto mt-5">
            <div class="text-base mt-6 mb-6"><span class="text-blue-500">Jasa Gorden di Bandung </span>menyediakan solusi kreatif dan </br> terpercaya untuk Custom Gorden Agar sesuai dengan kebutuhan </br> dan keinginan Anda.</div>
            <div class="text-base">Dengan beragam layanan yang ditawarkan dan kualitas kerja </br> yang tinggi. </div>
        </div>
        <div class="grid grid-cols-2 gap-5 p-2 text-center mt-10">
            <a href="#" class="px-5 py-2 rounded-sm mb-7  bg-blue-900 text-base flex justify-center font-semibold text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill mr-2 my-auto" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
              </svg>Telepon</a>
            <a href="#" class="px-5 py-2 rounded-sm mb-7 flex justify-center bg-blue-900 text-base font-semibold text-white">Whatsapp<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp ml-2 my-auto" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
              </svg></a>
        </div>
    </main>
</section>
</x-app-layout>