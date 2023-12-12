def buscaBinaria(lista, item):
    indexMaisAlto = len(lista) - 1
    
    baixo = 0
    alto = indexMaisAlto

    while baixo <= alto:
        meio = round((baixo + alto) / 2)
        chute = lista[meio]

        if chute == item:
            return meio
        elif chute < item:
            baixo = meio + 1
        else:
            alto = meio - 1
    return None

lista = [1,3,5,7,9]

print(buscaBinaria(lista, 9))


