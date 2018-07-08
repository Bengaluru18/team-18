package com.example.nishant.cfgapp;

import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Toast;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

import java.io.Serializable;

public class OrderActivity extends AppCompatActivity implements Serializable {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_order);

        final FirebaseDatabase firedatabase = FirebaseDatabase.getInstance();
        DatabaseReference databaseReference = firedatabase.getReference("State");

        SharedPreferences sharedPreferences = getSharedPreferences("LoginDetails",0);


        Inventory inventory = (Inventory) getIntent().getSerializableExtra("requestObj");

        databaseReference.child(inventory.getState())
                .child(inventory.getCentername())
                .child(inventory.getEquip_no())
                .child("isallocated")
                .setValue("YES");


        final FirebaseDatabase firedatabase1 = FirebaseDatabase.getInstance();
        DatabaseReference databaseReference1 = firedatabase.getReference("Bookings").push();

        Booking request = new Booking(inventory.getState(), inventory.getCentername(), inventory.getEquip_no(),
                inventory.getPrice(), inventory.getType(), true, sharedPreferences.getString("personName",""),
                sharedPreferences.getString("phoneno",""));

        databaseReference1.child("").setValue(request);


    }
}
