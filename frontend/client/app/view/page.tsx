import React from 'react'

export default function ViewPage() {
  return (
    <div>
      {/* area menu */}
      <nav className='flex justify-center mb-5'>
        <button className='mr-2 bg-cyan-500 px-3 py-2 w-40 rounded-full text-white'>Tambah Data</button>
        <button className='ml-2 border-2 border-cyan-500 px-3 py-2 w-40 rounded-full'>Refresh Data</button>
      </nav>

      {/* Area pencarian data */}
      <section>
        <input type="text" name="" id="" 
        placeholder='Cari Data Mahasiswa' className='mr-3 border-2 border-cyan-300 px-3 w-1/5 rounded-full'/>
        <button>Cari Data</button>
      </section>

      {/* area isi data */}
      <table>
        {/* judul tabel */}
        <thead>
          <tr>
            <th>Aksi</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Jurusan</th>
          </tr>
        </thead>
        {/* isi tabel */}
        <tbody>
          <tr>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>E</td>
          </tr>
        </tbody>
      </table>

    </div>
  )
}
