function calcular() {
    const cantidadInput = document.getElementById('cantidadInput');
    const categoriaSelect = document.getElementById('categoriaSelect');
    const totalInput = document.getElementById('totalInput');
  
    const cantidad = parseInt(cantidadInput.value);
    const categoria = categoriaSelect.value;
  
    let descuento = 0;
    if (categoria === 'estudiante') {
      descuento = 0.8;
    } else if (categoria === 'trainee') {
      descuento = 0.5;
    } else if (categoria === 'junior') {
      descuento = 0.15;
    }
  
    const total = 200 * cantidad * (1 - descuento);
    totalInput.value = total.toFixed(2);
  }
  
  function borrar() {
    const cantidadInput = document.getElementById('cantidadInput');
    const categoriaSelect = document.getElementById('categoriaSelect');
    const totalInput = document.getElementById('totalInput');
  
    cantidadInput.value = '';
    categoriaSelect.selectedIndex = 0;
    totalInput.value = '';
  }