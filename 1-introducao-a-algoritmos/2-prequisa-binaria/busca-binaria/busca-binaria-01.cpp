#include <iostream>
#include <vector>

using namespace std;

int buascaBinaria(vector<int> arrayOrdenado, int valorBusca);

int main(int argc, char const *argv[])
{
    vector <int> array = {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    cout << buascaBinaria(array, 12);

    system("PAUSE >nul");
    return 0;
}


int buascaBinaria(vector<int> arrayOrdenado, int valorBusca)
{
    int baixo = 0;
    int alto = arrayOrdenado.size() - 1;

    while (baixo <= alto)
    {
        int meio = (baixo + alto) / 2; 

        if(valorBusca == meio)
        {
            return meio;
        }
        else if(valorBusca < meio)
        {
            alto = meio - 1;

        }
        else if(valorBusca > meio)
        {
            baixo = meio + 1;
        }
    }
    
    return -1;
}