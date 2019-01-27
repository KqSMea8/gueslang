package vikas;

import javax.swing.JOptionPane;

public class Bill {
	
	String name,phone,addr,restaurant;
	int amt;
	Bill(String rName,String cName,String cPhone,String cAddr,int amt){
		restaurant=rName;
		name=cName;
		phone=cPhone;
		addr=cAddr;
		this.amt=amt;
	}
	void show(){
		String str="Welcome to "+restaurant+"\n--------------------------------"+"\nName of Customer:"+name+"\nContact Number:"+phone+"\nAddress:"+addr+"\n--------------------------------"+"\nBill Amount: Rs"+amt+" only \n--------------------------------";
		JOptionPane.showMessageDialog(null,str);
	}
}
