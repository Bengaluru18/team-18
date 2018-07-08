package com.example.nishant.cfgapp;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.location.Address;
import android.location.Criteria;
import android.location.Geocoder;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.media.Image;
import android.net.Uri;
import android.provider.Settings;
import android.speech.tts.TextToSpeech;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;
import com.google.android.gms.common.api.GoogleApiClient;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;
import com.google.android.gms.maps.model.PolylineOptions;

import com.google.android.gms.common.api.GoogleApiClient;
import com.squareup.picasso.Picasso;

import java.io.IOException;
import java.util.List;
import java.util.Locale;


public class OptionsActivity extends AppCompatActivity {

    public String name, email, contact;
    private TextToSpeech textToSpeech;
    private String ID, nameReq;

    private GoogleMap googleMap;
    private LocationManager locationManager;
    private Criteria criteria;
    private String bestProvider;
    private LatLng latLng;
    private LocationListener locationListener;
    private double currentLat, currentLong;
    private GoogleApiClient googleApiClient;
    private Location location;
    private SharedPreferences sharedPreferences;

    // flag for GPS status
    boolean isGPSEnabled = false;

    // flag for network status
    boolean isNetworkEnabled = false;

    // flag for GPS status
    boolean canGetLocation = false;

    // The minimum distance to change Updates in meters
    private static final long MIN_DISTANCE_CHANGE_FOR_UPDATES = 10; // 10 meters

    // The minimum time between updates in milliseconds
    private static final long MIN_TIME_BW_UPDATES = 1000 * 60; // 1 minute


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_options);

        location_service();

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

        Button bookInventory = findViewById(R.id.button_bookcab);
        bookInventory.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(v.getContext(), SeeInventoryActivity.class));
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

    public void location_service(){
        locationManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
        criteria = new Criteria();

        bestProvider = String.valueOf(locationManager.getBestProvider(criteria, true)).toString();
        locationListener = new LocationListener() {
            @Override
            public void onLocationChanged(Location location) {}

            @Override
            public void onStatusChanged(String provider, int status, Bundle extras) {}

            @Override
            public void onProviderEnabled(String provider) {}

            @Override
            public void onProviderDisabled(String provider) {
                Intent intent = new Intent(Settings.ACTION_LOCATION_SOURCE_SETTINGS);
                startActivity(intent);
            }
        };

        // getting GPS status
        isGPSEnabled = locationManager.isProviderEnabled(LocationManager.GPS_PROVIDER);

        // getting network status
        isNetworkEnabled = locationManager.isProviderEnabled(LocationManager.NETWORK_PROVIDER);


        if (!isGPSEnabled && !isNetworkEnabled) {
            // no network provider is enabled
        } else {
            this.canGetLocation = true;
            // First get location from Network Provider
            if (isNetworkEnabled) {
                locationManager.requestLocationUpdates(LocationManager.NETWORK_PROVIDER, MIN_TIME_BW_UPDATES, MIN_DISTANCE_CHANGE_FOR_UPDATES, locationListener);
                Log.d("Network", "Network");
                if (locationManager != null) {
                    location = locationManager.getLastKnownLocation(LocationManager.NETWORK_PROVIDER);
                    if (location != null) {
                        currentLat = location.getLatitude();
                        currentLong = location.getLongitude();
                    }
                }
            }
            // if GPS Enabled get lat/long using GPS Services
            if (isGPSEnabled) {
                if (location == null) {
                    locationManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, MIN_TIME_BW_UPDATES, MIN_DISTANCE_CHANGE_FOR_UPDATES, locationListener);
                    Log.d("GPS Enabled", "GPS Enabled");
                    if (locationManager != null) {
                        location = locationManager.getLastKnownLocation(LocationManager.GPS_PROVIDER);
                        if (location != null) {
                            currentLat = location.getLatitude();
                            currentLong = location.getLongitude();
                        }
                    }
                }
            }
        }

        latLng = new LatLng(currentLat, currentLong);


        locationManager.requestLocationUpdates(bestProvider, 5000, 0, locationListener);
        configure();
    }

    public String address(double latitude, double longitude) throws IOException{
        Geocoder geocoder;
        List<Address> addresses;
        geocoder = new Geocoder(this, Locale.getDefault());


        addresses = geocoder.getFromLocation(latitude, longitude, 1); // Here 1 represent max location result to returned, by documents it recommended 1 to 5

        String address = addresses.get(0).getAddressLine(0); // If any additional address line present than only, check with max available address lines by getMaxAddressLineIndex()
        String city = addresses.get(0).getLocality();
        String state = addresses.get(0).getAdminArea();
        String country = addresses.get(0).getCountryName();
        String postalCode = addresses.get(0).getPostalCode();

        TextView add = findViewById(R.id.txtAddress);
        add.setText(address);

        sharedPreferences = getSharedPreferences("LoginDetails", 0);
        SharedPreferences.Editor editor = sharedPreferences.edit();

        editor.putString("lat",String.valueOf(latitude));
        editor.putString("lon",String.valueOf(longitude));
        editor.putString("address", address);
        editor.putString("city",city);

        editor.apply();

        return address;
    }

    private void configure(){

        Location locationGPS = locationManager.getLastKnownLocation(bestProvider);

        if(locationGPS!=null) {

            double latitude = locationGPS.getLatitude();
            double longitude = locationGPS.getLongitude();

            try{
                address(latitude, longitude);
            } catch(IOException ie){

            }


            latLng = new LatLng(latitude, longitude);

            //Toast.makeText(this, latitude +" - "+longitude, Toast.LENGTH_LONG).show();
//            try{
//                Toast.makeText(this, address(latitude, longitude).toString(), Toast.LENGTH_LONG).show();
//            } catch(IOException ie){
//
//            }



            SharedPreferences pref = getApplicationContext().getSharedPreferences("LoginDetails", 0); // 0 - for private mode
            SharedPreferences.Editor editor = pref.edit();

            editor.putString("latitude",String.valueOf(latitude));
            editor.putString("longitude",String.valueOf(longitude));
            editor.commit();

        } else {
            locationManager.requestLocationUpdates(bestProvider, 1000, 0, locationListener);
        }

    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
        finishAffinity();
    }
}
