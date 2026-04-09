<style>
    body {
        font-family: Arial;
        background: #f4f6f9;
        padding: 20px;
    }

    h1 {
        margin-bottom: 20px;
    }

    .btn {
        padding: 8px 12px;
        border: none;
        border-radius: 6px;
        color: white;
        cursor: pointer;
    }

    .btn-agregar {
        background: #28a745;
        margin-bottom: 20px;
    }

    .btn-editar {
        background: #007bff;
    }

    .btn-eliminar {
        background: #dc3545;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .card {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .card h3 {
        margin: 0 0 10px;
    }

    .precio {
        font-size: 18px;
        color: #28a745;
        margin-bottom: 10px;
    }

    .acciones {
        display: flex;
        gap: 10px;
    }
</style>
<h1>Productos</h1>

<a href="{{ route('productos.create') }}">
    <button class="btn btn-agregar">+ Agregar Producto</button>
</a>

<form method="GET" action="{{ route('productos.index') }}" style="margin: 20px 0;">
    <input type="text" name="buscar" placeholder="Buscar producto">
    <button type="submit">Buscar</button>
</form>

<div class="container">

    @foreach($productos as $producto)

    <div class="card">
        <h3>{{ $producto->nombre }}</h3>

        <div class="precio">
            ${{ $producto->precio }}
        </div>

    <p>Creado por: {{ $producto->user->name ?? 'Sin usuario' }}</p>

        <div class="acciones">
            <a href="/productos/{{ $producto->id }}/edit">
                <button class="btn btn-editar">Editar</button>
            </a>

            <form method="POST" action="/productos/{{ $producto->id }}">
                @csrf
                @method('DELETE')

                <button class="btn btn-eliminar"
                    onclick="return confirm('¿Eliminar producto?')">
                    Eliminar
                </button>
            </form>

        </div>
    </div>

    @endforeach

</div>