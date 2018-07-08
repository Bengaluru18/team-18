package com.example.nishant.cfgapp;

import android.content.SharedPreferences;
import android.provider.ContactsContract;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;
import java.util.List;

public class SeeInventoryActivity extends AppCompatActivity {

    private String city = "";
    private RecyclerView recyclerView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_results);

        recyclerView = (RecyclerView) findViewById(R.id.rv_results);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));

        SharedPreferences sharedPreferences = getSharedPreferences("LoginDetails",0);
        city = sharedPreferences.getString("city","");

        final FirebaseDatabase database = FirebaseDatabase.getInstance();
        DatabaseReference ref = database.getReference("State");

        final List<Inventory> requestList = new ArrayList<>();

        ref.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {
                requestList.clear();
                Iterable<DataSnapshot> iterable = dataSnapshot.getChildren();
                for(DataSnapshot dataSnapshot1: iterable){
                    if(dataSnapshot1.getKey().equals("KA")){
                        String state = "KA";
                        //Toast.makeText(getApplicationContext(), dataSnapshot1.getValue().toString(), Toast.LENGTH_LONG).show();
                        DataSnapshot d1 = dataSnapshot1.child("Bengaluru");
                        String city = "Bengaluru";
                        //Toast.makeText(getApplicationContext(), d1.toString(), Toast.LENGTH_LONG).show();
                        Iterable<DataSnapshot> iterable1 = d1.getChildren();
                        for(DataSnapshot d2 : iterable1){
                            //Toast.makeText(getApplicationContext(), d2.toString(), Toast.LENGTH_LONG).show();
                            String equip_no = d2.getKey();
                            String price = (String) d2.child("PricePerDay").getValue();
                            String isAllocated = (String) d2.child("isallocated").getValue();
                            String type = (String) d2.child("Type").getValue();

//                            Toast.makeText(getApplicationContext(), equip_no+"-"+price+"-"+type, Toast.LENGTH_LONG).show();
                            boolean isAlloc = (isAllocated.equals("YES"))?true:false;
                            int p = Integer.parseInt(price);

                            Inventory obj = new Inventory(equip_no, p, type, isAlloc, state, city);

                            if(isAlloc==true){}
                            else{
                                requestList.add(obj);
                            }

                            //Toast.makeText(getApplicationContext(), equip_no+"-"+p+"-"+type+"-"+isAlloc, Toast.LENGTH_LONG).show();

                        }

                    }
                }

                recyclerView.setAdapter(new ResultsAdapter(requestList));

            }

            @Override
            public void onCancelled(DatabaseError databaseError) {
                System.out.println("The read failed: " + databaseError.getCode());
            }
        });


    }
}
