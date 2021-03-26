package codigomorse;

public class Traductorm {

    String[] morse = {".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---", "-.-", ".-..", "--", "-.", "--.--", "---", ".--.", "--.-", ".-.", "...", "-", "..-", "...-", ".--", "-..-", "-.--", "--.."};
    String[] palabras = {"A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "�", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"};

    String traduccion = "";

    public String traducirEspañol(String dato)
    {
        String[] palabra;

        palabra = dato.split(" ");
	
        for(int i=0; i < palabra.length; i++) {
            for(int j=0; j <morse.length; j++){
                if(palabra[i].equals(morse[j])) {
                    traduccion = traduccion + palabras[j] + " ";
                }
            }
        }
	return traduccion;	   
    }
} 
