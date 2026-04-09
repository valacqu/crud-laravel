 <style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f6fa;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .container {
        max-width: 700px;
        margin: auto;
    }

    .btn-crear {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 15px;
        background: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .producto {
        background: white;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .info {
        font-size: 16px;
    }

    .acciones a {
        margin-right: 10px;
        text-decoration: none;
        font-weight: bold;
    }

    .editar {
        color: blue;
    }

    .eliminar {
        background: red;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<div class="container">
    <h1>Productos</h1>

    <a href="{{ route('productos.create') }}" class="btn-crear">
        ➕ Crear producto
    </a>

    <!-- BUSCADOR -->
    <form method="GET" action="{{ route('productos.index') }}" style="margin: 20px 0;">
        <input 
            type="text" 
            name="buscar" 
            placeholder="Buscar producto"
            value="{{ request('buscar') }}"
        >
        <button type="submit">Buscar</button>
    </form>

    
    @foreach($productos as $producto)
        <div class="producto">
            
            <div class="info">
                <h3>{{ $producto->nombre }}</h3>
                <p>${{ $producto->precio }}</p>
                <p>Creado por: {{ $producto->user->name ?? 'Sin usuario' }}</p>
            </div>

            <div class="acciones">
                <a href="{{ route('productos.edit', $producto->id) }}" class="editar">
                    Editar
                </a>

                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="eliminar">Eliminar</button>
                </form>
            </div>

        </div>
    @endforeach
</div>