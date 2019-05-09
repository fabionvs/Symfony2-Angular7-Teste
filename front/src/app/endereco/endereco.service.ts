import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import { Observable } from  'rxjs';
import {Endereco} from "./endereco";

@Injectable({
  providedIn: 'root'
})
export class EnderecoService {

  uri = 'http://127.0.0.1:8000/api/endereco';

  constructor(private http: HttpClient) {
  }

  getEnderecos(): Observable<Endereco[]> {
    return this.http.get<Endereco[]>(`${this.uri}`);
  }

  createEndereco(endereco: Endereco): Observable<Endereco>{
    return this.http.post<Endereco>(`${this.uri}`, endereco);
  }
}
