import React from 'react'
import Image from 'next/image'

export default function Home() {
  return (
    <div>
      <div className="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <Image src="/images/cover1.jpeg" width={2830} height={1500} alt="" className="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"/>
        <div className="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
          <div className="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" ></div>
        </div>
        <div className="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
          <div className="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr" ></div>
        </div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="mx-auto max-w-2xl lg:mx-0">
            <h2 className="text-4xl font-bold tracking-tight text-black sm:text-6xl">Website Konseling</h2>
            <p className="mt-6 font-medium text-lg leading-8 text-blue-400">Jika ada beberapa dari siswa yang merasa ada masalah di sekolah atau hal yang mengganggu kegiatan belajar kalian. Anda bisa berkonsultasi dengan guru atau psikolog dimana pun dan kapanpun.</p>
          </div>
          <div className="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">

          </div>
        </div>
      </div>

      <div className='pt-20 py-5'>
        
        <ul className='flex items-center '>
          <li className="flex-1 py-5 px-5 mx-5 bg-blue-300 rounded-lg">
            <div className="grid grid-rows-1 ">
              <div className="min-w-0 flex-auto">
                <span className=" font-medium leading-6 text-gray-900">Waktu yang Fleksibel</span>
                <h4 className="mt-3 text-xl font-bold tracking-tight text-black sm:text-xl">Tersedia Konseling Online dan Offline</h4>
                <p className="mt-5 font-medium leading-6 text-gray-900">Kamu bisa memilih waktu konseling, yang disesuaikan dengan kenyamananmu bercerita.</p>
              </div>
              <div className="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div className="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-black sm:grid-cols-2 md:flex lg:gap-x-10">
              <a href="/layanan ">LEARN MORE <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
            </div>
          </li>
          <li className="flex-1 py-5 px-5 mx-5 bg-blue-300 rounded-lg">
            <div className="grid grid-rows-1 ">
              <div className="min-w-0 flex-auto">
                <span className=" font-medium leading-6 text-gray-900">Para Psikologi Profesional</span>
                <h4 className="mt-3 text-xl font-bold tracking-tight text-black sm:text-xl">Psikologi Profesional</h4>
                <p className="mt-5 font-medium leading-6 text-gray-900">Para Psikolog Terbaik dan Berpengalaman Di Bidangnya</p>
              </div>
              <div className="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div className="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-black sm:grid-cols-2 md:flex lg:gap-x-10">
              <a href="#">LEARN MORE <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
            </div>
          </li>
          <li className="flex-1 py-5 px-5 mx-5 bg-blue-300 rounded-lg">
            <div className="grid grid-rows-1 ">
              <div className="min-w-0 flex-auto">
                <span className=" font-medium leading-6 text-gray-900">Topik Masalah yang Bervariasi</span>
                <h4 className="mt-3 text-xl font-bold tracking-tight text-black sm:text-xl">Pilih Topik Sesuai Kebutuhanmu</h4>
                <p className="mt-5 font-medium leading-6 text-gray-900">Setiap individu memiliki masalah yang berbeda-beda, untuk itu kami sediakan banyak pilihan topik masalah.</p>
              </div>
              <div className="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div className="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-black sm:grid-cols-2 md:flex lg:gap-x-10">
              <a href="#">LEARN MORE <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
            </div>
          </li> 
        </ul>
      </div>

    </div>
  )
}
