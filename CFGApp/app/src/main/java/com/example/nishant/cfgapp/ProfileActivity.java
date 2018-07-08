package com.example.nishant.cfgapp;

import android.content.Context;
import android.content.SharedPreferences;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ServerValue;
import com.squareup.picasso.Picasso;

public class ProfileActivity extends AppCompatActivity {

    private String name1, address1, email1;
    private String aadhar1, phoneno1, survey_no;
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
        final EditText survey_no = findViewById(R.id.survey_no);

        name.setText(sharedPreferences.getString("personName",""));
        name1 = sharedPreferences.getString("personName","");
        email.setText(sharedPreferences.getString("personEmail",""));
        email1 = sharedPreferences.getString("personEmail","");
        address.setText(sharedPreferences.getString("address",""));
        survey_no.setText(sharedPreferences.getString("survey_no",""));

        Uri image = Uri.parse(sharedPreferences.getString("personPhoto",""));

        ImageView imageView = findViewById(R.id.profilePic);

        Picasso.with(this).load(image).into(imageView);


        aadhar.setText(sharedPreferences.getString("aadhar",""));

        phoneno.setText(sharedPreferences.getString("phoneno",""));


        mFirebaseInstance = FirebaseDatabase.getInstance();
        //FirebaseDatabase.getInstance().setPersistenceEnabled(true);
        mFirebaseDatabase = mFirebaseInstance.getReference("PersonalDetails");

        Button button = findViewById(R.id.submit);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                SharedPreferences.Editor editor = sharedPreferences.edit();
                address1 = address.getText().toString();
                String survey_no1 = survey_no.getText().toString();
                editor.putString("address",address.getText().toString());
                editor.putString("aadhar", aadhar.getText().toString());
                editor.putString("phoneno", phoneno.getText().toString());
                editor.putString("survey_no", survey_no1);
                editor.putBoolean("isFarmer", isFarmer);

                editor.apply();

                aadhar1 = sharedPreferences.getString("aadhar","");
                phoneno1 = sharedPreferences.getString("phoneno","");

                String UserID = mFirebaseDatabase.push().getKey();

                PersonalDetailsFarmer request;
                request = new PersonalDetailsFarmer(name1, address1, aadhar1, phoneno1, email1, true, survey_no1);

                mFirebaseDatabase.child(phoneno1).setValue(request);

            }
        });

    }
}
