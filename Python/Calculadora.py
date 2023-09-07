def operacion (operador, num1, num2):
    return{
        1: lambda: num1 + num2,
        2: lambda: num1 - num2,
        3: lambda: num1 * num2,
        4: lambda: num1 / num2,
    }.get(operador, lambda: None)

print ("Calculadora Básica\n")
print ("1. Sumar\n2. Restar\n3. Multiplicar\n4. Dividir")

while True:
    opcion = int(input("Digite la opción:\n -> "))
    if opcion < 1 or opcion > 4:
        print ("Opción fuera de rango")
    else:
        num1 = int(input("Digite el primer número: "))
        num2 = int(input("Digite el segundo número: "))
        print("Resultado: ", operacion (opcion, num1, num2)())
        break
