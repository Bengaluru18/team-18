package com.example.nishant.cfgapp;

import com.google.firebase.database.Exclude;

import org.w3c.dom.NameList;

import java.sql.Time;

public class Booking {
    private String state;
    private String city;
    private String equipment_id;
    private int price;
    private String type;
    private Boolean isAllocated;
    public Object TimeValue;
    private String name;
    private String mobile;

    public Booking(String state, String city, String equipment_id, int price, String type, Boolean isAllocated, String name,String mobile, Object TimeValue) {
        this.state = state;
        this.city = city;
        this.equipment_id = equipment_id;
        this.price = price;
        this.type = type;
        this.isAllocated = isAllocated;
        this.name = name;
        this.mobile = mobile;
        this.TimeValue = TimeValue;
    }

    @Exclude
    public Long getTimeValue() {
        return (long)TimeValue;
    }

    public Booking() {
    }

    public String getState() {

        return state;
    }

    public void setState(String state) {
        this.state = state;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getEquipment_id() {
        return equipment_id;
    }

    public void setEquipment_id(String equipment_id) {
        this.equipment_id = equipment_id;
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

    public Boolean getAllocated() {
        return isAllocated;
    }

    public void setAllocated(Boolean allocated) {
        isAllocated = allocated;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getMobile() {
        return mobile;
    }

    public void setMobile(String mobile) {
        this.mobile = mobile;
    }

}
