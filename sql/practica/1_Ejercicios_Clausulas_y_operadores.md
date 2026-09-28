# Ejercicios prácticos

Estos ejercicios sirven para practicar las consultas básicas y los filtros estudiados en la sesión.

---

## Ejercicio 1

Mostrar todas las columnas de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes;
```

</details>

---

## Ejercicio 2

Mostrar todas las columnas de la tabla `productos`.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos;
```

</details>

---

## Ejercicio 3

Mostrar únicamente la columna `nombre` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes;
```

</details>

---

## Ejercicio 4

Mostrar el nombre y la ciudad de todos los alumnos.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, ciudad
FROM alumnos;
```

</details>

---

## Ejercicio 5

Mostrar el título y la categoría de todos los libros.

<details>
<summary>Ver solución</summary>

```sql
SELECT titulo, categoria
FROM libros;
```

</details>

---

## Ejercicio 6

Mostrar todos los clientes que viven en Madrid.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid';
```

</details>

---

## Ejercicio 7

Mostrar todos los productos cuyo precio sea mayor que 100.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
WHERE precio > 100;
```

</details>

---

## Ejercicio 8

Mostrar todos los empleados cuyo salario sea inferior a 2000.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE salario < 2000;
```

</details>

---

## Ejercicio 9

Mostrar todos los alumnos que tengan exactamente 18 años.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM alumnos
WHERE edad = 18;
```

</details>

---

## Ejercicio 10

Mostrar todos los cursos con una duración igual o superior a 50 horas.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM cursos
WHERE horas >= 50;
```

</details>

---

## Ejercicio 11

Mostrar todos los productos cuyo precio esté entre 50 y 200 euros.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
WHERE precio BETWEEN 50 AND 200;
```

</details>

---

## Ejercicio 12

Mostrar todos los libros publicados entre 2015 y 2020.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM libros
WHERE anio_publicacion BETWEEN 2015 AND 2020;
```

</details>

---

## Ejercicio 13

Mostrar todos los empleados cuyo salario sea distinto de 2500.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE salario <> 2500;
```

</details>

---

## Ejercicio 14

Mostrar todos los clientes que no vivan en Sevilla.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE ciudad <> 'Sevilla';
```

</details>

---

## Ejercicio 15

Mostrar todos los alumnos mayores de 21 años.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM alumnos
WHERE edad > 21;
```

</details>

---

## Ejercicio 16

Mostrar todos los empleados que trabajen en el departamento de Ventas y tengan un salario superior a 2000.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE departamento = 'Ventas'
AND salario > 2000;
```

</details>

---

## Ejercicio 17

Mostrar todos los clientes que vivan en Madrid y sean mayores o iguales a 18 años.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid'
AND edad >= 18;
```

</details>

---

## Ejercicio 18

Mostrar todos los alumnos que vivan en Madrid o en Valencia.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM alumnos
WHERE ciudad = 'Madrid'
OR ciudad = 'Valencia';
```

</details>

---

## Ejercicio 19

Mostrar todos los productos cuya categoría sea Electrónica o cuyo precio sea superior a 500.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
WHERE categoria = 'Electrónica'
OR precio > 500;
```

</details>

---

## Ejercicio 20

Mostrar todos los empleados que no pertenezcan al departamento de Recursos Humanos y cuyo salario esté entre 2000 y 4000 euros.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE NOT departamento = 'Recursos Humanos'
AND salario BETWEEN 2000 AND 4000;
```

</details>