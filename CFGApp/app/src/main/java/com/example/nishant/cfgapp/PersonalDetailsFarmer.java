package com.example.nishant.cfgapp;

public class PersonalDetailsFarmer {
    private String Name;
    private String address;
    private String aadhar;
    private String mobile;
    private String email;
    private boolean isFarmer;
    private String survey_no;

    PersonalDetailsFarmer(){

    }

    public PersonalDetailsFarmer(String name, String address, String aadhar, String mobile, String email, boolean isFarmer, String survey_no) {
        Name = name;
        this.address = address;
        this.aadhar = aadhar;
        this.mobile = mobile;
        this.email = email;
        this.isFarmer = isFarmer;
        this.survey_no = survey_no;
    }

    public String getSurvey_no() {
        return survey_no;
    }

    public void setSurvey_no(String survey_no) {
        this.survey_no = survey_no;
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

    public String getAadhar() {
        return aadhar;
    }

    public void setAadhar(String aadhar) {
        this.aadhar = aadhar;
    }

    public String getMobile() {
        return mobile;
    }

    public void setMobile(String mobile) {
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
