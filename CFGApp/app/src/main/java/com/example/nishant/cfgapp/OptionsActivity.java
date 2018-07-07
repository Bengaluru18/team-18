package com.example.nishant.cfgapp;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.media.Image;
import android.net.Uri;
import android.speech.tts.TextToSpeech;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.squareup.picasso.Picasso;

import java.util.Locale;


public class OptionsActivity extends AppCompatActivity {

    public String name, email, contact;
    private TextToSpeech textToSpeech;
    private String ID, nameReq;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_options);
        
        SharedPreferences sharedPreferences = getApplicationContext().getSharedPreferences("LoginDetails", Context.MODE_PRIVATE);

        TextView name = findViewById(R.id.txtName);
        TextView email = findViewById(R.id.txtEmail);

        name.setText(sharedPreferences.getString("personName",""));
        email.setText(sharedPreferences.getString("personEmail",""));




        ImageView imageView = findViewById(R.id.imgProfilePic);

        String img = sharedPreferences.getString("personPhoto","");
        Uri image = Uri.parse(img);

        Picasso.with(this).load(image).into(imageView);

        Button Profile = findViewById(R.id.button_see_profile);

        Profile.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(v.getContext(), ProfileActivity.class));
            }
        });
    }

    public void onPause(){
        if(textToSpeech !=null){
            textToSpeech.stop();
            textToSpeech.shutdown();
        }
        super.onPause();
    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
        finishAffinity();
    }
}
