package codigomorse;

import java.util.Scanner;

public class Codigomorse{

    public static void main(String[] args) {
        Traductor ventana = new Traductor();

        Scanner entrada_texto = new Scanner(System.in);

            System.out.println("Ingresa la frase en letras: ");
            String palabra = entrada_texto.nextLine();
            palabra = ventana.traducir(palabra);

            System.out.println(palabra);

        //Traductorm ventana = new Traductorm();
        
        //Scanner entrada_texto = new Scanner(System.in);
            
            //System.out.println("Ingresa la frase en morse: ");
            //palabra = ventana.traductor(palabra);
        
            //System.out.println(palabra);
    }
}

