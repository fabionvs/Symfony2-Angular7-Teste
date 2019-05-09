import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';
import {RouterModule, Routes} from '@angular/router';
import {AppComponent} from './app.component';
import {ContatoComponent} from './contato/contato.component';
import {EnderecoComponent} from './endereco/endereco.component';
import {ReactiveFormsModule} from '@angular/forms';
import {HttpClientModule, HTTP_INTERCEPTORS} from '@angular/common/http';
import {ContatoService} from "./contato/contato.service";
import { JwtInterceptor, ErrorInterceptor } from './_helpers';
import { LoginComponent } from './login';
import { routing } from './app.routing';

const appRoutes: Routes = [
    {path: '', component: ContatoComponent},
    {path: 'novo-endereco/:id', component: EnderecoComponent},
];

@NgModule({
    declarations: [
        AppComponent,
        ContatoComponent,
        EnderecoComponent,
        LoginComponent
    ],
    imports: [
        BrowserModule,
        ReactiveFormsModule,
        HttpClientModule,
        routing
    ],
    exports: [RouterModule],
    providers: [ContatoService,
        { provide: HTTP_INTERCEPTORS, useClass: JwtInterceptor, multi: true },
        { provide: HTTP_INTERCEPTORS, useClass: ErrorInterceptor, multi: true },
    ],
    bootstrap: [AppComponent]
})
export class AppModule {
}
