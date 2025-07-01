# 🐔 NORAVES - Sistema de Gestión de Despachos

Sistema web hecho en PHP puro para gestionar pedidos, bloques de pesaje y guías de despacho de productos avícolas.

## 🎯 Funcionalidades principales

- 📋 Registro de pedidos
- 🧱 Gestión de bloques de pesaje
- 📦 Generación de guías de despacho
- 📊 Resumen diario y exportación de datos
- 🖥️ Panel principal con interfaz limpia y funcional

## ⚙️ Tecnologías utilizadas

- PHP (sin frameworks)
- HTML5 + CSS3
- Almacenamiento con archivos `.csv`

## 📁 Estructura del proyecto

```
├── index.php                # Página principal / dashboard
├── pedidos.php              # Registro de pedidos
├── bloques.php              # Registro de bloques
├── guias.php                # Generación de guías
├── exportar_diario.php      # Exportación de reportes del día
├── menu.php                 # Menú lateral de navegación
├── estilos.css              # Estilo general
├── *.csv                    # Archivos donde se almacenan los registros
```

## 🚀 Cómo ejecutar

1. Clona el repositorio:
```bash
git clone https://github.com/tuusuario/noraves-despacho-system.git
```

2. Copia el proyecto a tu servidor (XAMPP, Laragon, etc.)

3. Asegúrate de tener PHP instalado y funcionando (mínimo PHP 7.4)

4. Ejecuta en el navegador:
```
http://localhost/noraves-despacho-system/
```

## 📌 Nota

Este sistema no usa base de datos. Los datos se guardan en archivos `.csv` por simplicidad y portabilidad.
