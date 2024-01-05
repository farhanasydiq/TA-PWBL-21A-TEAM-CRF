"use client"
/* eslint-disable @next/next/no-img-element */
import type { Metadata } from 'next'
// import { Inter } from 'next/font/google'
// import './styles/globals.css'

// panggil file "styles.module.css"
import style from "./styles/style.module.css";

// panggil file tailwind
import "tailwindcss/tailwind.css"
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
          {/* <img src="./images/logo.png" alt="logo" /> */}
        </header>

        <ul>
          <li><Link href="/">Home</Link></li>
          <li><Link href="/dashboard">Dashboard</Link></li>
          <li><Link href="/setting">Setting</Link></li>
          <li><Link href="/calculator">Calculator</Link></li>
          <li><Link href="/search">Search</Link></li>
        </ul>
        
        <section className={`${style.content} ${style.content_bg}`}>
        {children}
        </section>
        
        <footer className={style.footer}>&copy; 2023 - PWBL | TI 21A</footer>
      </body>

    </html>
  )
}
