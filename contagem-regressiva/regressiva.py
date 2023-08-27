def regressiva(i):
    print(i)
    if i <= 1:
        return
    elif i > 1:
        regressiva(i - 1)

regressiva(10)