package com.example.nishant.cfgapp;

import android.content.SharedPreferences;
import android.support.v4.app.NotificationCompat;
import android.support.v4.app.NotificationManagerCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Toast;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ServerValue;

import java.io.Serializable;
import java.sql.Timestamp;
import java.text.SimpleDateFormat;

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
                sharedPreferences.getString("phoneno",""), ServerValue.TIMESTAMP);

        databaseReference1.child("").setValue(request);


        NotificationCompat.Builder mBuilder = new NotificationCompat.Builder(this)
                .setSmallIcon(R.drawable.backpack)
                .setContentTitle("Order Placed!")
                .setContentText("You will receive an update soon Mr "+sharedPreferences.getString("personName",""))
                .setPriority(NotificationCompat.PRIORITY_DEFAULT);

        NotificationManagerCompat notificationManager = NotificationManagerCompat.from(this);

// notificationId is a unique int for each notification that you must define
        notificationManager.notify(0, mBuilder.build());

    }
}
