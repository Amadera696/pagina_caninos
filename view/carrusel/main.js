var imagenes = [
    'carrusel/imgcarrusel/fondo.jpg',
    'carrusel/imgcarrusel/carrusel2.jpeg',
    'carrusel/imgcarrusel/carrusel3.jpg',
    'carrusel/imgcarrusel/carrusel4.jpeg'
  ];
  var cont = 0;
  
  function carrusel(contenedor) {
    contenedor.addEventListener('click', e => {
      let atras = contenedor.querySelector('.atras'),
        adelante = contenedor.querySelector('.adelante'),
        img = contenedor.querySelector('.imagencarrusel'),
        tgt = e.target;
  
      if (tgt === atras) {
        if (cont > 0) {
          img.src = imagenes[cont - 1];
          cont--;
        } else {
          img.src = imagenes[imagenes.length - 1];
          cont = imagenes.length - 1;
        }
      } else if (tgt === adelante) {
        if (cont < imagenes.length - 1) {
          img.src = imagenes[cont + 1];
          cont++;
        } else {
          img.src = imagenes[0];
          cont = 0;
        }
      }
    });
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    let contenedor = document.querySelector('#contenedor_carrusel');
    carrusel(contenedor);
  });
  