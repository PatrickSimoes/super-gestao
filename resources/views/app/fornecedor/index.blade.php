<h3>Fornecedor</h3>

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0] ['nome'] }}
    <br>
    Status: {{ $fornecedores[0] ['status'] }} 
    <br>
    CNPJ: {{ $fornecedores[0] ['cnpj'] ?? 'Dado não informado' }}
    <br>
    DDD: {{ $fornecedores[0] ['ddd'] ?? 'Dado não informado' }}
    <hr>
@endisset