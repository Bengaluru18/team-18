package com.example.nishant.cfgapp;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;
import java.util.List;

public class YourRequests extends AppCompatActivity{
    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_results);

        final FirebaseDatabase firedatabase = FirebaseDatabase.getInstance();
        DatabaseReference databaseReference = firedatabase.getReference("Bookings");

        final List<Booking> requestList = new ArrayList<>();

        databaseReference.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {
                requestList.clear();
                Iterable<DataSnapshot> iterable = dataSnapshot.getChildren();
                for(DataSnapshot dataSnapshot1: iterable){
                    //Toast.makeText(getApplicationContext(), dataSnapshot1.child("mobile").toString(), Toast.LENGTH_LONG).show();
                }
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {
                System.out.println("The read failed: " + databaseError.getCode());
            }
        });
    }
}
