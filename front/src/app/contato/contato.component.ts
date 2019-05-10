import {Component, OnInit} from '@angular/core';
import {ContatoService} from "./contato.service";
import {Contato} from "./contato";
import {Router} from '@angular/router';

@Component({
    selector: 'app-contato',
    templateUrl: './contato.component.html',
    styleUrls: ['./contato.component.css'],
    providers: [ContatoService]
})
export class ContatoComponent implements OnInit {
    contatos: Contato[];
    dataTable: any;
    editContato: Contato;

    constructor(private contatoService: ContatoService, private router: Router) {
    }

    ngOnInit() {
        this.getContatos();
    }

    getContatos(): void {
        this.contatoService.getContatos().subscribe((contatos: Contato[]) => {
            this.contatos = contatos;
        });
    }

}
