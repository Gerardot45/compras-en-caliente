const listaProductos = document.getElementById('lista-productos-agregados');
const listaProductosMostrados = document.getElementById('lista-productos-agregados');
cargarEventListeners();

function cargarEventListeners(){    
    document.addEventListener('DOMContentLoaded',leerLocalStorage);
    listaProductos.addEventListener('click',borrarElemento);
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
function leerLocalStorage(){
    let productosLS;
    productosLS = obtenerProductosLocalStorege();   
    productosLS.forEach(function(producto){
        const columna = document.createElement('ul');
        columna.setAttribute('class','list-group');
        columna.setAttribute('id','lista-productos-mostrados');
        columna.innerHTML = `<li class="list-group-item">
                                <div class="row">                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <form method="GET" action="./pagar_producto.php">                                    
                                                <p>Nombre del producto : ${producto.nombre}</p>
                                                <p>Precio : ${producto.precio}</p>
                                                <!--<button class="btn btn-primary">Comprar producto</button>-->                                                
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="float-right">                                            
                                            <input type="button" onclick="$(location).attr('href','pagar_producto.php?id_producto=${producto.id}');" class="btn btn-primary" value="Comprar producto"/>                                                
                                            <button class="btn btn-danger borrar-elemento" data-id="${producto.id}">Quitar de la lista</button>
                                        </div>
                                    </div>                                    
                                </div>
                             </li>`;
        listaProductos.appendChild(columna);
    });
}

function borrarElemento(e){
    let producto, producto_id;
    if(e.target.classList.contains('borrar-elemento')){
        e.target.parentElement.parentElement.parentElement.parentElement.remove();
        producto = e.target.parentElement.parentElement.parentElement.parentElement;
        producto_id = producto.querySelector('button').getAttribute("data-id");                
    }    
    eliminarProductoLocalStorage(producto_id);
}

function eliminarProductoLocalStorage(producto){
    let productosLS;
    let bandera = false;
    productosLS = obtenerProductosLocalStorege();

    productosLS.forEach(function(productoLS,index){
        if(productoLS.id === producto){
            productosLS.splice(index,1);
            bandera = true;            
        }        
        if(bandera){
            return;
        }
    });

    localStorage.setItem("productos",JSON.stringify(productosLS));
}