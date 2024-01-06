"use client"
import React, { useState } from 'react'
import Result from './result'
    
export default function Search() {
    const[query, setQuery] = useState('')

    const onSearch=(e:any)=>{
        e.preventDefault()
        const inputQuery = e.target[0].value;
        setQuery(inputQuery)
    }

  return (
    <div>
        <form onSubmit={onSearch} className='w-full flex space-x-3 mt-5'>
            <input className='bg-zinc-100 w-5/6 px-3' placeholder='Cari User' />
            <button className='bg-blue-600 text-white w-1/6 py-2 rounded-md'>Cari Orang</button>
        </form>
        {query && <Result query={query} />}
        
    </div>
  )
}
