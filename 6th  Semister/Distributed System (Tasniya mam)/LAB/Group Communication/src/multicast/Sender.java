/**
 * 
 */
package multicast;

import java.io.IOException;
import java.net.DatagramPacket;
import java.net.InetAddress;
import java.net.InetSocketAddress;
import java.net.MulticastSocket;
import java.net.SocketAddress;
import java.util.Scanner;

/**
 * @author MD Mynuddin
 * @author Nadim Bhuiyan
 * @author Shuvra Aditya
 */
public class Sender {

	public static void main(String[] args) throws IOException {
		String msg = "This is Multicast commumication!!!";

		MulticastSocket ms = new MulticastSocket();
		InetAddress ia = InetAddress.getByName("224.0.0.5");
		SocketAddress sa = new InetSocketAddress(ia, 8888);
		Scanner sc = new Scanner(System.in);

		System.out.println("Sender is ready!!!");

		while (true) {
			byte[] targetMsg = msg.getBytes();
			DatagramPacket dp = new DatagramPacket(targetMsg, targetMsg.length, sa);
			ms.send(dp);
			System.out.print("To Server: ");
			msg = sc.nextLine();
			if (msg.equalsIgnoreCase("stop")) {
				ms.close();
				break;
			}
		}
	}

}
