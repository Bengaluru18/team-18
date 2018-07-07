package com.example.nishant.cfgapp;

import android.content.Context;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.Toast;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ServerValue;

public class ProfileActivity extends AppCompatActivity {

    private String name1, address1, email1;
    private int aadhar1, phoneno1;
    private boolean isFarmer = false;
    private boolean isCenter = false;
    private DatabaseReference mFirebaseDatabase;
    private FirebaseDatabase mFirebaseInstance;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_profile);

        final SharedPreferences sharedPreferences = getApplicationContext().getSharedPreferences("LoginDetails", Context.MODE_PRIVATE);

        EditText name = findViewById(R.id.name1);
        final EditText address = findViewById(R.id.address);
        final EditText aadhar = findViewById(R.id.aadhar);
        final EditText phoneno = findViewById(R.id.mobile);
        EditText email = findViewById(R.id.email);

        CheckBox checkBox = findViewById(R.id.isRegUser);

        if(isFarmer){
            checkBox.setChecked(true);
        }

        name.setText(sharedPreferences.getString("personName",""));
        name1 = sharedPreferences.getString("personName","");
        email.setText(sharedPreferences.getString("personEmail",""));
        email1 = sharedPreferences.getString("personEmail","");
        address.setText(sharedPreferences.getString("address",""));
        address1 = sharedPreferences.getString("address","");
        aadhar.setText(sharedPreferences.getString("aadhar",""));
        aadhar1 = Integer.parseInt(sharedPreferences.getString("aadhar",""));
        phoneno.setText(sharedPreferences.getString("phoneno",""));
        phoneno1 = Integer.parseInt(sharedPreferences.getString("phoneno",""));

        mFirebaseInstance = FirebaseDatabase.getInstance();
        //FirebaseDatabase.getInstance().setPersistenceEnabled(true);
        mFirebaseDatabase = mFirebaseInstance.getReference("PersonalDetails");

        Button button = findViewById(R.id.submit);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                SharedPreferences.Editor editor = sharedPreferences.edit();

                editor.putString("address",address.getText().toString());
                editor.putString("aadhar", aadhar.getText().toString());
                editor.putString("phoneno", phoneno.getText().toString());
                editor.putBoolean("isFarmer", isFarmer);

                editor.apply();

                String UserID = mFirebaseDatabase.push().getKey();

                PersonalDetailsFarmer request;
                request = new PersonalDetailsFarmer(name1, address1, aadhar1, phoneno1, email1, true);

                mFirebaseDatabase.child(UserID).setValue(request);

            }
        });

    }

    public void onCheckboxClicked(View view) {
        // Is the view now checked?
        boolean checked = ((CheckBox) view).isChecked();

        // Check which checkbox was clicked
        switch(view.getId()) {
            case R.id.isRegUser:  Toast.makeText(this, "I'm a farmer", Toast.LENGTH_SHORT).show();
                isFarmer = true;
                break;
            case R.id.isCabDriver:  Toast.makeText(this, "Customer Care Center", Toast.LENGTH_SHORT).show();
                isCenter = true;
                break;
        }
    }
}
