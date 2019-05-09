import {Routes, RouterModule} from '@angular/router';

import {LoginComponent} from './login';
import {AuthGuard} from './_guards';
import {ContatoComponent} from "./contato/contato.component";
import {EnderecoComponent} from "./endereco/endereco.component";

const appRoutes: Routes = [
    {
        path: '',
        component: ContatoComponent,
        canActivate: [AuthGuard]
    },
    {
        path: 'login',
        component: LoginComponent
    },
    {
        path: 'novo-endereco/:id',
        component: EnderecoComponent,
        canActivate: [AuthGuard]
    },

    // otherwise redirect to home
    {path: '**', redirectTo: ''}
];

export const routing = RouterModule.forRoot(appRoutes);