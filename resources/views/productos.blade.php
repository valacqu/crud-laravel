 <style>
 
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
        border-color: #277642;
        outline: none;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #3b9d3b;
        border: none;
        color: white;
        border-radius: 6px;
        cursor: pointer;
        font-size: 15px;
    }

    button:hover {
        background: #20b459;
    }

    .back {
        margin-top: 10px;
        text-align: center;
    }

    .back a {
        text-decoration: none;
        color: #0d58a2;
    }

    .back a:hover {
        text-decoration: underline;
    }
</style>
<form method="POST" action="/productos">
    @csrf

    <input type="text" name="nombre" placeholder="Nombre del producto" required>

    <input type="number" name="precio" placeholder="Precio" step="0.01" required>

    <button type="submit">Guardar Producto</button>
</form>

<div class="back">
    <a href="/productos">← Volver a la lista</a>
</div>