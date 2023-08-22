from tkinter import DoubleVar


print("Hola mundo");

#En python las variales se recconocen por si solas no hay necesidad de declararlas

numeros = 123456; 
print(numeros);

#declaracion de varias variables en una sola linea
nombre, nombre1, nombre2, = "Yojana","Angelica", "Maria";
print(nombre,nombre1,nombre2);

#La funcion type para conocer el tipo de variable 
print(type(nombre2))
print(type(numeros))


###Esto me puede servir para realizar preguntar y variables que entrar por consola
def formulario ():
    print("Hola, por favor ingresa tu nombre")
    nombre = str(input())
    print(nombre, type(nombre))

    print("Por favor ingresa tu edad")
    edad = int(input())
    print(edad, type(edad));


#OPERADORES ARITMETICOS 
x = 3
y = 98

#Sumar 
print("La suma de x + y es igual a = ", x + y)

#Resta 
print("La resta de x - y es igual a = ", x - y)

#Multiplicacion *
print("La multiplicacion de x * y es igual a = ", x * y )

#Division 
print("La division de x + y es igual a = ", x/y)

#Producto entero de un adivision 
print("Este es el producto de la division de x // y = ", x//y)

#Exponente " ** "
print("Este es el el exponente de x ** y = ", x ** y)

#####################################################################3333

#OPERADORES COMPARATIVOS 
#Mayor que >
print("x es mayor que y", x > y)

#Menor que <
print("x es menor que y", x < y)

# Igual a ==
print("x es igual que y", x == y)

#Diferente !=
print("x es diferente que y", x != y)

#Mayor o igual que >=
print("x es mayor o igual que y", x >= y)

#Menor o igual que 
print("x es meno o igual que y", x <= y)

#Funcion if 

print("Por favor ingresa tel valor de num")
num= float(input())

if num > 0:
 print("La variable num es mayor que 0 ")
if num % 2 == 0:
 print("Este numero es par")
else:
 print("La varible num es negativo")







