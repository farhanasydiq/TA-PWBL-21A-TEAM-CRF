import React, { Suspense } from 'react'
import RepoList from './repository'

async function getDataUser(param:string) {
  const res = await fetch(`https://api.github.com/users/${param}`)
  return res.json()
}


export default async function DetailCari({params}:{params:{slug:string}}) {
  const dataUser = await getDataUser(params.slug)

  return (
    
    <div>
      <header className="bg-white shadow">
    <div className="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 className="text-2xl font-bold tracking-tight text-gray-900">Profile</h1>
    </div>
  </header>
  <main>
    <div className="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      
    </div>
  </main>

      <p>Detail User : {params.slug}</p>
      <div>
        {JSON.stringify(dataUser)}
      </div>

    <div style={{marginTop:"10px"}}>
      <Suspense fallback = {<div>Sedang mengambil data....</div>}>
        {/* @ts-igmore */}
        <RepoList slug={params.slug}/>
      </Suspense>
      </div>
      
    </div>
  )
}
