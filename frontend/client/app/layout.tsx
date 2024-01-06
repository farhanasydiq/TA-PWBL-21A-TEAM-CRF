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

  const menuItem=(url:string,title:string, className?:string)=>(
    <div className={`bg-black text-white py-2 px-3 rounded-lg ${className}`}><Link href={url}>{title}</Link></div>

  )

  return (
    <html lang="en">
      <head>
        {/* {tambahkan favicon} */}
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
        <title>Home</title>
      </head>
      <body className="container mx-auto py-5 {style.layout}">
        <header className={style.header}>
          {/* <img src="./images/logo.png" alt="logo" /> */}
        </header>

        <div className='inline-flex  w-full '>
        {menuItem("/", "Home","bg-white text-blue-500 text-lg")}

          <div className='inline-flex space-x-3 justify-end w-full'>
            {menuItem("/dashboard", "Dashboard")}
            {menuItem("/setting", "Setting")}
            {menuItem("/calculator", "Calculator")}
            {menuItem("/search", "Search")}
          </div>
        </div>

        
        
        <section className={`${style.content} ${style.content_bg}`}>
        {children}
        </section>
        
        <footer className={style.footer}>&copy; 2023 - PWBL | TI 21A</footer>
      </body>

    </html>
  )
}
