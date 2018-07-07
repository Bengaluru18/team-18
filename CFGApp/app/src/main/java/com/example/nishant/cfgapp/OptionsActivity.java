package com.example.nishant.cfgapp;

import android.content.Context;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class OptionsActivity extends AppCompatActivity {

    public String name, email, contact;

    private FirebaseDatabase firebaseDatabase;
    private DatabaseReference databaseReference;
    private SharedPreferences sharedPreferencesReq;

    private String ID, nameReq;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_options);

        SharedPreferences sharedPreferences = getApplicationContext().getSharedPreferences("LoginDetails", Context.MODE_PRIVATE);

        sharedPreferencesReq = getApplicationContext().getSharedPreferences("MyRequests", Context.MODE_PRIVATE);
    }
}
