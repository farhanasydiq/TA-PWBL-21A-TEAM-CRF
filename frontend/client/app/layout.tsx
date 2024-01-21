"use client"

// import { Inter } from 'next/font/google'
import './styles/globals.css'

// panggil file "styles.module.css"
import style from "./styles/style.module.css";

// panggil file tailwind
// import "tailwindcss/tailwind.css"
import Link from 'next/link'
import { useRouter } from 'next/navigation';

export default function MainLayout({
  children,
}: {
  children: React.ReactNode
})
  
 {
  const router=useRouter()
  const onClick=(url:string)=>{
    router.push(url)
  }

  

  return (
    <html lang="en">
      <head>
        {/* {tambahkan favicon} */}
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
        <title>Home</title>
      </head>
      <body className={style.layout}>
        <header className={style.header}>
          <div>
          <a href="" className={style.logo}>
                        <h1>Konseling</h1>
                    </a>
          </div>
          <div className='flex flex-1 items-center justify-center sm:items-stretch sm:justify-start'>
          <ul className='flex space-x-4 '>
            <li className='text-gray-600 hover:bg-gray-700 hover:text-white rounded-md ml-10 px-4 py-2 text-sm font-medium'><Link href="/">Home</Link></li>
            <li className='text-gray-600 hover:bg-gray-700 hover:text-white rounded-md px-4 py-2 text-sm font-medium'><Link href="/dashboard">Dashboard</Link></li>
            <li className='text-gray-600 hover:bg-gray-700 hover:text-white rounded-md px-4 py-2 text-sm font-medium'><Link href="/setting">Setting</Link></li>
            <li className='text-gray-600 hover:bg-gray-700 hover:text-white rounded-md px-4 py-2 text-sm font-medium'><Link href="/search">Search</Link></li>
          </ul>

          <div className='flex flex-1 items-center justify-center sm:items-stretch sm:justify-end'>
            <ul className='flex space-x-4'>
              <li className='bg-blue-500 text-black hover:bg-gray-700 hover:text-white rounded-md px-4 py-2 text-sm font-medium'><Link href="/auth/login">Log In</Link></li>
              <li className='bg-blue-500 text-black hover:bg-gray-700 hover:text-white rounded-md px-4 py-2 text-sm font-medium'><Link href="/auth/regis">Registration</Link></li>
            </ul>
          </div>
          </div>
        </header>

        
        
        <section className={`${style.content} ${style.content_bg}`}>
        {children}
        </section>
        
        <footer className={style.footer}>&copy; 2023 - PWBL | TI 21A</footer>
      </body>

    </html>
  )
}
