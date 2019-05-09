import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {Contato} from "../contato/contato";
import {ContatoService} from "../contato/contato.service";
import {EnderecoService} from "./endereco.service";
import {Endereco} from "./endereco";
import {ActivatedRoute} from '@angular/router';


@Component({
    selector: 'app-endereco',
    templateUrl: './endereco.component.html',
    styleUrls: ['./endereco.component.css']
})
export class EnderecoComponent implements OnInit {
    enderecos: Endereco[];
    enderecoForm: FormGroup;
    submitted = false;
    contato: Contato;
    responseCreate = false;
    constructor(private formBuilder: FormBuilder, private enderecoService: EnderecoService, private contatoService: ContatoService, private route: ActivatedRoute) {
    }

    ngOnInit() {
        this.getContato(this.route.snapshot.params.id);
        this.enderecoForm = this.formBuilder.group({
            quadra: ['', Validators.required],
            numero: ['', Validators.required],
            obs: ['', [Validators.required]],
            contato: [''],
        });
    }

    getContato(id): void {
        this.contatoService.getContato(id).subscribe((contato: Contato) => {
            this.contato = contato;
        });
    }

    getEnderecos(): void {
        this.enderecoService.getEnderecos().subscribe((enderecos: Endereco[]) => {
            this.enderecos = enderecos;
        });
    }

    get f() {
        return this.enderecoForm.controls;
    }

    onSubmit() {
        this.submitted = true;

        // stop here if form is invalid
        if (this.enderecoForm.invalid) {
            return;
        }
        this.enderecoForm.patchValue({
            contato: this.contato.id
        });
        this.enderecoService.createEndereco(this.enderecoForm.value).subscribe((endereco: Endereco)=>{
            this.responseCreate = true;
            this.enderecoForm.reset();
        });

    }
}
