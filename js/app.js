const productos = document.getElementById('lista-productos');

cargarEventListeners();

function cargarEventListeners(){
    productos.addEventListener('click',comprarProducto);    
}

function comprarProducto(e){
    e.preventDefault();
    if(e.target.classList.contains('agregar-carrito')){
        const producto = e.target.parentElement.parentElement.parentElement;
        leerDatosProducto(producto);
    }
}

function leerDatosProducto(producto){
    const informacionProducto = {
        id : producto.querySelector("button").getAttribute("data-id"),
        imagen : producto.querySelector('img').src,
        nombre : producto.querySelector('h5').textContent,
        descripcion : producto.querySelector('.descripcion span').innerHTML,
        precio : producto.querySelector('.precio span').innerHTML,
    };    
    comprobarIdExistente(informacionProducto);    
}

function comprobarIdExistente(producto){
    let productoLS, existe = false;
    productoLS = obtenerProductosLocalStorege();
    if(productoLS.length === 0){
        guardarLocalStorage(producto);
    }
    else{
        productoLS.forEach(function(productoComprobar){
            if(productoComprobar.id == producto.id){
                existe = true;
            }
        });
        if(!existe){
            guardarLocalStorage(producto);
        }
    }
}

function guardarLocalStorage(producto){
    let productos;
    productos = obtenerProductosLocalStorege();
    productos.push(producto);
    console.log(productos);
    localStorage.setItem('productos',JSON.stringify(productos));
}
function obtenerProductosLocalStorege(){
    let productosLS;
    if(localStorage.getItem('productos') == null){
        productosLS = [];
    }
    else{
        productosLS = JSON.parse(localStorage.getItem('productos'));
    }
    return productosLS;
}