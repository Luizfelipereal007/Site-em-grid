<?php

class UsuarioModel {

    private $usuarios = [
        [
            'id' => 1,
            'nome' => 'João Silva',
            'email' => 'joao.silva@email.com',
            'telefone' => '(11) 99999-0001',
            'dataNascimento' => '1990-01-15',
            'cpf' => '123.456.789-01'
        ],
        [
            'id' => 2,
            'nome' => 'Maria Oliveira',
            'email' => 'maria.oliveira@email.com',
            'telefone' => '(11) 99999-0002',
            'dataNascimento' => '1985-02-20',
            'cpf' => '123.456.789-02'
        ],
        [
            'id' => 3,
            'nome' => 'Carlos Souza',
            'email' => 'carlos.souza@email.com',
            'telefone' => '(11) 99999-0003',
            'dataNascimento' => '1992-03-25',
            'cpf' => '123.456.789-03'
        ],
        [
            'id' => 4,
            'nome' => 'Ana Lima',
            'email' => 'ana.lima@email.com',
            'telefone' => '(11) 99999-0004',
            'dataNascimento' => '1995-04-10',
            'cpf' => '123.456.789-04'
        ],
        [
            'id' => 5,
            'nome' => 'Pedro Santos',
            'email' => 'pedro.santos@email.com',
            'telefone' => '(11) 99999-0005',
            'dataNascimento' => '1988-05-30',
            'cpf' => '123.456.789-05'
        ],
        [
            'id' => 6,
            'nome' => 'Juliana Costa',
            'email' => 'juliana.costa@email.com',
            'telefone' => '(11) 99999-0006',
            'dataNascimento' => '1991-06-12',
            'cpf' => '123.456.789-06'
        ],
        [
            'id' => 7,
            'nome' => 'Lucas Almeida',
            'email' => 'lucas.almeida@email.com',
            'telefone' => '(11) 99999-0007',
            'dataNascimento' => '1994-07-05',
            'cpf' => '123.456.789-07'
        ],
        [
            'id' => 8,
            'nome' => 'Fernanda Rocha',
            'email' => 'fernanda.rocha@email.com',
            'telefone' => '(11) 99999-0008',
            'dataNascimento' => '1990-08-21',
            'cpf' => '123.456.789-08'
        ],
        [
            'id' => 9,
            'nome' => 'Ricardo Mendes',
            'email' => 'ricardo.mendes@email.com',
            'telefone' => '(11) 99999-0009',
            'dataNascimento' => '1987-09-09',
            'cpf' => '123.456.789-09'
        ],
        [
            'id' => 10,
            'nome' => 'Camila Nogueira',
            'email' => 'camila.nogueira@email.com',
            'telefone' => '(11) 99999-0010',
            'dataNascimento' => '1993-10-14',
            'cpf' => '123.456.789-10'
        ],
        [
            'id' => 11,
            'nome' => 'Eduardo Ramos',
            'email' => 'eduardo.ramos@email.com',
            'telefone' => '(11) 99999-0011',
            'dataNascimento' => '1989-11-17',
            'cpf' => '123.456.789-11'
        ],
        [
            'id' => 12,
            'nome' => 'Bianca Ferreira',
            'email' => 'bianca.ferreira@email.com',
            'telefone' => '(11) 99999-0012',
            'dataNascimento' => '1996-12-22',
            'cpf' => '123.456.789-12'
        ],
        [
            'id' => 13,
            'nome' => 'Gustavo Teixeira',
            'email' => 'gustavo.teixeira@email.com',
            'telefone' => '(11) 99999-0013',
            'dataNascimento' => '1986-01-08',
            'cpf' => '123.456.789-13'
        ],
        [
            'id' => 14,
            'nome' => 'Larissa Carvalho',
            'email' => 'larissa.carvalho@email.com',
            'telefone' => '(11) 99999-0014',
            'dataNascimento' => '1997-02-26',
            'cpf' => '123.456.789-14'
        ],
        [
            'id' => 15,
            'nome' => 'Marcos Antunes',
            'email' => 'marcos.antunes@email.com',
            'telefone' => '(11) 99999-0015',
            'dataNascimento' => '1984-03-18',
            'cpf' => '123.456.789-15'
        ]
    ];

    public function listar() {
        return $this->usuarios;
    }

    public function buscarPorId($id) {
        foreach ($this->usuarios as $usuario) {
            if ($id == $usuario['id']) {
                return $usuario;
            }
        }

        return NULL;
    }

}