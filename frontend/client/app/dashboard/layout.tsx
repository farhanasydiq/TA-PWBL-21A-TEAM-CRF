import React, { Children } from 'react'

export default function layout({children}:{children:React.ReactNode}) {
  return (
    <div>
        <p className='font-bold'>Pilih Guru yang ingin di ajak Diskusi</p>
    {children}
    </div>
  )
}
