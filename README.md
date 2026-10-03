# Práctica de POO en PHP

Carpeta con los 5 problemas de la práctica. Cada problema está en un solo archivo.

## Estructura

```
Practica_POO/
├── Problema1.php
├── Problema2.php
├── Problema3.php
├── Problema4.php
└── Problema5.php
```

## Cómo ejecutar

Desde la carpeta `Practica_POO`:

```
php Problema1.php
```

Cambia el número para ejecutar los demás. También se pueden abrir desde un servidor local (XAMPP, Laragon, etc.).

## Problemas

### Problema 1: Herencia
Clases `Coche` y `CocheDeLujo` (hereda de `Coche`). `CocheDeLujo` agrega el atributo `extras` y sobrescribe `printCaracteristicas()`.

Resultado: `Color: negro` + línea horizontal + `Extras: TV`

### Problema 2: Late Static Binding (`static` y `self`)
Se prueba el mismo ejemplo de dos formas.

| Llamada | Resultado | Motivo |
|---|---|---|
| `static::miFuncion()` | **B** | Se resuelve en tiempo de ejecución: usa la clase que hizo la llamada |
| `self::miFuncion()` | **C** | Siempre apunta a la clase donde está escrito el código |

### Problema 3: Impedir que una clase se herede
`Coche` está declarada como `final`. Al intentar `class cocheDeLujo extends Coche` ocurre un **error fatal**. Este error es el resultado esperado.

### Problema 4: Círculo
Clase `Circulo` con los métodos `calcularArea()` y `calcularPerimetro()`. Usa `M_PI` y `number_format()`.

Con radio 4:
- Área: 50.27
- Perímetro: 25.13

### Problema 5: Persona, Estudiante y Docente
`Persona` es la clase base (nombre, apellido, fecha de nacimiento). `Estudiante` y `Docente` heredan de ella y agregan sus propios datos.

**Estudiante**
- Matrícula
- Índice académico
- Cohorte
- Estado académico: 0 inactivo, 1 activo, 2 retirado, 3 graduado
- Modalidad de estudio: 1 presencial, 2 virtual, 3 híbrida

**Docente**
- Código de docente
- Departamento
- Categoría (Titular, Adjunto, Especial, Interino)
- Máximo título (Licenciado, Magíster, Doctor/PhD)
- Tipo de contratación (Tiempo Completo, Tiempo Parcial, Por horas)

## Requisitos
- PHP 8.0 o superior