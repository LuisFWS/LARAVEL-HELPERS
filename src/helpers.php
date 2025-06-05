<?php

if (!function_exists('formatarCpf')) {
    function formatarCpf($cpf) {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        return substr($cpf, 0, 3) . '.' .
            substr($cpf, 3, 3) . '.' .
            substr($cpf, 6, 3) . '-' .
            substr($cpf, 9, 2);
    }
}

if (!function_exists('formatarCnpj')) {
    function formatarCnpj($cnpj) {
        $cnpj = preg_replace('/[^0-9]/', '', $cnpj);
        return substr($cnpj, 0, 2) . '.' .
            substr($cnpj, 2, 3) . '.' .
            substr($cnpj, 5, 3) . '/' .
            substr($cnpj, 8, 4) . '-' .
            substr($cnpj, 12, 2);
    }
}

if (!function_exists('formatarTelefone')) {
    function formatarTelefone($telefone) {
        $telefone = preg_replace('/[^0-9]/', '', $telefone);
        $len = strlen($telefone);
        if ($len == 11) {
            return '(' . substr($telefone, 0, 2) . ') ' .
                substr($telefone, 2, 5) . '-' .
                substr($telefone, 7);
        }
        return '(' . substr($telefone, 0, 2) . ') ' .
            substr($telefone, 2, 4) . '-' .
            substr($telefone, 6);
    }
}