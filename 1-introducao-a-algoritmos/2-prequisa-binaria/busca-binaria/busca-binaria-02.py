def pesquisa_binaria(lista, item):
    baixo = 0
    alto = len(lista) - 1

    while baixo <= alto:
        meio = round((baixo + alto) / 2)

        if item < lista[meio]:
            alto = meio - 1
        elif item > lista[meio]:
            baixo = meio + 1
        else:
            return meio
    return None


lista = [0,1,2,3,4,5,6,7,8,9]

print(pesquisa_binaria(lista, 10))