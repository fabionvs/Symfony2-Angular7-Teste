import {Contato} from "../contato/contato";

export interface Endereco {
    id: number;
    quadra: string;
    numero: number;
    obs: string;
    contato: Contato;
}
