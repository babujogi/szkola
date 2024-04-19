/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.kompozycja;

/**
 *
 * @author pt22czekajb
 */
public class Kompozycja {

    public static void main(String[] args) {
        
        Audi a = new Audi(10,70,70);
        System.out.println("Spalaie: "+a.getSilnik());
        System.out.println("Pojemność baku: "+a.getBak());
        System.out.println("Zawartosc baku: "+a.getBakZawartosc());
        boolean pomocnicza = true;
        int odcinek = 1000;
        do{
            a.jedz(100);
            odcinek -= 100;
            System.out.println("Zawartosc baku: "+a.getBakZawartosc());
            if(a.getBakZawartosc()<a.getBak()/2){
                a.tankuj();
                System.out.println("Zatankowano");
            }
            
            System.out.println("Przejechano 100km, zostalo "+odcinek);
            if(odcinek==0){
                System.out.println("Koniec trasy");
                pomocnicza = false;
            }
        }while(pomocnicza == true);
    }
}
