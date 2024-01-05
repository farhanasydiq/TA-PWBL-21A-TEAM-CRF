import React, { Children } from 'react'

export default function layout({children}:{children:React.ReactNode}) {
  return (
    <div>
        <p>ini layout khusus dashboard</p>
    {children}
    </div>
  )
}
