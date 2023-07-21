<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('produto.index') }}">
            <i class="fa-solid fa-eye"></i>
            Todos os produtos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}">
            <i class="fa-solid fa-pen-to-square"></i>
            Editar
        </a>
    </li>

</ul>
