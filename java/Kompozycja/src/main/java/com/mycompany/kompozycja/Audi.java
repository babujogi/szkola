/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.kompozycja;

/**
 *
 * @author pt22czekajb
 */
public class Audi extends Pojazd {
    public Audi(int spalanie, int bak, int zawartosc){
        this.bak.pojemnosc = bak;
        this.bak.zawartosc = zawartosc;
        this.silnik.spalanie = spalanie;
    }
}
