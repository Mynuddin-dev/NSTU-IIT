/**
 * 
 */
package broadcast;



import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;

/**
 * @author MD Mynuddin
 * @author Nadim Bhuiyan
 * @author Shuvra Aditya
 */
public class Receiver {

	public static void main(String[] args) throws IOException {
//		byte[] receivedMsg = new byte[1024];

		DatagramSocket ds = new DatagramSocket(8888);
//		DatagramPacket dp = new DatagramPacket(receivedMsg, receivedMsg.length);
		System.out.println("Receiver is ready!!!");

		while (true) {
			DatagramPacket dp = new DatagramPacket(new byte[1024], 1024);
			ds.receive(dp);
			String msg = new String(dp.getData());
			System.out.println("From Client: " + msg);
		}
	}

}
