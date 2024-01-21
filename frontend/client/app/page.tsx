import React from 'react'

export default function Home() {
  return (
    <div>
      <div className="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" className="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"/>
        <div className="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
          <div className="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" ></div>
        </div>
        <div className="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
          <div className="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" ></div>
        </div>
        <div className="mx-auto max-w-7xl px-6 lg:px-8">
          <div className="mx-auto max-w-2xl lg:mx-0">
            <h2 className="text-4xl font-bold tracking-tight text-white sm:text-6xl">Website Konseling</h2>
            <p className="mt-6 text-lg leading-8 text-gray-300">Jika ada beberapa dari siswa yang merasa ada masalah di sekolah atau hal yang mengganggu kegiatan belajar kalian. Anda bisa berkonsultasi dengan guru atau psikolog dimana pun dan kapanpun.</p>
          </div>
          <div className="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div className="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
              <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
              <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
              <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
              <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
        </div>
      </div>

      <div className='pt-20 py-5'>
        <h1 className='py-5 text-2xl uppercase font-bold'>Dapat Membantu</h1>
        <ul className='flex items-center '>
          <li className="flex-1 py-5 px-5 mx-5 bg-slate-200 rounded-lg">
            <div className="grid grid-rows-1 place-items-center">
              <div className="min-w-0 flex-auto">
                <p className="text-center text-sm font-bold lg-8 text-gray-900">Aspek Pribadi-Sosial</p>
                <p className="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                <p className="text-center text-sm leading-6 text-gray-900">Guru Biologi</p>
              </div>
            </div>
          </li>
          <li className="flex-1 py-5 px-5 mx-5 bg-slate-200 rounded-lg">
            <div className="grid grid-rows-1 place-items-center ">
              <div className="min-w-0 flex-auto">
                <p className="text-center text-sm font-bold lg-8 text-gray-900">Aspek Belajar</p>
                <p className="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                <p className="text-center text-sm leading-6 text-gray-900">Guru Biologi</p>
              </div>
            </div>
          </li>
          <li className="flex-1 py-5 px-5 mx-5 bg-slate-200 rounded-lg">
            <div className="grid grid-rows-1 place-items-center ">
              <div className="min-w-0 flex-auto">
                <p className="text-center text-sm font-bold lg-8 text-gray-900">Karier</p>
                <p className="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                <p className="text-center text-sm leading-6 text-gray-900">Guru Biologi</p>
              </div>
            </div>
          </li>
          
        </ul>
      </div>

    </div>
  )
}
