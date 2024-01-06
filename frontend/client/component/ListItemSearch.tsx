import Link from "next/link";
import Image from "next/image";


interface Props{
    name:string;
    imageUrl:string;
    reposUrl:string;
}

const ListItemSearch=({name,imageUrl,reposUrl}:Props)=>{
    return <div className="inline-flex w-full space-x-3 py-3">
                <Image alt={"img"} src={imageUrl} width={60} height={60} className="rounded-full border-2 border-zinc-200"/>
                <div>
                <p className="text-lg font-bold"><Link href={`/search/${name}`}>{name}</Link></p>
                <p className="text-sm hover:text-blue-500 text-zinc-200"><Link href={reposUrl}>Lihat Repo</Link></p>
                </div>
                
    
            </div>
}

export default ListItemSearch