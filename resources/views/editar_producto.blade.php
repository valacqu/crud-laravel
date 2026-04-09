<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
        width: 320px;
        box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
    }

    input:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn {
        width: 100%;
        padding: 10px;
        border: none;
        color: white;
        border-radius: 6px;
        cursor: pointer;
        font-size: 15px;
    }

    .btn-actualizar {
        background: #184fbe;
    }

    .btn-actualizar:hover {
        background: #2870b8;
    }

    .back {
        margin-top: 10px;
        text-align: center;
    }

    .back a {
        text-decoration: none;
        color: #2f3133;
    }

    .back a:hover {
        text-decoration: underline;
    }
    .back {
    margin-top: 20px;
    text-align: center;
}

.back a {
    text-decoration: none;
    color: #19589b;
    font-weight: bold;
    font-size: 16px;
}

.back a:hover {
    text-decoration: underline;
}
</style>
<form method="POST" action="/productos/{{ $producto->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" value="{{ $producto->nombre }}" required>

    <input type="number" name="precio" value="{{ $producto->precio }}" step="0.01" required>

    <button class="btn btn-actualizar" type="submit">
        Actualizar Producto
    </button>
    <div class="back">
    <a href="{{ route('productos.index') }}">← Volver a la lista de productos</a>
</div>
</form>