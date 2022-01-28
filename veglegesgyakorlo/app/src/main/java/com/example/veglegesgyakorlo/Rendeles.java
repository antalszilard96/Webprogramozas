package com.example.veglegesgyakorlo;

import android.content.Intent;
import android.os.Bundle;

import androidx.fragment.app.Fragment;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

public class Rendeles extends Fragment {


    TextView osszeg;
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_rendeles, container, false);

        osszeg = view.findViewById(R.id.osszeg);
        int a = getArguments().getInt("AR" ,0);
        osszeg.setText(a);






        return view;
    }
}