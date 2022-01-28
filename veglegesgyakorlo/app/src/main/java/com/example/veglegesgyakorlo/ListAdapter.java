package com.example.veglegesgyakorlo;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;

import org.jetbrains.annotations.NotNull;


public class ListAdapter extends ArrayAdapter {

    private final Activity context;

    //to store the animal images
    private final String[] infoArray;

    //to store the list of countries
    private final String[] nameArray;

    public ListAdapter(Activity context, String[] nameArrayParam, String[] infoArrayParam) {
        super(context, R.layout.listanezet, nameArrayParam);
        this.context = context;
        this.nameArray = nameArrayParam;
        this.infoArray = infoArrayParam;

    }

    @NonNull
    @Override
    public View getView(int position, View view, ViewGroup parent) {
        LayoutInflater inflater = context.getLayoutInflater();
        View rowView = inflater.inflate(R.layout.listanezet, null, true);

        //this code gets references to objects in the listview_row.xml file
        TextView nameTextField = rowView.findViewById(R.id.listnev);
        TextView infoTextField = rowView.findViewById(R.id.listev);


        //this code sets the values of the objects to values from the arrays
        nameTextField.setText(nameArray[position]);
        infoTextField.setText(infoArray[position]);


        return rowView;

    }
}
