package com.example.nishant.cfgapp;

import android.content.Context;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class ProfileActivity extends AppCompatActivity {

    private String name, address, aadhar, phoneno, email;

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

        name.setText(sharedPreferences.getString("personName",""));
        email.setText(sharedPreferences.getString("personEmail",""));
        address.setText(sharedPreferences.getString("address",""));
        aadhar.setText(sharedPreferences.getString("aadhar",""));
        phoneno.setText(sharedPreferences.getString("phoneno",""));

        Button button = findViewById(R.id.submit);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                SharedPreferences.Editor editor = sharedPreferences.edit();

                editor.putString("address",address.getText().toString());
                editor.putString("aadhar", aadhar.getText().toString());
                editor.putString("phoneno", phoneno.getText().toString());

                editor.apply();
            }
        });

    }
}
