# Blueprint de la Aplicación de Gestión de Abuelos

## Visión General

Esta aplicación es un sistema de gestión de información para un centro de cuidado de personas mayores, construido con Laravel y Filament. Permite llevar un registro detallado de los abuelos, su historial médico, medicamentos, alergias y familiares de contacto.

## Diseño y Estilo

La interfaz de administración se basa en el framework **Filament**, que proporciona un diseño moderno, responsivo y fácil de usar. Las mejoras se han centrado en la usabilidad y la claridad visual.

### Recursos de Filament Mejorados

#### Recurso de Historias Clínicas

El recurso para gestionar las historias clínicas ha sido el foco principal de las mejoras de interfaz para ofrecer una experiencia de usuario superior.

**1. Formulario de Creación/Edición (`HistoriaForm.php`)**

El formulario ha sido rediseñado utilizando un sistema de **Pestañas (Tabs)** para mejorar la organización y la navegación:

*   **Pestaña 1: Información Principal (`heroicon-o-user-circle`)**
    *   Contiene los campos esenciales para identificar al paciente y la historia clínica.
    *   **Componentes:** Selector de paciente (`Select`) con búsqueda y creación en línea, y campo para el número de historia (`TextInput`).

*   **Pestaña 2: Historial Clínico (`heroicon-o-clipboard-document-list`)**
    *   Agrupa toda la información médica relevante del paciente.
    *   **Componentes:** Lista de checkboxes para antecedentes (`CheckboxList`), selector múltiple para alergias (`MultiSelect`), y otro para medicinas (`MultiSelect`).

*   **Pestaña 3: Familiares y Notas (`heroicon-o-users`)**
    *   Dedicada a la información de contacto y observaciones adicionales.
    *   **Componentes:** Un repetidor (`Repeater`) para añadir múltiples familiares y un área de texto (`Textarea`) para observaciones.

*   **Estilo Visual:** Cada pestaña está acompañada de un icono descriptivo y agrupa la información dentro de una `Section` para mantener un diseño limpio y coherente.

**2. Tabla de Visualización (`HistoriasTable.php`)**

La tabla que lista las historias clínicas también ha sido optimizada para ser más informativa y funcional:

*   **Columnas Clave:**
    *   **Paciente:** Muestra el nombre y apellido completo.
    *   **Cédula de Identidad:** Para una rápida identificación.
    *   **Nro. Historia:** El número único de la historia clínica.
    *   **Fecha de Registro:** La fecha en que se creó el registro.
*   **Búsqueda y Filtrado:**
    *   La **búsqueda global** permite encontrar pacientes por nombre, apellido, cédula o número de historia.
    *   Un **filtro desplegable** (`SelectFilter`) permite aislar y visualizar las historias de un paciente específico, mejorando drásticamente la usabilidad.
*   **Acciones Rápidas:**
    *   Los botones de `Ver` y `Editar` ahora se muestran como **iconos** para un diseño más compacto y moderno.

Estas mejoras transforman la gestión de historias clínicas en una tarea más rápida, eficiente y agradable para el usuario final.
