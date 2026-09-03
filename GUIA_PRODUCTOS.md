
## ➕ Cómo Agregar Más Productos

1. Copia el código completo de un producto (ver estructura arriba)
2. Pégalo después del último producto
3. Cambia todos los valores (imagen, nombre, descripción, precio)
4. ¡Listo! El nuevo producto aparecerá automáticamente

**Nota:** Los productos se distribuyen automáticamente en filas de 3 en pantallas grandes y se adaptan a pantallas más pequeñas.

---

## 🎨 Colores y Estilos

Los colores están definidos en `style.css`. Los principales son:
- **Color rosa principal:** `#d44b80`
- **Degradado:** De `#ffb6c9` (rosa claro) a `#ff6f9f` (rosa oscuro)
- **Fondo:** `#fff5f8`

Si quieres cambiar los colores de todos los productos, edita `style.css` y busca `.card-producto`.

---

## 🔧 JavaScript - Personalizar la Acción del Botón

Actualmente, cuando un cliente hace clic en "Seleccionar", aparece una alerta. 

Si quieres cambiar esto, edita la función `agregarProducto()` al final del archivo HTML:

```javascript
function agregarProducto(nombre, precio) {
  alert(`✓ ${nombre} agregado a tu carrito!\nPrecio: ${precio}`);
  // Aquí puedes agregar más lógica
}
```

**Ideas para personalizar:**
- Guardar en un carrito (localStorage)
- Abrir un formulario de contacto
- Redirigir a WhatsApp o email
- Contar productos seleccionados

---

## ✨ Tips Importantes

✅ **Usa imágenes de buena calidad** para que los productos se vean bien
✅ **Mantén la consistencia** en los tamaños de las imágenes
✅ **Prueba en dispositivos móviles** para verificar que se vea bien
✅ **Verifica los precios** antes de publicar
✅ **Haz backups** de tus archivos originales

---

## 📞 Necesitas Ayuda?

Si tienes problemas al editar:
1. Verifica que la ruta de la imagen sea correcta
2. Comprueba que todos los comillas y paréntesis estén cerrados
3. Asegúrate de guardar los cambios (Ctrl+S)
4. Recarga la página en el navegador (Ctrl+F5)
