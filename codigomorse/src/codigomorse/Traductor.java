package codigomorse;

public class Traductor {

    String[] morse = {".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---", "-.-", ".-..", "--", "-.", "--.--", "---", ".--.", "--.-", ".-.", "...", "-", "..-", "...-", ".--", "-..-", "-.--", "--.."};
    String[] palabras = {"A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "�", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"};

    String traduccion = "";

    public String traducir(String palabra)
    {
	String mayuscula = "";
	String letra = "";

	mayuscula = palabra.toUpperCase();

	for(int i=1; i<=palabra.length(); i++)
            {
		letra = mayuscula.substring(i-1, i);
		for(int j=0; j<palabras.length; j++)
		{
                    if(letra.equals(palabras[j]))
                    {
                        traduccion = traduccion + morse[j] + " | ";
                    }	
                }
            }
            return traduccion;    
        }
} 
