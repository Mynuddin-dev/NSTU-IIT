package multicast;

import java.io.IOException;
import java.net.DatagramPacket;
import java.net.InetAddress;
import java.net.MulticastSocket;

/**
 * @author MD Mynuddin
 * @author Nadim Bhuiyan
 * @author Shuvra Aditya
 */
public class Receiver {

	public static void main(String[] args) throws IOException {
//		byte[] receivedMsg = new byte[1024];

		InetAddress ia = InetAddress.getByName("224.0.0.5");
		MulticastSocket ms = new MulticastSocket(8888);
		ms.joinGroup(ia);
//		DatagramPacket dp = new DatagramPacket(receivedMsg, receivedMsg.length);
		System.out.println("Receiver is ready!!!");

		while (true) {
			DatagramPacket dp = new DatagramPacket(new byte[1024], 1024);
			ms.receive(dp);
			String msg = new String(dp.getData());
			System.out.println("From Client: " + msg);
		}
	}

}

