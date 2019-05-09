import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { Observable } from  'rxjs';
import {Contato} from "./contato";

@Injectable({
    providedIn: 'root'
})
export class ContatoService {

    uri = 'http://127.0.0.1:8000/api/contatos';

    constructor(private http: HttpClient) {
    }

    getContatos(): Observable<Contato[]> {
        return this.http.get<Contato[]>(`${this.uri}`);
    }

    getContato(id): Observable<Contato> {
        return this.http.get<Contato>(`${this.uri}/${id}`);
    }

}
