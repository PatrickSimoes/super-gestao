<h3>Fornecedor</h3>

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]) ; $i++)
        Fornecedor: {{ $fornecedores[$i] ['nome'] }}
        <br>
        Status: {{ $fornecedores[$i] ['status'] }} 
        <br>
        CNPJ: {{ $fornecedores[$i] ['cnpj'] ?? 'Dado não informado' }}
        <br>
        DDD: {{ $fornecedores[$i] ['ddd'] ?? 'Dado não informado' }}
        <hr>
    @endfor
@endisset