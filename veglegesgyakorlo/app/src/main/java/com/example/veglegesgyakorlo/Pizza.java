package com.example.veglegesgyakorlo;

import android.content.Context;
import android.os.Bundle;

import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import java.util.ArrayList;
import java.util.List;


public class Pizza extends Fragment {


    View view;
    RecyclerView recyclerView;
    List<Pizzaclass> lista;
    PizzaAdapter pizzaAdapter;
    Context context;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        context=getContext();
        lista=getList();
        view = inflater.inflate(R.layout.fragment_pizza, container, false);
        pizzaAdapter = new PizzaAdapter(context, lista);

        recyclerView = view.findViewById(R.id.recyclerview);
        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new LinearLayoutManager(getContext()));
        recyclerView.setAdapter(pizzaAdapter);

        return view;
    }

    private static List<Pizzaclass> getList(){
        List<Pizzaclass> list = new ArrayList<>();
        list.add(new Pizzaclass("regina","finom","25",R.drawable.pizza1));
        list.add(new Pizzaclass("mexi","finom","30",R.drawable.pizza2));
        list.add(new Pizzaclass("husos","finom","27",R.drawable.pizza3));
        return  list;
    }
}