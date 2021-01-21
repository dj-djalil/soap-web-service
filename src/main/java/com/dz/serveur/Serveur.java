package com.dz.serveur;

import javax.xml.ws.Endpoint;

import com.dz.service.BanqueService;;
public class Serveur {
	public static void main(String[] args) {
		
		// url , pour ouvrire une service 
		String url = "http://localhost:8089/";
		// publier le web service 
		Endpoint.publish(url, new BanqueService());
		System.out.println(url);
	}

}
