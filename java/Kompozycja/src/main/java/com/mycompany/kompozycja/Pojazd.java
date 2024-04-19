/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.kompozycja;

/**
 *
 * @author pt22czekajb
 */
public class Pojazd {
    public Silnik silnik;
    public Bak bak;
    public Pojazd(int spalanie, int bak, int zawartosc){
        this.silnik = new Silnik(spalanie);
        this.bak = new Bak(bak,zawartosc);
    }
    
    public Pojazd(){
        this.silnik = new Silnik(10);
        this.bak = new Bak(70,70);
    }
    
    
    public int getSilnik(){
        return this.silnik.spalanie;
    }
    
    public int getBak(){
        return this.bak.pojemnosc;
    }
    
    public int getBakZawartosc(){
        return this.bak.zawartosc;
    }
    
    public void SetSpalanie(int spalanie){
        this.silnik.spalanie = spalanie;
    }
    
    public void SetBak(int bak){
        this.bak.pojemnosc = bak;
    }
    
    public void SetBakPojemnosc(int zawartosc){
        this.bak.zawartosc = zawartosc;
    }
    
    public void tankuj(){
        this.bak.zawartosc=this.bak.pojemnosc;
    }
    
    public void jedz(int km){
        km = km/100;
        this.bak.zawartosc -=km*this.silnik.spalanie;
    }
    
}
