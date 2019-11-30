<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">

        <title>Learing Vue with Laravel</title>

        
    </head>
    <body class="font-sans">
        <div class="" id="app">
            <div class="container mx-auto " >
                <header class="py-6  mb-8"> 
                    <h1 class="text-3xl">
                        
                        <img src="/images/logo.svg" alt="Laracasts">
                    </h1>
                </header>
                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                               <h5 class="uppercase font-bold mb-3 ">The Brand</h5>

                                <ul>
                                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/" exact>Logo</router-link>  </li> 
                                    <li class="text-sm leading-loose"><router-link class="text-black"  to="/symbol">Logo Symbol</router-link>  </li> 
                                    <li class="text-sm leading-loose"><router-link class="text-black"  to="/colors">Colors</router-link>  </li> 
                                    <li class="text-sm leading-loose"><router-link class="text-black"  to="/typography">Typography</router-link>  </li> 
                                    
                                    
                                  </ul>
                        </section> 
                        
                        
                        <section>
                                <h5 class="uppercase font-bold mb-3">Doodles</h5>
 
                                 <ul>
                                         <li class="text-sm leading-loose"><router-link class="text-black"  to="/mascot">Mascot</router-link>  </li>  
                                         <li class="text-sm leading-loose"><router-link class="text-black"  to="/illustrations">Illustrations</router-link>  </li> 
                                         <li class="text-sm leading-loose"><router-link class="text-black"  to="/animations">Loaders and Animations</router-link>  </li> 
                                         <li class="text-sm leading-loose"><router-link class="text-black"  to="/wallPapers">WallPapers</router-link>  </li> 
                                
                                   </ul>
                         </section>  
                    </aside>
                    <div class="primary  flex-1">
                            <router-view></router-view>
                    </div>
                </main>
                   

            </div>
           
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
