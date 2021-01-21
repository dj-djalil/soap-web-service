package com.dz.service;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebService;

@WebService(name="banqueWS")
public class BanqueService {

	@WebMethod
	public long ConvertionEuroToDA(@WebParam(name="montant") long euro) {
		return euro*200;
	}
}
