package jms;
import javax.jms.*;

/**
 * @author MD Mynuddin
 * @author Nadim Bhuiyan
 * @author Shuvra Aditya
 */

public class Listener implements MessageListener {  
	  
    public void onMessage(Message m) {  
        try{  
        TextMessage msg=(TextMessage)m;  
      
        System.out.println("following message is received:"+msg.getText());  
        }catch(JMSException e){System.out.println(e);}  
    }  
}  
