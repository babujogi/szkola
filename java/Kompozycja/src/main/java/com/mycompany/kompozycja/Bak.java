/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.kompozycja;

/**
 *
 * @author pt22czekajb
 */
public class Bak {
    public int pojemnosc;
    public int zawartosc;
    public Bak(int pojemnosc,int zawartosc){
        this.pojemnosc = pojemnosc;
        this.zawartosc = zawartosc;
    }
    
    public int getBak(){
        return this.pojemnosc;
    }
    public int getZawartosc(){
        return this.zawartosc;
    }
}
