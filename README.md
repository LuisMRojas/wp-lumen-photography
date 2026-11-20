# Lumen — Tema WordPress para portafolio de fotografía

![Lumen](screenshot.png)

**Lumen** es un tema de bloques (Full Site Editing) creado desde cero para fotógrafos que quieren un portafolio oscuro, editorial y rápido, editable al 100 % desde el Editor de sitios de WordPress, sin page builders ni plugins.

### 🌐 [Ver el sitio en vivo](https://luismrojas.github.io/wp-lumen-photography/)

¿Quieres explorar el panel de WordPress? [Abrir la demo con acceso de administrador](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/LuisMRojas/wp-lumen-photography/main/blueprint.json)

> La demo levanta un WordPress real en tu navegador, instala el tema desde este repositorio y crea contenido de ejemplo. Tarda unos segundos en cargar.

## Características

- **Tema de bloques moderno** (`theme.json` v3): paleta, tipografías, espaciados y estilos globales editables desde *Apariencia → Editor*.
- **Portada a pantalla completa** con texto superpuesto e indicador de scroll animado.
- **Galería mosaico** (estilo de bloque *Mosaico*) con **lightbox nativo** de WordPress para ampliar cada foto.
- **Estilo “Película”** para imágenes: grano analógico y viñeta generados con SVG/CSS, sin imágenes extra.
- **Animaciones de aparición** al hacer scroll con `IntersectionObserver` (respeta `prefers-reduced-motion`).
- **Patrones listos para usar**: Portada, Series destacadas, Galería, Sobre mí, Servicios y tarifas, Contacto.
- Plantillas: inicio, diario (blog), entrada, página, página a ancho completo, archivo, búsqueda y 404.
- Cabecera fija translúcida con navegación responsive.

## Estructura

```
lumen/
├── style.css            # Cabecera del tema
├── theme.json           # Sistema de diseño (colores, tipografía, espaciado, estilos)
├── functions.php        # Carga de assets, categoría de patrones y estilos de bloque
├── assets/
│   ├── css/lumen.css    # Mosaico, grano, cabecera fija, animaciones
│   └── js/reveal.js     # Aparición progresiva al hacer scroll
├── parts/               # Cabecera y pie
├── patterns/            # Secciones reutilizables (PHP)
├── templates/           # Plantillas HTML de bloques
└── blueprint.json       # Demo automática en WordPress Playground
```

## Instalación

1. Descarga el repositorio como ZIP (*Code → Download ZIP*).
2. En WordPress ve a **Apariencia → Temas → Añadir nuevo → Subir tema** y sube el ZIP.
3. Activa **Lumen**. La portada se arma sola con los patrones del tema.
4. Reemplaza las imágenes de ejemplo desde **Apariencia → Editor → Plantillas → Página de inicio**.

Requisitos: WordPress 6.5+ y PHP 7.4+.

## Tecnologías

WordPress Block Themes · theme.json · Block Patterns · CSS moderno (`color-mix`, columnas CSS, `backdrop-filter`) · JavaScript vanilla.

## Créditos

- Fotografías de ejemplo servidas por [Lorem Picsum](https://picsum.photos) (imágenes de Unsplash).
- Tipografías: Cormorant Garamond e Inter (Google Fonts, licencia OFL).

## Licencia

GPL-2.0-or-later, igual que WordPress.
