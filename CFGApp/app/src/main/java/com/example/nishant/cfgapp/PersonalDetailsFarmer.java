package com.example.nishant.cfgapp;

public class PersonalDetailsFarmer {
    private String Name;
    private String address;
    private int aadhar;
    private int mobile;
    private String email;
    private boolean isFarmer;

    PersonalDetailsFarmer(){

    }

    public PersonalDetailsFarmer(String name, String address, int aadhar, int mobile, String email, boolean isFarmer) {
        Name = name;
        this.address = address;
        this.aadhar = aadhar;
        this.mobile = mobile;
        this.email = email;
        this.isFarmer = isFarmer;
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public int getAadhar() {
        return aadhar;
    }

    public void setAadhar(int aadhar) {
        this.aadhar = aadhar;
    }

    public int getMobile() {
        return mobile;
    }

    public void setMobile(int mobile) {
        this.mobile = mobile;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public boolean isFarmer() {
        return isFarmer;
    }

    public void setFarmer(boolean farmer) {
        isFarmer = farmer;
    }
}
