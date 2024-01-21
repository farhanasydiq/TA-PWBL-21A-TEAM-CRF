import React from 'react'

export default function Registration() {
  return (
    <div>
        <div className="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div className="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 className="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign Up</h2>
  </div>

  <div className="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form className="space-y-6" action="#" method="POST">
      <div>
        <label htmlFor="email" className="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
        <div className="mt-2">
          <input id="name" name="name" type="name" autoComplete="name" required className="block w-full border-2 border-gray-300 px-3 py-1.5  rounded-md outline-nonering-1 ring-inset ring-gray-300  hover:border-sky-700"/>
        </div>
      </div>

      <div>
        <label htmlFor="email" className="block text-sm font-medium leading-6 text-gray-900">Email</label>
        <div className="mt-2">
          <input id="email" name="email" type="email" autoComplete="email" required className="block w-full border-2 border-gray-300 px-3 py-1.5  rounded-md outline-nonering-1 ring-inset ring-gray-300  hover:border-sky-700"/>
        </div>
      </div>

      <div>
        <label htmlFor="email" className="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div className="mt-2">
          <input id="email" name="email" type="email" autoComplete="email" required className="block w-full border-2 border-gray-300 px-3 py-1.5  rounded-md outline-nonering-1 ring-inset ring-gray-300  hover:border-sky-700"/>
        </div>
      </div>

      <div>
        <div className="flex items-center justify-between">
          <label htmlFor="password" className="block text-sm font-medium leading-6 text-gray-900">Password</label>
        </div>
        <div className="mt-2">
          <input id="password" name="password" type="password" autoComplete="current-password" required className="block w-full border-2 border-gray-300 px-3 py-1.5  rounded-md outline-nonering-1 ring-inset ring-gray-300 hover:border-sky-700 sm:text-sm sm:leading-6"/>
        </div>
      </div>

        <div>
        <div className="flex items-center justify-between">
          <label htmlFor="password" className="block text-sm font-medium leading-6 text-gray-900">Jenis Kelamin</label>
        </div>
        <section className="mt-2">
          <select
            name="" id="cbo_jurusan" className="block w-full border-2 border-gray-300 px-3 py-1.5 rounded-md outline-none hover:border-sky-700" >
            <option value="">Pilih Jurusan Mahasiswa</option>
            <option value="laki laki">laki laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </section>
        </div>

      <div className="">
        <button type="submit" className="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 ">Sign in</button>
      </div>
    </form>

    
  </div>
</div>
    </div>
  )
}
