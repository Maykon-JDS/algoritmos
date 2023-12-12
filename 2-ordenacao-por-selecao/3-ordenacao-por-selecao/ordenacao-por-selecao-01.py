def ordenacaoPorSelecao(arr):
    
    novoArr = []
    
    for j in range(len(arr)):
        menor = arr[0]
        menor_indice = 0
        for i in range(1, len(arr)):
            if arr[i] < menor:
                menor = arr[i]
                menor_indice = i
        novoArr.append(arr.pop(menor_indice))

    return novoArr         


arr = [5,6,7,3,2,1]


print (ordenacaoPorSelecao(arr))