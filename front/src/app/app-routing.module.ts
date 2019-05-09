import {NgModule} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';
import {ContatoComponent} from "./contato/contato.component";
import {EnderecoComponent} from "./endereco/endereco.component";

const routes: Routes = [
    {path: '', component: ContatoComponent},
    {path: 'novo-endereco', component: EnderecoComponent},
];
;

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})
export class AppRoutingModule {
}
