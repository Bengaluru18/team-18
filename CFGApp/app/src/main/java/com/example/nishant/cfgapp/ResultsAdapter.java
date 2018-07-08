package com.example.nishant.cfgapp;

import android.content.Intent;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.Toast;

import java.io.Serializable;
import java.sql.Timestamp;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

public class ResultsAdapter extends RecyclerView.Adapter<ResultsAdapter.MyViewHolder> {

    private List<Inventory> moviesList;
    public int flag=0;

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView statename, statename1, cname, cname1, type_veh, type_veh1, price, price1, eid, eid1, isavail, isavail1;
        public CardView cardView;
        public FloatingActionButton floatingActionButton;

        public MyViewHolder(View view) {
            super(view);

            cardView = view.findViewById(R.id.card_view);
            statename = view.findViewById(R.id.state_name);
            statename1 = view.findViewById(R.id.state_name1);
            cname = view.findViewById(R.id.center_name);
            cname1 = view.findViewById(R.id.center_name1);
            type_veh = view.findViewById(R.id.type);
            type_veh1 = view.findViewById(R.id.type1);
            price = view.findViewById(R.id.price);
            price1 = view.findViewById(R.id.price1);
            eid = view.findViewById(R.id.equipid);
            eid1 = view.findViewById(R.id.equipid1);
            isavail = view.findViewById(R.id.orderExpiry);
            isavail1 = view.findViewById(R.id.greaterDistance);
            floatingActionButton = view.findViewById(R.id.hint_available);


            view.setOnClickListener(new View.OnClickListener() {
                @Override public void onClick(View v) {
                    Inventory request = moviesList.get(getAdapterPosition());

                    if(request.isAllocated()){
                        Toast.makeText(v.getContext(), "Sorry, The Item is already Booked!", Toast.LENGTH_LONG).show();
                        floatingActionButton.setVisibility(View.GONE);
                    } else {
                        Intent intent = new Intent(v.getContext(), OrderActivity.class);

                        Serializable s = (Serializable) request;
                        intent.putExtra("requestObj",s);
                        v.getContext().startActivity(intent);
                    }
                }
            });

        }
    }

    public ResultsAdapter(List<Inventory> moviesList) {
        this.moviesList = moviesList;
    }

    @Override
    public MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View itemView = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.movie_list_row, parent, false);

        return new MyViewHolder(itemView);
    }

    @Override
    public void onBindViewHolder(MyViewHolder holder, int position) {
        Inventory request = moviesList.get(position);

        holder.cardView.setTag(position);

        holder.statename1.setText(request.getState());
        holder.eid1.setText(request.getEquip_no());

        Boolean f = request.isAllocated()?false:true;

        if(f){
            holder.isavail1.setText("True");
        } else {
            holder.isavail1.setText("False");
        }

        if(request.isAllocated()){
            holder.floatingActionButton.setVisibility(View.GONE);
        }

        holder.cname1.setText(request.getCentername());
        holder.type_veh1.setText(request.getType());

        int p = request.getPrice();

        holder.price1.setText(String.valueOf(p));

        String timeStamp = new SimpleDateFormat("YYYY-MM-DD'T'HH:mm:ss'Z'").format(new Timestamp(System.currentTimeMillis()));

        long currentTime = System.currentTimeMillis();

//        long orderTime = (Long) request.TimeValue;

//        long timeDiff = Math.abs(currentTime-orderTime);

        String add ="";
//        if(request.address==""){
//            request.address = "Address not available";
//        }

//        if(timeDiff>600000){
//
//            holder.addressReq_title.setVisibility(View.GONE);
//            holder.requestby_title.setVisibility(View.GONE);
//            holder.latlon_title.setVisibility(View.GONE);
//            holder.title_title.setVisibility(View.GONE);
//
//            //holder.timestamp.setText("Old");
//            holder.requestby.setVisibility(View.GONE);
//            holder.latlon.setVisibility(View.GONE);
//            holder.request.setVisibility(View.GONE);
//            holder.addressReq.setVisibility(View.GONE);
//            holder.orderExp.setVisibility(View.VISIBLE);
//
//            String s = request.TimeValue.toString();
//            String s1 = getDate(s);
//            holder.timestamp.setText(s1);
//
//        } else {
//            holder.requestby.setText(request.name);
//            holder.latlon.setText(request.request);
//            holder.request.setText(request.contact);
//            holder.addressReq.setText(request.address);
//
//
//            String s = request.TimeValue.toString();
//            String s1 = getDate(s);
//            holder.timestamp.setText(s1);
//        }

//        holder.requestby.setText(request.name+" / "+timeDiff);
//        holder.latlon.setText(request.request);
//        holder.request.setText(request.lat + "/" + request.lon);
//        holder.addressReq.setText(request.address);
//
//
//        String s = request.TimeValue.toString();
//        String s1 = getDate(s);
//        holder.timestamp.setText(s1);
    }


    private String getDate(String timeStampStr){

        try{
            DateFormat sdf = new SimpleDateFormat("dd/MM/yyyy");
            Long t = Long.parseLong(timeStampStr);
            Date netDate = (new Date(t));

            String DATE_FORMAT="hh:mm aa - dd MMMM yyyy";

            String s2 = new SimpleDateFormat(DATE_FORMAT).format(t);



            return s2;
        }
        catch(Exception ex){
            return "error";
        }
    }

    @Override
    public int getItemCount() {
        return moviesList.size();
    }
}