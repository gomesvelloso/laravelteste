<h3>Fornecedor (View)</h3>

{{-- Aqui é um comentário utilizando blade --}}
{{'Usando texto através do blade'}}
@php
echo "<br/>Aqui é php puro através do blade."
@endphp

@if(count($fornecedores)>0 && count($fornecedores)<10)
    <h3>Existem alguns forncedores</h3>
@elseif(count($fornecedores)>=10)
    <h3>Existem vários forncedores</h3>
@else
    <h3>Nenhum fornecedor cadastrado</h3>
@endif

@unless(count($fornecedores)<5)
    <p><h3>A Listagem de forncedores tem mais 5 fornecedores</h3></p>
@endunless

<!--
Se quiser escapar a impressao da variavel no blade, basta adicionar o @ antes da interpolação.
-->
Nome: @{{$nome}}

@isset($fornecedores)
    @for($i=0; $i<count($fornecedores); $i++)
        <br/>Nome {{$fornecedores[$i]["nome"] }}
        <br/>CNPJ {{$fornecedores[$i]["cnpj"] }}
        <br/>Status {{$fornecedores[$i]["status"] }}
        <br/>DDD {{ $fornecedores[$i]["ddd"] ?? ''  }}
        <br/>TEL {{ $fornecedores[$i]["telefone"] ?? ''  }}
        <br/>
        @switch($fornecedores[$i]["ddd"])
            @case('21')
                Rio de Janeiro
                @break
            @case('11')
                São Paulo
                @break
            @default
                DDD Não informado
        @endswitch
        <hr/>
    @endfor
@endisset

<br/> USANDO WHILE <br/>

@isset($fornecedores)
    @php
        $i=0
    @endphp
    @while($i < count($fornecedores))
        <br/>Nome {{$fornecedores[$i]["nome"] }}
        <br/>CNPJ {{$fornecedores[$i]["cnpj"] }}
        <br/>Status {{$fornecedores[$i]["status"] }}
        <br/>DDD {{ $fornecedores[$i]["ddd"] ?? ''  }}
        <br/>TEL {{ $fornecedores[$i]["telefone"] ?? ''  }}
        <br/>
        @switch($fornecedores[$i]["ddd"])
            @case('21')
                Rio de Janeiro
                @break
            @case('11')
                São Paulo
                @break
            @default
                DDD Não informado
        @endswitch
        <hr/>
        @php $i++ @endphp
    @endwhile
@endisset

<br/> USANDO FOREACH <br/>
@isset($fornecedores)
    @foreach($fornecedores as $a)
        <br/>Nome {{$a["nome"] }}
        <br/>CNPJ {{$a["cnpj"] }}
        <br/>Status {{$a["status"] }}
        <br/>DDD {{ $a["ddd"] ?? ''  }}
        <br/>TEL {{ $a["telefone"] ?? ''  }}
        <br/>
        @switch($a["ddd"])
            @case('21')
                Rio de Janeiro
                @break
            @case('11')
                São Paulo
                @break
            @default
                DDD Não informado
        @endswitch
        <hr/>
        @php $i++ @endphp
    @endforeach
@endisset
<br/> USANDO FORELSE <br/>
@isset($fornecedores)
    @forelse($fornecedores as $a)
        <br/>Numero de Iteração: {{$loop->iteration}}
        @if($loop->first)
            <br/>Primeira
        @elseif($loop->last)
            <br/>Ultima
            <br/>Total de Registros {{$loop->count}}
        @endif
        <br/>Nome {{$a["nome"] }}
        <br/>CNPJ {{$a["cnpj"] }}
        <br/>Status {{$a["status"] }}
        <br/>DDD {{ $a["ddd"] ?? ''  }}
        <br/>TEL {{ $a["telefone"] ?? ''  }}
        <br/>
        @switch($a["ddd"])
            @case('21')
                Rio de Janeiro
                @break
            @case('11')
                São Paulo
                @break
            @default
                DDD Não informado
        @endswitch
        <hr/>
        @php $i++ @endphp
        
    @empty
        Nenhum forncedor na base de dados.
    @endforelse
@endisset
@dd($fornecedores)
