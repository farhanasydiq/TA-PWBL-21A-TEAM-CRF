import React from 'react'
import Image from 'next/image'

export default function layanan() {
  return (
    <div>
        <div className="py-5 px-5 text-center bg-slate-200">
        <h2 className="font-bold text-xl my-5">
        Ceritakan Keluh Kesahmu Tanpa Batas, 
        Kami akan menjadi Temanmu Bercerita dengan Memberikan Pelayanan Konseling Sepenuh Hati.
        </h2>
            <div className="text-lg text-justify mb-5">
                <p>
                Para Psikolog yang tergabung di bagikanceritamu adalah mereka yang memiliki pengalaman dan wawasan sesuai topik permasalahan. Ketika kamu datang pada kami dengan masalah yang sedang dialami, psikolog kami akan melakukan observasi yang kemudian melakukan pendalaman untuk memahami masalahmu. Sikap yang terbuka, ramah, pendengar dan tutur kata yang baik menjadi prioritas dalam memberikan layanan konseling.
                </p>
            </div>
            <div className="grid gap-4 grid-cols-2 my-7">
                <div className=" grid grid-cols-1">
                    <div className="">
                        <Image src="/images/offline.jpg" width={2830} height={1500} alt="" className="" />
                    </div>
                </div>
                <div className="grid grid-cols-1">
                    <div className="grid">
                        <h2 className="mb-5 mx-5 text-2xl font-bold text-start">Konseling Offline</h2>
                        <p className="text-justify text-lg">
                        Konseling tatap muka dengan para psikolog profesional kami, dapat menciptakan komunikasi yang lebih private dan bercerita dari hati ke hati. 
                        Proses konseling dilakukan di tempat yang telah kami sediakan dengan waktu yang sudah disepakati bersama. Kami akan menyambut kedatanganmu dengan senang hati. 
                        Konseling tatapmuka dapat dilakukan baik secara individu maupun perseorangan.
                        </p>
                    </div>
                </div>
            </div>

            <div className="grid gap-4 grid-cols-2 my-7 ">
                <div className="grid grid-cols-1">
                    <div className="grid">
                        <h2 className="mb-5 mx-5 text-2xl font-bold text-start">Konseling Online</h2>
                        <p className="text-justify text-lg">
                        Dimana saja kamu bisa memulai melakukan konseling dengan psikolog. Jika kamu merasakan sebuah ketidaknyamanan mental yang sampai cukup mengganggu aktivitasmu, namun kamu tidak punya banyak waktu untuk berkonsultasi secara tatap muka, kami memberikan layanan konsultasi daring sesuai waktu yang telah disepakati bersama.

Kami memberikan sebuah gambaran jika kamu mengalami perasaan seperti sedih berlebihan, stres, trauma, dan perilaku menyimpang bermunculan, jangan ditunda untuk berkonsultasi karena hal itu bisa mengurangi produktivitasmu, segeralah melakukan konseling dengan ahlinya, yang dapat memberikanmu sebuah pencerahan.
                        </p>
                    </div>
                </div>
                <div className="flex-1">
                    <div className="grid-cols-2">
                        <Image src="/images/cover.jpg" width={2830} height={1500} alt="" className="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
  )
}
