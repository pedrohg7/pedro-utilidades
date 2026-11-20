
# Plugin Pedro Utilidades

## Descripción

Plugin personalizado para añadir funcionalidades al blog SneakersHub sin modificar los archivos internos de WordPress.

## Funcionalidades

- Añade una caja de contacto al final de las entradas.
- Registra el shortcode [anio] para mostrar el año actual.
- Elimina la etiqueta generator de WordPress del encabezado HTML.
- Personaliza el enlace y el texto del logotipo de acceso.
- Muestra un aviso de acceso restringido en wp-login.php.

## Instalación

1. Copiar la carpeta pedro-utilidades en wp-content/plugins/.
2. Acceder al panel de administración de WordPress.
3. Entrar en Plugins > Plugins instalados.
4. Activar Pedro Utilidades.
5. Comprobar las funcionalidades en el sitio.

## Dependencias

- WordPress y una versión de PHP compatible.
- Página de Contacto con el slug contacto para generar el enlace de la caja.
- El tema hijo pedro-hijo proporciona los estilos personalizados de la caja y utiliza el shortcode [anio] en su pie de página.

## Archivos principales

- pedro-utilidades.php: código PHP de las funcionalidades.

## Versión

1.1.0
