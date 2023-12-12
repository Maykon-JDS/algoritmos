class buscaBinaria {
    public static void main(String[] args){
        int array[] = {1,2,3,4,5,6,7,8,9};
        
        System.out.println(buscaBi(array, 1));

        
    }

    public static int buscaBi(int[] array, int valorBusca)
    {
        int tamanhoArray = array.length;
        int posicaoBaixa = 0;
        int posicaoAlta = tamanhoArray - 1;
        
        for (int i = 0; i < tamanhoArray; i++) {
            int meio = (posicaoBaixa + posicaoAlta) / 2;
            int chute = array[meio];

            if(chute == valorBusca)
            {
                return meio;
            }
            else if(chute < valorBusca)
            {
                posicaoBaixa = meio + 1;
            }
            else if(chute > valorBusca)
            {
                posicaoAlta = meio - 1;
            }
        }

        return -1;
    }
}