def sauda(nome):
    print("Olá, " + nome + "!")
    sauda2(nome)
    print("prepara para dizer tchau!")
    tchau()

def sauda2(nome):
    print("Como vai " + nome + "?")

def tchau():
    print("ok, tchau!")

sauda("Maykon")