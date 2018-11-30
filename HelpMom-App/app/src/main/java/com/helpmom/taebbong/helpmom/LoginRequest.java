package com.helpmom.taebbong.helpmom;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class LoginRequest extends StringRequest {

    final static private String URL = "http://mok05289.cafe24.com/Login.php";
    private Map<String, String> parameters;


    public LoginRequest(String pinNum, Response.Listener<String> listener){
        super(Method.POST, URL, listener, null);
        parameters = new HashMap<>();
        parameters.put("pinNum", pinNum);

    }

    @Override
    public Map<String, String> getParams(){
        return parameters;
    }

}
