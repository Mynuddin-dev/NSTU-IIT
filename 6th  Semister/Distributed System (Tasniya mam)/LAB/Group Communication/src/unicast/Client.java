/**
 * 
 */
package unicast;

import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.net.InetSocketAddress;
import java.net.SocketAddress;
import java.util.Scanner;

/**
 * @author MD Mynuddin
 * @author Nadim Bhuiyan
 * @author Shuvra Aditya
 */
public class Client {

	public static void main(String[] args) throws IOException {
		
		String msg = "This is unicast commumication!!!";
		
		DatagramSocket ds = new DatagramSocket();
		InetAddress ia = InetAddress.getLocalHost();
		SocketAddress sa = new InetSocketAddress(ia, 8888);
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Client is ready!!!");
		
		while(true) {
			byte[] targetMsg = msg.getBytes();
			DatagramPacket dp = new DatagramPacket(targetMsg, targetMsg.length, sa);
			ds.send(dp);
			System.out.print("To Server: ");
			msg=sc.nextLine();
			if(msg.equalsIgnoreCase("stop")) {
				ds.close();
				break;
			}
		}
		
		
	}

}
