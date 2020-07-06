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

function eliminarProductoLocalStorage(producto){
    console.log(producto);
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