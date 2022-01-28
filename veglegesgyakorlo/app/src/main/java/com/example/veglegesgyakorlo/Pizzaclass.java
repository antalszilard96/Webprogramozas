package com.example.veglegesgyakorlo;

import java.io.Serializable;

public class Pizzaclass implements Serializable {
    String nev;
    String iz;
    String ar;
    int img;

    public Pizzaclass(String nev, String iz, String ar, int img) {
        this.nev = nev;
        this.iz = iz;
        this.ar = ar;
        this.img = img;
    }

    public String getNev() {
        return nev;
    }

    public void setNev(String nev) {
        this.nev = nev;
    }

    public String getIz() {
        return iz;
    }

    public void setIz(String iz) {
        this.iz = iz;
    }

    public String getAr() {
        return ar;
    }

    public void setAr(String ar) {
        this.ar = ar;
    }

    public int getImg() {
        return img;
    }

    public void setImg(int img) {
        this.img = img;
    }
}
