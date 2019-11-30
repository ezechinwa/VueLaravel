import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'
import Colors from './components/Colors'
import Typography from './components/Typography'

import Mascot from './components/Mascot'
import WallPapers from './components/WallPapers'
import Animations from './components/Animations'
import Illustrations from './components/Illustrations'

export default {
    mode: 'history',
    linkActiveClass: "font-bold",
    routes: [
        {
             path: '/',
             component : Logo
        },
        {
            path: '/symbol',
            component : LogoSymbol
       },
       {
        path: '/colors',
        component : Colors
   }, {
    path: '/typography',
    component : Typography
},
{
    path: '/mascot',
    component : Mascot
},
{
   path: '/wallPapers',
   component : WallPapers
},
{
path: '/animations',
component : Animations
}, {
path: '/illustrations',
component : Illustrations
},
    ]
}