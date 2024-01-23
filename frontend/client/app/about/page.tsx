import React from 'react'
import Profile from './profile'

export default function About() {
  return (
  <div>

    <div className="lg:flex lg:items-center lg:justify-between bg-gray-50 py-5 px-3 mt-2">
      <div className="min-w-0 flex-1 ">
        <h2 className="text-2xl font-bold leading-7 text-gray-900 text-center sm:truncate sm:text-3xl sm:tracking-tight">About Us</h2>
      </div>
    </div>

    <div>
    <div className="col-lg-8 col-12 mx-auto">
                            <div className="pb-5 mb-5 grid-cols-3">
                                <div className="section-title-wrap mb-4">
                                    <h4 className="section-title">Tentang Bagikan Ceritamu</h4>
                                </div>
                                <div>
                                  
                                <p>Saatnya kamu memiliki akses pada psikolog profesional yang sesuai dengan topik permasalahan yang sedang kamu alami. Bagikan Ceritamu memberikan kebebasan kamu bercerita apapun masalahnya dan bertemu ahlinya untuk mendapat jawaban-jawaban terbaik atas keluh kesahmu tanpa khawatir keamanan, karena setiap informasi data yang kami terima akan kami jaga kerahasiaannya.</p>

                                  <div className=" grid grid-col-2">
                                    <h4>Visi</h4>
                                    <p>Menumbuhkan, merawat dan menjaga rasa kepercayaan diri pada setiap individu bahwa dirinya adalah anugerah terbaik dari Tuhan</p>
                                  </div>

                                  <div className="grid grid-col-2">
                                    <h4>Misi</h4>
                                    <ul>
                                      <li>Memberikan akses layanan psikolog profesional yang mudah dan terjangkau bagi semua kalangan.</li>
                                      <li>Menjadi teman bercerita masalah kesehatan mental yang memberikan keamanan dan kenyamanan.</li>
                                      <li>Menjadi jembatan terjalinnya koneksivitas yang baik antara individu dengan psikolog.</li>
                                    </ul>
                                  </div>


                                </div>
                            </div>
                        </div>
    </div>
     
  </div>
  )
}
