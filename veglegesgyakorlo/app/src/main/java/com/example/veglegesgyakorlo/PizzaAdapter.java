package com.example.veglegesgyakorlo;

import android.content.Context;
import android.content.Intent;
import android.graphics.Bitmap;
import android.os.Bundle;
import android.os.Parcelable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.List;

public class PizzaAdapter extends RecyclerView.Adapter<PizzaAdapter.ViewHolder> {

    Context mcontext;
    List<Pizzaclass> lista;

    public PizzaAdapter(Context context, List<Pizzaclass> lista) {
        this.mcontext = context;
        this.lista = lista;
    }

    @NonNull
    @org.jetbrains.annotations.NotNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull @org.jetbrains.annotations.NotNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.row_pizza,parent,false);
        return new ViewHolder(mcontext, view);
    }

    @Override
    public void onBindViewHolder(@NonNull @org.jetbrains.annotations.NotNull PizzaAdapter.ViewHolder holder, int position) {
        holder.rowname.setText(lista.get(position).getNev());
        holder.rowiz.setText(lista.get(position).getIz());
        holder.rowar.setText(lista.get(position).getAr());
        holder.rowimg.setImageResource(lista.get(position).getImg());
    }

    @Override
    public int getItemCount() {
        return lista.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder{

        TextView rowname;
        TextView rowiz;
        TextView rowar;
        ImageView rowimg;

        public ViewHolder(Context context, View itemView) {
            super(itemView);
            rowname = itemView.findViewById(R.id.rowname);
            rowiz = itemView.findViewById(R.id.rowiz);
            rowar = itemView.findViewById(R.id.rowar);
            rowimg = itemView.findViewById(R.id.rowimg);

            itemView.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {


                        Intent intent = new Intent(mcontext,PizzaDetails.class);
                        intent.putExtra("NAME", rowname.getText());
                        rowimg.buildDrawingCache();
                        Bitmap imageget = rowimg.getDrawingCache();
                        Bundle extra = new Bundle();
                        extra.putParcelable("IMG", imageget);
                        intent.putExtras(extra);
                        mcontext.startActivity(intent);


                }
            });


        }
    }
}
