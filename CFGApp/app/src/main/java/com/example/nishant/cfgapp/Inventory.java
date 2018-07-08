package com.example.nishant.cfgapp;

import java.io.Serializable;

public class Inventory implements Serializable{
    private String equip_no;
    private int price;
    private String type;
    private String state;
    private String centername;
    private boolean isAllocated;

    public Inventory() {
    }

    public String getState() {
        return state;
    }

    public void setState(String state) {
        this.state = state;
    }

    public String getCentername() {
        return centername;
    }

    public void setCentername(String centername) {
        this.centername = centername;
    }

    public Inventory(String equip_no, int price, String type, boolean isAllocated, String state, String centername) {
        this.equip_no = equip_no;
        this.state = state;
        this.centername = centername;
        this.price = price;
        this.type = type;
        this.isAllocated = isAllocated;
    }

    public String getEquip_no() {
        return equip_no;
    }

    public void setEquip_no(String equip_no) {
        this.equip_no = equip_no;
    }

    public int getPrice() {
        return price;
    }

    public void setPrice(int price) {
        this.price = price;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public boolean isAllocated() {
        return isAllocated;
    }

    public void setAllocated(boolean allocated) {
        isAllocated = allocated;
    }
}
