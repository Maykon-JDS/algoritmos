package euclides;

import javax.swing.*;
import java.awt.event.*;
import java.util.LinkedList;

public class MDC {
    private JFrame janela;
    private JPanel painel;
    private JButton botao;
    private JLabel label;
    private JTextField campo1;
    private JTextField campo2;
    private JProgressBar barra;

    int[] numerosPrimos = { 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89,
            97 };

    public MDC() {
        janela = new JFrame("MDC");
        painel = new JPanel();
        botao = new JButton("Calcular");
        label = new JLabel("MDC");
        campo1 = new JTextField(10);
        campo2 = new JTextField(10);

        botao.addActionListener(
                new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        int n1 = Integer.parseInt(campo1.getText());
                        int n2 = Integer.parseInt(campo2.getText());
                        int mdc = calcular(n1, n2);
                        label.setText("MDC: " + mdc);
                    }
                });

        painel.add(label);
        painel.add(botao);
        painel.add(campo1);
        painel.add(campo2);

        janela.getContentPane().add(painel);
        janela.setSize(300, 150);
        janela.setVisible(true);

    }

    private int calcular(int n1, int n2) {

        int quociente = 1;
        boolean fim = false;

        for (int i : numerosPrimos) {
            if (n1 % i == 0 && n2 % i == 0) {
                n1 = n1 / i;
                n2 = n2 / i;
                quociente = i;
                break;
            }
            else if(i == 97)
            {
                fim = true;
                break;
            }
        }

        if (n1 != 1 && n2 != 1 && !fim) {
            return quociente * calcular(n1, n2);
        }

        return quociente;

    }

    public static void main(String[] args) {
        MDC mdc = new MDC();
    }
}